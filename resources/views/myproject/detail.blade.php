<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Detail Projek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepageimm/detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

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
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">IMM <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Image Section -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <img src="{{ asset('images/2.png') }}" class="header-image" alt="Header Image">
            </div>
        </div>
    </div>

    <!-- New Section Below Image -->
    <div class="container mt-3">
        <div class="row content-wrapper">
            <div class="left-content">
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Nama Project</h5>
                        <input type="text" class="form-control" value="{{ $project->nama }}" readonly>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Deskripsi Project</h5>
                        {{ $project->deskripsi }}
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">SDG'S</h5>
                        <div class="row">
                            @foreach ($project->sdgs as $sdg)
                                <div class="col-4">
                                    <img src="{{ env('APP_BACKEND_URL') . '/images/' . $sdg->img }}" class="img-fluid"
                                        alt="{{ $sdg->name }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Indicators</h5>
                        <ul class="list-group">
                            @foreach ($project->indicators as $indicator)
                                <li class="list-group-item d-flex align-items-start">
                                    <span class="badge badge-primary badge-pill mr-3"><i
                                            class="fas fa-check"></i></span>
                                    {{ $indicator->order }}. {{ $indicator->name }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                <div class="right-content">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="input-container">
                                <div class="left">
                                    <h5 class="card-title">Metrix Anda</h5>
                                </div>
                                {{-- <div class="right">
                                <button class="btn btn-primary">Cari yang berkaitan dengan Metrix Anda</button>
                            </div> --}}
                            </div>
                            <ul class="list-group mt-3">
                                @foreach ($project->metrics as $metric)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        <a href="impact" class="text-dark">({{ $metric->code }})
                                            {{ $metric->name }}</a>
                                        <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Penggunaan Dana</h5>
                            @php
                                $totalDana = $project->dana->sum('nominal');
                            @endphp
                            @foreach ($project->dana as $dana)
                                @php
                                    $percentage = $totalDana > 0 ? ($dana->nominal / $totalDana) * 100 : 0;
                                @endphp
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <span>{{ $dana->jenis_dana }}</span>
                                        <span
                                            class="font-weight-bold">{{ number_format($dana->nominal, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $percentage }}%;" aria-valuenow="{{ $percentage }}"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            @endforeach
                            <div>
                                <div class="d-flex justify-content-between">
                                    <span>Total Dana</span>
                                    <span class="font-weight-bold">{{ number_format($totalDana, 0, ',', '.') }}</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <p class="mt-3 text-center">Total Dana Untuk Proyek Ini Telah Terpenuhi</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="container d-flex justify-content-center" style="gap: 20px; ">
                <a href="detail" class=""><button type="button"
                        style="font-weight:bold; border: 1px solid #000" class="btn w-25 ">Reset</a></button>
                <a href="myproject" class="text-white"><button type="button" style="font-weight:bold"
                        class="btn w-25 btn-primary">Simpan</a></button>
            </div>

            <footer>
                <div class="container footer mt-5 d-flex justify-content-center align-items-center">
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-4 d-flex flex-column" style="gap: 20px">
                            <h5 class="text-white text-left">IMM</h5>
                            <span class="span-footer text-left">Impact Measurement and Management
                                <br> (TBN INDONESIA X MAXY ACADEMY)</span>
                        </div>
                        <div class="col-5 d-flex justify-content-center align-items-center">
                            <ul class="d-flex" style="gap: 30px">
                                <a href="#">
                                    <li>HomePage</li>
                                </a>
                                <a href="#">
                                    <li>Bootcamp</li>
                                </a>
                                <a href="#">
                                    <li>IMM</li>
                                </a>
                                <a href="#">
                                    <li>Community</li>
                                </a>
                                <a href="#">
                                    <li>Profile</li>
                                </a>
                            </ul>
                        </div>
                        <div class="col-3 d-flex flex-column justify-content-center" style="gap: 30px">
                            <span class="span-footer text-center">Sosial Media</span>
                            <div class="sosmed d-flex justify-content-end">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>

            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
            <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>
