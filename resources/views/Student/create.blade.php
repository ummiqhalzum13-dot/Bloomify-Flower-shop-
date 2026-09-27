<x-layout.app>
    <h3>Halaman Tambah Mahasiswa</h3>
    <form action="{{ route( 'Student-store' )}}" method="post">
        @csrf
        <div>
            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama" value="{{ old('nama') }}">
            @error('nama'){{$message}}@enderror
        </div>

        <div>
            <label for="nim">NIM: </label>
            <input type="text" id="nim" name="nim" value="{{ old('nim') }}">
            @error('nim'){{$message}}@enderror
        </div>

        <div>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin') }}">
            @error('jenis_kelamin'){{$message}}@enderror
        </div>
        <button type="submit">Simpan</button>
    </form>
</x-layout.app>