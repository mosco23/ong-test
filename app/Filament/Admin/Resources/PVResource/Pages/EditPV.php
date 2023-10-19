<?php

namespace App\Filament\Admin\Resources\PVResource\Pages;

use App\Filament\Admin\Resources\PVResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPV extends EditRecord
{
    protected static string $resource = PVResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
