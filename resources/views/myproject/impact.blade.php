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
</head>
<body>
    
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage">IMM</a>
        </div>
    </nav>
<div class="container mt-5">
    <h2>Metrix Detail</h2>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
    <p class="text-center mt-3">Perkembangan Metrix</p>
</div>

<div class="container">
    <div class="label">Bahan baku yang diolah kembali (kg)</div>
    <div class="month-row">
        <div>Januari</div>
        <div>Februari</div>
        <div>Maret</div>
        <div>April</div>
        <div>Mei</div>
        <div>Juni</div>
        <div>Juli</div>
        <div>Agustus</div>
        <div>September</div>
    </div>
    <div class="input-row">
        <input type="text" value="2300" id="jan">
        <input type="text" value="4100" id="feb">
        <input type="text" value="6100" id="mar">
        <input type="text" value="4200" id="apr">
        <input type="text" value="7000" id="may">
        <input type="text" value="6500" id="jun">
        <input type="text" value="6000" id="jul">
        <input type="text" id="aug">
        <input type="text" id="sep">
    </div>
    <input type="range" min="0" max="10000" value="5000" class="slider" id="myRange">
    <div class="chart-containerr">
        <canvas id="myChart"></canvas>
    </div>
    <button class="btn btn-outline-primary btn-reset">Reset Data</button>
    <button class="btn btn-primary btn-save">Simpan Data</button>
</div>

<div class="container mt-5">
    <h3>Dokumen Validitas Data</h3>
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
    <div class="files-new d-flex justify-content-between mt-4">
        <div class="file-item text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>File a.csv</p>
        </div>
        <div class="file-item text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>File b.csv</p>
        </div>
        <div class="file-item text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>File c.csv</p>
        </div>
        <div class="file-item text-center">
            <i class="fas fa-trash fa-3x"></i>
            <p>File d.csv</p>
        </div>
    </div>
    <button class="btn btn-primary mt-4 btn-dokumen">Tambah Dokumen</button>
</div>

<div class="container mt-5 survey-support-container">
    <h3>Survey Pendukung</h3>
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
    <div class="files-survey d-flex justify-content-between mt-4">
        <div class="file-item-survey text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>Survey</p>
            <p>Lorem Ipsum</p>
        </div>
        <div class="file-item-survey text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>Survey</p>
            <p>Lorem Ipsum</p>
        </div>
        <div class="file-item-survey text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>Survey</p>
            <p>Lorem Ipsum</p>
        </div>
        <div class="file-item-survey text-center">
            <i class="fas fa-trash fa-3x"></i>
            <p>Survey</p>
            <p>Lorem Ipsum</p>
        </div>
    </div>
    <a href="edit-survey"><button class="btn start-survey-btn">Mulai Survey</button> </a>
    <!-- <button class="btn btn-primary mt-4 btn-dokumen">Mulai Survey</button> -->
</div> 
 

<div class="container mt-5 matrix-report-container">
    <h3>Matrix Report</h3>
    <a href="laporanproject" class="btn add-report-btn">Tambah Laporan</a>
    <a href="matrixreport"><div class="file-report mt-4">
        <div class="file-item-report text-center">
            <i class="fas fa-file-alt fa-3x"></i>
            <p>10/06/24</p>
        </div>
    </div></a>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/myproject/impact.js') }}"></script>

</body>
</html>