<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/creatproject.css') }}">
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

<div class="container mt-5">
    <h1>Buat Projek Baru</h1>
    <div class="tags-container mt-3">
        <div class="tag">Environment <span class="remove-tag">&times;</span></div>
        <div class="tag">Education <span class="remove-tag">&times;</span></div>
        <div class="tag">Health <span class="remove-tag">&times;</span></div>
    </div>
    <p class="mt-3">Pilih Tag atau Buat yang Baru</p>
</div>


<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <!-- Konten Gambar Pertama -->
            <h2 class="project-title">Tentang Proyek Anda</h2>
            <form>
                <div class="form-group">
                    <label for="projectName">Nama Proyek</label>
                    <input type="text" class="form-control" id="projectName" placeholder="Green Schools Initiative">
                </div>
                <div class="form-group">
                    <label for="projectDescription">Deskripsi Proyek</label>
                    <textarea class="form-control" id="projectDescription" rows="3">Proyek ini akan memasang solusi energi terbarukan di 100 sekolah di kota dan desa, untuk menyediakan energi berkelanjutan dan edukasi tentang energi hijau.</textarea>
                </div>
                <div class="form-group">
                    <label for="projectGoals">Tujuan Proyek</label>
                    <textarea class="form-control" id="projectGoals" rows="2">• Untuk mengurangi emisi karbon sebesar 50% di sekolah-sekolah yang berpartisipasi dalam waktu tiga tahun.
• Untuk mendidik lebih dari 50.000 siswa tentang manfaat dan penerapan energi terbarukan.</textarea>
                </div>
                <div class="form-group">
                    <label for="startDate">Tanggal Mulai Proyek</label>
                    <div class="d-flex">
                        <select class="form-control mr-2">
                            <option>01</option>
                        </select>
                        <select class="form-control mr-2">
                            <option>September</option>
                        </select>
                        <select class="form-control">
                            <option>2024</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="endDate">Tanggal Berakhir Proyek</label>
                    <div class="d-flex">
                        <select class="form-control mr-2">
                            <option>01</option>
                        </select>
                        <select class="form-control mr-2">
                            <option>September</option>
                        </select>
                        <select class="form-control">
                            <option>2024</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="importData">Import Data</label>
                    <div class="upload-box">
                        <i class="fas fa-upload"></i>
                        <p>Unggah berbagai informasi yang relevan untuk proyek Anda dengan mudah dan cepat</p>
                    </div>
                </div>
                <div class="form-group">
                    <label for="address">Alamat Lengkap</label>
                    <input type="text" class="form-control" id="address" placeholder="Alamat Lengkap">
                </div>
                <div class="form-group">
                    <label for="city">Kota</label>
                    <input type="text" class="form-control" id="city" placeholder="Kota">
                </div>
                <div class="form-group">
                    <label for="province">Provinsi</label>
                    <input type="text" class="form-control" id="province" placeholder="Provinsi">
                </div>
                <div id="map" style="height: 300px; width: 100%;"></div> <!-- Map container -->
            </form>
        </div>
        <div class="col-md-6">
            <!-- Konten Gambar Kedua -->
            <h2 class="project-title">Pendanaan</h2>
            <form>
                <div class="form-group">
                    <label for="fundAmount">Jumlah Dana</label>
                    <input type="text" class="form-control" id="fundAmount" placeholder="Rp. 8.000.000">
                </div>
                <div class="form-group">
                    <label for="otherFunds">Pendanaan Lainnya</label>
                    <select class="form-control" id="otherFunds">
                        <option>Dana Pribadi</option>
                    </select>
                    <input type="text" class="form-control mt-2" placeholder="Rp 5.000.000">
                    <button type="button" class="btn btn-primary btn-block mt-2">Tambahkan Pendanaan</button>
                </div>
                <div class="form-group">
                    <label for="totalFunds">Jumlah Dana</label>
                    <input type="text" class="form-control" id="totalFunds" placeholder="Rp. 5.000.000">
                </div>
                <div class="form-group">
                    <label for="impactTags">Tag Tema Dampak Yang Selaras dengan Prioritas Dampak Anda</label>
                    <div class="tags-container">
                        <div class="tag">Pekerjaan <span class="remove-tag">&times;</span></div>
                        <div class="tag">Infrastruktur <span class="remove-tag">&times;</span></div>
                        <div class="tag">Pendidikan <span class="remove-tag">&times;</span></div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="customerDescription">Segmentasi dan Deskripsi Pelanggan</label>
                    <textarea class="form-control" id="customerDescription" rows="3" placeholder="Jelaskan target pelanggan, karakteristik demografis, kebutuhan, dan preferensi"></textarea>
                </div>
                <div class="form-group">
                    <label for="targetCustomers">Target Pelanggan</label>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Status Pekerjaan</th>
                                <th>Rentang Usia</th>
                                <th>Jenis Kelamin</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="form-group">
                    <label for="socialImpactGoals">Tujuan Dampak Sosial</label>
                    <textarea class="form-control" id="socialImpactGoals" rows="2" placeholder="Jelaskan tujuan dampak sosial dari proyek"></textarea>
                </div>
                <a href="pemilihansdgs" class="btn btn-primary btn-block mt-3">Simpan dan Lanjutkan</a>
            </form>
        </div>
    </div>
</div>

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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
<script>
    function initMap() {
        var mapOptions = {
            center: new google.maps.LatLng(-6.9175, 107.6191), // Koordinat Bandung, Indonesia
            zoom: 12,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
    }
</script>

</body>
</html>