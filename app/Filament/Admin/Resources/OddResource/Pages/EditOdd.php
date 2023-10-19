<?php

namespace App\Filament\Admin\Resources\OddResource\Pages;

use App\Filament\Admin\Resources\OddResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOdd extends EditRecord
{
    protected static string $resource = OddResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
