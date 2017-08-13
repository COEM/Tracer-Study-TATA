<?php

namespace App\Http\Controllers\Alumni;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use App\Berita;

class BeritaController extends Controller
{
    public function __construct()
    {
         $this->middleware('auth');
    }
    public function index(){
    	$berita = Berita::latest()->where('status',true)->paginate(5);
    	return view('alumni.berita',compact('berita'));
    }

    public function create(){
    	return view('alumni.berita_tambah');
    }

    public function store(Request $req)
    {
    	$berita = new Berita;
    	$berita->judul = $req->judul;
    	$berita->isi = $req->isi;
    	$berita->gambar = $req->gambar->getClientOriginalName();
        $berita->penulis = Auth::user()->username;
        $berita->status = false;
        $berita->save();

        $file = $req->file('gambar');
        $file->move('images/berita', $file->getClientOriginalName());
        return redirect('/alumni/agenda');

    }
}
