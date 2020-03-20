@extends('master')

@section('judul_halaman', 'Cari Judul Berdasarkan Nama Penulis')


@section('konten')


                <div class="title m-b-md">
                <form action="kategori/v2" method="GET">
                    <div class="form-group">
                        <label>Kategori Buku</label></br>
                        <input type="text" name="kategori_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Cari"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/table/penulis">Search By Penulis</a>
@endsection