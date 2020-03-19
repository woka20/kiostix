@extends('master')

@section('judul_halaman', 'Tambah penulis Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="p1" method="POST">
                    <div class="form-group">
                        <label>ID Buku</label></br>
                        <input type="text" name="id_buku" required></br>
                        <label>Nama Penulis</label></br>
                        <input type="text" name="nama_penulis" required></br>
                        <label>Gender</label></br>
                        <input type="text" name="Gender" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/penulis/form/delete">Delete Penulis</a></br>
                <a href = "/penulis/form/update">Update Penulis</a>

@endsection