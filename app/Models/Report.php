<?php

namespace App\Models;

use App\Traits\DateFormatter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory, DateFormatter;

    protected $fillable = ['name', 'description', 'date', 'url', 'is_pv', 'is_activity', 'is_mission'];

    static public function getReportQuery(string $key){
        return static::where($key, true);
    }

    static public function getReports(string $key){
        $query = static::getReportQuery($key)->get();
        return static::reverse($query);
    }

    static private function reverse($query) {
        return $query->sortBy('date')->reverse();
    }
}
