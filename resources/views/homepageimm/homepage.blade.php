<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        html,
        body {
            height: 178%;
            margin: 0;
            font-family: "Roboto", sans-serif;
        }

        /* Navbar */
        .navbar {
            background-color: #ffffff;
            color: #000000;
            padding: 15px 0;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1000;
            border-bottom: 3px solid #5940cb;
        }

        .navbar-nav .nav-item .nav-link {
            color: #000000;
        }

        .navbar-nav .nav-item .nav-link:hover {
            color: #5940cb;
            text-decoration: underline;
        }

        .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Footer */
        .footer {
            background-color: #5940cb;
            color: #ffffff;
            padding: 48px 0;
            text-align: center;
            position: absolute;
            bottom: -1561px;
            width: 80%;
            left: 10%;
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            border-bottom-left-radius: 0;
            border-bottom-right-radius: 0;
            z-index: 1000;
        }

        .footer-container {
            max-width: 594px;
            margin: 0 auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-info h3 {
            margin: 0;
            font-size: 20px;
            position: absolute;
            right: 860px;
            top: 20px;
        }

        .brand-info p {
            margin-top: 5px;
            font-size: 14px;
            position: absolute;
            top: 50px;
            right: 750px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 40px;
            right: 280px;
        }

        .footer-nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .footer-nav ul li:last-child {
            margin-right: 0;
        }

        .footer-nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }

        .footer-nav ul li a:hover {
            text-decoration: underline;
        }

        .social-media {
            margin-right: auto;
            position: absolute;
            top: 29px;
            right: 23px;
        }

        .social-media a {
            color: #ffffff;
            text-decoration: none;
            font-size: 20px;
            margin-left: 10px;
        }

        .footer-description {
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-social-media {
            margin-bottom: -10px;
            /* Jarak antara teks Social Media dan ikon */
            position: relative;
            top: -19px;
            right: -5px;
        }

        .dashboard-image {
            width: 219px;
            height: 142px;
            position: relative;
            top: -139px;
            right: -445px;
        }
        .box {
            background-color: #f0f0f0;
            border-radius: 4px;
            box-shadow: 0 0 13px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: absolute;
            top: 692px;
            right: 466px;
            width: 684px;
            padding: 14px;
        }

        .box1 {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 17px;
            box-shadow: 0 0 13px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: absolute;
            top: 693px;
            right: 100px;
            width: 287px;
        }

        .box2 {
            background-color: #f0f0f0;
            padding: 10px;
            border-radius: 14px;
            box-shadow: 0 0 13px rgba(0, 0, 0, 0.1);
            text-align: center;
            position: absolute;
            top: 839px;
            right: 100px;
            width: 287px;
        }

        .balance-card,
        .outcome-card {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 20px;
        }

        .balance-card i,
        .outcome-card i {
            font-size: 24px;
            position: relative;
            right: -13px;
            top: -35px;
        }

        .balance-card {
            color: #ffa500;
        }

        .outcome-card {
            color: #ff6347;
        }

        h3 {
            margin: 0;
            font-size: 26px;
            position: relative;
            top: -6px;
            right: -22px;
        }

        p {
            margin-top: 0;
            margin-bottom: 1rem;
            position: relative;
            right: -17px;
            top: -9px;
        }

        .analytics-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        .progress-bar-container {
            width: 100%;
            background-color: #f0f0f0;
            border-radius: 4px;
            margin-bottom: 20px;
        }

        .progress {
            height: 20px;
            background-color: #ced0d2;
            border-radius: 10px;
            margin: 0;
        }

        .progress-bar {
            height: 100%;
            background-color: #5940cb;
            border-radius: 10px;
        }

        .report-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-size: cover;
            background-position: center;
            padding: 72px;
            border-radius: 11px;
            margin: 380px 20px 0;
            color: #fff;
            margin-left: 69px;
            margin-right: 114px;
            position: relative;
            top: 259px;
        }

        .report-container .text-content {
            flex-grow: 1;
            margin-right: 20px;
            /* Menambahkan margin kanan */
        }

        .report-container .btn-report {
            background-color: rgb(106, 90, 205);
            color: white;
            border: none;
            padding: 14px 34px;
            border-radius: 9px;
            position: relative;
            top: 75px;
            display: flex;
            align-items: center;
            transition: all 0.3s ease;
            /* Animasi transisi yang halus untuk semua properti */
        }

        .report-container .btn-report:hover,
        .report-container .btn-report:focus {
            background-color: rgb(126,
                    110,
                    225);
            /* Menerangkan warna latar saat hover atau fokus */
            transform: scale(1.05);
            /* Membesar sedikit saat di-hover atau di-focus */
            box-shadow: 0 8px 16px rgba(106, 90, 205, 0.2);
            /* Menambah bayangan untuk efek "mengangkat" */
        }

        .report-container .btn-report:active {
            transform: scale(0.95);
            /* Mengecil sedikit saat diklik */
        }

        .report-container .btn-report i {
            margin-right: 10px;
            /* Jarak antara ikon dan teks */
        }

        h4 {
            font-size: 39px;
            /* Ukuran font yang lebih besar */
            color: #ffffff;
            /* Warna teks putih untuk kontras yang baik pada latar belakang gelap */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            /* Bayangan teks untuk meningkatkan keterbacaan */
            font-weight: bold;
            /* Membuat font tebal */
            line-height: 1.2;
            /* Menyesuaikan tinggi baris untuk penampilan yang lebih baik */
        }

        .notification-section {
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 10px;
            background-color: #fff;
            display: flex;
            align-items: center;
            position: relative;
            top: 90px;
            width: 1130px;
            cursor: pointer;
        }

        .row {
            display: flex;
            width: 100%;
            /* Ensure the row takes full width */
            justify-content: space-between;
            align-items: center;
        }

        .col-6 {
            flex: 0 0 50%;
            max-width: 50%;
        }

        #notificationText {
            display: flex;
            align-items: center;
            font-size: 16px;
            font-weight: bold;
        }

        #dropdownContent {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background-color: #f9f9f9;
            min-width: 100%;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            border-radius: 5px;
            overflow: hidden;
        }

        #dropdownContent a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        #dropdownContent a:hover {
            background-color: #f1f1f1;
        }

        .notification-section.active #dropdownContent {
            display: block;
        }

        .notification-section p {
            margin: 8px;
            font-weight: bold;
            position: absolute;
            top: -20px;
            right: 427px;
        }

        .notification-section i {
            cursor: pointer;
            position: relative;
            top: -2px;
            right: -19px;
            font-size: 23px;
        }

        .notification-section i:hover {
            color: #007bff;
            /* Change icon color on hover */
        }

        .dropdown-content {
            display: none;
            /* Initially hide the dropdown content */
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .notification-section #notificationText .fa-bell {
            margin-right: -103px;
            margin-top: 2px;
        }

        .notification-section #notificationText .fa-bell {
            font-size: 20px;
            /* Ukuran ikon lonceng */
        }

        .notification-section #notificationText .fa-bell {
            color: #ffcc00;
            /* Warna ikon lonceng */
        }

        .sdg-container {
            max-width: 1017px;
            margin: auto;
            padding: 35px;
            background-color: #5940cb0f;
            border-radius: 7px;
            box-shadow: 0 0 10px rgb(0 0 0 / 46%);
            position: absolute;
            top: 1500px;
            right: 150px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(6, 1fr);
            gap: 10px;
            margin-bottom: 20px;
        }

        .grid-item {
            transition: opacity 0.3s;
            opacity: 0.5;
            cursor: pointer;
        }

        .grid-item img {
            width: 100%;
            display: block;
            border-radius: 4px;
        }

        .grid-item.active {
            opacity: 1;
        }

        .submit-button {
            padding: 10px 20px;
            font-size: 16px;
            background-color: #6c63ff;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #524eff;
        }

        .map-container {
            text-align: left;
            position: relative;
            top: 119px;
            width: 78%;

        }

        .map {
            position: relative;
            display: inline-block;
        }

        .map img {
            width: 100%;
        }

        .city-overlay {
            position: absolute;
            width: 20px;
            height: 20px;
            background: rgba(255, 0, 0, 0.5);
            border-radius: 50%;
            cursor: pointer;
            transition: transform 0.3s ease-in-out;
        }

        #bandung {
            top: 55%;
            /* Sesuaikan posisi berdasarkan peta */
            left: 43%;
            /* Sesuaikan posisi berdasarkan peta */
        }

        .city-overlay.active {
            transform: scale(5);
            z-index: 10;
        }

        .location-info {
            margin-top: 20px;
            font-size: 1.2em;
            font-weight: bold;
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
            <a class="navbar-brand" href="#">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myproject">My Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage">My Company</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
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


    <div class="container">
        <div class="notification-section">
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

    <div class="container-fluid d-flex justify-content-center">
        <div class="map-container">
            <h2>Project By Region</h2>
            <div class="map">
                <img id="indonesiaMap" src="images/peta.png" alt="Map of Indonesia">
                <div id="bandung" class="city-overlay" data-city="West Java, Bandung"></div>
                <!-- Tambahkan lebih banyak kota sesuai kebutuhan -->
            </div>
            <div id="location-info" class="location-info"></div>
        </div>
    </div>

    
    <div class="container d-flex justify-content-center">
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
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
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

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const yearSelector = document.getElementById("yearSelector");
            const totalBalanceElement = document.getElementById("totalBalance");
            const totalOutcomeElement = document.getElementById("totalOutcome");
            const ctx = document.getElementById("myChart").getContext("2d");
            const progressBar = document.querySelector(".progress-bar");

            const data = {
                2023: {
                    income: [30, 25, 35, 40, 45, 50, 55, 60],
                    outcome: [20, 30, 25, 35, 40, 45, 50, 55],
                    balance: "Rp.40.000.000",
                    outcomeTotal: "Rp.30.000.000",
                },
                2024: {
                    income: [40, 30, 20, 25, 40, 35, 20, 15],
                    outcome: [20, 30, 25, 35, 40, 45, 50, 55],
                    balance: "Rp.50.000.000",
                    outcomeTotal: "Rp.10.000.000",
                },
                2025: {
                    income: [50, 40, 30, 35, 50, 45, 30, 25],
                    outcome: [20, 30, 25, 35, 40, 45, 50, 55],
                    balance: "Rp.60.000.000",
                    outcomeTotal: "Rp.20.000.000",
                },
            };

            const myChart = new Chart(ctx, {
                type: "bar",
                data: {
                    labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
                    datasets: [{
                            label: "Income",
                            backgroundColor: "#6A5ACD",
                            data: data["2023"].income,
                        },
                        {
                            label: "Outcome",
                            backgroundColor: "#87CEEB",
                            data: data["2023"].outcome,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            position: "top",
                        },
                        tooltip: {
                            mode: "index",
                            intersect: false,
                        },
                    },
                    scales: {
                        x: {
                            beginAtZero: true,
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                callback: function(value) {
                                    return value + "K";
                                },
                            },
                        },
                    },
                },
            });

            yearSelector.addEventListener("change", function() {
                const selectedYear = yearSelector.value;
                myChart.data.datasets[0].data = data[selectedYear].income;
                myChart.data.datasets[1].data = data[selectedYear].outcome;
                myChart.update();

                totalBalanceElement.textContent = data[selectedYear].balance;
                totalOutcomeElement.textContent = data[selectedYear].outcomeTotal;

                updateProgressBar(selectedYear);
            });

            function updateProgressBar(selectedYear) {
                if (selectedYear === "2024") {
                    progressBar.style.width = "20%";
                    progressBar.setAttribute("aria-valuenow", "20");
                } else if (selectedYear === "2023") {
                    progressBar.style.width = "40%";
                    progressBar.setAttribute("aria-valuenow", "40");
                } else if (selectedYear === "2025") {
                    progressBar.style.width = "60%";
                    progressBar.setAttribute("aria-valuenow", "60");
                } else {
                    progressBar.style.width = "0%";
                    progressBar.setAttribute("aria-valuenow", "0");
                }
            }

            // Set initial state
            updateProgressBar(yearSelector.value);
        });

        document.addEventListener("DOMContentLoaded", function() {
            const notificationSection = document.querySelector(".notification-section");
            const dropdownContent = document.getElementById("dropdownContent");

            notificationSection.addEventListener("click", function() {
                this.classList.toggle("active");
            });

            window.addEventListener("click", function(event) {
                if (!notificationSection.contains(event.target)) {
                    notificationSection.classList.remove("active");
                }
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const gridItems = document.querySelectorAll(".grid-item");

            gridItems.forEach((item) => {
                item.addEventListener("click", function() {
                    this.classList.toggle("active");
                });
            });

            const submitButton = document.querySelector(".submit-button");
            submitButton.addEventListener("click", function() {
                const selectedItems = document.querySelectorAll(".grid-item.active");
                const selectedIndexes = Array.from(selectedItems).map((item) =>
                    item.getAttribute("data-index")
                );
                alert("Selected SDGs: " + selectedIndexes.join(", "));
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const cityOverlays = document.querySelectorAll(".city-overlay");
            const locationInfo = document.getElementById("location-info");

            cityOverlays.forEach((overlay) => {
                overlay.addEventListener("click", function() {
                    cityOverlays.forEach((o) => o.classList.remove("active"));
                    this.classList.add("active");
                    const cityName = this.getAttribute("data-city");
                    locationInfo.textContent = cityName;
                });
            });
        });

        // 
    </script>
</body>

</html>
