<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pendikom</title>
</head>
<body>
    <table> 
        <tr>
            <td>Nama</td>
            <td>Nim</td>
            <td>Jenis Kelamin</td>
        </tr>
        @foreach ($Student as $Student )
            <tr>
                <td>{{$Student->nama}}</td>
                <td>{{$Student->nim}}</td>
                <td>{{$Student->jenis_kelamin}}</td>
            </tr>
        @endforeach
    </table>

</body>
</html>