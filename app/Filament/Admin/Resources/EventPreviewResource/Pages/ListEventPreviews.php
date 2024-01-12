<?php

namespace App\Filament\Admin\Resources\EventPreviewResource\Pages;

use App\Filament\Admin\Resources\EventPreviewResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListEventPreviews extends ListRecords
{
    protected static string $resource = EventPreviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
