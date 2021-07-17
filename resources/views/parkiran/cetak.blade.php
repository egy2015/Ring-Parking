<!DOCTYPE html>
<html>

<head>
    <title>STTI - Laporan Mahasiswa</title>
    <link href="{!!asset('css/bootstrap.min.css')!!}" rel="stylesheet" type="text/css">
    <link href="{!!asset('css/dashboard.css')!!}" rel="stylesheet" type="text/css">
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Daftar Parkir</h5>
    </center>

    <table class='table table-bordered'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Jenis Kendaraan</th>
                <th>Plat Nomor</th>
                <th>Jam Masuk</th>
            </tr>
        </thead>
        <tbody>

            @foreach($parkir as $p)
            <tr>
                <td>{{ $p->id }}</td>
                <td>{{$p->j_k}}</td>
                <td>{{$p->plat_no}}</td>
                <td>{{$p->created_at}}</td>
            </tr>
            @endforeach
        </tbody>
        <a class="btn btn-success float-left" href="{{ route('parkiran.cetak_pdf', $p->id) }}" class="btn btn-primary"
    target="_blank">Cetak PDF</a>
    </table>

</body>

</html>
