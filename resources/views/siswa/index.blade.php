<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>

    <style>
        body {
            background-color: #f4f6f9;
            padding: 50px;
        }

        h2 {
            text-align: center;
        }

        .btn {
            padding: 8px 14px;
            text-decoration: none;
            border-radius: 6px;
            font-size: 14px;
            background-color: #950d0d;
            color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .success {
            color: green;
            margin-bottom: 15px;
        }
    </style>
</head>

<body>

<div class="container">

    <h2>Data Siswa</h2>

    @if(session('success'))
        <p class="success">
            {{ session('success') }}
        </p>
    @endif

    <a href="{{ route('siswa.create') }}" class="btn btn-add">+ Tambah Data</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>

        @foreach($siswa as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->umur }}</td>
            <td>{{ $data->nilai }}</td>
            <td>
                <a href="{{ route('siswa.edit', $data->id) }}" class="btn btn-edit">Edit</a>

                <form action="{{ route('siswa.destroy', $data->id) }}" 
                      method="POST" 
                      style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-delete">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach

    </table>

</div>

</body>
</html>