<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matakuliah</title>
</head>
<body>
    <h1>Tambah Matakuliah</h1>
    <form action="/matakuliah" method="post">
        @csrf
        <input type="text" name="namaMatkul" placeholder="Nama Matakuliah"><br>
        <input type="text" name="deskripsi" placeholder="Deskripsi"><br>
        <button type="submit">Simpan</button>
    </form>
    <h2>List Matakuliah</h2>
    <ul>
        @foreach($data as $mk)
        <li>
            {{ $mk->namaMatkul }} - {{ $mk->deskripsi }}
        </li>
        @endforeach
    </ul>
</body>
</html>