<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    <title>Siswa | Edit</title>
</head>
<body>
        <h2 align="center">Edit siswa</h2>
    <div class="container">
         <div class="card mt-5" style="width: 35rem; margin-left:17rem;">
                <div class="card-body">
                    <h3 class="card-title">Data siswa</h3>
                  <form action="{{ url("") }}" method="POST" class="form_control">
                    @method('PATCH')
                    @csrf
                  <div class="mb-3">
                        <label for="nama_siswa" class="form-label">Nama siswa</label>
                        <input type="text" name="nama_siswa" class="form-control" id="nama_siswa" >
                  </div>
                  <div class="mb-3">
                        <label for="nilai" class="form-label">Nilai</label>
                        <input type="number" name="niai" class="form-control" id="nilai">
                  </div>
                  </form>
                </div>
        </div>
    </div>
</body>
</html>