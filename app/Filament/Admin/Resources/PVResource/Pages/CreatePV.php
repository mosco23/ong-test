<?php

namespace App\Filament\Admin\Resources\PVResource\Pages;

use App\Filament\Admin\Resources\PVResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreatePV extends CreateRecord
{
    protected static string $resource = PVResource::class;


    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['is_pv'] = true;
    
        return $data;
    }
}
