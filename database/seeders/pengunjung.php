<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class pengunjung extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengunjung=[
            ['id_pengunjung'=>'1001','nm_pengunjung'=>'haddad','alamat'=>'rancamanyar','jk'=>'laki-laki','no_tlp'=>'08986808483','no_ktp'=>100219881],
            ['id_pengunjung'=>'1002','nm_pengunjung'=>'hkimah','alamat'=>'rancamanyar','jk'=>'laki-laki','no_tlp'=>'08986808483','no_ktp'=>100219882],
            ['id_pengunjung'=>'1003','nm_pengunjung'=>'mutaqin','alamat'=>'rancamanyar','jk'=>'laki-laki','no_tlp'=>'08986808483','no_ktp'=>100219883],
            ['id_pengunjung'=>'1004','nm_pengunjung'=>'pirdaus','alamat'=>'rancamanyar','jk'=>'laki-laki','no_tlp'=>'08986808483','no_ktp'=>100219884],
            ['id_pengunjung'=>'1005','nm_pengunjung'=>'saputra','alamat'=>'rancamanyar','jk'=>'laki-laki','no_tlp'=>'08986808483','no_ktp'=>100219885],
        ];
         //masukan data ke database
         DB::table('pengunjungs')->insert($pengunjung);
    }
}
