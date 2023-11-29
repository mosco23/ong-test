<?php

namespace App\Filament\Admin\Resources\OrgChartResource\Pages;

use App\Filament\Admin\Resources\OrgChartResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOrgChart extends EditRecord
{
    protected static string $resource = OrgChartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
