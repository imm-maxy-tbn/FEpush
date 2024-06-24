@extends('layouts.app-imm')
@section('title', 'Homepage')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/homepageimm/homeimm.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
    .boxxx{
        display: flex;
        justify-content: start;
        flex-direction: column;
    }
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
        background-color: #fff;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .navbar-nav .nav-item .nav-link {
        margin-right: 10px;
    }
    
    .notification-section {
        margin-top: 20px;
    }

    .notification-section .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 100%;
        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
        z-index: 1;
        left: 0;
        right: 0;
    }

    .notification-section.active .dropdown-content {
        display: block;
    }

    .map-container {
        margin-top: 20px;
        position: relative;
    }

    .map img {
        width: 100%;
        height: auto;
    }

    .city-overlay {
        position: absolute;
        cursor: pointer;
    }

    .location-info {
        margin-top: 10px;
    }

    .box, .box1, .box2 {
        background: #fff;
        padding: 20px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

  

    .sdg-container .grid-item {
        cursor: pointer;
    }

    .grid-item img {
        width: 100%;
        height: auto;
    }

    @media (max-width: 768px) {
        .navbar-nav .nav-item .nav-link {
            margin-right: 0;
            margin-bottom: 10px;
        }

        .box, .box1, .box2 {
          
        }

    }

    @media (max-width: 576px) {
        .analytics-title, .balance-card, .outcome-card, .report-container h4, .sdg-container .grid-item img {
            font-size: 14px;
        }

        .navbar-brand, .navbar-nav .nav-link {
            font-size: 14px;
        }

        .btn-report {
            font-size: 14px;
            padding: 5px 10px;
        }

        .progress-bar-container, .map-container {
            width: 100%;
            overflow-x: auto;
        }

        .progress-bar {
            width: 100%;
        }

        .box1,.box2{
            background-color: white;
padding: 10px;
border-radius: 17px;
text-align: center;
width: 140px;
border: 1px solid #d1d1d1;
        }
        .price{
            font-size: 10px
        }

        .boxxx{
            display:flex;
            justify-content: space-evenly;
            flex-direction: row;
            

        }

    }
</style>
@endsection
@section('content')


<body>
    <div class="container" style="padding-top: 80px;">
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

    <div class="container-fluid d-flex justify-content-center">
        <div class="map-container">
            <h2>Project By Region</h2>
            <div class="map">
                <img id="indonesiaMap" src="images/peta.png" alt="Map of Indonesia">
                <div id="bandung" class="city-overlay" data-city="{{$company->provinsi}},{{$company->kabupaten}}"></div>
                <!-- Add more cities as needed -->
            </div>
            <div id="location-info" class="location-info"></div>
        </div>
    </div>

    <div class="container d-flex flex-column flex-lg-row justify-content-center align-items-start">
        <div class="col-lg-8 d-flex flex-column justify-content-start">
            <div class="box">
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="analytics-title">Analytics</h2>
                    <select id="yearSelector" class="form-control w-auto">
                        <option value="2023">2023</option>
                        <option value="2024" selected>2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
                <canvas id="myChart" width="750" height="358"></canvas>
                <div class="progress-bar-container">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="boxxx col-lg-4 ">
            <div class="box1">
                <div class="balance-card">
                    <i class="fas fa-wallet mb-3"></i>
                    <span class="total-text">Total Balance</span>
                    <span class="price" id="totalBalance">Rp.50.000.000</span>
                </div>
            </div>
            <div class="box2">
                <div class="outcome-card">
                    <i class="fas fa-chart-line mb-3"></i>
                    <span>Total Outcome</span>
                    <span class="price" id="totalOutcome">Rp.10.000.000</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="report-container" style="background-image: url('images/f1.png');">
            <div class="container h-100 d-flex justify-content-center align-content-center">
                <div class="col d-flex justify-content-center align-items-center">
                    <h4>Kumpulkan report <br />Bulanan</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center">
                    <button class="btn btn-report">
                        <a href="laporanproject" style="text-decoration: none; color: inherit;">
                            <i class="fas fa-file-alt"></i> Report Project
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="sdg-container">
            <div class="grid">
                <div class="grid-item" data-index="1"><img src="images/E-WEB-Goal-1.png" alt="Goal 1"></div>
                <div class="grid-item" data-index="2"><img src="images/E-WEB-Goal-2.png" alt="Goal 2"></div>
                <div class="grid-item" data-index="3"><img src="images/E-WEB-Goal-3.png" alt="Goal 3"></div>
                <div class="grid-item" data-index="4"><img src="images/E-WEB-Goal-4.png" alt="Goal 4"></div>
                <div class="grid-item" data-index="5"><img src="images/E-WEB-Goal-5.png" alt="Goal 5"></div>
                <div class="grid-item" data-index="6"><img src="images/E-WEB-Goal-6.png" alt="Goal 6"></div>
                <div class="grid-item" data-index="7"><img src="images/E-WEB-Goal-7.png" alt="Goal 7"></div>
                <div class="grid-item" data-index="8"><img src="images/E-WEB-Goal-8.png" alt="Goal 8"></div>
                <div class="grid-item" data-index="9"><img src="images/E-WEB-Goal-9.png" alt="Goal 9"></div>
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
    </div>

   

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
    </script>
</body>

@endsection