<?php

namespace App\Filament\Admin\Resources\ReferenceCategoryResource\Pages;

use App\Filament\Admin\Resources\ReferenceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListReferenceCategories extends ListRecords
{
    protected static string $resource = ReferenceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
