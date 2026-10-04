<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        
        <!-- Judul Halaman -->
        <h3 style="margin-top: 0; margin-bottom: 20px; color: #581c87; border-b: 1px solid #f3f4f6; padding-bottom: 12px; font-size: 18px; font-weight: 700;">Detail Informasi Bunga</h3>
        
        <!-- Daftar Informasi Detail Produk -->
        <ul style="list-style: none; padding: 0; line-height: 2.2; font-size: 14px; color: #4b5563;">
            <li style="border-bottom: 1px solid #f9fafb; padding: 4px 0;">
                <strong style="color: #1f2937;">Nama Bunga:</strong> {{ $Bunga->nama_bunga }}
            </li>
            <li style="border-bottom: 1px solid #f9fafb; padding: 4px 0;">
                <strong style="color: #1f2937;">Harga:</strong> Rp {{ number_format($Bunga->harga, 0, ',', '.') }}
            </li>
            <li style="border-bottom: 1px solid #f9fafb; padding: 4px 0;">
                <strong style="color: #1f2937;">Stok Tersedia:</strong> {{ $Bunga->stok }} pcs
            </li>
            <li style="border-bottom: 1px solid #f9fafb; padding: 4px 0;">
                <strong style="color: #1f2937;">Kategori:</strong> {{ $Bunga->kategori }}
            </li>
        </ul>
        
        <!-- Tombol Kembali Seragam -->
        <div style="margin-top: 24px; border-top: 1px solid #f3f4f6; padding-top: 16px;">
            <a href="{{ route('list') }}" style="text-decoration: none; color: #7c3aed; font-weight: bold; font-size: 14px;">← Kembali ke Katalog</a>
        </div>
    </div>
</x-layout.app>
