<x-layout.app>
    <div class="max-w-md mx-auto bg-white p-6 rounded-2xl shadow-sm border border-pink-100/80 my-6">
        <!-- Judul Form -->
        <div class="mb-6 border-b border-gray-100 pb-4">
            <h3 class="text-xl font-bold text-gray-800 tracking-wide">Tambah Bunga Baru</h3>
            <p class="text-xs text-gray-500 mt-0.5">Masukkan detail produk bunga segar untuk ditambahkan ke katalog Bloomify.</p>
        </div>
        
        <form action="{{ route('Bloomify.store') }}" method="post" class="space-y-4">
            @csrf
            
            <!-- Input Nama Bunga -->
            <div>
                <label for="nama_bunga" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">Nama Bunga</label>
                <input type="text" id="nama_bunga" name="nama_bunga" value="{{ old('nama_bunga') }}" class="w-full bg-gray-50/50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-800 focus:outline-none focus:border-pink-400 focus:bg-white transition" placeholder="Masukkan nama bunga...">
                @error('nama_bunga') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Input Harga -->
            <div>
                <label for="harga" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">Harga (Rupiah)</label>
                <input type="number" id="harga" name="harga" value="{{ old('harga') }}" class="w-full bg-gray-50/50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-800 focus:outline-none focus:border-pink-400 focus:bg-white transition" placeholder="Contoh: 50000">
                @error('harga') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Input Stok -->
            <div>
                <label for="stok" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">Stok Awal</label>
                <input type="number" id="stok" name="stok" value="{{ old('stok') }}" class="w-full bg-gray-50/50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-800 focus:outline-none focus:border-pink-400 focus:bg-white transition" placeholder="Contoh: 10">
                @error('stok') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
            </div>

            <!-- Input Kategori -->
            <div>
                <label for="kategori" class="block text-xs font-semibold text-gray-700 uppercase tracking-wider mb-1">Kategori</label>
                <input type="text" id="kategori" name="kategori" value="{{ old('kategori') }}" class="w-full bg-gray-50/50 border border-gray-200 rounded-xl px-4 py-2.5 text-sm text-gray-800 focus:outline-none focus:border-pink-400 focus:bg-white transition" placeholder="Contoh: Buket, Bunga Meja, Papan">
                @error('kategori') <p class="text-red-500 text-xs mt-1 font-medium">{{ $message }}</p> @enderror
            </div>
            
            <!-- Grup Tombol Aksi -->
            <div class="flex items-center justify-end gap-3 pt-4 border-t border-gray-100 mt-6">
                <a href="{{ route('list') }}" class="text-gray-500 hover:text-gray-700 font-semibold text-sm transition px-4 py-2">
                    Batal
                </a>
                <button type="submit" class="bg-pink-600 hover:bg-pink-700 text-white font-semibold py-2.5 px-6 rounded-xl transition text-sm cursor-pointer shadow-sm shadow-pink-100">
                    SIMPAN
                </button>
            </div>
        </form>
    </div>
</x-layout.app>
