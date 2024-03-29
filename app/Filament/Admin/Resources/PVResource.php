<?php

namespace App\Filament\Admin\Resources;

use App\Filament\Admin\Resources\PVResource\Pages;
use App\Filament\Admin\Resources\ReportResource\Forms\ReportFormResource;
use App\Models\Report;
use Filament\Facades\Filament;
use Illuminate\Database\Eloquent\Builder;

class PVResource extends ReportFormResource
{
    protected static ?string $model = Report::class;

    protected static ?string $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $modelLabel = "Procès verbal (PV)";
    protected static ?string $pluralModelLabel = "Procès verbaux (PVs)";
    protected static ?string $navigationGroup = "Rapports";

    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPVS::route('/'),
            'create' => Pages\CreatePV::route('/create'),
            'edit' => Pages\EditPV::route('/{record}/edit'),
        ];
    }    

    public static function getEloquentQuery(): Builder
    {
        $query = static::getModel()::getReportQuery('is_pv');

        if ($tenant = Filament::getTenant()) {
            static::scopeEloquentQueryToTenant($query, $tenant);
        }

        return $query;
    }
}
