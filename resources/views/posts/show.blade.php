<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
    <link rel="stylesheet" href="{{ asset('css/blog.css') }}">
    <title>Blog | {{ $post->title }}</title>
</head>
<body>
    <div class="container">
    <article class="blog-post mt-4">
        <h2 class="blog-post-title mb-1">{{ $post->title }}</h2>
        <p class="blog-post-meta">{{ date("d M Y H:i",strtotime($post->created_at)) }}</p>
        <a href="{{ url("posts/{$post->id}/edit") }}" class="btn btn-success">Edit</a>
        <br><br>
       <div class="card">
            <div class="card-body">
                <div class="card-text">
                    <h5>{{ $post->blog }}</h5>
                </div>
            </div>
       </div><br>
       <a href="{{ url("posts") }}" class="btn btn-primary"> <-Kembali </a><br><br>
       <small class="text-muted">{{ $total_comment }} Komentar</small>
       <div class="card">
        <div class="card-head">
                <h3 align="center">Komentar</h3>
        </div><hr>
            <div class="card-body">
                @foreach($comment as $komentar)
                <p>{{ $komentar -> comment }}</p>
                <hr>
                @endforeach
            </div>
       </div>
      </article>
    </div>
</body>
</html>