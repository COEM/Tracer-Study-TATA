<?php

namespace App\Http\Controllers\Alumni;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfilController extends Controller
{
    public function index(){
    	$user = null;
    	return view('alumni.profil',compact('user'));
    }
}
