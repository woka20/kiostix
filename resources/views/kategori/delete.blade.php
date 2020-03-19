@extends('master')

@section('judul_halaman', 'Hapus Buku Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="k4" method="POST">
                <!-- @csrf_field -->
                {{ method_field('DELETE') }}
                    <div class="form-group">
                        <label>id_kategori</label></br>
                        <input type="text" name="id_kategori" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Delete"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/kategori/form/update">Update Kategori<</a>
                <a href = "/kategori/form/add">Add Kategori<</a>

@endsection