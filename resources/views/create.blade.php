<form action="{{ route('buku.store')}}" method="POST">

    @if ($errors->has('stock'))
    <div class="alert alert-danger">{{ $errors->first('stock') }}</div>
@endif
    @csrf
    <table>
        <tr>
            <td>
                <label for="nama_peminjam">Nama Peminjaman</label>
            </td>
            <td>
                <input type="text" name="nama_peminjam" required>
                
            </td>
        </tr>
        <tr>
            <td>
                <label for="nama_buku">Nama Buku</label>
            </td>
            <td>
                <input type="text" name="nama_buku" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="stock">jumlah buku</label>
            </td>
            <td>
              <input type="number" name="jumlah_buku" alt="NONE">
            </td>
        </tr>
        <tr>
            <td>
                <label for="tanggal_pinjam">Tanggal pinjam</label>
            </td>
            <td>
                <input type="date" name="tanggal_pinjam">
            </td>
        
        <tr>
            <td colspan="2" style="text-align: right;">
                <button type="submit">Tambah</button>
            </td>
        </tr>
    </table>
</form>
</div>