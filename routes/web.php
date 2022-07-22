<?php

use Illuminate\Support\Facades\Route;
use app\http\Controllers\PengenalanController;

use app\http\Controllers\LatihanController;

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
//route basic 
Route::get('/belajar',function(){
    echo "<center>";
    echo "<h1><u>Hello Word</h1></u><br>";
    echo "<h1><u>Kami Sedang Belajar Laravel Daasr</u></h1><br>";
    echo "</center>";
});

//route basic 
Route::get('/index',function(){
    return view('index');
});
//folder contoh
Route::get('/contoh1',function(){
    return view('contoh.contoh1');
});
Route::get('/contoh2',function(){
    return view('contoh.contoh2');
});



//Route Parameter
Route::get('/biodata/{nama}/{umur}/{alamat}/{jenis_kelamin}/{kelas}/{hobi}',function($nama,$umur,$alamat,$jenis_kelamin,$kelas,$hobby){
    return view('contoh.biodata',compact('nama','umur','alamat','jenis_kelamin','kelas','hobby'));
    
});
//Route opsional parameter
Route::get('/pesanan/{pilih?}/{pilih2?}',function($pilih= "pesanan anda tidak ada", $pilih2= "pesanan anda tidak ada"){
    return view('contoh.makanan',compact('pilih','pilih2'));
});
//passing data dari controller ke view
Route::get('/pengenalan',[App\Http\Controllers\PengenalanController::class,'pengenalan']);
//passing data dianamsi(route parameter) dari controller ke view
Route::get('/intro/{nama}/{alamat}/{umur}/',[App\Http\Controllers\PengenalanController::class,'intro']);
//
Route::get('/data',[App\Http\Controllers\PengenalanController::class,'siswa']);
//latihan
Route::get('/menu',[App\Http\Controllers\LatihanController::class,'menu']);
Route::get('/dosen',[App\Http\Controllers\LatihanController::class,'dosen']);
Route::get('/tv',[App\Http\Controllers\LatihanController::class,'tv']);
//
use app\http\Controllers\PostController;
Route::get('/post',[App\Http\Controllers\PostController::class,'index']);
//siswa
use app\http\Controllers\SiswaController;
Route::get('/siswa',[App\Http\Controllers\SiswaController::class,'siswa']);
//peserta
use app\http\Controllers\PesertaController;
Route::get('/peserta',[App\Http\Controllers\PesertaController::class,'index']);
//mapel
use app\http\Controllers\MapelController;
Route::get('/mapel',[App\Http\Controllers\MapelController::class,'index']);
//
use app\http\Controllers\HotelController;
Route::get('/hotel',[App\Http\Controllers\HotelController::class,'hotel']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
use app\http\Controllers\SlotController;
Route::resource('Slot',App\Http\Controllers\SlotController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// hallo
//hay