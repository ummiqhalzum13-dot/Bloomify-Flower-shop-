<x-layout.app>
    <h3>Detail Informasi Bunga</h3>

    <ul>
        <li><strong>Nama Bunga:</strong> {{ $bunga->nama_bunga }}</li>
        <li><strong>Harga:</strong> Rp {{ number_format($bunga->harga, 0, ',', '.') }}</li>
        <li><strong>Stok Tersedia:</strong> {{ $bunga->stok }}</li>
        <li><strong>Kategori:</strong> {{ $bunga->kategori }}</li>
    </ul>

    <div style="margin-top: 15px;">
        <a href="{{ route('list') }}" style="text-decoration: none; color: gray;">← Kembali ke Katalog</a>
    </div>
</x-layout.app>
