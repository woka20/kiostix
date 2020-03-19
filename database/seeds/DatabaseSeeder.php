<?php

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
        \App\Buku::create([
            'judul_buku'=>"Laskar Pelangi",
            'penerbit'=> 'Mizan'
        ]);
        \App\Buku::create([
            'judul_buku'=>"Ayat-Ayat Cinta",
            'penerbit'=> 'Gramedia'
        ]);

        \App\Penulis::create([
            'id_buku'=>1,
            'nama_penulis'=>"Andrea Hirata",
            'Gender'=> 'Pria'
        ]);
        
        \App\Penulis::create([
            'id_buku'=>2,
            'nama_penulis'=>"Habiburahman Al Shirazy",
            'Gender'=> 'Pria'
        ]);
        \App\Kategori::create([
            'id_buku'=>1,
            'kategori_buku'=>"Cerita Nyata"
        ]);
        \App\Kategori::create([
            'id_buku'=>2,
            'kategori_buku'=>"Romansa"]
       );
    }
}
