<form action="{{ route('buku.update',$buku->id)}}" method="POST">

    @if ($errors->has('stock'))
    <div class="alert alert-danger">{{ $errors->first('stock') }}</div>
@endif
    @csrf
    @method('PUT');
    <table>
        <tr>
            <td>
                <label for="nama_peminjam">Nama Peminjaman</label>
            </td>
            <td>
                <input type="text" name="nama_peminjam" required value="{{$buku->nama_peminjam}}">
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama_buku">Nama Buku</label>
            </td>
            <td>
                <input type="text" name="nama_buku" required value="{{$buku->nama_buku}}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="stock">jumlah buku</label>
            </td>
            <td>
              <input type="number" name="jumlah_buku" alt="NONE" value="{{$buku->jumlah_buku}}">
            </td>
        </tr>
        <tr>
            <td>
                <label for="tanggal_pinjam">Tanggal pinjam</label>
            </td>
            <td>
                <input type="date" name="tanggal_pinjam" value="{{$buku->tanggal_pinjam}}" readonly>
            </td>
        
        <tr>
        <tr>
            <td>
                <label for="tanggal_pinjam">Tanggal kembali</label>
            </td>
            <td>
                <input type="date" name="tanggal_kembali" value="{{$buku->tanggal_kembali}}">
            </td>
        </tr>
        
        </td>
        <tr>
            <td>
                <label for="denda">denda</label>
            </td>
            <td>
                <input type="text" name="denda" required value="{{$buku->denda}}">
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right;">
                <button type="submit">update</button>
            </td>
        </tr>
    </table>
</form>
</div>