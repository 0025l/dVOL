<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('login');
});
Route::get('/kelolakomunitas/{var}', 'bencana@update1')->name('toAnotherController');
Route::resource('komunitas','komunitas');
Route::resource('relawan','relawan');
Route::resource('komkeg1','komkeg1');
Route::resource('kegiatan','kegiatan');
Route::resource('laprel1','laprel1');
Route::resource('bencana','bencana');
Route::resource('user','userController');
Route::get('/relawan/{relawan}/rekomendasi', 'relawan@rekomendasi')->name('relawan.rekomendasi');
Route::get('/bencana/{bencana}/edit2', 'bencana@edit2')->name('bencana.edit2');
Route::get('/login', 'userController@login');
Route::post('/loginPost', 'userController@loginPost');
Route::get('/register', 'userController@register');
Route::post('/registerPost', 'userController@registerPost');
Route::get('/logout', 'userController@logout')->name('logout');
Route::post('/relawan/{relawan}', 'relawan@updateTim')->name('relawan.updateTim');
Route::get('/komunitas/{komunita}/detail', 'komunitas@detail')->name('komunitas.detail');
Route::post('/relawan/{relawan}', 'relawan@store2')->name('relawan.store2');
Route::get('/tampilrelawan', function () {
    $relawan = DB::table('relawans')->paginate(8);

    return view('tabelrelawan', compact('relawan'));
})->name('tabelrelawan');

Route::get('/tampilbencana', function () {
    $bencana = DB::table('bencanas')->get();

    return view('keloladatabencana', ['bencana' => $bencana]);
})->name('tabelbencana');

Route::get('/indexpengelola', function () {
    return view('indexpengelola');
})->name('indexpengelola');

Route::get('/kelolakomunitas', function () {
    $komunitas = DB::table('komunitas')->paginate(8);

    return view('keloladatakomunitas', compact('komunitas'));
})->name('kelolakomunitas');

Route::get('/kelolarelawan', function () {

    return view('keloladatarelawan');
})->name('kelolarelawan');
Route::get('/tambah',function(){
	return view('tambahdatakomunitas');
})->name('tambahkomunitas');
Route::get('/tambahrelawan',function(){
    return view('tambahrelawan');
})->name('tambahrelawan');
Route::get('/register',function(){
    return view('registernewaccount');
})->name('register');

Route::get('/tambahbencana',function(){
    return view('tambahdatabencana');
})->name('tambahbencana');

Route::get('/homekoor',function(){
	return view('indexkoor');
})-> name('homekoor');


Route::get('/indexstaffit',function(){

      $user = DB::table('users')->get();

    return view('indexstaffit', ['user' => $user]);
})->name('indexstaffit');

Route::get('/report', function () {
    $bencana = DB::table('bencanas')->get();
    return view('report', ['bencana' => $bencana]);
})->name('apajalah');
Route::get('/tambahkegiatan',function(){
    return view('formkegiatan');
})->name('tambahkegiatan');

Route::get('/report2', function () {
    $kegiatan = DB::table('kegiatans')->get();
    return view('daftarkegiatan', ['kegiatan' => $kegiatan]);
})->name('munyak');
Route::get('/tes',function(){
    return view('tes');
})->name('tes');
Route::get('/teslg',function(){
    return view('grafik1');
});
Route::get('/teslg2',function(){
    return view('grafik2');
});
Route::get('/chart',function(){
    return view('charts');
})->name('chart');
Route::get('/chart2',function(){
    return view('chart2');
})->name('chart2');
Route::get('/chartbpbd',function(){
    return view('chartbpbd');
})->name('chartbpbd');
Route::get('/chart2bpbd',function(){
    return view('chart2bpbd');
})->name('chart2bpbd');

Route::get('/chartkegbpbd',function(){
    return view('chartkegbpbd');
})->name('chartkegbpbd');
Route::get('/chartkeg',function(){
    return view('chartkeg');
})->name('chartkeg');

Route::get('/kelola',function(){
    return view('keloladatarelawan');
})->name('kelola');

Route::resource('skala_kec1','skala_kec1');
Route::resource('skala_ben1','skala_ben1');
Route::resource('umur1','umur1');
Route::get('/aturan', function () {
    $aturan = DB::table('aturan')->paginate(8);

    return view('editvariabelfuzzy', compact('aturan'));
})->name('aturan');
Route::get('/fuzzy',function(){
    return view('editfuzzy');
})->name('fuzzy');