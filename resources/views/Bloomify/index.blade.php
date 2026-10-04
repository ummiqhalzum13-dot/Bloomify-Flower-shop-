<x-layout.app>
    <div style="background-color: #ffffff; padding: 25px; border-radius: 20px; border: 1px solid #e9dcf5; box-shadow: 0 4px 12px rgba(124, 58, 237, 0.03); font-family: sans-serif;">
        
        <!-- Bagian Judul Halaman & Tombol Tambah Ala Daftar Pelanggan -->
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 25px;">
            <div>
                <h1 style="margin: 0; font-size: 22px; font-weight: bold; color: #1f2937;">Daftar Produk Bloomify</h1>
                <p style="margin: 4px 0 0 0; font-size: 13px; color: #9ca3af;">Kelola katalog jualan dan stok bunga segar Anda.</p>
            </div>
            <!-- Tombol Tambah Bergaya Melengkung Cantik -->
            <a href="{{ route('Bloomify.create') }}" style="background-color: #ede9fe; color: #6d28d9; border: none; padding: 10px 20px; text-decoration: none; border-radius: 12px; font-weight: bold; font-size: 13px; display: inline-flex; align-items: center; transition: 0.2s;">
                + Tambah Bunga
            </a>
        </div>

        <!-- Tabel Elegan Tanpa Garis Kaku -->
        <div style="overflow-x: auto;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; color: #4b5563;">
                <thead style="background-color: #f3e8ff; color: #581c87; font-weight: bold; font-size: 12px; text-transform: uppercase;">
                    <tr>
                        <th style="padding: 16px 20px; text-align: center; width: 60px; border-top-left-radius: 12px; border-bottom-left-radius: 12px;">No</th>
                        <th style="padding: 16px 20px;">Nama Bunga</th>
                        <th style="padding: 16px 20px;">Harga</th>
                        <th style="padding: 16px 20px;">Stok</th>
                        <th style="padding: 16px 20px;">Kategori</th>
                        <th style="padding: 16px 20px; text-align: center; width: 200px; border-top-right-radius: 12px; border-bottom-right-radius: 12px;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="background-color: #ffffff;">
                    @forelse ($Bungas as $Bunga)
                        <tr style="border-bottom: 1px solid #f3f4f6;">
                            <td style="padding: 18px 20px; text-align: center; color: #9ca3af; font-weight: 500;">{{ $loop->iteration }}</td>
                            <td style="padding: 18px 20px; font-weight: bold; color: #1f2937;">{{ $Bunga->nama_bunga }}</td>
                            <td style="padding: 18px 20px; color: #4b5563;">Rp {{ number_format($Bunga->harga, 0, ',', '.') }}</td>
                            <td style="padding: 18px 20px; color: #4b5563;">{{ $Bunga->stok }} pcs</td>
                            <td style="padding: 18px 20px; color: #4b5563; text-transform: capitalize;">{{ $Bunga->kategori }}</td>
                            <td style="padding: 18px 20px; text-align: center;">
                                <div style="display: flex; justify-content: center; align-items: center; gap: 12px; font-size: 13px; font-weight: bold;">
                                    <a href="{{ route('Bloomify.show', $Bunga->id) }}" style="text-decoration: none; color: #0284c7;">Detail</a>
                                    <span style="color: #e5e7eb; font-weight: normal;">|</span>
                                    <a href="{{ route('Bloomify.edit', $Bunga->id) }}" style="text-decoration: none; color: #d97706;">Edit</a>
                                    <span style="color: #e5e7eb; font-weight: normal;">|</span>
                                    
                                    <form action="{{ route('Bloomify.destroy', $Bunga->id) }}" method="post" style="display: inline; margin: 0;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin ingin menghapus bunga {{ $Bunga->nama_bunga }}?')" style="color: #dc2626; background: none; border: none; cursor: pointer; padding: 0; font-size: 13px; font-weight: bold; font-family: sans-serif;">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="padding: 30px; text-align: center; color: #9ca3af; font-style: italic;">Belum ada data produk bunga.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

    </div>
</x-layout.app>
