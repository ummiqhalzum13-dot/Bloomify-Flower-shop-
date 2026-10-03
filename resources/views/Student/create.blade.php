<x-layout.app>
    <h3>Halaman Tambah Bunga</h3>
    <form action="{{ route('bloomify.store') }}" method="post">
        @csrf
        <div>
            <label for="nama_bunga">Nama Bunga: </label>
            <input type="text" id="nama_bunga" name="nama_bunga" value="{{ old('nama_bunga') }}">
            @error('nama_bunga') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="harga">Harga: </label>
            <input type="number" id="harga" name="harga" value="{{ old('harga') }}">
            @error('harga') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="stok">Stok: </label>
            <input type="number" id="stok" name="stok" value="{{ old('stok') }}">
            @error('stok') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="kategori">Kategori: </label>
            <input type="text" id="kategori" name="kategori" value="{{ old('kategori') }}" placeholder="Contoh: Buket, Mawar, Meja">
            @error('kategori') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" style="margin-top: 10px;">Simpan</button>
    </form>
</x-layout.app>
