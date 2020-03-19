<?php

use Illuminate\Database\Seeder;

class BukuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Buku::create([
            'judul_buku'=>"Laskar Pelangi",
            'penerbit'=> 'Mizan'
        ],[
            'judul_buku'=>"Ayat-Ayat Cinta",
            'penerbit'=> 'Gramedia'
        ]);
    }
}
