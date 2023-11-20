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

Route::get('halo', function () {
	return "Halo, Selamat datang di tutorial laravel www.malasngoding.com";
});

Route::get('halo2', function () {
	return "<h1>Halo, Selamat datang</h1>";
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('hello', function () {
    return view('hello');
});

//pertemuan 1
Route::get('hello2', function () {
    return view('hello2');
});

Route::get('link', function () {
    return view('link');
});

Route::get('news', function () {
    return view('news');
});

Route::get('style', function () {
    return view('style');
});


//pertemuan 2
Route::get('pagination', function () {
    return view('pagination');
});

Route::get('responsive', function () {
    return view('responsive');
});


//pertemuan5
Route::get('js1', function () {
    return view('js1');
});

Route::get('js2', function () {
    return view('js2');
});

Route::get('validasi1', function () {
    return view('validasi1');
});


//linktree
Route::get('linktree', function () {
    return view('linktree');
});

Route::get('latihan1', function () {
    return view('latihan1');
});

Route::get('websiteku', function () {
    return view('websiteku');
});

Route::get('perkalian','MahasiswaD@index');
Route::get('show', 'App\Http\Controllers\MahasiswaD@showBlog');

use App\Http\Controllers\PegawaiController;


Route::get('/pegawai', [PegawaiController::class, 'index']);
Route::get('/pegawai/tambah', [PegawaiController::class, 'tambah']);
Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit']);
Route::post('/pegawai/update', [PegawaiController::class, 'update']);
Route::post('/pegawai/store', [PegawaiController::class, 'store']);
Route::get('/pegawai/hapus/{id}', [PegawaiController::class, 'hapus']);


// Route::get('/pegawai','PegawaiController@index');
// Route::get('/pegawai/tambah','PegawaiController@tambah');
// Route::post('/pegawai/store','PegawaiController@store');
// Route::get('/pegawai/edit/{id}','PegawaiController@edit');
// Route::post('/pegawai/update','PegawaiController@update');
// Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');


// Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
// Route::post('pegawai/update','PegawaiController@update');
// Route::get('/pegawai/edit/{id}','PegawaiController@edit');
// Route::get('/pegawai/tambah','PegawaiController@tambah');








