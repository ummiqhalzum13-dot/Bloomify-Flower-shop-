<x-layout.app>
    <h3>Halaman Ubah Mahasiswa</h3>
    
    <form action="{{ route( 'Student-update', $Student )}}" method="post">
        @csrf
        @method("PUT")
        
        <div>
            <label for="nama">Nama: </label>
            <input type="text" id="nama" name="nama" value="{{ old('nama', $Student->nama) }}">
            @error('nama'){{$message}}@enderror
        </div>

        <div>
            <label for="nim">NIM: </label>
            <input type="text" id="nim" name="nim" value="{{ old('nim', $Student->nim) }}">
            @error('nim'){{$message}}@enderror
        </div>

        <div>
            <label for="jenis_kelamin">Jenis Kelamin: </label>
            <input type="text" id="jenis_kelamin" name="jenis_kelamin" value="{{ old('jenis_kelamin', $Student->jenis_kelamin) }}">
            @error('jenis_kelamin'){{$message}}@enderror
        </div>
        <button type="submit">Ubah</button>
    </form>
</x-layout.app>