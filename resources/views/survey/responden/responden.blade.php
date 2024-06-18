<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/responden/responden.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <div id="loading">
        <img src="images/imm.png" alt="Loading...">
    </div>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>

        </div>
    </nav>

    <div class="container content mt-5">
        <div class="container">
            <div class="sub-content">

            </div>

            <p style="font-size: 40px;font-weight: bold;">Survey Dampak Bisnis Ternak Lele</p>
            <p style="font-size: 20px">Survey ini bertujuan untuk mengevaluasi dampak bisnis ternak lele terhadap
                berbagai aspek ekonomi, sosial, dan lingkungan. Dengan memperhatikan pertumbuhan industri ternak lele,
                kami akan menganalisis kontribusinya terhadap pendapatan peternak, kesejahteraan masyarakat lokal, serta
                efeknya terhadap ekosistem air dan lahan. Data yang dikumpulkan dari survei ini diharapkan dapat
                memberikan wawasan yang mendalam untuk memandu kebijakan dan praktik yang berkelanjutan dalam industri
                ternak lele.</p>
            <p style="font-weight: bold; font-size:20px;">Komitmen dalam menjaga privasi anda</p>
            <p style="font-size: 20px">Saya sangat berkomitmen untuk menjalankan survei dengan hati-hati dan jujur serta
                menjaga kerahasiaan data yang dikumpulkan. Saya selalu menghormati privasi dan kepentingan peserta
                survei, serta memastikan bahwa hasil survei saya digunakan dengan bertanggung jawab demi kebaikan semua
                orang yang terlibat. </p>
            <div class="btn">
                <a href="/responden-data-diri"><button type="">Mulai Survey</button></a>
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
    <script src="{{ asset('js/imm/metrix.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
