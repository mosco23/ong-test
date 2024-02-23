<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\ActivityReportResource\Pages;
use App\Filament\Admin\Resources\ReportResource\Forms\ReportFormResource;
use App\Models\Report;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Builder;

class ActivityReportResource extends ReportFormResource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $modelLabel = "Rapport d'activité";
    protected static ?string $pluralModelLabel = "Rapports d'activité";
    protected static ?string $navigationGroup = "Rapports";
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListActivityReports::route('/'),
            'create' => Pages\CreateActivityReport::route('/create'),
            'edit' => Pages\EditActivityReport::route('/{record}/edit'),
        ];
    } 

    public static function getEloquentQuery(): Builder
    {
        $query = static::getModel()::getReportQuery('is_activity');

        if ($tenant = Filament::getTenant()) {
            static::scopeEloquentQueryToTenant($query, $tenant);
        }

        return $query;
    }
}
