<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
</head>
<body>
    <div class="container"><br>
            <h2 align="center">Login Blog Radya</h2>
        <div class="card mt-5">
            <div class="card-body">

            @if(session()->has('error_message'))
            <div class="alert alert-warning">
                {{ session()->get('error_message') }}
            </div>
            @else
            <div class="alert alert-info">
              <span>Silahkan login...</span>
            </div>
            @endif

                <form method="POST" action="{{ url('login') }}" class="form-control">
                    @csrf
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" autocomplete="off" name="email" class="form-control" placeholder="Masukkan email...">

                    <label for="password" class="form-label">Password:</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukkan password...">
                    <br>
                    <input type="submit" class="btn btn-primary" value="Login">
                    <a href="{{ url('/registrasi') }}" class="btn btn-info">Register</a>
                </form>
            </div>
        </div>
    </div>
</body>
</html>