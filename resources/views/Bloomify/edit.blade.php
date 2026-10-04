<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        
        <!-- Judul Halaman -->
        <div style="margin-bottom: 24px; border-bottom: 1px solid #f3f4f6; padding-bottom: 12px;">
            <h3 style="margin: 0; font-size: 18px; color: #1f2937; font-weight: 700;">Halaman Ubah Bunga</h3>
            <p style="margin: 4px 0 0 0; font-size: 12px; color: #9ca3af;">Perbarui informasi detail produk atau sesuaikan jumlah stok katalog Anda.</p>
        </div>
        
        <form action="{{ route('Bloomify.update', $Bunga->id) }}" method="post" style="display: flex; flex-direction: column; gap: 16px;">
            @csrf
            @method("PUT")
            
            <!-- Input Nama Bunga -->
            <div>
                <label for="nama_bunga" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Nama Bunga</label>
                <input type="text" id="nama_bunga" name="nama_bunga" value="{{ old('nama_bunga', $Bunga->nama_bunga) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
                @error('nama_bunga') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Harga -->
            <div>
                <label for="harga" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Harga</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga', $Bunga->harga) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
                @error('harga') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Stok -->
            <div>
                <label for="stok" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Stok</label>
                <input type="number" id="stok" name="stok" value="{{ old('stok', $Bunga->stok) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
                @error('stok') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Kategori -->
            <div>
                <label for="kategori" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Kategori</label>
                <input type="text" id="kategori" name="kategori" value="{{ old('kategori', $Bunga->kategori) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
                @error('kategori') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>
            
            <!-- Tombol Aksi -->
            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 12px; margin-top: 12px; border-top: 1px solid #f3f4f6; padding-top: 16px;">
                <a href="{{ route('list') }}" style="color: #6b7280; text-decoration: none; font-size: 14px; font-weight: 600; padding: 10px 0;">Batal</a>
                <button type="submit" style="background: #7c3aed; color: #ffffff; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; font-weight: 600; cursor: pointer;">UBAH</button>
            </div>
        </form>
    </div>
</x-layout.app>
