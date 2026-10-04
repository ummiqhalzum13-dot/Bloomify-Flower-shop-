<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        
        <!-- Judul Halaman -->
        <div style="margin-bottom: 24px; border-bottom: 1px solid #f3f4f6; padding-bottom: 12px;">
            <h3 style="margin: 0; font-size: 18px; color: #1f2937; font-weight: 700;">Tambah Supplier Baru</h3>
            <p style="margin: 4px 0 0 0; font-size: 12px; color: #9ca3af;">Masukkan data mitra atau pemasok tanaman segar baru untuk Bloomify.</p>
        </div>
        
        <form action="{{ route('Supplier.store') }}" method="post" style="display: flex; flex-direction: column; gap: 16px;">
            @csrf
            
            <!-- Input Nama Supplier -->
            <div>
                <label for="nama_supplier" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Nama Supplier</label>
                <input type="text" id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier') }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;" placeholder="Contoh: CV. Flora Abadi">
                @error('nama_supplier') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Tanaman Pasokan -->
            <div>
                <label for="nama_tanaman_pasokan" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Tanaman Pasokan</label>
                <input type="text" id="nama_tanaman_pasokan" name="nama_tanaman_pasokan" value="{{ old('nama_tanaman_pasokan') }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;" placeholder="Contoh: Mawar Merah, Anggrek Bulan">
                @error('nama_tanaman_pasokan') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>

            <!-- Input Kontak Supplier -->
            <div>
                <label for="kontak_supplier" style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Kontak Supplier</label>
                <input type="text" id="kontak_supplier" name="kontak_supplier" value="{{ old('kontak_supplier') }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;" placeholder="Contoh: 081234567890">
                @error('kontak_supplier') <p style="color: #ef4444; font-size: 12px; margin: 4px 0 0 0;">{{ $message }}</p> @enderror
            </div>
            
            <!-- Tombol Aksi -->
            <div style="display: flex; justify-content: flex-end; align-items: center; gap: 12px; margin-top: 12px; border-top: 1px solid #f3f4f6; padding-top: 16px;">
                <a href="{{ route('Supplier.index') }}" style="color: #6b7280; text-decoration: none; font-size: 14px; font-weight: 600;">Batal</a>
                <button type="submit" style="background: #7c3aed; color: #ffffff; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; font-weight: 600; cursor: pointer;">SIMPAN</button>
            </div>
        </form>
    </div>
</x-layout.app>