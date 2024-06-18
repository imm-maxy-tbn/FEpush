<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepageimm/detail.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    
</head>
<body>
 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" href="/homepage">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/myproject">My Project</a>
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



<!-- New Section Below Navbar -->
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <img src="images/2.png" class="card-img-top" alt="Project Image">
                <div class="card-body">
                    <h5 class="card-title">Nama Project</h5>
                    <input type="text" class="form-control" value="Computer Departement">
                    <h5 class="card-title mt-3">Deskripsi Project</h5>
                    <div class="card">
                        <div class="card-body">
                            Proyek komprehensif yang bertujuan untuk memanfaatkan teknologi dan ilmu komputer untuk mencapai berbagai Tujuan Pembangunan Berkelanjutan (SDGs). Proyek ini dilaksanakan oleh Departemen Komputer untuk mendorong inovasi, mempromosikan pendidikan, dan memastikan pembangunan berkelanjutan melalui penerapan teknologi dan penelitian terkini.
                        </div>
                    </div>
                    <h5 class="card-title mt-3">SDG'S</h5>
                    <div class="row">
                        <div class="col-4">
                            <img src="images/E-WEB-Goal-01.png" class="img-fluid" alt="SDG 4">
                        </div>
                        <div class="col-4">
                            <img src="images/E-WEB-Goal-02.png" class="img-fluid" alt="SDG 9">
                        </div>
                        <div class="col-4">
                            <img src="images/E-WEB-Goal-03.png" class="img-fluid" alt="SDG 10">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
        <h5 class="card-title">Metrix Anda</h5>
            <button class="btn btn-primary">Cari yang berkaitan dengan Metrix Anda</button>
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
        </div>
    </div>
</div>

<div class="container mt-4">
    <div class="row">
        <div class="col-12">
            <h5 class="font-weight-bold">Indicator</h5>
            <div class="card">
                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item d-flex align-items-start">
                            <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                            4.1.1.(a) Proporsi anak-anak dan remaja di: (a) kelas 5 (b) kelas 8, dan (c) usia 15 tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii) matematika.
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                            4.4.1.(a) Proporsi remaja (usia 15-24 tahun) dan dewasa (usia 15-59 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK).
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                            9.5.2 Jumlah sumber daya manusia bidang ilmu pengetahuan dan teknologi (peneliti, perekayasa, dan dosen) pada instansi pemerintah dan perguruan tinggi per satu juta penduduk.
                        </li>
                        <li class="list-group-item d-flex align-items-start">
                            <span class="badge badge-primary badge-pill mr-3"><i class="fas fa-check"></i></span>
                            10.4.1.(b) Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="text-center mt-3">
                <button class="btn btn-secondary mr-2">Reset</button>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


<footer>
    <div class="container footer mt-5 d-flex justify-content-center align-items-center  ">
        <div class="row d-flex  justify-content-center align-items-center">
            <div class="col-4 d-flex flex-column" style="gap: 20px">
                <h5 class=" text-white  text-left">IMM</h5>
                <span class="span-footer text-left">Impact Measurement and Management
                        <br> (TBN INDONESIA X MAXY ACADEMY)</span>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <ul class=" d-flex " style="gap: 30px">
                    <a href=""><li>HomePage</li></a>
                    <a href=""><li>Bootcamp</li></a>
                    <a href=""><li>IMM</li></a>
                    <a href=""><li>Comunity</li></a>
                    <a href=""><li>Profile</li></a>
                </ul>
            </div>
            <div class="col-3 d-flex flex-column justify-content-center" style="gap: 30px">
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
</html>
