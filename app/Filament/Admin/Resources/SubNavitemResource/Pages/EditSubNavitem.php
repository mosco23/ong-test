<?php

namespace App\Filament\Admin\Resources\SubNavitemResource\Pages;

use App\Filament\Admin\Resources\SubNavitemResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSubNavitem extends EditRecord
{
    protected static string $resource = SubNavitemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
