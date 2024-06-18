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
     

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</nav>

<div class="container report-section ">
    <a class="navbar-brand" href="homepage"><i class="fas fa-arrow-left"></i> Laporan Project</a>
    
    <p class="deskripsi">Lengkapi laporan Bulanan dan pastikan laporan diselesaikan tepat waktu dengan melampirkan dokumen yang dibutuhkan</p>
    <div class="report-card">
        <div class="section d-flex justify-content-between align-content-center">
        <h3>Bulan Pertama</h3>
        <img src="images/succes.png" width="30" height="30" alt=""></div>
        <a href="reportbulanpertama" class="btn btn-report form-control">Isi Laporan</a>
        <p class="mt-3">Telah disetujui oleh Mentor</p>
    </div>
    <div class="report-card">
        <div class="section d-flex justify-content-between align-content-center">
        <h3>Bulan Kedua</h3>
        <img src="images/warning.png" width="30" height="30" alt=""></div>
        <a href="reportbulanpertama" class="btn btn-report form-control">Isi Laporan</a>
        <p class="mt-3">Perlu tindakan revisi ~ Mentor</p>
    </div>
    <div class="report-card">
        <div class="section d-flex justify-content-between align-content-center">
        <h3>Bulan Ketiga</h3>
        <img src="images/tolak.png" width="30" height="30" alt=""></div>
        <a href="reportbulanpertama" class="btn btn-report form-control">Isi Laporan</a>
        <p class="mt-3">Laporan bulan ketiga belum dibuat</p>
    </div>
    <div class="report-card">
        <div class="section d-flex justify-content-between align-content-center">
        <h3>Bulan Keempat</h3>
        <img src="images/succes.png" width="30" height="30" alt=""></div>
        <a href="reportbulanpertama" class="btn btn-report form-control">Isi Laporan</a>
        <p class="mt-3">Telah disetujui oleh Mentor</p>
    </div>
    <div class="report-card">
        <div class="section d-flex justify-content-between align-content-center">
        <h3>Bulan Kelima</h3>
        <img src="images/succes.png" width="30" height="30" alt=""></div>
        <a href="reportbulanpertama" class="btn btn-report form-control">Isi Laporan</a>
        <p class="mt-3">Telah disetujui oleh Mentor</p>
    </div>
    
</div>


<footer>
    <div class="container footer mt-5 d-flex justify-content-center align-items-center  ">
        <div class="row d-flex  justify-content-center align-items-center">
            <div class="col-4 d-flex flex-column" style="gap: 20px">
                <h5 class=" text-white  text-left">IMM</h5>
                <span class="span-footer text-left">Impact Measurement and Management
                        <br> (TBN INDONESIA X MAXY ACADEMY)</span>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <ul class=" d-flex " style="gap: 30px">
                    <a href=""><li>HomePage</li></a>
                    <a href=""><li>Bootcamp</li></a>
                    <a href=""><li>IMM</li></a>
                    <a href=""><li>Comunity</li></a>
                    <a href=""><li>Profile</li></a>
                </ul>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center" style="gap: 30px">
                <span class="span-footer text-center">Sosial Media</span>
                <div class="sosmed d-flex justify-content-end  ">
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
