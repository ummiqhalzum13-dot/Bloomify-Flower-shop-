<x-layout.app>
    <div style="max-width: 500px; margin: 40px auto; padding: 30px; background: #ffffff; border: 1px solid #e9dcf5; border-radius: 16px; font-family: sans-serif;">
        <h3 style="margin-top: 0; color: #581c87;">Detail Transaksi Pesanan</h3>
        <ul style="list-style: none; padding: 0; line-height: 2;">
            <li><strong>No Nota:</strong> {{ $pesanan->nota_pesanan }}</li>
            <li><strong>Bunga Dipesan:</strong> {{ $pesanan->nama_bunga_dipesan }}</li>
            <li><strong>Jumlah Beli:</strong> {{ $pesanan->jumlah_beli }} pcs</li>
            <li><strong>Total Bayar:</strong> Rp {{ number_format($pesanan->total_bayar, 0, ',', '.') }}</li>
        </ul>
        <div style="margin-top: 20px; border-top: 1px solid #f3f4f6; padding-top: 15px;">
            <a href="{{ route('Pesanan.index') }}" style="text-decoration: none; color: #7c3aed; font-weight: bold; font-size: 14px;">← Kembali</a>
        </div>
    </div>
</x-layout.app>
