<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman pendikom</title>
</head>
<body>
    <nav>
        <ul>
            <li><a href="{{ route('Student-list') }}">Home</a></li>
            <li><a href="{{ route('Student-about') }}">Tentang</a></li>
            <li><a href="{{ route('Student-create') }}">Tamabah Mahasiswa</a></li>
        </ul>
    </nav>
    <main>
        @if (session("success"))
            <h4> {{ session("success") }} </h4>
        @endif
        {{ $slot }}
    </main>
</body>
</html>