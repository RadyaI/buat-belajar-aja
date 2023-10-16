<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa | Create</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">

</head>

<body>
    <div class="container">
        <h2>Tambah siswa</h2>
        <form action="{{ url('siswa/create') }}" class="form-control" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama Siswa:</label>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan nama..." id="nama">
            </div>
            <div class="mb-3">
                <label for="nilai" class="form-label">gender:</label>
                <select name="gender" id="nilai" class="form-control">
                    <option value="-" selected>-</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">Umur: </label>
                <input type="number" name="umur" class="form-control" placeholder="Masukkan umur..." id="umur">
            </div>

            <input type="submit" class="btn btn-success" value="Submit">
        </form>
    </div>
</body>

</html>