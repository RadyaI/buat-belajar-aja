<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <title>Blog Radya</title>

    <style>
        .blog{
            padding:5px;
            border-bottom:2px solid black;
        }
        small{
            color:green;
        }
    </style>
</head>
<body>
   <div class="container">
    <h1 align="center">Blog Radya</h1>
    <a href="{{ url('posts/create') }}" class="btn btn-success">+Buat Postingan</a>
    <a href="{{ url('siswa') }}" class="btn btn-primary">DATA SISWA</a>
    <a href="{{ url('logout') }}" class="btn btn-danger">Logout</a>
    <br><br>
            @foreach($postingan as $postingan)
     <div class="card mb-3">
        <div class="card-body">
            <h5 class="card-title"><h3>{{ $postingan->title }} </h3>
                <p>{{ $postingan->blog }}</p></h5>
                <p class="card-text"><small class="text-muted">Last update {{ date("d M Y H:i", strtotime($postingan->created_at)) }}</small></p>
            <a href="{{ url("posts/{$postingan->id}") }}" class="btn btn-primary">Selengkapnya</a>
        </div>
     </div>    <br>      
            @endforeach
   </div>
</body>
</html>