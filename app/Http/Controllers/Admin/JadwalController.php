<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengumuman;

class JadwalController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $jadwal = Pengumuman::all();
        return view('admin.jadwal.index',compact('jadwal'));
    }
}
