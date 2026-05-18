<?php

declare(strict_types=1);

namespace Database\Factories\Programme;

use App\Models\Programme\ProgrammeTime;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProgrammeTimeFactory extends Factory
{
    protected $model = ProgrammeTime::class;

    public function definition()
    {
        return [
            'from' => strtotime('10:00'),
            'to' => strtotime('12:00'),
            'day' => 'monday',
        ];
    }
}
