<?php

namespace App\Filament\Admin\Resources\ProgActivityResource\Pages;

use App\Filament\Admin\Resources\ProgActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditProgActivity extends EditRecord
{
    protected static string $resource = ProgActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
