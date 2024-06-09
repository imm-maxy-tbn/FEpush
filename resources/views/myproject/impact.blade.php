<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Metrix Detail</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/impact.css') }}">
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

<div class="container mt-5">
    <h2 class="text-center">Metrix detail</h2>
    <h3 class="text-center">Metrix : Bias-Reducing Investment Practices</h3>
    <div class="chart-container">
        <canvas id="metrixChart"></canvas>
    </div>
    <h4 class="mt-4">Perkembangan Metrix</h4>
    <div class="metric-progress">
        <div class="metric-item">Januari</div>
        <div class="metric-item">Februari</div>
        <div class="metric-item">Maret</div>
        <div class="metric-item">April</div>
        <div class="metric-item">Mei</div>
        <div class="metric-item">Juni</div>
        <div class="metric-item">Juli</div>
        <div class="metric-item">Agustus</div>
        <div class="metric-item">September</div>
        <div class="metric-item">Oktober</div>
        <div class="metric-item">November</div>
        <div class="metric-item">Desember</div>
    </div>
    <div class="metric-values">
        <input type="text" value="2500" readonly>
        <input type="text" value="4100" readonly>
        <input type="text" value="6100" readonly>
        <input type="text" value="4200" readonly>
        <input type="text" value="7000" readonly>
        <input type="text" value="6500" readonly>
        <input type="text" value="6000" readonly>
        <input type="text" readonly>
    </div>
    <div class="d-flex justify-content-between mt-4">
        <button class="btn btn-secondary">Reset Data</button>
        <button class="btn btn-primary">Simpan Data</button>
    </div>
    <h4 class="mt-4">Dokumen Validitas Data</h4>
    <div class="document-validation">
        <div class="document-tab active">Januari</div>
        <div class="document-tab">Februari</div>
        <div class="document-tab">Maret</div>
        <div class="document-tab">April</div>
        <div class="document-tab">Mei</div>
        <div class="document-tab">Juni</div>
        <div class="document-tab">Juli</div>
        <div class="document-tab">Agustus</div>
        <div class="document-tab">September</div>
        <div class="document-tab">Oktober</div>
        <div class="document-tab">November</div>
        <div class="document-tab">Desember</div>
    </div>
    <div class="document-files">
        <div class="document-file">File a.csv</div>
        <div class="document-file">File b.csv</div>
        <div class="document-file">File c.csv</div>
        <div class="document-file">File d.csv</div>
    </div>
    <button class="btn btn-primary mt-3">Tambah Dokumen</button>
    <h4 class="mt-4">Survey Pendukung</h4>
    <div class="survey-support">
        <div class="survey-tab active">Januari</div>
        <div class="survey-tab">Februari</div>
        <div class="survey-tab">Maret</div>
        <div class="survey-tab">April</div>
        <div class="survey-tab">Mei</div>
        <div class="survey-tab">Juni</div>
        <div class="survey-tab">Juli</div>
        <div class="survey-tab">Agustus</div>
        <div class="survey-tab">September</div>
        <div class="survey-tab">Oktober</div>
        <div class="survey-tab">November</div>
        <div class="survey-tab">Desember</div>
    </div>
    <div class="survey-files">
        <div class="survey-file">Survey Lorem Ipsum</div>
        <div class="survey-file">Survey Lorem Ipsum</div>
        <div class="survey-file">Survey Lorem Ipsum</div>
        <div class="survey-file">Survey Lorem Ipsum</div>
    </div>
    <button class="btn btn-primary mt-3">Mulai Survey</button>
    <h4 class="mt-4">Matrix Report</h4>
    <div class="report-files">
        <div class="report-file">Lorem Ipsum</div>
        <div class="report-file">Lorem Ipsum</div>
        <div class="report-file">Lorem Ipsum</div>
    </div>
    <button class="btn btn-primary mt-3">Tambah Laporan</button>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/myproject/impact.js') }}"></script>

</body>
</html>
