@extends('layouts.app-imm')
@section('title', 'Homepage')

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
                    <span class="price" id="totalBalance">Rp.50.000.000</span>
                </div>
            </div>
            <div class="box2">
                <div class="outcome-card">
                    <div class=" w-100 d-flex justify-content-between">
                        <i class="fas fa-chart-line mb-3"></i>
                        <i class="fas fa-edit edit-icon" data-toggle="modal" data-target="#exampleModal"></i>
                    </div>
                   
                    <span>Total Outcome</span>
                    <span class="price" id="totalOutcome">Rp.10.000.000</span>
  
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center mt-5">
       <a href="kelolapengeluaran"><button class="btn-kelola">Kelola Pengeluaran</button></div></a> 
    </div>

    <!-- Button trigger modal -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Masukkan pengeluaran dana hibah</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         <input type="number" class="form-control" placeholder="Rp 12.000.000">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
          <button type="button" class="btn btn-primary">Tambah Grant</button>
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
     </body>

@endsection