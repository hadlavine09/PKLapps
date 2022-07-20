<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
             $this->call([PostTableSeeder::class]);
            $this->call([SiswaTableSeeder::class]);
            $this->call([PesertaTableSeeder::class]);
            $this->call([MapelTableSeeder::class]);
            $this->call([pengunjung::class]);
            $this->call([karyawan::class]);
             $this->call([transaksi::class]);
            $this->call([detail_transaksi::class]);
            $this->call([kamar::class]);
    }
}
