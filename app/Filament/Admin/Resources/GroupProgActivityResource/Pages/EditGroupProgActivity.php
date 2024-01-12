<?php

namespace App\Filament\Admin\Resources\GroupProgActivityResource\Pages;

use App\Filament\Admin\Resources\GroupProgActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditGroupProgActivity extends EditRecord
{
    protected static string $resource = GroupProgActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
