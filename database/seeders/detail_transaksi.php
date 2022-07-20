<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class detail_transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $detail_transaksi = [
            ['id_dtl_transaksi'=>11,'no_transaksi'=>'1','no_kamar'=>9],
            ['id_dtl_transaksi'=>12,'no_transaksi'=>'2','no_kamar'=>8],
            ['id_dtl_transaksi'=>13,'no_transaksi'=>'3','no_kamar'=>7],
            ['id_dtl_transaksi'=>14,'no_transaksi'=>'4','no_kamar'=>6],
            ['id_dtl_transaksi'=>15,'no_transaksi'=>'5','no_kamar'=>5],
        ];
        
        //masukan data ke database
        DB::table('detail_transaksis')->insert($detail_transaksi);
    }
}
