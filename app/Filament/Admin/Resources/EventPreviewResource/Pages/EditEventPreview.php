<?php

namespace App\Filament\Admin\Resources\EventPreviewResource\Pages;

use App\Filament\Admin\Resources\EventPreviewResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditEventPreview extends EditRecord
{
    protected static string $resource = EventPreviewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
