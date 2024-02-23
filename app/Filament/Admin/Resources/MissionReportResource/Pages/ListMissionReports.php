<?php

namespace App\Filament\Admin\Resources\MissionReportResource\Pages;

use App\Filament\Admin\Resources\MissionReportResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMissionReports extends ListRecords
{
    protected static string $resource = MissionReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
