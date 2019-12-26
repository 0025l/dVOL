<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelKegiatan;

class Kegiatan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = modelKegiatan::all();
        return view('kegiatan',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new    modelKegiatan();
       $data->nama_keg = $request->nama;
       $data->jenisKeg = $request->jenis;
       $data->status = "Baru";
       $data->waktu = $request->waktu;
       $data->tanggal_keg = $request->tanggal;
       $data->alamat = $request->loc;
       $data->keterangan = $request->desc;
       $data->save();
       return redirect()->route('munyak')->with('alert-success','Berhasil Menambahkan Data!');
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
         $data = modelKegiatan::where('id_keg',$id)->get();

        return view('komkegiatan',compact('data'));
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
        $data = modelKegiatan::where('id_keg',$id)->first();
       $data->status = "Selesai";
        $data->save();
        return redirect()->route('indexpengelola')->with('alert-success','Data berhasil diubah!');
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
