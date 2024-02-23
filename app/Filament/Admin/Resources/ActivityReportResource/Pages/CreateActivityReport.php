<?php

namespace App\Filament\Admin\Resources\ActivityReportResource\Pages;

use App\Filament\Admin\Resources\ActivityReportResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateActivityReport extends CreateRecord
{
    protected static string $resource = ActivityReportResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['is_activity'] = true;
    
        return $data;
    }
}
