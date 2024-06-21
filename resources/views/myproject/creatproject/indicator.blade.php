<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Indikator</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/indicator.css') }}">
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
    <h1 class="text-center">Green Future Initiative</h1>
    <p class="text-center">Goals SDGs project anda</p>
    <div class="d-flex justify-content-center mb-4">
        <img src="images/E-WEB-Goal-11.png" alt="SDG 11" class="img-fluid mx-2 sdg-goal" data-target="#goal11-description">
        <img src="images/E-WEB-Goal-13.png" alt="SDG 13" class="img-fluid mx-2 sdg-goal" data-target="#goal13-description">
        <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="img-fluid mx-2 sdg-goal" data-target="#goal15-description">
    </div>
    <div class="text-center bg-light p-3 mb-4">
        <p>Kota dan Permukiman yang Inklusif, Aman, Tahan Lama: Membuat kota dan permukiman manusia menjadi inklusif, aman, tangguh, dan berkelanjutan</p>
    </div>
    <h5 class="text-center mb-4">Tentukan indikator SDGs sebagai target project anda! Anda dapat memilih lebih dari satu indikator</h5>

    <div id="goal11-description" class="sdg-description mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center">
            <img src="images/E-WEB-Goal-11.png" alt="SDG 11" class="mr-3" width="50">
            <div>
                <h5 class="mb-0">SDGs Goals 11</h5>
                <p class="mb-0">Kota dan Komunitas yang Berkelanjutan (Sustainable Cities and Communities)</p>
            </div>
        </div>
        <div class="mt-3 d-flex align-items-center" style="gap: 15px">
            <label for="subscribe">
                <input type="checkbox" id="subscribe" name="subscribe" value="yes">
            </label>
            <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>

        </div>
    </div>

    <div id="goal13-description" class="sdg-description mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center">
            <img src="images/E-WEB-Goal-13.png" alt="SDG 13" class="mr-3" width="50">
            <div>
                <h5 class="mb-0">SDGs Goals 13</h5>
                <p class="mb-0">Penanganan Perubahan Iklim (Climate Action)</p>
            </div>
        </div>
        <div class="mt-3 d-flex align-items-center" style="gap: 15px">
            <label for="subscribe">
                <input type="checkbox" id="subscribe" name="subscribe" value="yes">
            </label>
            <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>

        </div>
    </div>

    <div id="goal15-description" class="sdg-description mb-4 p-3 bg-white shadow-sm rounded">
        <div class="d-flex align-items-center">
            <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="mr-3" width="50">
            <div>
                <h5 class="mb-0">SDGs Goals 15</h5>
                <p class="mb-0">Ekosistem Daratan (Life on Land)</p>
            </div>
        </div>
        <div class="mt-3 d-flex align-items-center" style="gap: 15px">
            <label for="subscribe">
                <input type="checkbox" id="subscribe" name="subscribe" value="yes">
            </label>
            <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>

        </div>
    </div>

    <div class="d-flex justify-content-between">
        <a href="#" class="btn btn-secondary">Kembali</a>
        <a href="metrix" class="btn btn-primary btn-continue">Simpan dan Lanjutkan</a>
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
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/imm/indicator.js') }}"></script>

</body>
</html>
