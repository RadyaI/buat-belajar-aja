<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <title>Blog | Ubah Postingan</title>
</head>
<body>
<div class="container">
    <h1>Buat ubah postingan </h1>
    
        <form method="POST" action="{{ url("posts/$post->id") }}">
        @method('DELETE')
                @csrf
                <button type="submit" class="btn btn-danger">Hapus</button>
         </form><br>

    <form method="POST" action="{{ url("posts/{$post->id}") }}" class="form-control">
    @method('PATCH')
        @csrf

        <div class="mb-3">
            <label for="judul" class="form-label">Judul Blog:</label>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="Masukkan Judul..." id="judul" aria-describedby="judul1">
        </div>
        <div class="mb-3">
            <label for="isi" class="form-label">Isi Blog:</label>
            <textarea name="blog" placeholder="Blog anda..." class="form-control" id="isi">{{ $post->blog }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <br>
    
 </div>
</body>
</html>