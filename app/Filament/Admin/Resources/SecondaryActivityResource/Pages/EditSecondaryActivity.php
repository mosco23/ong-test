<?php

namespace App\Filament\Admin\Resources\SecondaryActivityResource\Pages;

use App\Filament\Admin\Resources\SecondaryActivityResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditSecondaryActivity extends EditRecord
{
    protected static string $resource = SecondaryActivityResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
