<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Detail Projek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

    <style>
        .header-image {
            width: 100%;
            height: auto;
        }

        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .left-content,
        .right-content {
            flex: 1;
            min-width: 300px;
        }

        .card-title {
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .input-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .badge-pill {
            border-radius: 50rem;
        }

        .progress-bar {
            background-color: #007bff;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
        }

        .span-footer {
            font-size: 0.9rem;
        }

        .sosmed a {
            color: #ffffff;
            margin-left: 10px;
        }

        .sosmed a:hover {
            color: #007bff;
        }

        .btn-custom {
            width: 100px;
        }

        .edit-icon {
            cursor: pointer;
            font-size: 1.2rem;
            color: #007bff;
        }

        .edit-icon:hover {
            color: #0056b3;
        }

        .edit-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-wide {
            width: 300px; /* Menyesuaikan lebar tombol */
            text-align: center;
        }

        .btn-purple {
            background-color: #5e42a6;
            color: white;
        }

        .btn-purple:hover {
            background-color: #4e3690;
            color: white;
        }

        .mt-5 {
            margin-top: 3rem !important; /* Menambahkan margin atas sebesar 3rem */
        }

        .scrollable {
            max-height: 200px;
            overflow-y: auto;
        }
    </style>
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

<!-- Main Container -->
<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-12">
            <img src="images/2.png" class="header-image" alt="Header Image">
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="container mt-3">
    <div class="row">
        <!-- Left Content -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="edit-container">
                        <h5 class="card-title">Nama Proyek</h5>
                        <i class="fas fa-edit edit-icon" id="edit-nama-proyek"></i>
                    </div>
                    <input type="text" class="form-control" value="Projek Anti-Phising">
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="edit-container">
                        <h5 class="card-title">Deskripsi Proyek</h5>
                        <i class="fas fa-edit edit-icon" id="edit-deskripsi-proyek"></i>
                    </div>
                    <textarea class="form-control" rows="4">Proyek komprehensif yang bertujuan untuk memanfaatkan teknologi dan ilmu komputer untuk mencapai berbagai Tujuan Pembangunan Berkelanjutan (SDGs).</textarea>
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
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Dokumen Validitas Data</h5>
                    <button class="btn btn-purple">Tambah Dokumen</button>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">File a.csv <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                    <li class="list-group-item">File b.csv <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                    <li class="list-group-item">File c.csv <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                </ul>
            </div>

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Survey Pendukung</h5>
                    <button class="btn btn-purple">Mulai Survey</button>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Survey Kesadaran CyberSecurity <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                    <li class="list-group-item">Survey Korban Phising <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                </ul>
            </div>

            <button class="btn btn-purple btn-block mb-5">Project Selesai</button>
        </div>

        <!-- Right Content -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Metrix Anda</h5>
                    <input type="text" class="form-control" placeholder="Cari Matrix anda">
                    <ul class="list-group mt-3 scrollable">
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Premi Penghematan Klien</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Consectetur adipiscing elit</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Indicator</h5>
                    <ul class="list-group">
                        <li class="list-group-item">4.1.1.(a) Proporsi anak-anak dan remaja di: (a) kelas 5 (b) kelas 8, dan (c) usia 15 tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii) matematika.</li>
                        <li class="list-group-item">4.4.1.(a) Proporsi remaja (usia 15-24 tahun) dan dewasa (usia 15-59 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK).</li>
                        <li class="list-group-item">9.5.2 Jumlah sumber daya manusia bidang ilmu pengetahuan dan teknologi (peneliti, perekayasa, dan dosen) pada instansi pemerintah dan perguruan tinggi per satu juta penduduk.</li>
                        <li class="list-group-item">10.4.1.(b) Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container d-flex justify-content-center mt-5">
        <a href="myproject" class="btn btn-purple btn-wide text-white hidden" id="save-button" style="font-weight:bold;">Simpan Perubahan Detail Proyek</a>
    </div>
</div>

<footer>
    <div class="container footer mt-5 d-flex justify-content-center align-items-center">
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-4 d-flex flex-column" style="gap: 20px">
                <h5 class="text-white text-left">IMM</h5>
                <span class="span-footer text-left">Impact Measurement and Management <br> (TBN INDONESIA X MAXY ACADEMY)</span>
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
                        <li>Community</a>
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
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editIcons = document.querySelectorAll('.edit-icon');
        const saveButton = document.getElementById('save-button');

        editIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                saveButton.classList.toggle('hidden');
            });
        });
    });
</script>
</body>

</html>
