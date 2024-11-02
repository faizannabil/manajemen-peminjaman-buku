<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        /* Basic reset for margins and padding */
        body {
          margin: 0;
          padding: 0;
        }

        /* Style for the link to add new entries */
        a {
          text-decoration: none;
          color: #007BFF;
          font-weight: bold;
          margin: 10px;
          display: inline-block;
        }

        a:hover {
          text-decoration: underline;
        }

        /* Style for the table */
        table {
          width: 100%;
          border-collapse: collapse;
          margin: 20px 0;
        }

        /* Style for table headers */
        th {
          background-color: #f2f2f2;
          border: 2px solid #ddd;
          padding: 10px;
        }

        /* Style for table cells */
        td {
          border: 1px solid #ddd;
          padding: 8px;
        }

        /* Style for table rows */
        tr:nth-child(even) {
          background-color: #f9f9f9;
        }

        tr:hover {
          background-color: #f1f1f1;
        }

        /* Style for buttons inside the table */
        button {
          background-color: #dc3545;
          color: white;
          border: none;
          padding: 5px 10px;
          cursor: pointer;
        }

        button:hover {
          background-color: #c82333;
        }

        /* Center text in cells */
        .text-center {
          text-align: center;
        }
    </style>
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
  