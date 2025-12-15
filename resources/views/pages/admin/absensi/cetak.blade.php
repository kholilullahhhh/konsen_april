<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Data Absensi</title>
    <style>
        body {
            font-family: sans-serif;
            font-size: 11px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #000;
            padding: 5px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
        h2 {
            text-align: center;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

    <h2>Data Absensi Kelas</h2>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Mata Kuliah</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Status</th>
                <th>Keterangan</th>
                <th>Tanggal</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($datas as $i => $data)
                <tr>
                    <td>{{ $i + 1 }}</td>
                    <td>{{ $data->agenda->judul ?? 'N/A' }}</td>
                    <td>{{ $data->user->name ?? 'N/A' }}</td>
                    <td>{{ $data->user->nim ?? 'N/A' }}</td>
                    <td>{{ ucfirst($data->status) }}</td>
                    <td>{{ $data->keterangan ?? '-' }}</td>
                    <td>{{ $data->created_at->format('d-m-Y H:i') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
