@extends('layouts.app-imm')
@section('title', 'Detail Project')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/homepageimm/detail.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection
@section('content')



<body>




    <!-- Image Section -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-12">
                <img src="images/2.png" class="header-image" alt="Header Image">
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
                        <input type="text" class="form-control" value="Computer Departement">
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title"> {{$project->nama}} </h5>
                       {{$program->deskripsi}}
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">SDG'S</h5>
                        <div class="row">
                            <div class="col-4"> 
                                <img src="{{ asset('images/ASVG/sdg1.svg') }}" class="img-fluid" alt="SDG 4">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('images/ASVG/sdg2.svg') }}" class="img-fluid" alt="SDG 9">
                            </div>
                            <div class="col-4">
                                <img src="{{ asset('images/ASVG/sdg3.svg') }}" class="img-fluid" alt="SDG 10">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Indicator</h5>
                        <ul class="list-group">
                            <li class="list-group-item d-flex align-items-start">
                                <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                                4.1.1.(a) Proporsi anak-anak dan remaja di: (a) kelas 5 (b) kelas 8, dan (c) usia 15
                                tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii)
                                matematika.
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                                4.4.1.(a) Proporsi remaja (usia 15-24 tahun) dan dewasa (usia 15-59 tahun) dengan
                                keterampilan teknologi informasi dan komunikasi (TIK).
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                                9.5.2 Jumlah sumber daya manusia bidang ilmu pengetahuan dan teknologi (peneliti,
                                perekayasa, dan dosen) pada instansi pemerintah dan perguruan tinggi per satu juta
                                penduduk.
                            </li>
                            <li class="list-group-item d-flex align-items-start">
                                <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                                10.4.1.(b) Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="right-content">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="input-container">
                            <div class="left">
                                <h5 class="card-title">Metrix Anda</h5>
                            </div>
                            <div class="right">
                                <button class="btn btn-primary">Cari yang berkaitan dengan Metrix Anda</button>
                            </div>
                        </div>
                        <ul class="list-group mt-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="impact" class="text-dark">Assets Under Management: Total</a>
                                <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                                <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                                <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Penggunaan Dana</h5>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Dana Hibah/Grant</span>
                                <span class="font-weight-bold">5.000.000</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;"
                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="d-flex justify-content-between">
                                <span>Dana Pribadi</span>
                                <span class="font-weight-bold">15.000.000</span>
                            </div>
                            <div class="progress">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;"
                                    aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div>
                            <div class="d-flex justify-content-between">
                                <span>Total Dana</span>
                                <span class="font-weight-bold">20.000.000</span>
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

        <div class="right-content">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="input-container">
                        <div class="left">
                            <h5 class="card-title">Metrix Anda</h5>
                        </div>
                        <div class="right">
                            <button class="btn btn-primary">Cari yang berkaitan dengan Metrix Anda</button>
                        </div>
                    </div>
                    <ul class="list-group mt-3">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="impact" class="text-dark">Assets Under Management: Total</a>
                            <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                            <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                            <span class="badge badge-primary badge-pill"><i class="fas fa-check"></i></span>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Penggunaan Dana</h5>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Dana Hibah/Grant</span>
                            <span class="font-weight-bold">5.000.000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <span>Dana Pribadi</span>
                            <span class="font-weight-bold">15.000.000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div>
                        <div class="d-flex justify-content-between">
                            <span>Total Dana</span>
                            <span class="font-weight-bold">20.000.000</span>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <p class="mt-3 text-center">Total Dana Untuk Proyek Ini Telah Terpenuhi</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center" style="gap: 20px; ">
        <a href="detail" class=""><button type="button" style="font-weight:bold; border: 1px solid #000"
                class="btn w-25 ">Reset</a></button>
        <a href="myproject" class="text-white"><button type="button" style="font-weight:bold"
                class="btn w-25 btn-primary">Simpan</a></button>
    </div>

    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>

</body>

@endsection
