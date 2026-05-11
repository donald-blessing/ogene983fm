<?php

declare(strict_types=1);

use Rector\Config\RectorConfig;
use Rector\Set\ValueObject\SetList;
use RectorLaravel\Set\LaravelSetList;

return RectorConfig::configure()
    ->withPaths([
        __DIR__.'/app',
        __DIR__.'/bootstrap',
        __DIR__.'/config',
        __DIR__.'/database',
        __DIR__.'/public',
        __DIR__.'/resources',
        __DIR__.'/routes',
        __DIR__.'/tests',
    ])
    // reach your current PHP version
    ->withPhpSets(php84: true)
    ->withSets([
        LaravelSetList::LARAVEL_120,
        SetList::PHP_84,
        SetList::CODE_QUALITY,
        SetList::DEAD_CODE,
    ])
    ->withTypeCoverageLevel(0);
