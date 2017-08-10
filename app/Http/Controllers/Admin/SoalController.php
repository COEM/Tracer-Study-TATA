<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Soal;
use App\Opsi;
use App\Kategori;

class SoalController extends Controller
{
    public function __construct(){
        $this->middleware('auth:admin');
    }

    public function index()
    {
        $soal = Soal::all();
        return view('admin.soal.index',compact('soal'));
    }

    public function create(){
        $kategori = Kategori::all();
        return view('admin.soal.tambah',compact('kategori'));
    }

    public function store(Request $request){
        $soal = New Soal;
        $this->validate($request,[
            'soal' => 'required',
        ]);
        $soal->soal = $request->soal;
        $soal->kategori_id = $request->kategori_id;
        if ($request->opsi) {
            $soal->type = "opsi";
            $soal->save();
            if (sizeof($request->opsi) > 0) {
                for ($i=0; $i < sizeof($request->opsi) ; $i++) {
                    $opsi = new Opsi;
                    $opsi->ket = $request->opsi[$i];
                    $soal->opsi()->save($opsi);
                }
            }
        } else {
            $soal->type = "essay";
            $soal->save();
        }

        return redirect('/admin/soal');
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
        $soal = Soal::find($id);
        $kategori = Kategori::all();
        return view('admin.soal.edit',compact('soal','kategori'));
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
        $soal = Soal::find($id);
        $this->validate($request,[
            'soal' => 'required'
        ]);

        $soal->soal = $request->soal;
        $sola->type = $request->type;
        $soal->save();
        // $alert = [
        //     'message' => 'Ruang berhasil diperbarui!',
        //     'alert-type' => 'success'
        // ];
        return redirect('/admin/soal');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $soal = Soal::find($id);
        $soal->delete();
        return redirect('/admin/soal');
    }
}
