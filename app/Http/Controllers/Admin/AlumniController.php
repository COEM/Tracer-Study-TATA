<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Alumni;

class AlumniController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $alumni = Alumni::all();
        // return $alumni;
        return view('admin.alumni.index',compact('alumni'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.alumni.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->gambar->getClientOriginalName();
        $alumni = new Alumni;
        $alumni->nim = $request->nim;
        $alumni->nama = $request->nama;
        $alumni->alamat = $request->alamat;
        $alumni->tahun_masuk = $request->th_masuk;
        $alumni->tahun_keluar = $request->th_keluar;
        $alumni->prodi = $request->prodi;
        $alumni->no_telp = $request->no_telp;
        if ($request->gambar){
            $alumni->avatar = $request->gambar->getClientOriginalName();
            $file = $request->file('gambar');
            $file->move('images/avatar', $file->getClientOriginalName());
        }
        
        // $alumni->avatar = $request->gambar->getClientOriginalName();

        $alumni->save();

        return redirect('/admin/alumni');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumni = Alumni::find($id);
        // return $alumni;
        return view('admin.alumni.edit',compact('alumni'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $alumni = Alumni::find($id);
        $alumni->nim = $request->nim;
        $alumni->nama = $request->nama;
        $alumni->alamat = $request->alamat;
        $alumni->tahun_masuk = $request->th_masuk;
        $alumni->tahun_keluar = $request->th_keluar;
        $alumni->prodi = $request->prodi;
        $alumni->no_telp = $request->no_telp;

        if ($request->gambar){
            $alumni->avatar = $request->gambar->getClientOriginalName();
            $file = $request->file('gambar');
            $file->move('images/avatar', $file->getClientOriginalName());
        }

        $alumni->save();

        return redirect('/admin/alumni');
        // $request->all();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
