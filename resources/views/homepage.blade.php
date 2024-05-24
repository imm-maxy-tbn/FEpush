<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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
                    <a class="nav-link active" href="welcome">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="myproject">My Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Status</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">My Company</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="notification-section">
    <div class="container">
        <div class="row">
            <div class="col-6">
                <p id="notificationText">
                    <i class="fas fa-bell" style="color: #ffcc00;"></i> Notifikasi
                </p>
                <div id="dropdownContent" class="dropdown-content">
                    <a href="#">Teks 1</a>
                    <a href="#">Teks 2</a>
                    <a href="#">Teks 3</a>
                </div>
            </div>
            <div class="col-6 text-right">
                <i id="dropdownIcon" class="fas fa-chevron-down"></i>
            </div>
        </div>
    </div>
</div>

<div class="container mt-5">
    <h2>Dashboard</h2>
    <div class="row">
        <div class="col-4">
            <div class="process-circle absensi">
                <span class="process-text">Lorem ipsum dolor sit amet consectetur</span>
                <span class="process-text1">Lorem ipsum dolor sit amet consectetur</span>
                <span class="process-text2">Lorem ipsum dolor sit amet consectetur</span>
                <span class="process-text3">Project <br />A</span>
                <div class="progress-circle">
                    <span class="progress-percent">50%</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="text-center mt-4">
    <img src="images/f.png" alt="Dashboard Image" class="dashboard-image">
</div>

<div class="box-container">
    <div class="box">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="analytics-title">Analytics</h2>
            <select id="yearSelector" class="form-control w-auto">
                <option value="2023">2023</option>
                <option value="2024" selected>2024</option>
                <option value="2025">2025</option>
            </select>
        </div>
        <canvas id="myChart"></canvas>
        <div class="progress-bar-container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <div class="box1">
        <div class="balance-card">
            <i class="fas fa-wallet"></i>
            <div>
                <p>Total Balance</p>
                <h3 id="totalBalance">Rp.50.000.000</h3>
            </div>
        </div>
    </div>
    <div class="box2">
        <div class="outcome-card">
            <i class="fas fa-chart-line"></i>
            <div>
                <p>Total Outcome</p>
                <h3 id="totalOutcome">Rp.10.000.000</h3>
            </div>
        </div>
    </div>
</div>

<div class="report-container" style="background-image: url('images/f1.png');">
    <div class="text-content">
        <h4>Kumpulkan report <br />mingguan</h4>
    </div>
    <button class="btn btn-report">
        <i class="fas fa-file-alt"></i> Report Project
    </button>
</div>

<div class="project-container">
    <div class="project-header">
        <h1>Recent Project</h1>
        <div class="header-actions">
            <button>Last Viewed</button>
        </div>
    </div>
    <div class="project-grid">
        <a href="myproject" class="project-card" style="background-image: url('images/A.png');">
            <div class="project-info">
                <h3 class="project-title">Project A</h3>
                <p class="tanggal">25/04/2002</p>
            </div>
        </a>
        <a href="myproject" class="project-card" style="background-image: url('images/B.png');">
            <div class="project-info">
                <h3 class="project-title">Project B</h3>
                <p class="tanggal">25/04/2002</p>
            </div>
        </a>
        <a href="myproject" class="project-card" style="background-image: url('images/C.png');">
            <div class="project-info">
                <h3 class="project-title">Project C</h3>
                <p class="tanggal">25/04/2002</p>
            </div>
        </a>
        <a href="myproject" class="project-card" style="background-image: url('images/D.png');">
            <div class="project-info">
                <h3 class="project-title">Project D</h3>
                <p class="tanggal">25/04/2002</p>
            </div>
        </a>
        <a href="projectE.html" class="project-card" style="background-image: url('images/E.png');">
            <div class="project-info">
                <h3 class="project-title">Project E</h3>
                <p class="tanggal">25/04/2002</p>
            </div>
        </a>
        <a href="projectF.html" class="project-card" style="background-image: url('images/H.png');">
            <div class="project-info">
                <h3 class="project-title">Project F</h3>
                <p class="tanggal">25/04/2002</p>
            </div>
        </a>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
