<?php

namespace App\Http\Controllers;

use App\Penulis;
use Illuminate\Http\Request;

class PenulisController extends Controller
{
    public function addPenulis(Request $request){
        $newPenulis=new Penulis;
        $newPenulis->id_buku= $request->input('id_buku');
        $newPenulis->nama_penulis=$request->input('nama_penulis');
        $newPenulis->save();

        return response("Penulis Sukses Ditambah");


    }
    public function updateBuku(Request $request, $id){
        $book=Buku::find($id);
        $book->judul_buku= $request->input('judulbuku');
        $book->penerbit=$request->input('penerbit');
        $book->save();

        return response("Buku Sukses DiUpdate");
    }
    public function getBuku(Request $request){
        $book=Buku::all();
        return response($book);
    }
    public function deleteBuku(Request $request, $id){
        $book=Buku::find($id);
        $book->delete();

        return response("Buku Sukses Dihapus");
    }
}
}
