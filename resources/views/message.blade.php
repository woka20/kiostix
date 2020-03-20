

<!DOCTYPE html>
<html>
<head>
	<title>Kiostix Engineer Test </title>
</head>
<body>
    <h1>Hasil</h1>
    <a href="/">Back To Home</a>
   
    @if ($hasils ?? [])
    <ul>
        @foreach($hasils as $hasil)
            <li><Strong>id:</strong>{{$hasil['id_buku']}}</br>
            <Strong>Judul:</strong>{{$hasil['judul_buku']}}</br>
            <Strong>Penerbit:</strong>{{$hasil['penerbit']}}</br>
            </li></br>
        @endforeach
    </ul>
    @elseif($penuliss ?? [])
    <ul>
        @foreach($penuliss as $penulis)
            <li><Strong>id:</strong>{{$penulis['id_penulis']}}</br>
            <Strong>id_buku:</strong>{{$penulis['id_buku']}}</br>
            <Strong>Nama Penulis:</strong>{{$penulis['nama_penulis']}}</br>
            <Strong>Gender:</strong>{{$penulis['Gender']}}</br>
            </li></br>
        @endforeach
    </ul>
    @elseif($kategoris ?? [])
    <ul>
        @foreach($kategoris as $kategori)
            <li><Strong>id:</strong>{{$kategori['id_kategori']}}</br>
            <Strong>id_buku:</strong>{{$kategori['id_buku']}}</br>
            <Strong>Kategori Buku:</strong>{{$kategori['kategori_buku']}}</br>
            </li></br>
        @endforeach
    </ul>
    @elseif($tables ?? [])
    <ul>
        @foreach($tables as $table)
            <li><Strong>Judul Buku:</strong>{{$table['judul_buku']}}</br>
            <Strong>Nama Penulis:</strong>{{$table['nama_penulis']}}</br>
            <Strong>Gender:</strong>{{$table['Gender']}}</br>
            <Strong>Kategori Buku:</strong>{{$table['kategori_buku']}}</br>
            </li></br>
        @endforeach
    </ul>
    @endif


</body>
</html>