<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;

    protected $fillable = [
        'visited_at',
        'ip_address',
    ];
    
    static function siteVisits() {
        $visits = static::all();
        $total = $visits->count();

        //Visites du jour :
        $todayVisits = static::whereDate('visited_at', Carbon::today())->count();

        // Visites de la semaine :
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $weekVisits = static::whereBetween('visited_at', [$startOfWeek, $endOfWeek])->count();

        // Visites du mois :
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();
        $monthVisits = static::whereBetween('visited_at', [$startOfMonth, $endOfMonth])->count();

        $data = [
            "Aujourd'hui" => [
                'count' => $todayVisits,
                'icon' => 'o-clock',
                'color' => '#fa08f4'
            ],
            'Semaine' => [
                'count' => $weekVisits,
                'icon' => 'o-calendar-days',
                'color' => '#f01473'
            ],
            'Mois' => [
                'count' => $monthVisits,
                'icon' => 'o-chart-pie',
                'color' => '#f2af0e'
            ],
            // 'total' => $total,
            'total' => [
                'count' => $total,
                'icon' => 'o-eye',
                'color' => '#f2af0e'
            ],
        ];

        return $data;
    }
}
