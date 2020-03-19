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
        $newPenulis->Gender=$request->input('Gender');
        $newPenulis->save();

        return response("Penulis Sukses Ditambah");


    }
    public function updatePenulis(Request $request, $id){
        $penulis=Penulis::find($id);
        $penulis->id_buku= $request->input('id_buku');
        $penulis->nama_penulis=$request->input('nama_penulis');
        $penulis->Gender=$request->input('Gender');
        $penulis->save();

        return response("Penulis Sukses DiUpdate");
    }
    public function getPenulis(Request $request){
        $penulis=Penulis::all();
        return response($penulis);
    }
    public function deletePenulis(Request $request, $id){
        $penulis=Penulis::find($id);
        $penulis->delete();

        return response("Penulis Sukses Dihapus");
    }
    public function addForm(Request $request){
        return view("penulis");
    }

    public function updateForm(Request $request){
        return view("penulis");
    }

    public function deleteForm(Request $request){
        return view("penulis");
    }

}
