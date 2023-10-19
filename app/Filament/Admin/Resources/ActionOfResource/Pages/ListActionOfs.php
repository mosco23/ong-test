<?php

namespace App\Filament\Admin\Resources\ActionOfResource\Pages;

use App\Filament\Admin\Resources\ActionOfResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListActionOfs extends ListRecords
{
    protected static string $resource = ActionOfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
