<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        <div style="margin-bottom: 24px; border-bottom: 1px solid #f3f4f6; padding-bottom: 12px;">
            <h3 style="margin: 0; font-size: 18px; color: #1f2937; font-weight: 700;">Ubah Data Supplier</h3>
        </div>
        <form action="{{ route('Supplier.update', $supplier->id) }}" method="post" style="display: flex; flex-direction: column; gap: 16px;">
            @csrf
            @method('PUT')
            <div>
                <label style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Nama Supplier</label>
                <input type="text" name="nama_supplier" value="{{ old('nama_supplier', $supplier->nama_supplier) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
            </div>
            <div>
                <label style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Tanaman Pasokan</label>
                <input type="text" name="nama_tanaman_pasokan" value="{{ old('nama_tanaman_pasokan', $supplier->nama_tanaman_pasokan) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
            </div>
            <div>
                <label style="display: block; font-size: 12px; font-weight: 600; color: #4b5563; text-transform: uppercase; margin-bottom: 6px;">Kontak Supplier</label>
                <input type="text" name="kontak_supplier" value="{{ old('kontak_supplier', $supplier->kontak_supplier) }}" style="width: 100%; border: 1px solid #d1d5db; border-radius: 8px; padding: 10px 14px; font-size: 14px; box-sizing: border-box; background: #f9fafb;">
            </div>
            <div style="display: flex; justify-content: flex-end; gap: 12px; margin-top: 12px; border-top: 1px solid #f3f4f6; padding-top: 16px;">
                <a href="{{ route('Supplier.index') }}" style="color: #6b7280; text-decoration: none; font-size: 14px; font-weight: 600; padding: 10px 0;">Batal</a>
                <button type="submit" style="background: #7c3aed; color: #ffffff; border: none; border-radius: 8px; padding: 10px 20px; font-size: 14px; font-weight: 600; cursor: pointer;">UBAH</button>
            </div>
        </form>
    </div>
</x-layout.app>
