<?php

namespace App\Filament\Admin\Resources\NavbarResource\Pages;

use App\Filament\Admin\Resources\NavbarResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavbar extends EditRecord
{
    protected static string $resource = NavbarResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
