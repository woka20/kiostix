@extends('master')

@section('judul_halaman', 'Tambah penulis Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="k1" method="POST">
                    <div class="form-group">
                        <label>ID Buku</label></br>
                        <input type="text" name="id_buku" required></br>
                        <label>Kategori Buku</label></br>
                        <input type="text" name="kategori_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/kategori/form/delete">Delete Kategori<</a></br>
                <a href = "/kategori/form/update">Update Kategori<</a>

@endsection