<!DOCTYPE html>
<html>
<head>
    <title>Daftar Galaksi</title>
</head>
<body>
    <h1>Daftar Galaksi</h1>
    <table border="1" cellpadding="10">
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
                    <td>{{ $g->jumlah_bintang }}</td>
                    <td>{{ $g->jarak_dari_bumi }}</td>
                    <td>{{ $g->tipe_galaksi }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
