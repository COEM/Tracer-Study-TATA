<?php

namespace App\Http\Controllers\Alumni;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Soal;
use App\Jawaban;
use App\Kategori;
use Auth;

class SoalController extends Controller
{
    public function index(){
    	return view('alumni.soal');
    }

    public function __construct()
    {
         $this->middleware('auth');
    }

    public function indexSoal($kategori){
        $check = Kategori::where('kategori',$kategori)->get()->first();
        $opsi = Soal::where('kategori_id',$check->id)->get();
        return view('alumni.soal.'.str_slug($kategori),compact('opsi'));
    }

    public function storeJawabanSoal(Request $req, $kategori){
        $kategori = Kategori::where('kategori',$kategori)->get()->first();
    	$jawaban = new Jawaban;

    	$jawaban->alumni_id = Auth::user()->alumni_id;
    	$jawaban->kategori_id = $kategori->id;
    	$jawaban->periode = '2017/08/29';
    	$jawaban->ket = json_encode($req->except('_token'));
    	$jawaban->save();
    	return view('alumni.soal');
    }
}