@extends('layouts.app-imm')
@section('title', 'Proyek Saya')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/myproject/myproject.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<meta name="description" content="Manage your projects efficiently with MyProject">
<meta name="keywords" content="project management, task management, productivity">
<meta name="author" content="Your Name">
<style>
    .navbar {
        position: fixed;
        top: 0;
        width: 100%;
        z-index: 1000;
    }

    body {
        padding-top: 56px;
        /* Adjust this value according to the height of your navbar */
    }

    .see-all-button {
    
        text-align: center;
        margin-top: 20px;
    }

    .see-all-button button {
        background-color: #6c63ff;
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
    }
    .seeAll{
         display: flex;
         align-items: center;
         cursor: pointer;
    }
</style>
@endsection
@section('content')


<body>

 
    <div class="container">
        <h2 class="project-title">Draft Project</h2>
        <div class="row mt-5">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Search..." aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text search-icon" aria-label="Search Button"><i
                                class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <a href="creatproject">
                <button class="btn btn-primary btn-create-project">Create New Project</button>
            </div></a>
        </div>
        <div class="section d-flex justify-content-between justify-content-center">
        <h4 class="project-title mb-5 mt-5">Semua Proyek ({{ $projects->count() }})</h4>
        @if(count($projects) > 6) <h5 class="seeAll" id="show-all-btn">Lihat Semua</h5>@endif
    </div> 


   
    <div class="row mt-3" id="draft-project-list">
        <div class="col-md-12 no-projects mt-3">
            @if($projects->isEmpty())
                <p>Tidak ada proyek yang ditemukan.</p>
            @else
                <div class="row">
                    @foreach($projects as $index => $project)
                        <div class="col-md-4 mb-4" id="project-{{ $project->id }}" @if($index >= 6) style="display: none;" @endif>
                            <div class="card project-card" style="min-height: 300px">
                                <img height="150px" src="{{ env('APP_BACKEND_URL') . '/images/' . $project->img }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project->nama }}</h5>   
                                    <div class=" d-flex">
                                    <a href="detail" class="btn btn-secondary btn-detail mt-2">Detail</a>
                                    <button class="btn btn-danger mt-2" onclick="deleteProject('project-{{ $project->id }}', {{ $index }})">Delete</button></div>
                              
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              
            @endif
        </div>
    </div>
   
    </div>

    <div class="container">
        <h2 class="project-title mb-5 mt-5">On Going Project</h2>
        <div class="d-flex justify-content-between align-items-center mt-3 ongoing-projects-filters">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Today
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">This Week</a>
                    <a class="dropdown-item" href="#">This Month</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    0 of 0
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                    <a class="dropdown-item" href="#">0 of 0</a>
                    <a class="dropdown-item" href="#">1 of 1</a>
                </div>
            </div>
        </div>
        <table class="table mt-3 ongoing-projects-table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Date</th>
                    <th>Impact</th>
                    <th>SDGs</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="ongoing-project-list">
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->nama }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>{{ $project->sdgs->implode('order', ', ') }}</td>
                    <td>{{ $project->jumlah_pendanaan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
  

        <h2 class="project-title mb-5 mt-5">Done Projects</h2>
        <div class="card mt-3 done-projects-card">
            <div class="card-header d-flex justify-content-between align-items-center done-projects-header">
                <span>Proyek Selesai</span>
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle done-projects-dropdown-toggle" type="button"
                        id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Bulan</span> <i class="fas fa-calendar-alt ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item" href="#">Hari</a>
                        <a class="dropdown-item" href="#">Minggu</a>
                        <a class="dropdown-item" href="#">Bulan</a>
                    </div>
                </div>
            </div>
            <table class="table mt-3 done-projects-table">
                <thead>
                    <tr>
                        <th>Nama Proyek</th>
                        <th>tanggal penyelesaian</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="done-project-list">
                    <!-- Existing completed projects -->
                    @foreach($projects as $project)
                <tr>
                    <td>{{ $project->nama }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td><div class="span bg-success text-white" style="padding: 5px 0; border-radius:50px">Succes</div></td>
             
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" async></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
   <script>
    document.querySelector('.seeAll').addEventListener('click', function() {
        document.querySelectorAll('#draft-project-list .col-md-4').forEach(function(project, index) {
            if (index >= 6) {
                project.style.display = 'block';
            }
        });
        document.querySelector('.seeAll').style.display = 'none';
    });

    document.getElementById('show-all-btn').addEventListener('click', function() {
        document.querySelectorAll('#draft-project-list .col-md-4').forEach(function(project) {
            project.style.display = 'block';
        });
        document.getElementById('show-all-btn').style.display = 'none';
    });
</script>
</body>

@endsection
