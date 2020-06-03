<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Gallery</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/fav.ico" type="image/x-icon">

    <!-- css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/login.css">

    <!-- javascript -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>

</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-7 offset-4 col-sm-5 offset-sm-6 col-lg-3 offset-lg-8 login-base shadow-lg">
                <h3 class="text-center">Masuk</h3>
                <hr>
                <form action="{{ route("login") }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Masukkan username" name="username" value="{{ old('username') }}">
                        @error('username') 
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sandi">Kata Sandi</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Masukkan kata sandi">
                        @error('password') 
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group form-check">
                        <input type="checkbox" class="form-check-input" id="ingat_saya">
                        <label class="form-check-label" for="ingat_saya">Ingat saya</label>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary float-right cf">Masuk</button>
                        </div>
                    </div>
                    <small class="figure-caption"><em>Lupa kata sandi? </em><a href="#">klik disini</a></small>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

