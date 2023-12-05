<?php

namespace App\Filament\Admin\Resources\PartnerCategoryResource\Pages;

use App\Filament\Admin\Resources\PartnerCategoryResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPartnerCategory extends EditRecord
{
    protected static string $resource = PartnerCategoryResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
