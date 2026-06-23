<?php

declare(strict_types=1);

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public function __construct(public $details) {}

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        $mail = $this->subject($this->details['subject']);
        if (isset($this->details['attachment'])) {
            foreach ($this->details['attachment'] as $file) {
                // attach the file
                $mail->attach($file);
            }
        }

        $from = $this->details['from'] ?? config('mail.from.address');
        $name = config('mail.from.name');

        $mail->from($from, $name);

        return $mail->view('emails.sendMail');
    }
}
