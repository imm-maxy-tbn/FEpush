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

    <style>
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
            <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                <ul class="navbar-nav >
                    <li class="nav-item">
                    <a class="nav-link active" href="homepage">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myproject">My Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage">My Company</a>
                    </li>

                </ul>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
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


    {{-- diagram --}}
    <div class="container d-flex justify-content-center align-items-start">

        <div class="col-8 d-flex justify-content-start">
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
        <div class="col-4 d-flex flex-column align-items-end justify-content-end" style="gap: 20px">

            <div class="box1">
                <div class="balance-card">
                    <i class="fas fa-wallet mb-3"></i>

                    <span>Total Balance</span>
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
    {{-- End Diagram --}}


    {{-- Survey --}}
    <div class="container mt-5">
        <div class="report-container" style="background-image: url('images/f1.png');">
            <div class="container h-100 d-flex justify-content-center align-content-center">
                <div class="col d-flex justify-content-center align-items-center">
                    <h4>Kumpulkan report <br />Bulanan</h4>
                </div>
                <div class="col d-flex justify-content-end align-items-center"> <button class="btn btn-report">
                        <a href="laporanproject" style="text-decoration: none; color: inherit;">
                            <i class="fas fa-file-alt"></i> Report Project
                        </a>
                    </button></div>
            </div>




        </div>
    </div>
    {{-- end survey --}}


    {{-- sdg --}}
    <div class="container mt-5">
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
    </div>
    {{-- end sdg --}}

    <footer>
        <div class="container footer mt-5  d-flex justify-content-center align-items-center  ">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-4 d-flex flex-column" style="gap: 20px">
                    <h5 class=" text-white  text-left">IMM</h5>
                    <span class="span-footer text-left">Impact Measurement and Management
                        (TBN INDONESIA X MAXY ACADEMY)</span>
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <ul class=" d-flex " style="gap: 30px">
                        <a href="">
                            <li>HomePage</li>
                        </a>
                        <a href="">
                            <li>Bootcamp</li>
                        </a>
                        <a href="">
                            <li>IMM</li>
                        </a>
                        <a href="">
                            <li>Comunity</li>
                        </a>
                        <a href="">
                            <li>Profile</li>
                        </a>
                    </ul>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center">
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
