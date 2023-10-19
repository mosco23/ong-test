<?php

namespace App\Filament\Admin\Resources\ActionOfResource\Pages;

use App\Filament\Admin\Resources\ActionOfResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActionOf extends EditRecord
{
    protected static string $resource = ActionOfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
