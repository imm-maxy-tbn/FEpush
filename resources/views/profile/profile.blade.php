<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Profile</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile/profile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="imm">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bootcamp">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="imm">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>                <div class="navbar-actions">
                    <a href="login" class="btn btn-primary">Login</a>
                    <a href="register" class="btn btn-outline-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>


<!-- Profile Section -->
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-4 text-center">
            <img src="images/2.png" class="rounded-circle img-fluid" alt="Profile Picture">
            <a href="edit" class="btn btn-outline-primary mt-3">
             <i class="fas fa-edit"></i> Edit
            </a>
        </div>
        <div class="col-md-4">
            <h2>Rizard Hazard</h2>
            <p><i class="fas fa-phone"></i> +628953410080</p>
            <p><i class="fas fa-envelope"></i> rizardhazard@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i> Jl. Rukan Meruya Ilir Bl M/80 Jakarta, Dki Jakarta.</p>
        </div>
        <div class="col-md-4">
            <h3>Keahlian</h3>
            <button class="btn btn-primary btn-block">Digital Marketing</button>
            <button class="btn btn-primary btn-block">UI / UX Desain</button>
            <button class="btn btn-outline-primary btn-block">+Tambah</button>
        </div>
    </div>
</div>

<!-- Tasks Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">
            <div class="task-column">
                <h3 class="column-title">Akan Datang</h3>
                <div class="task-card">
                    <span class="badge badge-category">Marketing</span>
                    <p>Rencana Kampanye Pemasaran</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Sep 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">Mobile App</span>
                    <p>Pembuatan Aplikasi Sederhana</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Sep 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">Mobile App</span>
                    <p>Pembuatan Aplikasi E-Commerce</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Sep 24</span>
                </div>
                <button class="btn btn-outline-primary btn-block mt-3">+ Tambahkan Permasalahan</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="task-column">
                <h3 class="column-title">Proses</h3>
                <div class="task-card">
                    <span class="badge badge-category">Marketing</span>
                    <p>Optimalisasi Kampanye Media Sosial</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">Marketing</span>
                    <p>Optimisasi SEO Untuk Website</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">UI / UX Desain</span>
                    <p>Peninjauan Pengalaman Pengguna</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">UI / UX Desain</span>
                    <p>Revisi Visual Pada Formulir Kontak</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <button class="btn btn-outline-primary btn-block mt-3">+ Tambahkan Permasalahan</button>
            </div>
        </div>
        <div class="col-md-4">
            <div class="task-column">
                <h3 class="column-title">Selesai</h3>
                <div class="task-card">
                    <span class="badge badge-category">Marketing</span>
                    <p>Peningkatan Konversi Email Marketing</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">Marketing</span>
                    <p>Pengembangan Template Iklan Untuk Media Sosial</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <div class="task-card">
                    <span class="badge badge-category">Marketing</span>
                    <p>Evaluasi Dan Penjadwalan Acara Promosi</p>
                    <span class="task-date"><i class="fas fa-clock"></i> Jun 24</span>
                </div>
                <button class="btn btn-outline-primary btn-block mt-3">+ Tambahkan Permasalahan</button>
            </div>
        </div>
    </div>
</div>

<!-- Marketing Bootcamp Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-12">
            <div class="bootcamp-header d-flex align-items-center mb-4">
                <img src="images/2.png" class="bootcamp-icon mr-3" alt="Marketing Bootcamp Icon">
                <h2>Marketing Bootcamp</h2>
                <i class="fas fa-chevron-down ml-2"></i>
            </div>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Ringkasan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">List</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Timeline</a>
                </li>
            </ul>
            <h3 class="mt-4">Agustus</h3>
            <div class="timeline">
                <div class="timeline-row">
                    <span class="timeline-label">Penelitian Dan Perencanaan</span>
                    <div class="timeline-bar" style="left: 0%; width: 50%;"></div>
                </div>
                <div class="timeline-row">
                    <span class="timeline-label">Riset Pasar Dan Analisis Kompetitor</span>
                    <div class="timeline-bar" style="left: 10%; width: 60%;"></div>
                </div>
                <div class="timeline-row">
                    <span class="timeline-label">Pengembangan Strategi Pemasaran Dan Identifikasi Tujuan</span>
                    <div class="timeline-bar" style="left: 30%; width: 40%;"></div>
                </div>
                <div class="timeline-row">
                    <span class="timeline-label">Pemasaran Media Sosial Dan Pembuatan Konten</span>
                    <div class="timeline-bar" style="left: 70%; width: 20%;"></div>
                </div>
            </div>
            <div class="language-selection mt-4">
                <h4>Pilihan Bahasa</h4>
                <button class="btn btn-primary"><i class="fas fa-language"></i> Bahasa Indonesia</button>
            </div>
            <button class="btn btn-primary mt-4"><i class="fas fa-sign-out-alt"></i> Log Out</button>
        </div>
    </div>
</div>

<!-- <footer>
    <div class="container footer mt-5 d-flex justify-content-center align-items-center  ">
        <div class="row d-flex  justify-content-center align-items-center">
            <div class="col-4 d-flex flex-column" style="gap: 20px">
                <h5 class=" text-white  text-left">IMM</h5>
                <span class="span-footer text-left">Impact Measurement and Management
                        <br> (TBN INDONESIA X MAXY ACADEMY)</span>
            </div>
            <div class="col-5 d-flex justify-content-center align-items-center">
                <ul class=" d-flex " style="gap: 30px">
                    <a href="/"><li>HomePage</li></a>
                    <a href="bootcamp"><li>Bootcamp</li></a>
                    <a href="imm"><li>IMM</li></a>
                    <a href="#"><li>Comunity</li></a>
                    <a href="profile"><li>Profile</li></a>
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
</footer> -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/welcome/script.js') }}"></script>

</body>
</html>
