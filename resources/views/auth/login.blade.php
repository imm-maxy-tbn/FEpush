<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />

    <style>
        body {
    font-family: "Roboto", sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Navbar */
.navbar {
    background-color: #ffffff;
    color: #000000;
    padding: 15px 0;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
    border-bottom: 3px solid #4834a9;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-logo {
    font-size: 24px;
    margin-left: 60px;
}

.navbar-links {
    list-style-type: none;
    display: flex;
    margin-left: -580px;
}

.navbar-links li {
    margin-right: 20px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    color: inherit;
    text-decoration: none;
}

.navbar-links a:hover {
    text-decoration: underline;
}

.navbar-actions {
    display: flex;
    margin-right: 20px;
}

.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 12px;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #ffffff;
    color: #0e0d13;
    border: 2px solid #5940cb;
}

.btn-outline-primary {
    background-color: #5940cb;
    color: #ffffff;
    border: 2px solid #5940cb8a;
    margin-left: 10px;
}

.btn-primary:hover,
.btn-outline-primary:hover {
    background-color: #5940cb8a;
}

.navbar-collapse {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-nav {
    margin-left: 52px;
}

.navbar-brand {
    margin-right: auto;
}

.login-container {
    background-color: #fff;
    padding: 90px;
    border-radius: 8px;
    width: 550px;
    position: absolute;
    top: 73px;
    right: 649px;
}

.login-form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.brand-logo {
    width: 100px;
    margin-bottom: 20px;
}

.login-form h2 {
    margin-bottom: 20px;
    font-size: 24px;
    color: #000000;
    font-weight: bold;
}

.input-group {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    margin-bottom: 15px;
    width: 100%;
    position: relative;
}

.input-group label {
    font-weight: bold;
    margin-bottom: 5px;
    color: #000000;
}

.input-icon {
    position: absolute;
    right: 10px;
    top: 36px;
    color: #000000;
}

.input-group input {
    width: 100%;
    padding: 12px 40px 12px 12px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f9fa;
    font-size: 14px;
}

.btn-login {
    padding: 10px 20px;
    background-color: #6c63ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    margin-top: 20px;
}

.btn-login:hover {
    background-color: #524eff;
}

.register-link {
    margin-top: 15px;
    font-size: 14px;
    color: #000000;
}

.register-link a {
    color: #000000;
    text-decoration: none;
    font-weight: bold;
}

.register-link a:hover {
    text-decoration: underline;
}

.image-container {
    position: relative;
    width: 100%;
    height: 300px;
}

.image-container img {
    position: absolute;
    top: 12px;
    left: 710px;
    width: 46%;
    height: 230%;
    object-fit: cover;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
    .navbar {
        position: relative;
    }

    .navbar-links {
        flex-direction: column;
        margin-left: 0;
        margin-top: 10px;
    }

    .navbar-links li {
        margin: 10px 0;
    }

    .navbar-actions {
        flex-direction: column;
        margin-right: 0;
        margin-top: 10px;
    }

    .btn {
        width: 100%;
        text-align: center;
        margin: 5px 0;
    }

    .login-container {
        width: 100%;
        padding: 20px;
        top: auto;
        right: auto;
        margin-top: 70px;
    }

    .brand-logo {
        width: 80px;
    }

    .login-form h2 {
        font-size: 20px;
    }

    .input-group input {
        padding: 10px 35px 10px 10px;
        font-size: 14px;
    }

    .input-icon {
        top: 28px;
    }

    .btn-login {
        padding: 10px;
        font-size: 14px;
    }

    .register-link {
        font-size: 12px;
    }

    .image-container img {
        position: static;
        width: 110%;
        height: 98px;
    }
}

/* Efek loading */
#loading {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 5px;
}

#loading img {
    width: 100px; /* Ukuran gambar loading */
    height: 100px; /* Ukuran gambar loading */
    animation: spin 1s linear infinite;
}

@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}

/* Animasi umum untuk elemen lainnya */
.content-container h1,
.date-box,
.chart-container,
.analysis-matrix .content-box,
.target-check .target-check-box,
.icon-box .icon-item,
.btn {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.content-container h1:hover,
.date-box:hover,
.chart-container:hover,
.analysis-matrix .content-box:hover,
.target-check .target-check-box:hover,
.icon-box .icon-item:hover,
.btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Menambahkan transisi pada navbar */
.navbar {
    transition: background-color 0.3s ease;
}

.navbar:hover {
    background-color: #e3e3e3;
}

    </style>
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
    <script>
        // Fungsi untuk menampilkan notifikasi jika pengguna belum terdaftar
function periksaPendaftaran() {
    // Lakukan pemeriksaan apakah pengguna sudah terdaftar atau tidak
    var terdaftar = false; // Ganti ini dengan logika pemeriksaan pendaftaran Anda

    // Jika pengguna belum terdaftar, tampilkan notifikasi
    if (!terdaftar) {
        alert("Diperlukan pendaftaran terlebih dahulu.");
    }
}

// Fungsi untuk menangani klik tombol "Masuk"
function masuk() {
    // Panggil fungsi untuk memeriksa pendaftaran
    periksaPendaftaran();

    // Lakukan tindakan masuk jika pengguna terdaftar
    // Ganti ini dengan logika masuk Anda
}

// Tambahkan event listener untuk tombol "Masuk"
document.getElementById("masukBtn").addEventListener("click", masuk);

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 3000 milidetik = 3 detik
});

    </script>
</body>

</html>
