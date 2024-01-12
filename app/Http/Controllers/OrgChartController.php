<?php

namespace App\Http\Controllers;

use App\Models\OrgChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrgChartController extends Controller
{
     function get()
    {
        $orgCharts = DB::table('org_charts')
                        ->join('users','users.id','=','org_charts.user_id')
                        ->select("org_charts.id", "pid", "block", "title", "img", "users.name as name")
                        ->get()
                        ->sortBy('pid')
                        ->groupBy('block')
                        ->toArray();
        
        $orgCharts["commissaire"] = $orgCharts["commissaire aux comptes"];;
        unset($orgCharts["commissaire aux comptes"]);
        return $orgCharts;
    }
}
