<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Lowker;

class LowkerController extends Controller
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
        $lowker = Lowker::all();
        return view('admin.lowker.index',compact('lowker'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lowker.tambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lowker = New Lowker;
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required',
            'gambar' => 'mimes:jpeg,bmp,png' //only allow this type extension file.
        ]);

        // return $request->all();
        $lowker->judul = $request->judul;
        $lowker->isi = $request->isi;
        $lowker->gambar = $request->gambar->getClientOriginalName();
        $lowker->save();

        $file = $request->file('gambar');
        $file->move('images/lowker', $file->getClientOriginalName());
        return redirect('/admin/lowker');
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
        $lowker = Lowker::find($id);
        return view('admin.lowker.edit',compact('lowker'));
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
        $lowker = Lowker::find($id);
        $this->validate($request,[
            'judul' => 'required',
            'isi' => 'required'
        ]);

        // return $request->all();
        $lowker->judul = $request->judul;
        $lowker->isi = $request->isi;
        $lowker->gambar = $request->gambar->getClientOriginalName();
        $lowker->save();

        $file = $request->file('gambar');
        $file->move('images/lowker', $file->getClientOriginalName());
        return redirect('/admin/lowker');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $lowker = Lowker::find($id);
        $lowker->delete();
        // $alert = [
        //     'message' => 'Ruang berhasil hapus!',
        //     'alert-type' => 'success'
        // ];
        return redirect('/admin/lowker');
    }
}
