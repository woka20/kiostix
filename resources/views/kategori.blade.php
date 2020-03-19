@extends('master')

@section('judul_halaman', 'Tambah penulis Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="penulis/add" method="POST">
                    <div class="form-group">
                        <label>ID Buku</label></br>
                        <input type="number" name="id_buku" required></br>
                        <label>Kategori Buku</label></br>
                        <input type="text" name="kategori_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>

@endsection