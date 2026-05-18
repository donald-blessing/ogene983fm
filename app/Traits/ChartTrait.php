<?php

declare(strict_types=1);

namespace App\Traits;

use App\Http\Controllers\User\UserController;
use App\Models\User;

trait ChartTrait
{
    public array $borderColors = [
        '#CDA776',
        '#989898',
        '#CB252B',
        '#E39371',
        '#1D7A46',
        '#F4A460',
        '#CDA776',
        'rgba(255, 99, 132, 1.0)',
        'rgba(22,160,133, 1.0)',
        'rgba(255, 205, 86, 1.0)',
        'rgba(51,105,232, 1.0)',
        'rgba(244,67,54, 1.0)',
        'rgba(34,198,246, 1.0)',
        'rgba(153, 102, 255, 1.0)',
        'rgba(255, 159, 64, 1.0)',
        'rgba(233,30,99, 1.0)',
        'rgba(205,220,57, 1.0)',
    ];

    public array $fillColors = [
        '#DEB887',
        '#A9A9A9',
        '#DC143C',
        '#F4A460',
        '#2E8B57',
        '#1D7A46',
        '#CDA776',
        'rgba(255, 99, 132, 0.2)',
        'rgba(22,160,133, 0.2)',
        'rgba(255, 205, 86, 0.2)',
        'rgba(51,105,232, 0.2)',
        'rgba(244,67,54, 0.2)',
        'rgba(34,198,246, 0.2)',
        'rgba(153, 102, 255, 0.2)',
        'rgba(255, 159, 64, 0.2)',
        'rgba(233,30,99, 0.2)',
        'rgba(205,220,57, 0.2)',
    ];

    /**
     * Process chart object
     *
     * @param  mixed  $chart
     * @param  mixed  $labels
     * @param  mixed  $values
     */
    public function processChart(&$chart, string $heading, $labels, $values, string $type = 'bar'): void
    {
        $chart->labels($labels);
        $chart->dataset($heading, $type, $values)
            ->color($this->borderColors)
            ->backgroundcolor($this->fillColors)
            ->fill(false);
    }

    /**
     * Get all applicable charts for the user.
     */
    public function getCharts(?User $user = null): array
    {
        $charts = [];

        // Only include charts from controllers that actually exist
        if (class_exists(UserController::class)) {
            $userController = new UserController;
            $charts[] = $userController->getChart();
        }

        return $charts;
    }
}
