<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\MissionReportResource\Pages;
use App\Filament\Admin\Resources\ReportResource\Forms\ReportFormResource;
use App\Models\Report;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Builder;

class MissionReportResource extends ReportFormResource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Rapport de mission";
    protected static ?string $pluralModelLabel = "Rapports de Missions";
    protected static ?string $navigationGroup = "Rapports";

    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMissionReports::route('/'),
            'create' => Pages\CreateMissionReport::route('/create'),
            'edit' => Pages\EditMissionReport::route('/{record}/edit'),
        ];
    }   
    
    public static function getEloquentQuery(): Builder
    {
        $query = static::getModel()::getReportQuery('is_mission');

        if ($tenant = Filament::getTenant()) {
            static::scopeEloquentQueryToTenant($query, $tenant);
        }

        return $query;
    }
}
