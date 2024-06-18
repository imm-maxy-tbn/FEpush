<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm/kodeotp.css') }}">
    <script src="{{ asset('js/otp.js') }}" defer></script>
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
                <a class="nav-link" href="profile">Profile</a>
            </li>
        </ul>
        </div>
    </div>
</nav>

<div class="container mt-4">
    <div class="row">
        <div class="col text-center">
            <h3 class="font-weight-bold">Masukan Kode Verifikasi</h3>
            <p>Cek email Anda untuk menerima kode verifikasi.</p>
            <div class="verification-code">
                <input type="number" id="digit1" maxlength="1" />
                <input type="number" id="digit2" maxlength="1" />
                <input type="number" id="digit3" maxlength="1" />
                <input type="number" id="digit4" maxlength="1" />
                <input type="number" id="digit5" maxlength="1" />
            </div>
            <p>Belum menerima kode? Tunggu <span id="countdown">1:00</span> menit.</p>
            <button class="btn-resend">Kirim ulang kode</button>
            <!-- <button id="verifyOtpBtn">Verifikasi</button> -->
            <div id="notification" class="mt-3"></div>
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
<script src="{{ asset('js/imm/kodeotp.js') }}"></script>

</body>
</html>
