<?php

use Illuminate\Database\Seeder;

class PenulisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Penulis::create([
            'id_buku'=>1,
            'nama_penulis'=>"Andrea Hirata",
            'Gender'=> 'Pria'
        ],[
            'id_buku'=>2,
            'nama_penulis'=>"Habiburahman Al Shirazy",
            'Gender'=> 'Pria'
        ]);
    }
}
