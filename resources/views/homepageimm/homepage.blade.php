@extends('layouts.app-imm')
@section('title', 'Halaman Perusahaan')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap");
html,
body {
    margin: 0;
    font-family: "Poppins", sans-serif;
}

* {
    text-decoration: none;
    list-style-type: none;
}

.edit-icon {
    cursor: pointer;
    font-size: 1.2rem;
    color: #007bff;
}

.btn-kelola {
    width: 240px;
    height: 43px;
    background-color: #524eff;
    color: white;
    font-size: 20px;
    border: none;
    border-radius: 5px;
}


/* end footer */

.boxx {
    gap: 40px;
}

.box1 {
    background-color: white;
    padding: 10px;
    border-radius: 17px;
    text-align: center;
    width: 100%;
    border: 1px solid #d1d1d1;
}

.box2 {
    border: 1px solid #d1d1d1;
    background-color: white;
    padding: 10px;
    border-radius: 14px;
    text-align: center;
    width: 100%;
}

.balance-card,
.outcome-card {
    display: flex;
    flex-direction: column;
    align-items: start;
    margin-top: 20px;
}

.balance-card i,
.outcome-card i {
    font-size: 24px;
}

.balance-card {
    color: #ffa500;
}

.outcome-card {
    color: #ff6347;
}

span {
    color: #acacac;
}

.price {
    font-size: 24px;
    font-weight: 500;
    color: black;
}

p {
    margin-top: 0;
    margin-bottom: 1rem;
    position: relative;
    right: -17px;
    top: -9px;
}

h4 {
    font-size: 39px;
    /* Ukuran font yang lebih besar */
    color: #ffffff;
    /* Warna teks putih untuk kontras yang baik pada latar belakang gelap */
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

.sdg-container {
    width: 100%;
    padding: 35px;
    background-color: #5940cb0f;
    border-radius: 7px;
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
    margin: 100px 0;
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


/* Menambahkan transisi pada navbar */
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
    #outer-wrapper {
        width: 1268px;
        height: 480px;  /* Set a fixed height to control the map display area */
        overflow: hidden;
        position: relative;
    }
    #inner-wrapper {
        position: absolute;
        top: -130px;  /* Adjust this value to move the map up */
        height: 800px; /* Adjust this value to ensure the map covers the div and cuts off bottom */
        width: 100%;
    }
    #regions_div {
        width: 100%;
        height: 100%;  /* Make sure the map takes the full height of the inner-wrapper */
    }
    .marker {
    width: 10px;
    height: 10px;
    background-color: red;
    border-radius: 50%;
    position: absolute;
    transform: translate(-50%, -50%);
    }


    .sdg-container .grid-item {
        cursor: pointer;
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

    <div class="container-fluid d-flex justify-content-center" style="padding-top: 120px;">
        <div class="map-container">
            <h2>Proyek Berdasarkan Wilayah</h2>
            <div class="map">
                <div id="outer-wrapper">
                    <div id="inner-wrapper">
                        <div id="map">
                            <div id="regions_div"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="location-info" class="location-info"></div>
        </div>
    </div>
    <div class="modal fade" id="provinceModal" tabindex="-1" aria-labelledby="provinceModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="provinceModalLabel">Detail Proyek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="modal-content">
                        <!-- Content will be dynamically inserted here -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container d-flex boxx justify-content-center">
        <div class="box1">
            <div class="balance-card">
                <i class="fas fa-wallet mb-3"></i>
                <span class="total-text">Total Balance</span>
                <span class="price" id="totalBalance">Rp.{{ number_format($totalBalance, 0, ',', '.') }}</span>
            </div>
        </div>
        <div class="box2">
            <div class="outcome-card">
                <div class="w-100 d-flex justify-content-between">
                    <i class="fas fa-chart-line mb-3"></i>
                </div>
                <span>Total Outcome</span>
                <span class="price" id="totalOutcome">Rp.{{ number_format($totalOutcome, 0, ',', '.') }}</span>
            </div>
        </div>
    </div>
    
    <div class="container d-flex justify-content-center mt-5">
        <a href="kelolapengeluaran"><button class="btn-kelola">Kelola Pengeluaran</button></a> 
    </div>

    <div class="container mt-5">
        <div class="sdg-container">
            <div class="grid">
                @foreach ($sdgs as $sdg)
                    <div class="grid-item" data-index="{{ $sdg->id }}">
                        <img src="images/E-WEB-Goal-{{ $sdg->id }}.png" alt="Goal {{ $sdg->id }}">
                    </div>
                @endforeach
            </div>
        </div>
    </div>



    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['geochart'],
        });
        google.charts.setOnLoadCallback(drawRegionsMap);
    
        function drawRegionsMap() {
            var projects = @json($allProjects);
            var provinceToISO = {
                "Aceh": "ID-AC",
                "Sumatera Utara": "ID-SU",
                "Sumatera Barat": "ID-SB",
                "Riau": "ID-RI",
                "Jambi": "ID-JA",
                "Sumatera Selatan": "ID-SS",
                "Bengkulu": "ID-BE",
                "Lampung": "ID-LA",
                "Kepulauan Bangka Belitung": "ID-BB",
                "Kepulauan Riau": "ID-KR",
                "DKI Jakarta": "ID-JK",
                "Jawa Barat": "ID-JB",
                "Jawa Tengah": "ID-JT",
                "DI Yogyakarta": "ID-YO",
                "Jawa Timur": "ID-JI",
                "Banten": "ID-BT",
                "Bali": "ID-BA",
                "Nusa Tenggara Barat": "ID-NB",
                "Nusa Tenggara Timur": "ID-NT",
                "Kalimantan Barat": "ID-KB",
                "Kalimantan Tengah": "ID-KT",
                "Kalimantan Selatan": "ID-KS",
                "Kalimantan Timur": "ID-KI",
                "Kalimantan Utara": "ID-KU",
                "Sulawesi Utara": "ID-SA",
                "Sulawesi Tengah": "ID-ST",
                "Sulawesi Selatan": "ID-SN",
                "Sulawesi Tenggara": "ID-SG",
                "Gorontalo": "ID-GO",
                "Sulawesi Barat": "ID-SR",
                "Maluku": "ID-MA",
                "Maluku Utara": "ID-MU",
                "Papua": "ID-PA",
                "Papua Barat": "ID-PB",
                "Papua Barat Daya": "ID-PD",
                "Papua Selatan": "ID-PS",
                "Papua Pegunungan": "ID-PP",
                "Papua Tengah": "ID-PT"
            };
    
            var isoToProvince = {};
            for (var province in provinceToISO) {
                isoToProvince[provinceToISO[province]] = province;
            }
    
            // Combine project names and other details for each province
            var provinceProjects = projects.reduce((acc, project) => {
                var provinceCode = provinceToISO[project.provinsi];
                if (!acc[provinceCode]) {
                    acc[provinceCode] = [];
                }
                acc[provinceCode].push({
                    name: project.nama,
                    city: project.kota,
                    gmaps: project.gmaps
                });
                return acc;
            }, {});
    
            var data = google.visualization.arrayToDataTable([
                ['Province', 'Projects', { role: 'tooltip', p: { html: true } }],
                ...Object.entries(provinceProjects).map(([province, projectDetails]) => [
                    {v: province, f: ''},
                    projectDetails.length,
                    `<div style="padding:5px"><strong>${isoToProvince[province]}</strong><ul>${projectDetails.map(detail => `<li>${detail.name}</li>`).join('')}</ul></div>`
                ])
            ]);
    
            var options = {
                region: 'ID',  // Focus on Indonesia
                displayMode: 'regions',
                resolution: 'provinces',  // Show the provinces within Indonesia
                backgroundColor: 'transparent',  // Background color
                datalessRegionColor: 'rgb(89, 64, 203)',  // Color for regions with no data
                colorAxis: {colors: ['rgb(57, 197, 44)', 'rgb(57, 197, 44)']},  // Fixed color for regions with data
                enableRegionInteractivity: true,
                legend: 'none',  // Hide the color legend
                tooltip: { isHtml: true }  // Enable HTML tooltips
            };
    
            var chart = new google.visualization.GeoChart(document.getElementById('regions_div'));
    
            google.visualization.events.addListener(chart, 'regionClick', function(event) {
                var province = isoToProvince[event.region];
                if (province && provinceProjects[event.region]) {
                    var projectDetails = provinceProjects[event.region];
                    var modalContent = `<h5>Proyek di ${province}</h5><ul>`;
                    projectDetails.forEach(detail => {
                        modalContent += `<li><strong>${detail.name}</strong><br>Kota: ${detail.city}<br><a href="${detail.gmaps}" target="_blank">Lihat di Google Maps</a></li>`;
                    });
                    modalContent += `</ul>`;
                    document.getElementById('modal-content').innerHTML = modalContent;
                    $('#provinceModal').modal('show');
                }
            });
    
            chart.draw(data, options);
        }
    
        document.addEventListener('DOMContentLoaded', function() {
            var projects = @json($allProjects);
            var gridItems = document.querySelectorAll('.grid-item');
    
            gridItems.forEach(function(item) {
                var sdgId = item.getAttribute('data-index');
                var isActive = projects.some(function(project) {
                    return project.sdgs.some(function(sdg) {
                        return sdg.id == sdgId;
                    });
                });
    
                if (isActive) {
                    item.classList.add('active');
                }
            });
        });
    </script>
    
</body>

@endsection
