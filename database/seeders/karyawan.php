<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class karyawan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $karyawan = [
        ['id_karyawan'=>'123','nm_karyawan'=>'hadlavine1','jk'=>'laki-laki'],
        ['id_karyawan'=>'1234','nm_karyawan'=>'hadlavine2','jk'=>'perempuan'],
        ['id_karyawan'=>'12345','nm_karyawan'=>'hadlavine3','jk'=>'laki-laki'],
        ['id_karyawan'=>'123456','nm_karyawan'=>'hadlavine4','jk'=>'perempuan'],
        ['id_karyawan'=>'1234567','nm_karyawan'=>'hadlavine5','jk'=>'laki-laki'],
        ];
        //masukan data ke database
      DB::table('karyawans')->insert($karyawan);
    }
}
