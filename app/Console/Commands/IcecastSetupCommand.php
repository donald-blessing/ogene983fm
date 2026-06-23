<?php

declare(strict_types=1);

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Process\Process as SymfonyProcess;

class IcecastSetupCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:icecast-setup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Automate the installation and configuration of Icecast service';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $scriptPath = base_path('install-icecast.sh');

        if (! file_exists($scriptPath)) {
            $this->error('Installation script not found: '.$scriptPath);

            return self::FAILURE;
        }

        $this->info('Starting Icecast setup...');
        $this->warn('This command might require sudo privileges for Linux systems.');

        // Verify script is executable
        if (! is_executable($scriptPath)) {
            $this->info('Making script executable...');
            chmod($scriptPath, 0755);
        }

        $process = SymfonyProcess::fromShellCommandline('./install-icecast.sh', base_path());
        $process->setTimeout(600); // 10 minutes timeout

        $process->run(function ($type, $buffer): void {
            $this->output->write($buffer);
        });

        if (! $process->isSuccessful()) {
            $this->error('Icecast setup failed.');

            return self::FAILURE;
        }

        $this->info('Icecast setup completed successfully.');

        return self::SUCCESS;
    }
}
