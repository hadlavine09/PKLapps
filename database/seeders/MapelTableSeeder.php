<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MapelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mapel=[
            ['kode'=>'MP01','nama_mp'=>'Algoritma','sks'=>'2','semester'=>'1'],
            ['kode'=>'MP02','nama_mp'=>'Basisdata','sks'=>'3','semester'=>'1'],
            ['kode'=>'MP03','nama_mp'=>'Assembly','sks'=>'2','semester'=>'2'],
        ];
        //masukan data ke database
        DB::table('mapels')->insert($mapel);

    }
}
