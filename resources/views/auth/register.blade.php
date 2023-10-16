<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | Register</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}">
</head>
<body>
    <div class="container"><br>
            <h2 align="center">Registrasi Blog Radya</h2>
        <div class="card mt-5">
            <div class="card-body">

            @if(session()->has('error_message'))
            <div class="alert alert-warning">
                {{ session()->get('error_message') }}
            </div>
            @else
            <div class="alert alert-info">
              <span>Silahkan registrasi...</span>
            </div>
            @endif

                <form method="POST" action="{{ url('registrasi') }}">
                    @csrf

                    <div class="mb-3">
                    <label for="name" class="form-label">Nama:</label>
                    <input type="text" id="name" class="form-control" name="name" autocomplete="off" placeholder="Masukkan nama anda...">
                    @if($errors->has('name'))
                    <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif
                    </div>

                    <div class="mb-3">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" id="email" autocomplete="off" name="email" class="form-control" placeholder="Masukkan email...">
                    @if($errors->has('email'))
                    <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif  
                    </div>

                    <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password...">
                    @if($errors->has('password'))
                    <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif
                    </div>

                    <div class="mb-3">
                    <label for="konfirmasi" class="form-label">Konfirmasi password:</label>
                    <input type="password" id="password" name="password_confirmation" class="form-control" placeholder="Masukkan password...">
                    </div>
                    <input type="submit" class="btn btn-primary" value="Daftar">
                </form>
                <p>Sudah punya akun?<a href="{{ url('/') }}">Login</a></p>
            </div>
        </div>
    </div>
</body>
</html>