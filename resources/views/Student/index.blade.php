<x-layout.app>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        @foreach ($Student as $Student)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $Student->nama }}</td>
                <td>{{ $Student->nim }}</td>
                <td>{{ $Student->jenis_kelamin }}</td>
                <td>
                    <a href=" {{ route('Student-show', $Student->id) }} ">Detail | </a>
                    <a href=" {{ route('Student-edit', $Student->id) }} ">Edit | </a>
                    <form action=" {{ route('Student-destroy', $Student) }} " method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" onclik="return confirm('yakin hapus {{ $Student->nama }}?')" > Hapus </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout.app>
