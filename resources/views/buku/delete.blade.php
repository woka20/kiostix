@extends('master')

@section('judul_halaman', 'Hapus Buku Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="b4" method="POST">
                <!-- @csrf_field -->
                {{ method_field('DELETE') }}
                    <div class="form-group">
                        <label>id_buku</label></br>
                        <input type="text" name="id_buku" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Delete"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/buku/form/update">Update Buku</a>
                <a href = "/buku/form/add">Add Buku</a>

@endsection