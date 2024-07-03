@extends('layouts.app-imm')
@section('title', 'Halaman Perusahaan')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/homepageimm/homeimm.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<style>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript">
    google.charts.load('current', {
        'packages': ['geochart'],
    });
    google.charts.setOnLoadCallback(drawRegionsMap);

    function drawRegionsMap() {
        var projects = @json($allProjects);

        // Combine project names for each province
        var provinceProjects = projects.reduce((acc, project) => {
            if (!acc[project.provinsi]) {
                acc[project.provinsi] = [];
            }
            acc[project.provinsi].push(project.nama);
            return acc;
        }, {});

        var data = google.visualization.arrayToDataTable([
            ['Province', 'Projects', { role: 'tooltip', p: { html: true } }],
            ...Object.entries(provinceProjects).map(([province, projectNames]) => [
                province, 
                projectNames.length, 
                `<div style="padding:5px"><ul>${projectNames.map(name => `<li>${name}</li>`).join('')}</ul></div>`
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
