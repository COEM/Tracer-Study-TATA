<?php

namespace App\Http\Controllers\Alumni;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lowker;
use Auth;
class LowkerController extends Controller
{
    public function index(){
    	$lowker = Lowker::latest()->where('status',true)->paginate(5);
    	return view('alumni.lowker',compact('lowker'));
    }

    public function create()
    {
    	return view('alumni.lowker_tambah');
    }

    public function store(Request $req)
    {
    	$lowker = new Lowker;
    	$lowker->judul = $req->judul;
    	$lowker->isi = $req->isi;
    	$lowker->gambar = $req->gambar->getClientOriginalName();
        $lowker->penulis = Auth::user()->username;
        $lowker->status = false;
        $lowker->save();

        $file = $req->file('gambar');
        $file->move('images/lowker', $file->getClientOriginalName());
        return redirect('/alumni/lowker');

    }
}
