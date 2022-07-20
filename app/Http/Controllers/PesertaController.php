<?php

namespace App\Http\Controllers;
use App\Models\Peserta;
use Illuminate\Http\Request;

class PesertaController extends Controller
{
    public function index(){

        $peserta = Peserta::all();
        return view('post.peserta',compact('peserta'));
    }
}
