<?php

namespace App\Http\Controllers\Admin;
use DB;

class HomeController
{
    public function index()
    {
        $barra = DB::table('road_map')
            ->select(
                DB::raw('day as day'),
                DB::raw('standby as standby'),
                DB::raw('travel as travel'),
                DB::raw('labor as labor'),
                DB::raw('porcentaje as porcentaje'))->get();
        return view('home',['barra'=>$barra]);
    }
}
