<?php

namespace App\Filament\Admin\Resources\ActionOfTypeResource\Pages;

use App\Filament\Admin\Resources\ActionOfTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActionOfTypes extends ListRecords
{
    protected static string $resource = ActionOfTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
