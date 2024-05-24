<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/creatp.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="welcome">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="#">Bootcamp</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">IMM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Community</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Profile</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
        <h1 class="project-title">Proyek Terbaru</h1>
        <div class="row">
            <div class="col-md-6">
                <div class="card project-card">
                    <img src="images/J.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title">XYZ Proyek</h5>
                        <p class="card-text">Mengembangkan Platform Digital Yang Memungkinkan Pengguna Untuk Berbagi Dan Menyebarkan Ide-Ide Kreatif Secara Kolaboratif.</p>
                        <p class="card-date"><i class="far fa-clock"></i> Mei 24</p>
                        <a href="#" class="btn btn-link card-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card project-card">
                    <img src="images/J.png" class="card-img-top" alt="Project Image">
                    <div class="card-body">
                        <h5 class="card-title">XYZ Proyek</h5>
                        <p class="card-text">Mengembangkan Platform Digital Yang Memungkinkan Pengguna Untuk Berbagi Dan Menyebarkan Ide-Ide Kreatif Secara Kolaboratif.</p>
                        <p class="card-date"><i class="far fa-clock"></i> Mei 24</p>
                        <a href="#" class="btn btn-link card-link"><i class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <button class="btn btn-primary btn-create-project" data-toggle="modal" data-target="#projectModal">Buat Proyek</button>
            <button class="btn btn-secondary btn-update-report">Perbarui Laporan</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">XYZ Proyek</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="your-image-path.jpg" class="img-fluid" alt="Project Image">
                    <p class="mt-3">Mengembangkan Platform Digital Yang Memungkinkan Pengguna Untuk Berbagi Dan Menyebarkan Ide-Ide Kreatif Secara Kolaboratif.</p>
                    <p class="card-date"><i class="far fa-clock"></i> Mei 24</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Mulai Proyek</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="brand-info">
                <h3>IMM</h3>
                <p>(TBN INDONESIA X MAXY ACADEMY)</p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Bootcamp</a></li>
                        <li><a href="#">IMM</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="social-media">
                    <p class="footer-social-media">Social Media</p>
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
