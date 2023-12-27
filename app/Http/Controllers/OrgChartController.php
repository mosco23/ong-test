<?php

namespace App\Http\Controllers;

use App\Models\OrgChart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrgChartController extends Controller
{
     function get()
    {
        $self = $this; // Stocke la référence à $this dans une autre variable
        $orgCharts = DB::table('org_charts')
                        ->join('users','users.id','=','org_charts.user_id')
                        ->select("org_charts.id", "pid", "block", "title", "img", "users.name as name")
                        ->get()
                        ->sortBy('pid')
                        ->groupBy('block')
                        ->toArray();
                        // ->sortBy('id');

        // $orgCharts = OrgChart::selectRaw('id, pid, block, title, img')
        //                 // ->with('user')
        //                 ->get()
        //                 ->groupBy('block')
        //                 ->toArray();

        // dd($orgCharts);
        $orgCharts["commissaire"] = $orgCharts["commissaire aux comptes"];;
        unset($orgCharts["commissaire aux comptes"]);
        return $orgCharts;
    }

    function getTag($org) {
        $org->img = asset('/storage/'.$org->img);
        $title = $org->title;
        // switch($title){
        //     case "PRESIDENT":
        //     case "PRESIDENTE":
        //         return ["PRESIDENT"];
        //     case "VICE PRESIDENT":
        //     case "VICE PRESIDENTE":
        //         return ["VICE PRESIDENT"];
        //     case "SECRETAIRE":
        //     case "SECRETAIRE":
        //         return ["SECRETAIRE"];
        //     case "SECRETAIRE":
        //             return ["SECRETAIRE"];
        // }
        if(str_contains($title, "PRESIDENT")){
            $tag = "PRESIDENT";
        }else if(str_contains($title, "COMMISSAIRE AUX COMPTES")){
            $tag = "COMMISSAIRE AUX COMPTES";
        }else if(str_contains($title, "SECRETAIRE")){
            $tag = "SECRETAIRE";
        }else if(str_contains($title, "TRESORIER")){
            $tag = "TRESORIER";
        }else{
            $tag = "A definir";
        }
        $org->tags = $tag;
        
        return $org;
    }
}
