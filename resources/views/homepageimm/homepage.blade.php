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

    <div class="container-fluid d-flex justify-content-center " style="padding-top: 120px;">
        <div class="map-container">
            <h2>Proyek Berdasarkan Wilayah</h2>
            <div class="map">
                <img id="indonesiaMap" src="images/peta.png" alt="Map of Indonesia">
                {{-- <div id="bandung" class="city-overlay" data-city="{{$company->provinsi}},{{$company->kabupaten}}"></div> --}}
                <!-- Add more cities as needed -->
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
                <div class=" w-100 d-flex justify-content-between">
                    <i class="fas fa-chart-line mb-3"></i>
                </div>
               
                <span>Total Outcome</span>
                <span class="price" id="totalOutcome">Rp.{{ number_format($totalOutcome, 0, ',', '.') }}</span>
            </div>
        </div>
    </div>
    
        <div class="container d-flex justify-content-center mt-5">
       <a href="kelolapengeluaran"><button class="btn-kelola">Kelola Pengeluaran</button></div></a> 
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

    <script>
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