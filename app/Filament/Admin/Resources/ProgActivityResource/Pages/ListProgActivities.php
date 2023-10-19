<?php

namespace App\Filament\Admin\Resources\ProgActivityResource\Pages;

use App\Filament\Admin\Resources\ProgActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListProgActivities extends ListRecords
{
    protected static string $resource = ProgActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
