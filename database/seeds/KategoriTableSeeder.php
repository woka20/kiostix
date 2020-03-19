<?php

use Illuminate\Database\Seeder;

class KategoriTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Kategori::create([
            'id_buku'=>1,
            'nama_kategori'=>"Cerita Nyata"
        ], [
            'id_buku'=>2,
            'nama_kategori'=>"Romansa"]
    );
  }

}
