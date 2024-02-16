<?php

namespace App\Filament\Admin\Widgets;

use App\Filament\Admin\Resources\VisiteResource\Widgets\VisitChart;
use App\Models\Visit;
use Carbon\Carbon;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class VisitStatView extends BaseWidget
{
    protected function getStats(): array
    {
        return $this->mysStats();
    }


    private function siteVisits(): array {
        $visits = Visit::all();
        $total = $visits->count();

        //Visites du jour :
        $todayVisits = Visit::whereDate('visited_at', Carbon::today())->count();

        // Visites de la semaine :
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $weekVisits = Visit::whereBetween('visited_at', [$startOfWeek, $endOfWeek])->count();

        // Visites du mois :
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthVisits = Visit::whereBetween('visited_at', [$startOfMonth, $endOfMonth])->count();

        $data = [
            "Aujourd'hui" => $todayVisits,
            'Semaine' => $weekVisits,
            'Mois' => $monthVisits,
            'total' => $total
        ];

        return $data;
    }

    private function mysStats(): array{
        $stats = [];
        foreach ($this->siteVisits() as $label => $value) {
            $s = Stat::make($label, $value);
            array_push($stats, $s);
        }

        return $stats;
    }
}
