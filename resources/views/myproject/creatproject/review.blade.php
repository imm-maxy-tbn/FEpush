<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Review</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/review.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage">IMM</a>
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
                <p>SDGs 11. Kota dan Permukiman yang Inklusif, Aman, Tahan Lama: Membuat kota dan permukiman manusia
                    menjadi inklusif, aman, tangguh, dan berkelanjutan</p>
            </div>
            <div class="goal-description">
                <p>SDGs 13. Tindakan terhadap Perubahan Iklim: Mengambil tindakan mendesak untuk memerangi perubahan
                    iklim dan dampaknya</p>
            </div>
            <div class="goal-description">
                <p>SDGs 15. Kehidupan di Darat: Melindungi, memulihkan, dan mendorong penggunaan berkelanjutan ekosistem
                    darat, mengelola hutan secara berkelanjutan, memerangi desertifikasi, menghentikan dan membalikkan
                    degradasi lahan, dan menghentikan hilangnya keanekaragaman hayati</p>
            </div>
        </div>

        <!-- Indicators Section -->
        <div class="indicators mt-5">
            <h2 class="text-center">Indicators</h2>

            {{-- integrate sdgs --}}
            
            <div class="indicator-item mt-4">
                <div class="d-flex align-items-center">
                    <label for="indicator-11.3" class="d-flex align-items-center">
                        <img src="images/E-WEB-Goal-13.png" alt="SDG 11" class="indicator-icon">
                        <h5>

                            {{-- integrate Text --}}
                            <div class="sdg-item d-flex" style="gap: 15px">
                                <label for="subscribe">
                                    <input type="checkbox" id="subscribe" name="subscribe" value="yes">
                                </label>
                     
                                <span>11.1</span>   <div class=" d-flex flex-column justify-content-center align-items-center">
                                <span>Pada tahun 2030, menjamin akses bagi semua orang terhadap
                                    perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki
                                    kawasan kumuh</span>
                                <div class="sdg-description" style="gap: 10px">
                                    <p>Tujuan nomor satu dari 17 tujuan SDGs adalah mengakhiri kemiskinan dalam segala
                                        bentuk di mana pun atau end poverty in all its forms everywhere. Tujuan ini
                                        menjadi tema pembangunan, agenda utama, dan berkelanjutan yang melatari berbagai
                                        tujuan pembangunan lainnya seperti infrastruktur, pariwisata, pangan dan energi
                                        dan lain-lain.</p>
                                    <p>Tujuan nomor satu dari 17 tujuan SDGs adalah mengakhiri kemiskinan dalam segala
                                        bentuk di mana pun atau end poverty in all its forms everywhere. Tujuan ini
                                        menjadi tema pembangunan, agenda utama, dan berkelanjutan yang melatari berbagai
                                        tujuan pembangunan lainnya seperti infrastruktur, pariwisata, pangan dan energi
                                        dan lain-lain.</p>
                                    <p>Tujuan nomor satu dari 17 tujuan SDGs adalah mengakhiri kemiskinan dalam segala
                                        bentuk di mana pun atau end poverty in all its forms everywhere. Tujuan ini
                                        menjadi tema pembangunan, agenda utama, dan berkelanjutan yang melatari berbagai
                                        tujuan pembangunan lainnya seperti infrastruktur, pariwisata, pangan dan energi
                                        dan lain-lain.</p>
                                </div>  </div>      <i class="fas fa-chevron-down sdg-toggle"></i>
                            </div>
                    </label>
                </div>
            </div>

        </div>
    </div>

    <!-- Indicators Section -->
    <div class="container indicators mt-5">
        <h2 class="text-center">Metrix</h2>
        <div class="indicator-item mt-4">
            <div class="d-flex justify-content-between align-items-center p-3 border">
                <div>
                    <h5 class="indicator-title">After-sale Client Support</h5>
                    <p class="indicator-description">Indicates whether the organization provides support to its clients
                        after a sale of its product/service.</p>
                </div>
                <input type="checkbox" class="indicator-checkbox">
            </div>
        </div>
        <div class=" d-flex justify-content-end align-items-center">
            <button type="button" class="btn btn-primary mt-4">Simpan</button>
        </div>
    </div>


    <!-- Footer -->
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
                        <a href="">
                            <li>HomePage</li>
                        </a>
                        <a href="">
                            <li>Bootcamp</li>
                        </a>
                        <a href="">
                            <li>IMM</li>
                        </a>
                        <a href="">
                            <li>Comunity</li>
                        </a>
                        <a href="">
                            <li>Profile</li>
                        </a>
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
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 2000); // 2000 milidetik = 2 detik
        });
    </script>
    <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>
</body>

</html>
