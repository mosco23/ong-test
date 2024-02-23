<?php

namespace App\Filament\Admin\Resources\MissionReportResource\Pages;

use App\Filament\Admin\Resources\MissionReportResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateMissionReport extends CreateRecord
{
    protected static string $resource = MissionReportResource::class;

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['is_mission'] = true;
    
        return $data;
    }
}
