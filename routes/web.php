<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/belajar', function () {
    echo '<h1>Hello World</h1>';
    echo '<p>Sedang belajar laravel</p>';
});

Route::get('/mahasiswa/fasilkom/anto', function () {
    echo '<h2 style="text-align: center"><u>Anto</u></h2>';
});

Route::get('/mahasiswa/{nama}', function ($nama) {
    return "Tampilkan data mahasiswa bernama $nama";
});

Route::get('/stok_barang/{jenis}/{merk}', function ($jenis,$merk) {
    return "cek sisa stok untuk $jenis $merk";
});

Route::get('/stok_barang/{jenis?}/{merk?}', 
    function ($a='smartphone',$b='samsung') {
    return "cek sisa stok untuk $a $b";
});

Route::get('/user_id/{id?}', function ($id) {
    return "Tampilkan user dengan id = $id";
});

Route::get('/user_id/{id?}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id','[0-9]+');

Route::get('/user_id/{id?}', function ($id) {
    return "Tampilkan user dengan id = $id";
})->where('id','[A-Z]{2}[0-9]+');

Route::get('/hubungi-kami', function () {
    return '<h1>Hubungi Kami</h1>';
});
Route::redirect('/contact-us', '/hubungi-kami');

Route::get('/admin/dosen', function () {
    return '<h1>Data Dosen</h1>';
});

Route::get('/admin/mahasiswa', function () {
    return '<h1>Data Mahasiswa</h1>';
});

Route::get('/admin/karyawan', function () {
    return '<h1>Data Karyawan</h1>';
});

Route::prefix('/admin')->group( function () {
    Route::get('/mahasiswa', function () {
        echo "<h1>Data Mahasiswa</h1>";
    });
    Route::get('/dosen', function () {
        echo "<h1>Data Dosen</h1>";
    });
    Route::get('/karyawan', function () {
        echo "<h1>Data Karyawan</h1>";
    });

});

Route::fallback(function () {
    return '<h1>Maaf, alamat tidak ditemukan</h1>';
});

Route::get('/buku/1', function () {
    return "Buku ke-1";
});
Route::get('/buku/1', function () {
    return "Buku saya ke-1";
});
Route::get('/buku/1', function () {
    return "Buku kita ke-1";
});

Route::get('/buku/{a}}', function ($a) {
    return "Buku ke-$a";
});
Route::get('/buku/{b}}', function ($b) {
    return "Buku Saya ke-$b";
});
Route::get('/buku/{c}}', function ($c) {
    return "Buku Kita ke-$c";
});

Route::get('/mahasiswa1', function () {
    return view('universitas/mahasiswa',["mahasiswa01"=>"Fahri Ari Rahman"]);
});

Route::get('/mahasiswa2', function () {
    return view('universitas/mahasiswa',
    [
        "mahasiswa01"=>"Fahri Ari Rahman",
        "mahasiswa02"=>"Alvian Ramadhani",
        "mahasiswa03"=>"Andika Cahya",
        "mahasiswa04"=>"Faronika Awalia",
    ]);
});

Route::get('/mahasiswa3', function () {
    $arrMahasiswa = ["Fahri Ari Rahman","Alvian Ramadhani","Andika Cahya","Faronika Awalia"];
    return view('universitas/mahasiswa',['mahasiswa'=>$arrMahasiswa]);
});

Route::get('/mahasiswa3', function () {
    $arrMahasiswa = ["Fahri Ari Rahman","Alvian Ramadhani","Andika Cahya","Faronika Awalia"];
    return view('universitas/mahasiswa',['mahasiswa'=>$arrMahasiswa]);
});

Route::get('/mahasiswa4', function () {
    return view('universitas/mahasiswa')->with('mahasiswa01','Fahri Ari Rahman');
});

Route::get('/mahasiswa5', function () {
    return view('universitas/mahasiswa')
        ->with('mahasiswa01','Fahri Ari Rahman')
        ->with('mahasiswa02','Alvian Ramadhani')
        ->with('mahasiswa03','Andika Cahya')
        ->with('mahasiswa04','Faronika Awalia');
});

Route::get('/mahasiswa6', function () {
    $arrMahasiswa = ["Fahri Ari Rahman","Alvian Ramadhani","Andika Cahya","Faronika Awalia"];
    return view('universitas/mahasiswa')->with('mahasiswa', $arrMahasiswa);
});

Route::get('/mahasiswa7', function () {
    $mahasiswa01 = "Fahri Ari Rahman";
    $mahasiswa02 = "Alvian Ramadhani";
    $mahasiswa03 = "Andika Cahya";
    $mahasiswa04 = "Faronika Awalia";
    
    return view('universitas.mahasiswa', compact("mahasiswa01", "mahasiswa02","mahasiswa03","mahasiswa04"));

});

Route::get('/mahasiswa8', function () {
    $mahasiswa01 = "Fahri Ari Rahman";
    $mahasiswa02 = "Alvian Ramadhani";
    $mahasiswa03 = "Andika Cahya";
    $mahasiswa04 = "Faronika Awalia";
    
    return view('universitas.mahasiswa')->with(compact("mahasiswa01", "mahasiswa02","mahasiswa03","mahasiswa04"));

});