<?php

namespace App\Filament\Admin\Resources\TDRResource\Pages;

use App\Filament\Admin\Resources\TDRResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListTDRS extends ListRecords
{
    protected static string $resource = TDRResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
