@extends('master')

@section('judul_halaman', 'Cari Judul dan Penulis Berdasarkan Kategori Buku')


@section('konten')


                <div class="title m-b-md">
                <form action="penulis/v1" method="GET">
                    <div class="form-group">
                        <label>Nama Penulis</label></br>
                        <input type="text" name="nama_penulis" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Cari"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/table/kategori">Search By Kategori</a>
@endsection