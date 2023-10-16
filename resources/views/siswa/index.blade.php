<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa | Dashboard</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
</head>

<body>
    <div class="container">
        <h3 align="center" class="mt-3">Data Siswa</h3><br>
        <a href="{{ url('posts') }}" class="btn btn-primary">Kembali</a>
        <a href=" {{ url('siswa/create') }} " class="btn btn-primary"> +Tambah siswa </a><br><br>


        <div class="row">
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Gender</th>
                        <th>Umur</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->id }}</td>
                        <td>{{ $siswa -> nama_siswa }}</td>
                        <td>{{ $siswa -> gender }}</td>
                        <td>{{ $siswa -> umur }}</td>
                        <td>
                            <div class="btn-group">
                                <form action="{{ url("delete/$siswa->id") }}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form> 
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div><br><br>



    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

</html>