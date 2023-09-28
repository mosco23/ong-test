<?php

namespace App\Filament\Admin\Resources\NavitemResource\Pages;

use App\Filament\Admin\Resources\NavitemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListNavitems extends ListRecords
{
    protected static string $resource = NavitemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
