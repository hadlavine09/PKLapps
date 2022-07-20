<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengenalanController extends Controller
{
    public function pengenalan(){
        $nama = "Haddad Hikmah M";
        $umur = "17";
        return view('contoh.pengenalan',compact('nama','umur'));
    }
    public function intro($nama,$alamat,$umur){
        return view('contoh.intro',compact('nama','alamat','umur'));
    }
    public function siswa()
    {
        $a = [
            array('id' => 1, 'name'=> "haddad", 'age'=>18, 'mapel' => ['b.indonesia', 'b.sunda']),
            array('id' => 2, 'name'=> "sarif", 'age'=>15, 'mapel' => ['b.inggris', 'matematika'])
        ];
        //dd($a);
        return view('contoh.siswa', ['siswa'=> $a]);
    }
}
