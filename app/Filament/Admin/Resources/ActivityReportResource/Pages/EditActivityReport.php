<?php

namespace App\Filament\Admin\Resources\ActivityReportResource\Pages;

use App\Filament\Admin\Resources\ActivityReportResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditActivityReport extends EditRecord
{
    protected static string $resource = ActivityReportResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
