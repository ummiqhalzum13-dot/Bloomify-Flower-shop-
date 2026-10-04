<x-layout.app>
    <div style="background-color: #ffffff; padding: 25px; border-radius: 16px; border: 1px solid #e9dcf5; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
        
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <div>
                <h1 style="margin: 0; font-size: 20px; font-weight: bold; color: #1f2937;">Data Transaksi Pesanan</h1>
                <p style="margin: 4px 0 0 0; font-size: 12px; color: #9ca3af;">Kelola riwayat nota pembelian offline Toko Bloomify.</p>
            </div>
            <a href="{{ route('Pesanan.create') }}" style="background-color: #ede9fe; color: #6d28d9; border: 1px solid #ddd6fe; padding: 10px 16px; text-decoration: none; border-radius: 10px; font-weight: bold; font-size: 13px;">
                + Tambah Pesanan
            </a>
        </div>

        <div style="overflow: hidden; border: 1px solid #f3f4f6; border-radius: 12px;">
            <table style="width: 100%; border-collapse: collapse; text-align: left; font-size: 14px; color: #4b5563;">
                <thead style="background-color: #f3e8ff; color: #581c87; font-weight: bold; font-size: 12px; text-transform: uppercase; border-bottom: 1px solid #e9dcf5;">
                    <tr>
                        <th style="padding: 14px 20px; text-align: center; width: 50px;">No</th>
                        <th style="padding: 14px 20px;">No Nota</th>
                        <th style="padding: 14px 20px;">Bunga Dipesan</th>
                        <th style="padding: 14px 20px;">Jumlah</th>
                        <th style="padding: 14px 20px;">Total Bayar</th>
                        <th style="padding: 14px 20px; text-align: center; width: 200px;">Aksi</th>
                    </tr>
                </thead>
                <tbody style="background-color: #ffffff;">
                    @forelse ($pesanans as $p)
                        <tr style="border-bottom: 1px solid #f3f4f6;">
                            <td style="padding: 14px 20px; text-align: center; color: #9ca3af; font-weight: bold;">{{ $loop->iteration }}</td>
                            <td style="padding: 14px 20px; font-weight: bold; color: #7c3aed;">{{ $p->nota_pesanan }}</td>
                            <td style="padding: 14px 20px; color: #1f2937; font-weight: 500;">{{ $p->nama_bunga_dipesan }}</td>
                            <td style="padding: 14px 20px; color: #4b5563;">{{ $p->jumlah_beli }} pcs</td>
                            <td style="padding: 14px 20px; color: #10b981; font-weight: bold;">Rp {{ number_format($p->total_bayar, 0, ',', '.') }}</td>
                            <td style="padding: 14px 20px; text-align: center;">
                                <div style="display: flex; justify-content: center; gap: 10px; font-size: 13px; font-weight: bold;">
                                    <a href="{{ route('Pesanan.show', $p->id) }}" style="text-decoration: none; color: #0284c7;">Detail</a>
                                    <span style="color: #e5e7eb;">|</span>
                                    <a href="{{ route('Pesanan.edit', $p->id) }}" style="text-decoration: none; color: #d97706;">Edit</a>
                                    <span style="color: #e5e7eb;">|</span>
                                    
                                    <form action="{{ route('Pesanan.destroy', $p->id) }}" method="post" style="display: inline; margin: 0;">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" onclick="return confirm('Yakin menghapus pesanan {{ $p->nota_pesanan }}?')" style="color: #dc2626; background: none; border: none; cursor: pointer; padding: 0; font-size: 13px; font-weight: bold;">
                                            Hapus
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" style="padding: 20px; text-align: center; color: #9ca3af; font-style: italic;">Belum ada data transaksi pesanan.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-layout.app>
