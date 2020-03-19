<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JoinTableController extends Controller
{
    public function tableCoba(){
        $buku=DB::table('bukus')
                ->join('penulis','bukus.id_buku','=','penulis.id_buku')
                ->join('kategoris','bukus.id_buku','=','kategoris.id_buku')
                ->select('bukus.judul_buku', 'penulis.nama_penulis','penulis.Gender','kategoris.kategori_buku')
                ->get();
        return $buku;

    }
    

}
