<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Berita;

class BeritaController extends Controller
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
        $berita = Berita::all();
        return view('admin.berita.index',compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.berita.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $berita = New Berita;
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png' //only allow this type extension file.
        ]);

        // return dd();


        // return $request->all();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->gambar = $request->gambar->getClientOriginalName();
        $berita->save();

        $file = $request->file('gambar');
        $file->move('images/berita', $file->getClientOriginalName());
        return redirect('/admin/berita');
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
        $berita = Berita::find($id);
        return view('admin.berita.edit',compact('berita'));
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
        $berita = Berita::find($id);
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required'
        ]);

        // return $request->all();
        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->gambar = $request->gambar->getClientOriginalName();
        $berita->save();

        $file = $request->file('gambar');
        $file->move('images/berita', $file->getClientOriginalName());
        return redirect('/admin/berita');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        // $alert = [
        //     'message' => 'Ruang berhasil hapus!',
        //     'alert-type' => 'success'
        // ];
        return redirect('/admin/berita');
    }
}
