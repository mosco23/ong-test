<?php

namespace App\Filament\Admin\Resources\MissionReportResource\Pages;

use App\Filament\Admin\Resources\MissionReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMissionReport extends EditRecord
{
    protected static string $resource = MissionReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
