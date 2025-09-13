<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Kelas</title>
</head>
<body>
    <h1>Tambah Kelas</h1>
    <form action="/kelas" method="post">
        @csrf
        <input type="text" name="namaKelas" placeholder="Nama Kelas"><br>
        <input type="text" name="kapasitas" placeholder="Kapasitas Kelas"><br>
        <button type="submit">Simpan</button>
    </form>
    <h2>List Kelas</h2>
    <ul>
        @foreach($data as $kls)
        <li>
            {{ $kls->namaKelas }} - {{ $kls->kapasitas }}
        </li>
        @endforeach
    </ul>
</body>
</html>