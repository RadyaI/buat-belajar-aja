<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa | Detail</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
</head>
<body>
    <div class="container">
        <h2 align="center" style="margin-top:15px;">Data Detail Siswa</h2>
        <div class="card">
            <h5 class="card-header">Nama: {{ $siswa->nama_siswa }}</h5>
            <div class="card-body">
                <h5 class="card-title">Data siswa</h5>
                <p class="card-text">
                    Nilai: {{ $siswa->nilai }} <br>
                    Grade: {{ $siswa->grade }} <br>
                    Total score: {{ $siswa->score }} <br>
                    Last Update: {{ $siswa->updated_at }}
                </p>
                <a href="{{ url('siswa') }}" class="btn btn-info"><-Kembali</a>
                <a href="{{ url("siswa/{$siswa->id}/edit") }}" class="btn btn-primary">Edit</a>
            </div>
        </div>
    </div>
</body>
</html>