<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        
        <!-- Judul Halaman -->
        <div style="margin-bottom: 24px; border-bottom: 1px solid #f3f4f6; padding-bottom: 12px;">
            <h3 style="margin: 0; font-size: 18px; color: #1f2937; font-weight: 700;">Tambah Transaksi Pesanan</h3>
            <p style="margin: 4px 0 0 0; font-size: 12px; color: #9ca3af;">Catat nota transaksi pembelian offline baru untuk Toko Bloomify.</p>
        </div>
        
        <form action="{{ route('Pesanan.store') }}" method="post" style="display: flex; flex-direction: column; gap: 16px;">
            @csrf
            
            <!-- Input Nomor Nota -->
            <div>
                <label for="nota_pesanan" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Nomor Nota</label>
                <input type="text" id="nota_pesanan" name="nota_pesanan" value="{{ old('nota_pesanan', 'INV-' . date('YmdHis')) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
                @error('nota_pesanan') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Nama Bunga Dipesan -->
            <div>
                <label for="nama_bunga_dipesan" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Bunga Yang Dipesan</label>
                <input type="text" id="nama_bunga_dipesan" name="nama_bunga_dipesan" value="{{ old('nama_bunga_dipesan') }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;" placeholder="Contoh: Buket Mawar Merah">
                @error('nama_bunga_dipesan') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Jumlah Beli -->
            <div>
                <label for="jumlah_beli" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Jumlah Beli (Pcs)</label>
                <input type="number" id="jumlah_beli" name="jumlah_beli" value="{{ old('jumlah_beli') }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;" placeholder="Contoh: 2">
                @error('jumlah_beli') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Total Bayar -->
            <div>
                <label for="total_bayar" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Total Bayar (Rp)</label>
                <input type="number" id="total_bayar" name="total_bayar" value="{{ old('total_bayar') }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;" placeholder="Contoh: 100000">
                @error('total_bayar') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>
            
            <!-- Tombol Aksi -->
            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 12px; margin-top: 12px; border-top: 1px solid #f3f4f6; padding-top: 16px;">
                <a href="{{ route('Pesanan.index') }}" style="color: #6b7280; text-decoration: none; font-size: 14px; font-weight: 600;">Batal</a>
                <button type="submit" style="background: #7c3aed; color: #ffffff; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; font-weight: 600; cursor: pointer;">SIMPAN</button>
            </div>
        </form>
    </div>
</x-layout.app>
