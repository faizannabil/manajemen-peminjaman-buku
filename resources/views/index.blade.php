<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    
</head>
<body>
    <a href="{{route('buku.create')}}">Tambah</a>
    <table>
        <tr>
            <th>Nama peminjam</th>
            <th>nama Buku</th>
            <th>Jumlah buku</th>
            <th>Tanggal Pinjam</th>
            <th>Tanggal kembali</th>
            <th>Denda</th>
            <th>Aksi</th>
        </tr>
        @foreach($buku as $book)
        <tr>
            <td>{{$book->nama_peminjam}}</td>
            <td>{{$book->nama_buku}}</td>
            <td>{{$book->jumlah_buku}}</td>
            <td>{{$book->tanggal_pinjam}}</td>
            <td>{{$book->tanggal_kembali}}</td>
            <td>Rp.{{$book->denda}}</td>
            
            <td>
                <a href="{{route('buku.edit', $book->id)}}">Edit</a>
                <form action="{{route('buku.destroy', $book->id)}}" method="post" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
  