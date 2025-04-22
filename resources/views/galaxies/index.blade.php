<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Daftar Galaksi</title>
    <style>
        body {
            background-color: #0b0c10;
            color: #c5c6c7;
            font-family: 'Segoe UI', sans-serif;
            padding: 40px;
        }
        h1 {
            text-align: center;
            color: #66fcf1;
            margin-bottom: 30px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background-color: #1f2833;
            box-shadow: 0 0 10px rgba(102, 252, 241, 0.1);
        }
        th, td {
            padding: 12px 15px;
            text-align: center;
            border: 1px solid #45a29e;
        }
        th {
            background-color: #45a29e;
            color: #0b0c10;
        }
        tr:nth-child(even) {
            background-color: #0b0c10;
        }
        tr:hover {
            background-color: #2c3e50;
        }
        .back-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #45a29e;
            color: #0b0c10;
            text-decoration: none;
            font-weight: bold;
            border-radius: 5px;
            transition: background 0.3s ease;
        }
        .back-button:hover {
            background-color: #66fcf1;
        }
    </style>
</head>
<body>

    <a href="/dashboard" class="back-button">← Kembali ke Dashboard</a>

    <h1>Daftar Galaksi</h1>
    <table>
        <thead>
            <tr>
                <th>Nama Galaksi</th>
                <th>Nama Blackhole</th>
                <th>Jumlah Bintang</th>
                <th>Jarak dari Bumi (Tahun Cahaya)</th>
                <th>Tipe Galaksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($galaxies as $g)
                <tr>
                    <td>{{ $g->nama_galaksi }}</td>
                    <td>{{ $g->nama_blackhole }}</td>
                    <td>{{ number_format($g->jumlah_bintang) }}</td>
                    <td>{{ number_format($g->jarak_dari_bumi) }}</td>
                    <td>{{ $g->tipe_galaksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
