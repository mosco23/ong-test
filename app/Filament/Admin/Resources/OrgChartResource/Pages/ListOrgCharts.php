<?php

namespace App\Filament\Admin\Resources\OrgChartResource\Pages;

use App\Filament\Admin\Resources\OrgChartResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOrgCharts extends ListRecords
{
    protected static string $resource = OrgChartResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
