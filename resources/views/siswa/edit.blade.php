<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
</head>
<body>

<h2>Edit Data Siswa</h2>

@if ($errors->any())
    <ul style="color:red;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama:</label><br>
    <input type="text" name="nama" value="{{ $siswa->nama }}"><br><br>

    <label>Umur:</label><br>
    <input type="number" name="umur" value="{{ $siswa->umur }}"><br><br>

    <label>Nilai:</label><br>
    <input type="number" step="0.01" name="nilai" value="{{ $siswa->nilai }}"><br><br>

    <button type="submit">Update</button>
</form>

<br>
<a href="{{ route('siswa.index') }}">Kembali</a>

</body>
</html>