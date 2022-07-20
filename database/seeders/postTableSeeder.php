<?php

namespace Database\Seeders;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class postTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $sampel = [
            ['title'=> 'Tips Cepat Nikah', 'content'=>'Assalaam Studio'],
            ['title'=> 'Harus Menunda Nikah', 'content'=>'Assalaam Studio'],
            ['title'=> 'Membangun Visi Misi Keluarga', 'content'=>'Assalaam Studio']
        ];
        //masukan data ke database
        DB::table('posts')->insert($sampel);
    }
}
