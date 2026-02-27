<!DOCTYPE html>
<html>
<head>
    <title>Tambah Siswa</title>
</head>
<body>

<h2>Tambah Data Siswa</h2>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('siswa.store') }}" method="POST">
    @csrf

    <label>Nama:</label><br>
    <input type="text" name="nama"><br><br>

    <label>Umur:</label><br>
    <input type="number" name="umur"><br><br>

    <label>Nilai:</label><br>
    <input type="number" step="0.01" name="nilai"><br><br>

    <button type="submit">Simpan</button>
</form>

<br>
<a href="{{ route('siswa.index') }}">Kembali</a>

</body>
</html>