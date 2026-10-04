<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bloomify Flower Shop</title>

    <!-- Mengatur layout agar otomatis rapi saat dibuka di HP (Responsif) -->
    <style>
        @media (max-width: 600px) {
            .nav-container {
                flex-direction: column !important;
                gap: 15px !important;
                text-align: center !important;
            }
            .nav-menu {
                flex-wrap: wrap !important;
                justify-content: center !important;
                gap: 15px !important;
            }
            .table-responsive {
                overflow-x: auto !important;
                display: block !important;
            }
            .form-box {
                margin: 15px !important;
                padding: 20px !important;
            }
        }
    </style>
</head>
<body style="background-color: #f5f0fa; margin: 0; font-family: sans-serif; color: #333;">

    <!-- Navbar Manual Responsif Bertema Ungu Lembut -->
    <nav style="background-color: #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.05); border-bottom: 1px solid #e9dcf5; position: sticky; top: 0; z-index: 50;">
        <div class="nav-container" style="max-width: 1100px; margin: 0 auto; padding: 15px 20px; display: flex; justify-content: space-between; align-items: center;">
            
            <!-- Logo Toko -->
            <div style="font-size: 20px; font-weight: bold; color: #c2176f; display: flex; align-items: center; gap: 5px;">
                <span>🌸</span> Bloomify
            </div>
            
            <!-- Menu 4 Tabel Berjejer Rapi ke Samping (Horizontal) -->
            <ul class="nav-menu" style="list-style: none; margin: 0; padding: 0; display: flex; gap: 25px; font-weight: 600; font-size: 14px;">
                <a href="{{ route('Bloomify.about') }}" style="text-decoration: none; color: #d078f3;">Tentang</a></li>
                <li><a href="{{ route('list') }}" style="text-decoration: none; color: #d078f3">Katalog Bunga</a></li>
                <li><a href="{{ route('Pelanggan.index') }}" style="text-decoration: none; color: #d078f3">Pelanggan</a></li>
                <li><a href="{{ route('Supplier.index') }}" style="text-decoration: none; color: #d078f3">Supplier</a></li>
                <li><a href="{{ route('Pesanan.index') }}" style="text-decoration: none; color: #d078f3">Pesanan</a></li>
            </ul>

        </div>
    </nav>

    <!-- Tempat Masuknya Isi Konten Halaman Otomatis -->
    <main style="max-width: 1100px; margin: 30px auto; padding: 0 20px;">
        @if (session("success"))
            <div style="background-color: #d1fae5; border: 1px solid #10b981; color: #065f46; padding: 12px; border-radius: 8px; margin-bottom: 20px; font-weight: bold;">
                {{ session("success") }}
            </div>
        @endif
        
        <!-- JANGAN DIHAPUS: Variabel slot ini adalah penampung konten dinamis -->
        {{ $slot }}
    </main>

</body>
</html>
