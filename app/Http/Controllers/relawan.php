<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\modelRelawan;
use DateTime;
use Image;
use Response;

class relawan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = modelRelawan::paginate(5);
        return view('relawans',compact('data'));
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
      
        $data = new    modelRelawan();
       $data->nama = $request->nama;
       $data->jenisKel = $request->jenisKel;
       $data->email = $request->email;
       $dob = new DateTime($request->tl);
       $now = new DateTime();
       $difference = $now->diff($dob);
       $age = $difference->y;
       $data->umur = $age;
       $data->tl = $request->tl;
       $data->skala_kec = $request->skala_kec;
       $data->alamat = $request->alamat;
       $data->noHP = $request->hp;
       $data->id_kom = $request->id_kom;
       $data->kebutuhan_rel = $request->jml_rel;
     

//skala kecakapan
if( $data->skala_kec <= 30 ){
  $derajatKB = 1;
}
else if( $data->skala_kec > 30 && $data->skala_kec < 50){
  $derajatKB = (50 - $data->skala_kec)/(50-30);
}
else if( $data->skala_kec >= 50){
  $derajatKB =0;
}
if( $data->skala_kec <= 30 || $data->skala_kec >= 80){
  $derajatKA = 0;
}
else if( $data->skala_kec > 30 && $data->skala_kec < 50){
  $derajatKA = ($data->skala_kec - 30)/(50-30);
}
else if( $data->skala_kec > 50 && $data->skala_kec < 80){
  $derajatKA = (80 - $data->skala_kec)/(80-50);
}
else if( $data->skala_kec =5){
  $derajatKA = 1;
}
if( $data->skala_kec >= 80 ){
  $derajatKSA = 1;
}
else if( $data->skala_kec > 50 && $data->skala_kec < 80){
  $derajatKSA = ($data->skala_kec-5)/(80-50);
}
else if( $data->skala_kec <= 50){
  $derajatKSA =0;
}
//till here

//umur
if( $data->umur < 26 ){
  $derajatR = 1;
}
else if( $data->umur >= 26 && $data->umur <= 35){
  $derajatR = (35 - $data->umur)/(35-26);
}
else if( $data->umur > 35){
  $derajatR =0;
}

if( $data->umur <= 26 || $data->umur >= 45){
  $derajatD = 0;
}
else if( $data->umur > 26 && $data->umur < 35){
  $derajatD = ($data->umur - 26)/(35-26);
}
else if( $data->umur > 35 && $data->umur < 45){
  $derajatD = (45 - $data->umur)/(45-35);
}
else if( $data->umur =35){
  $derajatD = 1;
}

if( $data->umur >= 45 ){
  $derajatT = 1;
}
else if( $data->umur > 35 && $data->umur < 45){
  $derajatT = ($data->umur-35)/(45-35);
}
else if( $data->umur <= 35){
  $derajatT =0;
}

$a1 = min($derajatR, $derajatKB);
$a2 = min($derajatR, $derajatKA);
$a3 = min($derajatR, $derajatKSA);
$a4 = min($derajatD, $derajatKB);
$a5 = min($derajatD, $derajatKA);
$a6 = min($derajatD, $derajatKSA);
$a7 = min($derajatT, $derajatKB);
$a8 = min($derajatT, $derajatKA);
$a9 = min($derajatT, $derajatKSA);

if($a1 != 0 ){
  $z1 = 50-($a1*(50-30));
}
elseif ($a1 == 0) {
  $z1 = 0;
}
if($a2 != 0 ){
  $z2 = ($a2*(50-30))+30;
}
elseif ($a2 == 0) {
  $z2 = 0;
}
if($a3 != 0 ){
  $z3 = ($a3*(80-50))+50;
}
elseif ($a3 == 0) {
  $z3 = 0;
}
if($a4 != 0 ){
  $z4 = ($a2*(50-30))+30;
}
elseif ($a4 == 0) {
  $z4 = 0;
}
if($a5 != 0 ){
  $z5 = ($a3*(80-50))+50;
}
elseif ($a5 == 0) {
  $z5 = 0;
}
if($a6 != 0 ){
  $z6 = ($a3*(80-50))+50;
}
elseif ($a6 == 0) {
  $z6 = 0;
}
if($a7 != 0 ){
  $z7 = 50-($a7*(50-30));
}
elseif ($a7 == 0) {
  $z7 = 0;
}
if($a8 != 0 ){
  $z8 = ($a2*(50-30))+30;
}
elseif ($a8 == 0) {
  $z8 = 0;
}
if($a9 != 0 ){
  $z9 = ($a3*(80-50))+50;
}
elseif ($a9 == 0) {
  $z9 = 0;
}

$Z = (($a1 * $z1)+($a2 * $z2)+($a3 * $z3)+($a4 * $z4)+($a5 * $z5)+($a6 * $z6)+($a7 * $z7)+($a8 * $z8)+($a9 * $z9))/($a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9);
$data->z = $Z;
if($Z <= 30){
$data->rekomendasi = "Rekomendasi bencana dengan skala rendah.";
}
if($Z > 30 && $Z<71){
$data->rekomendasi = "Rekomendasi bencana dengan skala sedang.";
}
if($Z > 70){
$data->rekomendasi = "Rekomendasi bencana dengan skala tinggi.";
}



       $data->save();
       return redirect()->route('kelolarelawan')->with('alert-success','Berhasil Menambahkan Data!');
    }
    

        public function store2(Request $request)
    {
      
        $data = new    modelRelawan();
       $data->nama = $request->nama;
       $data->jenisKel = $request->jenisKel;
       $data->email = $request->email;
       $dob = new DateTime($request->tl);
       $now = new DateTime();
       $difference = $now->diff($dob);
       $age = $difference->y;
       $data->umur = $age;
       $data->tl = $request->tl;
       $data->skala_kec = $request->skala_kec;
       $data->alamat = $request->alamat;
       $data->noHP = $request->hp;
       $data->id_kom = $request->id_kom;
     

//skala kecakapan
if( $data->skala_kec <= 30 ){
  $derajatKB = 1;
}
else if( $data->skala_kec > 30 && $data->skala_kec < 50){
  $derajatKB = (50 - $data->skala_kec)/(50-30);
}
else if( $data->skala_kec >= 50){
  $derajatKB =0;
}
if( $data->skala_kec <= 30 || $data->skala_kec >= 80){
  $derajatKA = 0;
}
else if( $data->skala_kec > 30 && $data->skala_kec < 50){
  $derajatKA = ($data->skala_kec - 30)/(50-30);
}
else if( $data->skala_kec > 50 && $data->skala_kec < 80){
  $derajatKA = (80 - $data->skala_kec)/(80-50);
}
else if( $data->skala_kec =5){
  $derajatKA = 1;
}
if( $data->skala_kec >= 80 ){
  $derajatKSA = 1;
}
else if( $data->skala_kec > 50 && $data->skala_kec < 80){
  $derajatKSA = ($data->skala_kec-5)/(80-50);
}
else if( $data->skala_kec <= 50){
  $derajatKSA =0;
}
//till here

//umur
if( $data->umur < 26 ){
  $derajatR = 1;
}
else if( $data->umur >= 26 && $data->umur <= 35){
  $derajatR = (35 - $data->umur)/(35-26);
}
else if( $data->umur > 35){
  $derajatR =0;
}

if( $data->umur <= 26 || $data->umur >= 45){
  $derajatD = 0;
}
else if( $data->umur > 26 && $data->umur < 35){
  $derajatD = ($data->umur - 26)/(35-26);
}
else if( $data->umur > 35 && $data->umur < 45){
  $derajatD = (45 - $data->umur)/(45-35);
}
else if( $data->umur =35){
  $derajatD = 1;
}

if( $data->umur >= 45 ){
  $derajatT = 1;
}
else if( $data->umur > 35 && $data->umur < 45){
  $derajatT = ($data->umur-35)/(45-35);
}
else if( $data->umur <= 35){
  $derajatT =0;
}

$a1 = min($derajatR, $derajatKB);
$a2 = min($derajatR, $derajatKA);
$a3 = min($derajatR, $derajatKSA);
$a4 = min($derajatD, $derajatKB);
$a5 = min($derajatD, $derajatKA);
$a6 = min($derajatD, $derajatKSA);
$a7 = min($derajatT, $derajatKB);
$a8 = min($derajatT, $derajatKA);
$a9 = min($derajatT, $derajatKSA);

if($a1 != 0 ){
  $z1 = 50-($a1*(50-30));
}
elseif ($a1 == 0) {
  $z1 = 0;
}
if($a2 != 0 ){
  $z2 = ($a2*(50-30))+30;
}
elseif ($a2 == 0) {
  $z2 = 0;
}
if($a3 != 0 ){
  $z3 = ($a3*(80-50))+50;
}
elseif ($a3 == 0) {
  $z3 = 0;
}
if($a4 != 0 ){
  $z4 = ($a2*(50-30))+30;
}
elseif ($a4 == 0) {
  $z4 = 0;
}
if($a5 != 0 ){
  $z5 = ($a3*(80-50))+50;
}
elseif ($a5 == 0) {
  $z5 = 0;
}
if($a6 != 0 ){
  $z6 = ($a3*(80-50))+50;
}
elseif ($a6 == 0) {
  $z6 = 0;
}
if($a7 != 0 ){
  $z7 = 50-($a7*(50-30));
}
elseif ($a7 == 0) {
  $z7 = 0;
}
if($a8 != 0 ){
  $z8 = ($a2*(50-30))+30;
}
elseif ($a8 == 0) {
  $z8 = 0;
}
if($a9 != 0 ){
  $z9 = ($a3*(80-50))+50;
}
elseif ($a9 == 0) {
  $z9 = 0;
}

$Z = (($a1 * $z1)+($a2 * $z2)+($a3 * $z3)+($a4 * $z4)+($a5 * $z5)+($a6 * $z6)+($a7 * $z7)+($a8 * $z8)+($a9 * $z9))/($a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9);

if($Z <= 30){
$data->rekomendasi = "Rekomendasi bencana dengan skala rendah.";
}
if($Z > 30 && $Z<71){
$data->rekomendasi = "Rekomendasi bencana dengan skala sedang.";
}
if($Z > 70){
$data->rekomendasi = "Rekomendasi bencana dengan skala tinggi.";
}
       $data->save();
       return redirect()->route('kelolakomunitas')->with('alert-success','Berhasil Menambahkan Data!');
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
        $data = modelRelawan::where('id_rel',$id)->get();

        return view('editrelawan',compact('data'));
    }


    public function rekomendasi($id)
    {
        $data = modelRelawan::where('id_rel',$id)->get();

        return view('fuzzying',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id

     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_relawan)
    {
        $data = modelRelawan::where('id_rel',$id_relawan)->first();
         $data = new    modelRelawan();
       $data->nama = $request->nama;
       $data->jenisKel = $request->jenisKel;
       $data->email = $request->email;
       $dob = new DateTime($request->tl);
       $now = new DateTime();
       $difference = $now->diff($dob);
       $age = $difference->y;
       $data->umur = $age;
       $data->tl = $request->tl;
       $data->skala_kec = $request->skala_kec;
       $data->alamat = $request->alamat;
       $data->noHP = $request->hp;
       $data->id_kom = $request->id_kom;
     

//skala kecakapan
if( $data->skala_kec <= 30 ){
  $derajatKB = 1;
}
else if( $data->skala_kec > 30 && $data->skala_kec < 50){
  $derajatKB = (50 - $data->skala_kec)/(50-30);
}
else if( $data->skala_kec >= 50){
  $derajatKB =0;
}
if( $data->skala_kec <= 30 || $data->skala_kec >= 80){
  $derajatKA = 0;
}
else if( $data->skala_kec > 30 && $data->skala_kec < 50){
  $derajatKA = ($data->skala_kec - 30)/(50-30);
}
else if( $data->skala_kec > 50 && $data->skala_kec < 80){
  $derajatKA = (80 - $data->skala_kec)/(80-50);
}
else if( $data->skala_kec =5){
  $derajatKA = 1;
}
if( $data->skala_kec >= 80 ){
  $derajatKSA = 1;
}
else if( $data->skala_kec > 50 && $data->skala_kec < 80){
  $derajatKSA = ($data->skala_kec-5)/(80-50);
}
else if( $data->skala_kec <= 50){
  $derajatKSA =0;
}
//till here

//umur
if( $data->umur < 26 ){
  $derajatR = 1;
}
else if( $data->umur >= 26 && $data->umur <= 35){
  $derajatR = (35 - $data->umur)/(35-26);
}
else if( $data->umur > 35){
  $derajatR =0;
}

if( $data->umur <= 26 || $data->umur >= 45){
  $derajatD = 0;
}
else if( $data->umur > 26 && $data->umur < 35){
  $derajatD = ($data->umur - 26)/(35-26);
}
else if( $data->umur > 35 && $data->umur < 45){
  $derajatD = (45 - $data->umur)/(45-35);
}
else if( $data->umur =35){
  $derajatD = 1;
}

if( $data->umur >= 45 ){
  $derajatT = 1;
}
else if( $data->umur > 35 && $data->umur < 45){
  $derajatT = ($data->umur-35)/(45-35);
}
else if( $data->umur <= 35){
  $derajatT =0;
}

$a1 = min($derajatR, $derajatKB);
$a2 = min($derajatR, $derajatKA);
$a3 = min($derajatR, $derajatKSA);
$a4 = min($derajatD, $derajatKB);
$a5 = min($derajatD, $derajatKA);
$a6 = min($derajatD, $derajatKSA);
$a7 = min($derajatT, $derajatKB);
$a8 = min($derajatT, $derajatKA);
$a9 = min($derajatT, $derajatKSA);

if($a1 != 0 ){
  $z1 = 50-($a1*(50-30));
}
elseif ($a1 == 0) {
  $z1 = 0;
}
if($a2 != 0 ){
  $z2 = ($a2*(50-30))+30;
}
elseif ($a2 == 0) {
  $z2 = 0;
}
if($a3 != 0 ){
  $z3 = ($a3*(80-50))+50;
}
elseif ($a3 == 0) {
  $z3 = 0;
}
if($a4 != 0 ){
  $z4 = ($a2*(50-30))+30;
}
elseif ($a4 == 0) {
  $z4 = 0;
}
if($a5 != 0 ){
  $z5 = ($a3*(80-50))+50;
}
elseif ($a5 == 0) {
  $z5 = 0;
}
if($a6 != 0 ){
  $z6 = ($a3*(80-50))+50;
}
elseif ($a6 == 0) {
  $z6 = 0;
}
if($a7 != 0 ){
  $z7 = 50-($a7*(50-30));
}
elseif ($a7 == 0) {
  $z7 = 0;
}
if($a8 != 0 ){
  $z8 = ($a2*(50-30))+30;
}
elseif ($a8 == 0) {
  $z8 = 0;
}
if($a9 != 0 ){
  $z9 = ($a3*(80-50))+50;
}
elseif ($a9 == 0) {
  $z9 = 0;
}

$Z = (($a1 * $z1)+($a2 * $z2)+($a3 * $z3)+($a4 * $z4)+($a5 * $z5)+($a6 * $z6)+($a7 * $z7)+($a8 * $z8)+($a9 * $z9))/($a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9);

if($Z <= 30){
$data->rekomendasi = "Rekomendasi bencana dengan skala rendah.";
}
if($Z > 30 && $Z<71){
$data->rekomendasi = "Rekomendasi bencana dengan skala sedang.";
}
if($Z > 70){
$data->rekomendasi = "Rekomendasi bencana dengan skala tinggi.";
}        $data->save();
        return redirect()->route('kelola')->with('alert-success','Data berhasil diubah!');
    }
        
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_rel)
    {
        $data = modelRelawan::where('id_rel',$id_rel)->first();
        $data->delete();
        return redirect()->route('kelolarelawan')->with('alert-success','Data telah dihapus');
    }
}
