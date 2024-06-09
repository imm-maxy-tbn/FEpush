<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepageimm/homeimm.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="homepage">My Company</a>
                </li>
                <li class="nav-item">
                    <a class="dropdown-item nav-link" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
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
                    <i class="fas fa-bell" style="color: #ffcc00;"></i> Notification
                </p>
            </div>
            <div class="col-6 text-right">
                <i id="dropdownIcon" class="fas fa-chevron-down"></i>
            </div>
        </div>
        <div id="dropdownContent" class="dropdown-content">
            <a href="#">Text 1</a>
            <a href="#">Text 2</a>
            <a href="#">Text 3</a>
        </div>
    </div>
</div>
<div class="col-6 text-right">
    <i id="dropdownIcon" class="fas fa-chevron-down"></i>
</div>

<div class="map-container">
    <h2>Project By Region</h2>
    <div class="map">
        <img id="indonesiaMap" src="images/peta.png" alt="Map of Indonesia">
        <div id="bandung" class="city-overlay" data-city="West Java, Bandung"></div>
        <!-- Tambahkan lebih banyak kota sesuai kebutuhan -->
    </div>
    <div id="location-info" class="location-info"></div>
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
                <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50" aria-valuemin="0"
                    aria-valuemax="100"></div>
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
        <h4>Kumpulkan report <br />Bulanan</h4>
    </div>
    <button class="btn btn-report">
    <a href="laporanproject" style="text-decoration: none; color: inherit;">
        <i class="fas fa-file-alt"></i> Report Project
    </a>
</button>

</div>

<div class="sdg-container">
    <div class="grid">
        <div class="grid-item" data-index="1"><img src="images/E-WEB-Goal-01.png" alt="Goal 1"></div>
        <div class="grid-item" data-index="2"><img src="images/E-WEB-Goal-02.png" alt="Goal 2"></div>
        <div class="grid-item" data-index="3"><img src="images/E-WEB-Goal-03.png" alt="Goal 3"></div>
        <div class="grid-item" data-index="4"><img src="images/E-WEB-Goal-04.png" alt="Goal 4"></div>
        <div class="grid-item" data-index="5"><img src="images/E-WEB-Goal-05.png" alt="Goal 5"></div>
        <div class="grid-item" data-index="6"><img src="images/E-WEB-Goal-06.png" alt="Goal 6"></div>
        <div class="grid-item" data-index="7"><img src="images/E-WEB-Goal-07.png" alt="Goal 7"></div>
        <div class="grid-item" data-index="8"><img src="images/E-WEB-Goal-08.png" alt="Goal 8"></div>
        <div class="grid-item" data-index="9"><img src="images/E-WEB-Goal-09.png" alt="Goal 9"></div>
        <div class="grid-item" data-index="10"><img src="images/E-WEB-Goal-10.png" alt="Goal 10"></div>
        <div class="grid-item" data-index="11"><img src="images/E-WEB-Goal-11.png" alt="Goal 11"></div>
        <div class="grid-item" data-index="12"><img src="images/E-WEB-Goal-12.png" alt="Goal 12"></div>
        <div class="grid-item" data-index="13"><img src="images/E-WEB-Goal-13.png" alt="Goal 13"></div>
        <div class="grid-item" data-index="14"><img src="images/E-WEB-Goal-14.png" alt="Goal 14"></div>
        <div class="grid-item" data-index="15"><img src="images/E-WEB-Goal-15.png" alt="Goal 15"></div>
        <div class="grid-item" data-index="16"><img src="images/E-WEB-Goal-16.png" alt="Goal 16"></div>
        <div class="grid-item" data-index="17"><img src="images/E-WEB-Goal-17.png" alt="Goal 17"></div>
    </div>
    <button class="submit-button">Submit</button>
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
<script src="{{ asset('js/homepage/home.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
