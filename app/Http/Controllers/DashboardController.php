<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class DashboardController extends Controller
{
    public function totalSurvei() {
        $datetime = Carbon::now();
        $dateOnly = $datetime->toDateString();
        $result = DB::table('F_TOKO_KSG')->whereRaw("CAST(tgl_survey AS DATE) =  '" . $dateOnly . "'")->count();

        return view('dashboard', ['total_survei' => $result, 'tanggal' => $dateOnly]);
    }
}
