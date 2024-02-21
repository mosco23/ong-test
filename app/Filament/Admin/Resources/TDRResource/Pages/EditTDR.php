<?php

namespace App\Filament\Admin\Resources\TDRResource\Pages;

use App\Filament\Admin\Resources\TDRResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditTDR extends EditRecord
{
    protected static string $resource = TDRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
