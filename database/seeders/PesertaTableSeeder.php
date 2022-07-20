<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PesertaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $peserta=[
         ['no'=>'2002','kode'=>'MP02'],
         ['no'=>'2003','kode'=>'MP03'],
         ['no'=>'2004','kode'=>'MP04'],
         ['no'=>'2005','kode'=>'MP05'],
     ];
      //masukan data ke database
      DB::table('pesertas')->insert($peserta);
        }
    }
