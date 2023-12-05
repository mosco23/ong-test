<?php

namespace App\Filament\Admin\Resources\PartnerCategoryResource\Pages;

use App\Filament\Admin\Resources\PartnerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPartnerCategories extends ListRecords
{
    protected static string $resource = PartnerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
