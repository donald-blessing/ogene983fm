<?php

declare(strict_types=1);

namespace App\Filament\Resources\Presenter\Presenters\Pages;

use App\Filament\Resources\Presenter\Presenters\PresenterResource;
use Filament\Resources\Pages\EditRecord;

class EditPresenter extends EditRecord
{
    protected static string $resource = PresenterResource::class;
}
