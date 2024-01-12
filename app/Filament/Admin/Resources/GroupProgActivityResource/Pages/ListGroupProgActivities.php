<?php

namespace App\Filament\Admin\Resources\GroupProgActivityResource\Pages;

use App\Filament\Admin\Resources\GroupProgActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListGroupProgActivities extends ListRecords
{
    protected static string $resource = GroupProgActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
