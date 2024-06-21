<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/review.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <!-- Navbar -->
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
    <!-- Content -->
    <div class="container mt-5 pt-5">
        <h1 class="text-center">Detail Review: SDGs Goals, Indicators, dan Metrix</h1>
        <h3 class="text-center">Goals SDGs project anda</h3>
        <div class="d-flex justify-content-center mt-4">
            <div class="goal">
                <img src="images/E-WEB-Goal-11.png" alt="SDG 11" class="img-fluid">
            </div>
            <div class="goal">
                <img src="images/E-WEB-Goal-13.png" alt="SDG 13" class="img-fluid">
            </div>
            <div class="goal">
                <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="img-fluid">
            </div>
        </div>
        <div class="goals-text mt-4">
            <div class="goal-description">
                <p>SDGs 11. Kota dan Permukiman yang Inklusif, Aman, Tahan Lama: Membuat kota dan permukiman manusia menjadi inklusif, aman, tangguh, dan berkelanjutan</p>
            </div>
            <div class="goal-description">
                <p>SDGs 13. Tindakan terhadap Perubahan Iklim: Mengambil tindakan mendesak untuk memerangi perubahan iklim dan dampaknya</p>
            </div>
            <div class="goal-description">
                <p>SDGs 15. Kehidupan di Darat: Melindungi, memulihkan, dan mendorong penggunaan berkelanjutan ekosistem darat, mengelola hutan secara berkelanjutan, memerangi desertifikasi, menghentikan dan membalikkan degradasi lahan, dan menghentikan hilangnya keanekaragaman hayati</p>
            </div>
        </div>

        <!-- Indicators Section -->
        <div class="indicators mt-5">
            <h2 class="text-center">Indicators</h2>
            <div class="indicator-item mt-4">
                    <input type="checkbox" id="indicator-11.1" class="indicator-checkbox">
                    <label for="indicator-11.1" class="d-flex align-items-center">
                        <img src="images/E-WEB-Goal-11.png" alt="SDG 11" class="indicator-icon">
                        <h5>11.1 Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</h5>
                    </label>
                </div>
                <ul class="mt-2 ml-4">
                    <li>11.1.1.(a) Persentase rumah tangga yang memiliki akses terhadap hunian yang layak dan terjangkau</li>
                    <li>11.2.1.(a) Proporsi populasi yang mendapatkan akses yang nyaman pada transportasi publik</li>
                    <li>11.2.1.(b) Persentase penduduk terlayani transportasi umum</li>
                    <li>11.3.1.(a) Rasio laju perluasan lahan terbangun terhadap laju pertumbuhan penduduk</li>
                    <li>11.4.1.(a) Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (non-PPP)</li>
                    <li>11.5.1. Jumlah korban meninggal, hilang dan terkena dampak bencana per 100.000 orang.</li>
                    <li>11.5.2.(a) Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB.</li>
                    <li>11.5.2.(a) Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB.</li>
                    <li>11.6.1.(a) Persentase rumah tangga di perkotaan yang terlayani pengelolaan sampahnya</li>
                    <li>11.6.1.(b) Persentase sampah nasional yang terkelola</li>
                </ul>
                <label for="indicator-11.3" class="d-flex align-items-center">
                <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                <p class="urbanisasi-text">11.3 Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</p>
                </label>
                <label for="indicator-11.3" class="d-flex align-items-center">
                <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                <p class="urbanisasi-text">11.4 Memperkuat upaya untuk melindungi dan menjaga warisan budaya dan alam dunia</p>
                </label>
            </div>
            <div class="indicator-item mt-4">
                <div class="d-flex align-items-center">
                    <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                    <label for="indicator-11.3" class="d-flex align-items-center">
                        <img src="images/E-WEB-Goal-13.png" alt="SDG 11" class="indicator-icon">
                        <h5><div class="sultan" ></div>11.3 Pada tahun 2030, meningkatkan urbanisasi yang inklusif dan berkelanjutan serta kapasitas perencanaan dan pengelolaan pemukiman manusia yang partisipatif, terpadu dan berkelanjutan di semua negara</h5>
                    </label>
                </div>
                <ul class="mt-2 ml-4">
                    <li>11.1.1.(a) Persentase rumah tangga yang memiliki akses terhadap hunian yang layak dan terjangkau</li>
                    <li>11.2.1.(a) Proporsi populasi yang mendapatkan akses yang nyaman pada transportasi publik</li>
                    <li>11.2.1.(b) Persentase penduduk terlayani transportasi umum</li>
                    <li>11.3.1.(a) Rasio laju perluasan lahan terbangun terhadap laju pertumbuhan penduduk</li>
                    <li>11.4.1.(a) Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (non-PPP)</li>
                    <li>11.5.1. Jumlah korban meninggal, hilang dan terkena dampak bencana per 100.000 orang.</li>
                    <li>11.5.2.(a) Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB.</li>
                    <li>11.5.2.(a) Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB.</li>
                    <li>11.6.1.(a) Persentase rumah tangga di perkotaan yang terlayani pengelolaan sampahnya</li>
                    <li>11.6.1.(b) Persentase sampah nasional yang terkelola</li>
                </ul>
                <label for="indicator-11.3" class="d-flex align-items-center">
                <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                <p class="urbanisasi-text">11.3 Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</p>
                </label>
                <label for="indicator-11.3" class="d-flex align-items-center">
                <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                <p class="urbanisasi-text">11.4 Memperkuat upaya untuk melindungi dan menjaga warisan budaya dan alam dunia</p>
                </label>
            </div>
            <div class="indicator-item mt-4">
                <div class="d-flex align-items-center">
                    <input type="checkbox" id="indicator-11.4" class="indicator-checkbox">
                    <label for="indicator-11.4" class="d-flex align-items-center">
                        <img src="images/E-WEB-Goal-15.png" alt="SDG 11" class="indicator-icon">
                        <h5>11.4 Memperkuat upaya untuk melindungi dan menjaga warisan budaya dan alam dunia</h5>
                    </label>
                </div>
                <ul class="mt-2 ml-4">
                    <li>11.1.1.(a) Persentase rumah tangga yang memiliki akses terhadap hunian yang layak dan terjangkau</li>
                    <li>11.2.1.(a) Proporsi populasi yang mendapatkan akses yang nyaman pada transportasi publik</li>
                    <li>11.2.1.(b) Persentase penduduk terlayani transportasi umum</li>
                    <li>11.3.1.(a) Rasio laju perluasan lahan terbangun terhadap laju pertumbuhan penduduk</li>
                    <li>11.4.1.(a) Total pengeluaran per kapita yang diperuntukan untuk preservasi, perlindungan, konservasi pada semua warisan budaya dan alam (non-PPP)</li>
                    <li>11.5.1. Jumlah korban meninggal, hilang dan terkena dampak bencana per 100.000 orang.</li>
                    <li>11.5.2.(a) Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB.</li>
                    <li>11.5.2.(a) Proporsi kerugian ekonomi langsung akibat bencana relatif terhadap PDB.</li>
                    <li>11.6.1.(a) Persentase rumah tangga di perkotaan yang terlayani pengelolaan sampahnya</li>
                    <li>11.6.1.(b) Persentase sampah nasional yang terkelola</li>
                </ul>
                <label for="indicator-11.3" class="d-flex align-items-center">
                <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                <p class="urbanisasi-text">11.3 Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</p>
                </label>
                <label for="indicator-11.3" class="d-flex align-items-center">
                <input type="checkbox" id="indicator-11.3" class="indicator-checkbox">
                <p class="urbanisasi-text">11.4 Memperkuat upaya untuk melindungi dan menjaga warisan budaya dan alam dunia</p>
                </label>
            </div>
        </div>
    </div>
    
    <!-- Indicators Section -->
<div class="indicators mt-5">
    <h2 class="text-center">Metrix</h2>
    <div class="indicator-item mt-4">
        <div class="d-flex justify-content-between align-items-center p-3 border">
            <div>
                <h5 class="indicator-title">After-sale Client Support</h5>
                <p class="indicator-description">Indicates whether the organization provides support to its clients after a sale of its product/service.</p>
            </div>
            <input type="checkbox" class="indicator-checkbox">
        </div>
    </div>
    <div class="indicator-item mt-4">
        <div class="d-flex justify-content-between align-items-center p-3 border">
            <div>
                <h5 class="indicator-title">Assets Under Management: Total</h5>
                <p class="indicator-description">Value of the investing organization's total assets under management as of the end of the reporting period.</p>
            </div>
            <input type="checkbox" class="indicator-checkbox">
        </div>
    </div>
    <div class="indicator-item mt-4">
        <div class="d-flex justify-content-between align-items-center p-3 border">
            <div>
                <h5 class="indicator-title">Average Client Agricultural Yield: Total</h5>
                <p class="indicator-description">Average agricultural yield per hectare of clients (who were farmers) of the organization during the reporting period.</p>
            </div>
           
        </div>
    </div>
    <div class="indicator-item mt-4">
        <div class="d-flex justify-content-between align-items-center p-3 border">
            <div>
                <h5 class="indicator-title">Bulk Cargo Handled</h5>
                <p class="indicator-description">Volume of bulk cargo transported through a road, railway, port, or airport during the reporting period.</p>
            </div>
            <input type="checkbox" class="indicator-checkbox">
        </div>
    </div>
    <button type="button" class="btn btn-primary mt-4">Simpan</button>
</div>


    <!-- Footer -->
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

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 2000); // 2000 milidetik = 2 detik
        });
    </script>
</body>
</html>


