<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        <div style="margin-bottom: 24px; border-bottom: 1px solid #f3f4f6; padding-bottom: 12px;">
            <h3 style="margin: 0; font-size: 18px; color: #1f2937; font-weight: 700;">Ubah Data Pelanggan</h3>
        </div>
        <form action="{{ route('Pelanggan.update', $pelanggan->id) }}" method="post" style="display: flex; flex-direction: column; gap: 16px;">
            @csrf
            @method('PUT')
            <div>
                <label style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Nama Pelanggan</label>
                <input type="text" name="nama_pelanggan" value="{{ old('nama_pelanggan', $pelanggan->nama_pelanggan) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
            </div>
            <div>
                <label style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Nomor Telepon</label>
                <input type="text" name="nomor_telepon" value="{{ old('nomor_telepon', $pelanggan->nomor_telepon) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
            </div>
            <div>
                <label style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Alamat</label>
                <textarea name="alamat" rows="3" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb; font-family: sans-serif;">{{ old('alamat', $pelanggan->alamat) }}</textarea>
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 12px; border-top: 1px solid #f3f4f6; padding-top: 16px;">
                <a href="{{ route('Pelanggan.index') }}" style="color: #6b7280; text-decoration: none; font-size: 14px; font-weight: 600; padding: 10px 0;">Batal</a>
                <button type="submit" style="background: #7c3aed; color: #ffffff; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; font-weight: 600; cursor: pointer;">UBAH</button>
            </div>
        </form>
    </div>
</x-layout.app>
