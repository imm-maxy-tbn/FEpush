@extends('layouts.app-2fa')
@section('title', 'Berhasil Verifikasi')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
    font-family: "Roboto", sans-serif;
}

.sosmed {
    gap: 10px;
}

.sosmed a {
    color: #fff;
    margin: 0 10px;
}

.container.text-center {
    padding: 150px 20px 0;
}

h1 {
    font-size: 24px;
    font-weight: 700;
    margin-bottom: 20px;
}

.icon {
    font-size: 80px;
    color: #6c63ff;
    margin-bottom: 20px;
}

p {
    font-size: 16px;
    margin-bottom: 20px;
}

.link {
    font-size: 14px;
    color: #6c63ff;
    text-decoration: none;
}

.link:hover {
    text-decoration: underline;
}


/* Media query for responsiveness */

@media only screen and (max-width: 768px) {
    .navbar-links {
        flex-direction: column;
        margin-left: 0;
        align-items: center;
    }
    .footer-content {
        flex-direction: column;
        text-align: center;
    }
    .brand-info,
    .footer-links,
    .social-media {
        width: 100%;
        margin-bottom: 20px;
    }
    .footer-nav ul {
        position: static;
        display: flex;
        justify-content: center;
    }
    .footer-nav ul li {
        margin-right: 10px;
        margin-bottom: 10px;
    }
}

@media only screen and (max-width: 576px) {
    .footer-nav ul li {
        margin-right: 5px;
    }
    .brand-info h3 {
        font-size: 18px;
    }
    .brand-info p {
        font-size: 12px;
    }
    .footer-nav ul li a {
        font-size: 14px;
    }
    .social-media a {
        font-size: 18px;
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
}

#loading img {
    width: 100px;
    height: 100px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    {
        transform: rotate(360deg);
    }
}
</style>
@endsection
@section('content')

<body>

<div class="container text-center mt-5">
    <h1>Selamat! Berhasil Verifikasi Akun</h1>
    <div class="icon">
        <i class="fas fa-check-circle"></i>
    </div>
    <p>Anda akan dialihkan ke halaman selanjutnya dalam <span id="countdown">5</span> detik</p>
    <a href="#" class="link">Klik disini jika bermasalah</a>
</div>



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
@endsection

