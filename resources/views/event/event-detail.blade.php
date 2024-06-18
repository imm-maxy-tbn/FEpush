<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/event/event.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
 
    <header>
        <nav class="w-100">
            <div class="row w-100 d-flex justify-content-between align-items-center">
                <div class="col-auto">
                    <img src="images/logo-maxy.png" width="120" height="41" alt="img">
                </div>
                <div class="col-auto h-100 d-flex align-items-center">
                    <ul class="d-flex justify-content-center"
                        style="gap: 70px; margin: 0; padding: 0; list-style: none;">
                        <a href="/event">
                            <li>Kegiatan</li>
                        </a>
                        <a href="/event-register">
                            <li>Daftar</li>
                        </a>
                        <a href="#">
                            <li>Sponsor</li>
                        </a>
                    </ul>
                </div>
                <div class="col-auto d-flex justify-content-end">
                    <button  class="btn">Login</button>
                </div>
            </div>
        </nav>

    </header>
    <section class="banner" style="">   <img src="images/bg-event.png" class="w-100 h-auto" alt=""></section>
    <div class="container content">
        <div class="container">
            <div class="row d-flex flex-column align-items-center justify-content-center text-center">
                <p class="" style="max-width: 701px; font-size:32px">Bootcamp <strong>satu hari</strong> yang
                    dirancang khusus untuk wirausahawan</p>
                <a href="event-register"><button class="btn-daftar mt-4">Daftar Sekarang</button></a>
            </div>
        </div>

    </div>
    <div class="container content d-flex flex-column justify-content-center">
        <p class="text-center" style="font-size:32px; font-weight:bold">Kegiatan Bootcamp</p>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon-workshop.png" alt="">
                <span class="nama-kegiatan">Workshop dan Pelatihan</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon-diskusi'.png" alt="">
                <span class="nama-kegiatan">Panel
                    Diskusi</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon-mentor.png" alt="">
                <span class="nama-kegiatan">Mentorship Session</span>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon-networking.png" alt="">
                <span class="nama-kegiatan">Networking Lunch</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="images/icon-pitching.png" alt="">
                <span class="nama-kegiatan">Pitching Session</span>
            </div>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <p style="font-size:40px">Bergabunglah dalam Bootcamp yang <strong>Akan Mengubah Bisnis Anda</strong></p>
               <a href="/event-register"> <button class="btn-daftar">Daftar Sekarang</button></a>
            </div>
            <div class="col-md-6">
                <div class="img-grid">
                    <img src="images/img1-event.png" class="img-event" alt="Event Image 1">
                    <img src="images/img2-event.png" class="img-event" alt="Event Image 2">
                    <img src="images/img3-event.png" class="img-event" alt="Event Image 3">
                    <img src="images/img4-event.png" class="img-event" alt="Event Image 4">
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="row-footer d-flex justify-content-center align-items-center">
            <div class="row-footer-in d-flex flex-column justify-content-center text-center align-items-center"
                style="">
                <div class="col text-white
                " style="font-size:32px; font-weight:500">Tertarik menjadi
                    sponsor</div>
                <div class="col">
                    <button class="btn-daftar ">Hubunggi Sekarang</button>
                </div>
                <div class="col d-flex justify-content-between" style="">

                    <div class="col d-flex justify-content-start" style="gap:50px">
                        <a href=""></a><img src="images/icon-yt.png" alt=""></a>
                        <a href=""> <img src="images/icon-ig.png" alt=""></a>
                        <a href=""> <img src="images/icon-fb.png" alt=""></a>
                    </div>
                    <div class="col-text">
                        <div class="row d-flex flex-column align-items-center " style="gap: 30px">
                            <div class="col text-left  d-flex justify-content-start" style="gap: 30px">
                                
                                <a href="" class="text-white">Term of Reference</a>
                                <a href="" class="text-white">Contact</a>

                            </div>
                            <a href="" class="text-white">Privacy Policy</a>
                        </div>
                    </div>
                </div>
                <div class="col-text2 text-white">Maxy academy Copyright @ 2024</div>
            </div>
        </div>
    </footer>


</body>

</html>
