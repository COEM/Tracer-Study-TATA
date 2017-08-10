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

    public function index(){
        $berita = Berita::all()->sortByDesc("created_at");
        return view('admin.berita.index',compact('berita'));
    }

    public function create(){
        return view('admin.berita.tambah');
    }

    public function store(Request $request){
        $berita = New Berita;
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png'
        ]);

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->gambar = $request->gambar->getClientOriginalName();
        $berita->penulis = "admin";
        $berita->status = true;
        $berita->save();

        $file = $request->file('gambar');
        $file->move('images/berita', $file->getClientOriginalName());
        return redirect('/admin/berita');
    }


    public function show($id)
    {
        
    }


    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('admin.berita.edit',compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $berita->judul = $request->judul;
        $berita->isi = $request->isi;
        $berita->gambar = $request->gambar->getClientOriginalName();
        $berita->save();

        $file = $request->file('gambar');
        $file->move('images/berita', $file->getClientOriginalName());
        return redirect('/admin/berita');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();
        return redirect('/admin/berita');
    }

    public function updatePost($id){
        $berita = Berita::find($id);
        $berita->status = true;
        $berita->save();
        return redirect('/admin/berita');
    }
}
