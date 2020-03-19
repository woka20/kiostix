<?php

namespace App\Http\Controllers;
use App\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function addKategori(Request $request){
        $kategori=new Kategori;
        $kategori->id_buku= $request->input('id_buku');
        $kategori->kategori_buku=$request->input('kategori_buku');
        $kategori->save();

        return response("Kategori Sukses Ditambah");


    }
    public function updateKategori(Request $request, $id){
        $kategori=Kategori::find($id);
        $kategori->id_buku= $request->input('id_buku');
        $kategori->kategori_buku=$request->input('kategori_buku');
        $kategori->save();

        return response("Kategori Sukses DiUpdate");
    }
    public function getKategori(Request $request){
        $kategori=Kategori::all();
        return response($kategori);
    }
    public function deleteKategori(Request $request, $id){
        $kategori=Kategori::find($id);
        $kategori->delete();

        return response("Kategori Sukses Dihapus");
    }
    public function addForm(Request $request){
        return view("kategori");
    }

    public function updateForm(Request $request){
        return view("kategori");
    }

    public function deleteForm(Request $request){
        return view("kategori");
    }
}
