<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tampil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        a {
            text-decoration: none;
            color: #007bff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th,
        td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        img {
            max-width: 150px;
            max-height: 100px;
        }

        td.actions {
            text-align: center;
        }

        .add-link {
            display: block;
            margin-bottom: 20px;
        }

        .img-container {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>

<body>
    <a class="add-link" href="{{ route('tambah-data') }}">Tambah Data</a>
    <table>
        <thead>
            <tr>
                <th>No.</th>
                <th>Tipe Gambar</th>
                <th>Gambar</th>
                <th>Nama Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->type }}</td>
                    <td><img src="{{ asset('storage/' . $data->image_path) }}" alt="Gambar" class="img-container"></td>
                    <td>{{ $data->title }}</td>
                    <td class="actions">
                        <form action="{{ route('hapus-data', $data->id) }}" method="POST"
                            onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>

</html>
