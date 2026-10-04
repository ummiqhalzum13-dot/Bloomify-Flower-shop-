<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif;">
        <h3 style="margin-top: 0; color: #581c87;">Detail Informasi Pelanggan</h3>
        <ul style="list-style: none; padding: 0; line-height: 2;">
            <li><strong>Nama:</strong> {{ $pelanggan->nama_pelanggan }}</li>
            <li><strong>Telepon:</strong> {{ $pelanggan->nomor_telepon }}</li>
            <li><strong>Alamat:</strong> {{ $pelanggan->alamat }}</li>
        </ul>
        <div style="margin-top: 20px; border-top: 1px solid #f3f4f6; padding-top: 15px;">
            <a href="{{ route('Pelanggan.index') }}" style="text-decoration: none; color: #7c3aed; font-weight: bold; font-size: 14px;">← Kembali</a>
        </div>
    </div>
</x-layout.app>
