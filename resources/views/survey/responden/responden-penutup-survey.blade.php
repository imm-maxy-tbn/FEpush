<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/responden/responden-penutup-survey.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
 

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>

        </div>
    </nav>

    <div class="container content mt-5">
        <div class="container">
            <div class="sub-content  d-flex justify-content-center align-items-center">
                <img src="" alt="img">
            </div>

            <p style="font-size: 40px;font-weight: bold;">Survey Dampak Bisnis Ternak Lele</p>

        </div>
    </div>

    <div class="container content2 mt-5">
        <div class="container">
            <p style="font-size: 40px;font-weight: bold;">Terimakasih</p>
            <p style="font-size: 20px">Atas waktu dan partisipasi Anda dalam survei ini. Kami memastikan bahwa data yang Anda berikan akan dijaga dengan kerahasiaan yang tinggi sesuai dengan komitmen kami terhadap privasi Anda. Kontribusi Anda sangat berarti bagi kami dalam memahami topik ini dengan lebih baik</p>
        </div>
    </div>
    {{-- <div class="container mt-5">
        <div class="row gap d-flex justify-content-center">
            <button class="btn-kembali">Kembali</button>
            <button class="btn-selanjutnya">Lanjutkan</button>
        </div>
    </div> --}}

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
                            <li><a href="/">Home</a></li>
                            <li><a href="bootcamp">Bootcamp</a></li>
                            <li><a href="imm">IMM</a></li>
                            <li><a href="comunity">Community</a></li>
                            <li><a href="profile">Profile</a></li>
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

    <script src="{{ asset('js/imm/metrix.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
