<x-layout.app>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>Nim</th>
            <th>Jenis Kelamin</th>
            <th>Aksi</th>
        </tr>
        @foreach ($Student as $item)
            <tr>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->jenis_kelamin }}</td>
                <td>
                    <a href="#">Detail | </a>
                    <a href="#">Edit | </a>
                    <a href="#">Hapus </a>
                </td>
            </tr>
        @endforeach
    </table>
</x-layout.app>
