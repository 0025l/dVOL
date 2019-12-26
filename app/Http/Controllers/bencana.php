<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelBencana;

class bencana extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelBencana::all();
        return view('bencana',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new    modelbencana();
        $data->nama_bencana = $request->nama;
        $data->jenis = $request->jenis;
       $data->id_daerah = $request->daerah;
       $data->skala = $request->skala;
       $data->deskripsi = $request->deskripsi;
       $data->status = "Baru";
       $data->perkiraan_rel = $request->perkiraan_rel;
       $data->save();
       return redirect()->route('apajalah')->with('alert-success','Berhasil Menambahkan Data!');

       $request->kecamatan .", ".$request->kabupaten;
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
    public function edit($id_benc)
    {
        $data = modelBencana::where('id_benc',$id_benc)->get();

        return view('detaillaporanfkkrs',compact('data'));
    }


      public function edit2($id_benc)
    {
        $data = modelBencana::where('id_benc',$id_benc)->get();

        return view('mobilisasi',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $var)
    {
       $data = modelBencana::where('id_benc',$var)->first();
       $data->status = "Dimobilisasi";
        $data->save();
        return redirect()->route('indexpengelola')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_bencana)
    {
        $data = modelBencana::where('id_bencana',$id_bencana)->first();
        $data->delete();
        return redirect()->route('tabelbencana')->with('alert-success','Data telah dihapus');
    }
}
