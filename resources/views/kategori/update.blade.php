@extends('master')

@section('judul_halaman', 'Update Buku Baru')

@section('konten')
<div class="title m-b-md">
                <form action="k2" method="POST">
                {{ method_field('PUT') }}
                    <div class="form-group">
                        <label>ID Kategori</label></br>
                        <input type="text" name="id_kategori" required></br>
                        <label>Kategori Buku</label></br>
                        <input type="text" name="KATEGORI_BUKU" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Update"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/kategori/form/delete">Delete Kategori</a></br>
                <a href = "/kategori/form/add">Add Kategori<</a>

@endsection