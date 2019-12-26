<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelKomunitas;

class komunitas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelKomunitas::all();
        return view('komunitas',compact('data'));
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
        $data = new    modelKomunitas();
        $data->nama_kom = $request->nama_kom;
       $data->nama_ketua = $request->nama_ket;
       $data->email_ketua = $request->email_ket;
       $data->hp_ketua = $request->hp_ket;
       $data->save();
       $data2 = modelKomunitas::where('id_kom', $data->id_kom)->get();
       return view('tambahrelawan2',compact('data2'));

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
    public function edit($id_kom)
    {
        $data = modelKomunitas::where('id_kom',$id_kom)->get();

        return view('editkomunitas',compact('data'));
    }

     public function detail($id_kom)
    {
        $data = modelKomunitas::where('id_kom',$id_kom)->get();

        return view('detailkomunitas',compact('data'));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_kom)
    {
       $data = modelKomunitas::where('id_kom',$id_kom)->first();
       $data->nama_kom = $request->nama_kom;
       $data->nama_ketua = $request->nama_ket;
       $data->email_ketua = $request->email_ket;
       $data->hp_ketua = $request->hp_ket;
        $data->save();
        return redirect()->route('kelolakomunitas')->with('alert-success','Data berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_kom)
    {
        $data = modelKomunitas::where('id_kom',$id_kom)->first();
        $data->delete();
        return redirect()->route('kelolakomunitas')->with('alert-success','Data telah dihapus');
    }
}
