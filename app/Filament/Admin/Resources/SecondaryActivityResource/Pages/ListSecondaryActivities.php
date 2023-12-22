<?php

namespace App\Filament\Admin\Resources\SecondaryActivityResource\Pages;

use App\Filament\Admin\Resources\SecondaryActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSecondaryActivities extends ListRecords
{
    protected static string $resource = SecondaryActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
