<?php

namespace App\Http\Controllers\Alumni;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
    	$berita = Berita::paginate(5);
    	return view('alumni.berita',compact('berita'));
    }
}
