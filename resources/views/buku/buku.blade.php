@extends('master')

@section('judul_halaman', 'Tambah Buku Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="buku/add" method="POST">
                    <div class="form-group">
                        <label>Judul Buku</label></br>
                        <input type="text" name="judul_buku" required></br>
                        <label>Penerbit</label></br>
                        <input type="text" name="penerbit" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Tambah"> 
                    </div>
                </form>
                </div>

@endsection