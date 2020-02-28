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

Route::get('/', function () {
    return view('welcome');
});

// import model
use App\Mahasiswa;
use App\Dosen;
use App\Wali;
use App\Hobi;

// Route One to One
Route::get('relasi-1',function(){
    // memilih data mahasiswa yang memiliki nim '1010101'
    // first : 1 get : banyak
    $mhs = Mahasiswa::where('nim','=','1010101')->first();

    // menampilkan data wali darimahasiswa yang dipilih
    return $mhs->wali->nama;
});

Route::get('relasi-2',function(){
    // memilih data mahasiswa yang memiliki nim '1010101'
    // first : 1 get : banyak
    $mhs = Mahasiswa::where('nim','=','1010101')->first();

    // menampilkan data wali darimahasiswa yang dipilih
    return $mhs->dosen->nama;
});

Route::get('relasi-3',function(){
    // mencari data dosen dengan nama Abdul Musthafa
    // first : 1 get : banyak
    $dosen = Dosen::where('nama','=','Abdul Musthafa')->first();

    // menampilkan Seluruh data mahasiswa dari dosen yg dipilih
    foreach ($dosen->mahasiswa as $temp) {
        echo '<li> Nama : '.$temp->nama.
             ' <strong>' .$temp->nim.'</strong>
             </li>';
    }
});

Route::get('relasi-4',function(){
    // mencari data mahasiswa yang bernama dadang
    // first : 1 get : banyak
    $dadang = Mahasiswa::where('nama','=','Mamat Karbit')->first();

    // menampilkan Seluruh hobi dari mahasiswa yg dipilih
    foreach ($dadang->hobi as $temp) {
        echo '<li>' .$temp->hobi.'
             </li>';
    }
});

Route::get('relasi-5',function(){
    // mencari data mahasiswa dengan hobi Game Mobile
    // first : 1 get : banyak
    $gaming = Hobi::where('hobi','=','Game Mobile')->first();

    // menampilkan Seluruh data mahasiswa dari dosen yg dipilih
    foreach ($gaming->mahasiswa as $temp) {
        echo '<li> Nama : '.$temp->nama .
             ' <strong>' .$temp->nim.'</strong>
             </li>';
    }
});

Route::get('relasi-join',function(){
    // join laravel
    // $sql = Mahasiswa::with('wali')->get();
    $sql = DB::table('mahasiswas')
    ->select('mahasiswas.nama','mahasiswas.nim','walis.nama as nama_wali')
    ->join('walis','walis.id_mahasiswa','=','mahasiswas.id')
    ->get();
    dd($sql);
});

Route::get('eloquent',function(){
    $mahasiswa = Mahasiswa::with('wali','dosen','hobi')->get();
    return view('eloquent',compact('mahasiswa'));
});

Route::get('eloquent2',function(){
    $mahasiswa = Mahasiswa::where('nama','=','Mamat Karbit')->get();
    return view('eloquent2',compact('mahasiswa'));
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('beranda',function(){
    return view('beranda');
});

Route::get('tentang',function(){
    return view('tentang');
});
Route::get('kontak',function(){
    return view('kontak');
});


// get = menampung/mengambil 1 method
// resource = menampung 7 method bawaan yang ada dalam controller
Route::resource('dosen','DosenController');

Route::resource('hobi','HobiController');

Route::resource('mahasiswa','MahasiswaController');

Route::resource('wali','WaliController');