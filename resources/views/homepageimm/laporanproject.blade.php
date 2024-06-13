<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepageimm/laporanproject.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="loading">
        <img src="images/imm.png" alt="Loading...">
    </div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="report-section">
    <h2>Laporan Project</h2>
    <p>Lengkapi laporan Bulanan dan pastikan laporan diselesaikan tepat waktu dengan melampirkan dokumen yang dibutuhkan</p>
    <div class="report-card">
        <h3>Bulan Pertama</h3>
        <a href="reportbulanpertama" class="btn btn-report">Isi Laporan</a>
    </div>
    <div class="report-card">
        <h3>Bulan Kedua</h3>
        <a href="reportbulanpertama" class="btn btn-report">Isi Laporan</a>
    </div>
    <div class="report-card">
        <h3>Bulan Ketiga</h3>
        <a href="reportbulanpertama" class="btn btn-report">Isi Laporan</a>
        
    </div>
    <div class="report-card">
        <h3>Bulan Keempat</h3>
        <a href="reportbulanpertama" class="btn btn-report">Isi Laporan</a>
    </div>
    <div class="report-card">
        <h3>Bulan Kelima</h3>
        <a href="reportbulanpertama" class="btn btn-report">Isi Laporan</a>
        
    </div>
    <div class="report-card">
        <h3>Bulan Keenam</h3>
        <a href="laporan-url" class="btn btn-report">Isi Laporan</a>
    </div>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="brand-info">
                <h3>IMM</h3>
                <p>(TBN INDONESIA X MAXY ACADEMY)</p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Bootcamp</a></li>
                        <li><a href="#">IMM</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="social-media">
                    <p class="footer-social-media">Social Media</p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/welcome/script.js') }}"></script>
</body>
</html>
