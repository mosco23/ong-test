<?php

namespace App\Filament\Admin\Resources\NavitemResource\Pages;

use App\Filament\Admin\Resources\NavitemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditNavitem extends EditRecord
{
    protected static string $resource = NavitemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
