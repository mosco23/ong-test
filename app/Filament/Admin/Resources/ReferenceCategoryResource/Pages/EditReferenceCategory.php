<?php

namespace App\Filament\Admin\Resources\ReferenceCategoryResource\Pages;

use App\Filament\Admin\Resources\ReferenceCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditReferenceCategory extends EditRecord
{
    protected static string $resource = ReferenceCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
