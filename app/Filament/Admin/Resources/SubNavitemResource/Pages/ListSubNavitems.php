<?php

namespace App\Filament\Admin\Resources\SubNavitemResource\Pages;

use App\Filament\Admin\Resources\SubNavitemResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSubNavitems extends ListRecords
{
    protected static string $resource = SubNavitemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
