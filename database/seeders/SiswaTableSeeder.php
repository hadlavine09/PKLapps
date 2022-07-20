<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa=[
            ['no'=> '2001','nama'=>'haddad','jk'=>'laki-laki','jurusan'=>'rpl'],
            ['no'=> '2002','nama'=>'hikmah','jk'=>'laki-laki','jurusan'=>'rpl'],
            ['no'=> '2003','nama'=>'mutaqin','jk'=>'laki-laki','jurusan'=>'rpl'],
        ];
        
        //masukan data ke database
        DB::table('siswas')->insert($siswa);
    }
}
