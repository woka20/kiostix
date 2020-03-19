@extends('master')

@section('judul_halaman', 'Hapus Buku Baru')


@section('konten')


                <div class="title m-b-md">
                <form action="p4" method="POST">
                <!-- @csrf_field -->
                {{ method_field('DELETE') }}
                    <div class="form-group">
                        <label>id_penulis</label></br>
                        <input type="text" name="id_penulis" required></br>
                        <input type="submit" class="btn-primary" name="submit" value="Delete"> 
                    </div>
                </form>
                </div>
                </br>
                <a href = "/penulis/form/update">Update Penulis</a>
                <a href = "/penulis/form/add">Add Penulis</a>

@endsection