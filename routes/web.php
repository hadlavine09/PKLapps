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
Route::get('/pesanan/{pilih?}',function($pilih= "pesanan anda tidak ada "){
    return view('contoh.makanan',compact('pilih'));
});
