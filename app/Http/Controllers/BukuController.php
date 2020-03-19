<?php

namespace App\Http\Controllers;

use App\Buku;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    public function addBuku(Request $request){
        $newBook=new Buku;
        $newBook->judul_buku= $request->input('judul_buku');
        $newBook->penerbit=$request->input('penerbit');
        $newBook->save();

        return response("Buku Sukses Ditambah");


    }
    public function updateBuku(Request $request){
        $id=$request->input('id_buku');
        $newBook=Buku::find($id);
        $newBook->judul_buku= $request->input('judul_buku');
        $newBook->penerbit=$request->input('penerbit');
        $newBook->save();

        return response("Buku Sukses DiUpdate");
    }
    public function getBuku(Request $request){
        $book=Buku::all();
        return response($book);
    }
    public function deleteBuku(Request $request){
        $id=$request->input('id_buku');
        $book=Buku::find($id);
        $book->delete();

        return response("Buku Sukses Dihapus");
    }

    public function addForm(Request $request){
        return view("buku.buku");
    }

    public function updateForm(Request $request){
        return view("buku.update");
    }

    public function deleteForm(Request $request){
        return view("buku.delete");
    }
}
