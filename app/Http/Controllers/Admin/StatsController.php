<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Charts;
use App\Alumni;
class StatsController extends Controller
{
	public function __construct(){
        $this->middleware('auth:admin');
    }
    public function jumlahPengisi()
    {
        $data = DB::select("select count(alumni_id) as total ,periode from (SELECT alumni_id, periode FROM `jawabans` WHERE periode = '2017-08-29' group by alumni_id) temp GROUP by periode");
        $dataAlumni = Alumni::all();
    	$chart = Charts::multi('bar', 'google')
            // Setup the chart settings
            ->title("Jumlah Pengisi/Periode")
            // A dimension of 0 means it will take 100% of the space
            ->dimensions(0, 400) // Width x Height
            // This defines a preset of colors already done:)
            ->template("material")
            // You could always set them manually
            // ->colors(['#2196F3', '#F44336', '#FFC107'])
            // Setup the diferent datasets (this is a multi chart)
            ->dataset('Alumni Menjawab', [$data[0]->total])
            ->dataset('Total Alumni', [$dataAlumni->count()])
            // ->dataset('Element 3', [25,10,40])
            // Setup what the values mean
            ->labels(['Periode : '.$data[0]->periode]);

        return view('admin.stats.jumlahPengisi', ['chart' => $chart]);
    	// return view('admin.stats.jumlahPengisi');
    }

    public function totalPengisi()
    {

    	$data = DB::select("select count(alumni_id) as total ,periode from (SELECT alumni_id, periode FROM `jawabans` WHERE periode = '2017-08-29' group by alumni_id) temp GROUP by periode");
    	return response()->json($data[0]);
    }
}
