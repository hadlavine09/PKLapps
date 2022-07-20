<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengunjung;
use App\Models\karyawan;
use App\Models\transaksi;
use App\Models\detail_transaksi;
use App\Models\kamar;
class HotelController extends Controller
{
    public function hotel(){

        $pengunjung = pengunjung::all();
        $karyawan = karyawan::all();
        $transaksi = transaksi::all();
        $detail_transaksi = detail_transaksi::all();
        $kamar = kamar::all();
        return view('post.hotel',compact('pengunjung','karyawan','transaksi','detail_transaksi','kamar'));
    }
}
