<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Impact</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/impact.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
        }
        .navbar-brand {
            font-weight: bold;
        }
        .matrix-section {
            margin-top: 20px;
        }
        .matrix-section h2 {
            font-size: 24px;
            font-weight: bold;
        }
        .matrix-section .card {
            border: none;
            margin-bottom: 20px;
        }
        .matrix-section .card-header {
            background-color: #673ab7;
            color: white;
            font-weight: bold;
            padding: 10px 15px;
        }
        .matrix-section .card-body {
            background-color: #f5f5f5;
            padding: 20px;
        }
        .matrix-section .form-group label {
            font-weight: bold;
        }
        .matrix-section .form-group input,
        .matrix-section .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .matrix-section .btn-save {
            background-color: #673ab7;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            display: inline-block;
            width: 100%;
            text-align: center;
        }
        .matrix-section .btn-save:hover {
            background-color: #5e35b1;
        }
        .btn-save-custom {
            background-color: transparent;
            border: 2px solid #673ab7;
            color: #673ab7;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            padding: 10px 20px;
            text-align: center;
            display: block;
            margin-top: 10px;
            width: fit-content;
        }
        .btn-save-custom:hover {
            background-color: #673ab7;
            color: white;
        }
        .detail-matrix-section {
            margin-top: 20px;
        }
        .detail-matrix-section .card-header {
            background-color: #673ab7;
            color: white;
            font-weight: bold;
        }
        .detail-matrix-section .section-title {
            background-color: #673ab7;
            color: white;
            padding: 10px;
            border-radius: 5px;
        }
        .detail-matrix-section .form-section {
            background-color: #f5f5f5;
            padding: 20px;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage">IMM</a>
        </div>
    </nav>

    <div class="container mt-5 detail-matrix-section">
        <h2>Detail Matrix</h2>
        <div class="card-header">Matrix : Alasan Klien Berhenti</div>
            <div class="card">
            <div class="card-body">
                <div class="section-title">Deskripsi Matrix</div>
                <div class="form-section mt-2">
                    <p>Menjelaskan alasan utama mengapa klien berhenti menggunakan layanan atau keluar dari program (misalnya, keterbatasan waktu, keterbatasan finansial, tidak tertarik).</p>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="section-title">Input Data Matrix</div>
                        <div class="form-section mt-2">
                            <form>
                                <div class="form-group">
                                    <label for="nilaiData">Nilai Data</label>
                                    <input type="text" id="nilaiData" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="bulan">Bulan</label>
                                    <input type="text" id="bulan" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="tahun">Tahun</label>
                                    <input type="text" id="tahun" class="form-control">
                                </div>
                                <button type="button" class="btn-save-custom">Simpan Data</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="section-title">Cara Hitung Matrix</div>
                        <div class="form-section mt-2">
                            <p>Persentase penghematan harga yang didapat klien dengan membeli produk atau layanan dari suatu organisasi dibandingkan dengan harga rata-rata yang seharusnya mereka bayarkan untuk produk atau layanan serupa di pasar lokal.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
        <p class="text-center mt-3">Perkembangan Metrix</p>
    </div>

    <div class="container mt-5 survey-support-container">
        <div class="months-new d-flex justify-content-between">
            <span>Januari</span>
            <span>Februari</span>
            <span>Maret</span>
            <span>April</span>
            <span>Mei</span>
            <span>Juni</span>
            <span>Juli</span>
            <span>Agustus</span>
            <span>September</span>
            <span>Oktober</span>
            <span>November</span>
            <span>Desember</span>
        </div>
    </div>

    <div class="container mt-5 matrix-report-container">
        <h3>Matrix Report</h3>
        <a href="matrixreport" class="btn add-report-btn">Tambah Laporan</a>
        <a href="matrixreport"><div class="file-report mt-4">
            <div class="file-item-report text-center">
                <i class="fas fa-file-alt fa-3x"></i>
                <p>10/06/24</p>
            </div>
        </div></a>
    </div>

    <footer>
        <div class="container footer mt-5 d-flex justify-content-center align-items-center">
            <div class="row d-flex justify-content-center align-items-center">
                <div class="col-4 d-flex flex-column" style="gap: 20px">
                    <h5 class="text-white text-left">IMM</h5>
                    <span class="span-footer text-left">Impact Measurement and Management<br>(TBN INDONESIA X MAXY ACADEMY)</span>
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <ul class="d-flex" style="gap: 30px">
                        <a href="/"><li>HomePage</li></a>
                        <a href="bootcamp"><li>Bootcamp</li></a>
                        <a href="imm"><li>IMM</li></a>
                        <a href="#"><li>Comunity</li></a>
                        <a href="profile"><li>Profile</li></a>
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

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/myproject/impact.js') }}"></script>
</body>
</html>
