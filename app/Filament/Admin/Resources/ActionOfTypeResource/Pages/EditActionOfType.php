<?php

namespace App\Filament\Admin\Resources\ActionOfTypeResource\Pages;

use App\Filament\Admin\Resources\ActionOfTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActionOfType extends EditRecord
{
    protected static string $resource = ActionOfTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
