<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>IMM | Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet" />   
</head>

<body>
<div id="loading">
        <img src="images/imm.png" alt="Loading">
    </div>


    <div class="container-fluid d-flex justify-content-between" style="max-height: 100vh">
        <div class="col-6 w-100 d-flex justify-content-center">
            <div class="container d-flex justify-content-center ">
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
        </div>
        <div class="col-6 d-flex justify-content-end">
            <img src="images/6.png" style="height: 100vh" alt="Your Image" />
        </div>
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
