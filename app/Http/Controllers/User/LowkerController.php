<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lowker;

class LowkerController extends Controller
{
    public function index()
    {
    	$lowker = Lowker::paginate(5);
    	// return $berita;
    	return view('user.lowker',compact('lowker'));
    }
}
