<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class transaksi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            ['no_transaksi'=>1,'id_pengunjung'=>'1001','id_karyawan'=>'123','jmlh_kamar'=>1,'tgl_masuk'=>"2022-01-23",'tgl_keluar'=>"2022-01-24",'lama_nginap'=>3,'total_harga'=>10000],
            ['no_transaksi'=>2,'id_pengunjung'=>'1002','id_karyawan'=>'1234','jmlh_kamar'=>2,'tgl_masuk'=>"2022-01-24",'tgl_keluar'=>"2022-01-25",'lama_nginap'=>4,'total_harga'=>100000],
            ['no_transaksi'=>3,'id_pengunjung'=>'1003','id_karyawan'=>'12345','jmlh_kamar'=>3,'tgl_masuk'=>"2022-01-25",'tgl_keluar'=>"2022-01-26",'lama_nginap'=>5,'total_harga'=>100000],
            ['no_transaksi'=>4,'id_pengunjung'=>'1004','id_karyawan'=>'123456','jmlh_kamar'=>4,'tgl_masuk'=>"2022-01-26",'tgl_keluar'=>"2022-01-27",'lama_nginap'=>6,'total_harga'=>100000],
            ['no_transaksi'=>5,'id_pengunjung'=>'1005','id_karyawan'=>'1234567','jmlh_kamar'=>5,'tgl_masuk'=>"2022-01-27",'tgl_keluar'=>"2022-01-28",'lama_nginap'=>7,'total_harga'=>1000000],
        ];
        
        //masukan data ke database
        DB::table('transaksis')->insert($transaksi);
    }
}
