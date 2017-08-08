<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;
class AgendaController extends Controller
{
    public function index(){
    	$berita = Berita::paginate(5);
    	// return $berita;
    	return view('user.agenda',compact('berita'));
    }

    public function show($id)
    {
    	$berita = Berita::find($id);
    	return view('user.postAgenda',compact('berita'));
    }
}
