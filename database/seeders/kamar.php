<?php

namespace Database\Seeders;
use  DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class kamar extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kamar = [
            ['no_kamar'=>9,'jenis_kamar'=>'A','harga'=>400000],
            ['no_kamar'=>8,'jenis_kamar'=>'B','harga'=>500000],
            ['no_kamar'=>7,'jenis_kamar'=>'C','harga'=>600000],
            ['no_kamar'=>6,'jenis_kamar'=>'D','harga'=>700000],
            ['no_kamar'=>5,'jenis_kamar'=>'E','harga'=>800000],
        ];
        
        //masukan data ke database
      DB::table('kamars')->insert($kamar);
    }
}
