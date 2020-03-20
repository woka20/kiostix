<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class JoinTableController extends Controller
{
    public function tablePenulis(Request $request){
        $nama_penulis=$request->input('nama_penulis');
        $buku=DB::table('bukus')
                ->join('penulis','bukus.id_buku','=','penulis.id_buku')
                ->join('kategoris','bukus.id_buku','=','kategoris.id_buku')
                ->select('bukus.judul_buku', 'penulis.nama_penulis','penulis.Gender','kategoris.kategori_buku')
                ->where('penulis.nama_penulis','=', $nama_penulis)
                ->get();
        
        
        $buku1=json_decode($buku,true);
        
        $result=[];
        for($i=0;$i<count($buku1); $i++){
            $result[]=$buku1[$i];
        }
        //    return response($result);
        return view('message', ['tables'=>$result]);

    }
    public function tableKategori(Request $request){
        $kategori_buku=$request->input('kategori_buku');
        $buku=DB::table('bukus')
                ->join('penulis','bukus.id_buku','=','penulis.id_buku')
                ->join('kategoris','bukus.id_buku','=','kategoris.id_buku')
                ->select('bukus.judul_buku', 'penulis.nama_penulis','penulis.Gender','kategoris.kategori_buku')
                ->where('kategoris.kategori_buku','=', $kategori_buku)
                ->get();
        
                $buku1=json_decode($buku,true);
        $result=[];
        for($i=0;$i<count($buku1); $i++){
            $result[]=$buku1[$i];
        }
                
        return view('message', ['tables'=>$result]);

    }
    public function getPenulis(Request $request){
        return view("table.penulis");
    }

    public function getKategori(Request $request){
        return view("table.kategori");
    }



}
