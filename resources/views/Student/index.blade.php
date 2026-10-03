<x-layout.app>
    <!-- Menampilkan pesan sukses jika ada (seperti setelah tambah/edit/hapus data) -->
    @if(session('success'))
        <div style="color: green; margin-bottom: 10px; font-weight: bold;">
            {{ session('success') }}
        </div>
    @endif

    <div style="margin-bottom: 15px;">
        <!-- Tombol untuk menuju halaman tambah bunga baru -->
        <a href="{{ route('bloomify.create') }}" style="background-color: #4CAF50; color: white; padding: 8px 12px; text-decoration: none; border-radius: 4px;">+ Tambah Bunga</a>
    </div>

    <table border="1" cellpadding="8" style="border-collapse: collapse; width: 100%;">
        <tr style="background-color: #f2f2f2;">
            <th>No</th>
            <th>Nama Bunga</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Aksi</th>
        </tr>
        @foreach ($Bungas as $bunga)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $bunga->nama_bunga }}</td>
                <td>Rp {{ number_format($bunga->harga, 0, ',', '.') }}</td>
                <td>{{ $bunga->stok }}</td>
                <td>{{ $bunga->kategori }}</td>
                <td>
                    <!-- Tombol Detail & Edit (Rutenya sudah disesuaikan dengan BloomifyController) -->
                    <a href="{{ route('bloomify.show', $bunga->id) }}">Detail</a> | 
                    <a href="{{ route('bloomify.edit', $bunga->id) }}">Edit</a> | 
                    
                    <!-- Form Hapus Data Bunga -->
                    <form action="{{ route('bloomify.destroy', $bunga->id) }}" method="post" style="display:inline;">
                        @csrf
                        @method('delete')
                        <button type="submit" onclick="return confirm('Yakin ingin menghapus bunga {{ $bunga->nama_bunga }}?')" style="color: red; background: none; border: none; cursor: pointer; padding: 0; text-decoration: underline;">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout.app>
