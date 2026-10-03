<x-layout.app>
    <h3>Halaman Ubah Bunga</h3>
    
    <form action="{{ route('bloomify.update', $bunga->id) }}" method="post">
        @csrf
        @method("PUT")
        
        <div>
            <label for="nama_bunga">Nama Bunga: </label>
            <input type="text" id="nama_bunga" name="nama_bunga" value="{{ old('nama_bunga', $bunga->nama_bunga) }}">
            @error('nama_bunga') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="harga">Harga: </label>
            <input type="number" id="harga" name="harga" value="{{ old('harga', $bunga->harga) }}">
            @error('harga') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="stok">Stok: </label>
            <input type="number" id="stok" name="stok" value="{{ old('stok', $bunga->stok) }}">
            @error('stok') <span style="color: red;">{{ $message }}</span> @enderror
        </div>

        <div>
            <label for="kategori">Kategori: </label>
            <input type="text" id="kategori" name="kategori" value="{{ old('kategori', $bunga->kategori) }}">
            @error('kategori') <span style="color: red;">{{ $message }}</span> @enderror
        </div>
        
        <button type="submit" style="margin-top: 10px;">Ubah</button>
    </form>
</x-layout.app>
