<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/Login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM Impact Mate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                    <li class="nav-item active">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="login-container">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="login-form">
                <img src="images/imm.png" alt="Brand Logo" class="brand-logo">
                <h2>Masuk ke akun anda</h2>
                <div class="input-group">
                    <label for="email">Email</label>
                    <span class="input-icon"><i class="fas fa-envelope"></i></span>
                    <input id="email" type="email" placeholder="email" name="email" required />
                </div>
                <div class="input-group">
                    <label for="password">Password</label>
                    <span class="input-icon"><i class="fas fa-lock"></i></span>
                    <input id="password" type="password" placeholder='password' name="password" required />

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <button class="btn-login" type="submit" id="masukBtn">Masuk</button>
                @if (Route::has('password.request'))
                    <div class="register-link">
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Lupa Password Anda?') }}
                        </a>
                    </div>
                @endif
                <div class="register-link">Belum punya akun? <a href="register">Daftar</a></div>
            </div>
        </form>
    </div>

    <div class="image-container">
        <img src="images/6.png" alt="Your Image" />
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/login.js') }}"></script>
</body>

</html>
