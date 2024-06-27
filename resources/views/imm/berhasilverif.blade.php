<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm/berhasilverif.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="welcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bootcamp</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">IMM</a>
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

<div class="container text-center mt-5">
    <h1>Selamat! Berhasil Verifikasi Akun</h1>
    <div class="icon">
        <i class="fas fa-check-circle"></i>
    </div>
    <p>Anda akan dialihkan ke halaman selanjutnya dalam <span id="countdown">5</span> detik</p>
    <a href="#" class="link">Klik disini jika bermasalah</a>
</div>

<!-- <footer class="footer mt-5">
    <div class="container">
        <div class="row">
            <div class="col-4 d-flex flex-column" style="gap: 20px">
                <h5 class="text-white text-left">IMM</h5>
                <span class="span-footer text-left">Impact Measurement and Management (TBN INDONESIA X MAXY ACADEMY)</span>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <ul class="d-flex" style="gap: 30px">
                    <a href="/"><li>HomePage</li></a>
                    <a href="bootcamp"><li>Bootcamp</li></a>
                    <a href="imm"><li>IMM</li></a>
                    <a href="#"><li>Community</li></a>
                    <a href="profile"><li>Profile</li></a>
                </ul>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center" style="gap: 30px">
                <span class="span-footer text-center">Sosial Media</span>
                <div class="sosmed d-flex justify-content-end">
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    // Fungsi untuk countdown dan redirect
    function startCountdown(seconds, url) {
        var countdownElement = document.getElementById('countdown');
        var interval = setInterval(function() {
            seconds--;
            countdownElement.textContent = seconds;
            if (seconds <= 0) {
                clearInterval(interval);
                window.location.href = url;
            }
        }, 1000);
    }

    // Mulai countdown dari 5 detik dan redirect ke halaman berikutnya
    document.addEventListener("DOMContentLoaded", function() {
        startCountdown(5, "pendaftaranperusahaan"); // Ganti "next-page-url" dengan URL halaman berikutnya
    });
</script>
</body>
</html>
