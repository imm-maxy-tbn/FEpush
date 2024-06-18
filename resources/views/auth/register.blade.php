<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
    font-family: "Roboto", sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Navbar */
.navbar {
    background-color: #ffffff;
    color: #000000;
    padding: 15px 0;
    position: absolute;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
    border-bottom: 3px solid #5940cb;
}

.container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-logo {
    font-size: 24px;
    margin-left: 60px;
}

.navbar-links {
    list-style-type: none;
    display: flex;
    margin-left: -580px;
}

.navbar-links li {
    margin-right: 20px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    color: inherit;
    text-decoration: none;
}

.navbar-links a:hover {
    text-decoration: underline;
}

.navbar-actions {
    display: flex;
    margin-right: 20px;
}

.navbar-collapse {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Atur posisi menu navbar */
.navbar-nav {
    margin-left: 52px;
}

.register-container {
    background-color: #fff;
    padding: 20px;
    width: 727px;
    position: absolute;
    top: 78px;
    right: 290px;
}

.register-form {
    display: flex;
    flex-direction: column;
    align-items: center;
}

.brand-logo {
    width: 137px;
    position: absolute;
    top: 426px;
    right: 103px;
}

.register-form h2 {
    margin-bottom: 20px;
    font-size: 26px;
    color: #000000;
    font-weight: bold;
    position: relative;
    top: 2px;
    right: 271px;
}

.form-row {
    display: flex;
    justify-content: space-between;
    width: 100%;
    margin-bottom: 15px;
}

.form-group {
    display: flex;
    flex-direction: column;
    width: 48%;
}

.form-group label {
    font-weight: bold;
    margin-bottom: 2px;
    color: #000000;
}

.form-group input,
.form-group select {
    width: 100%;
    padding: 6px;
    border: 1px solid #ccc;
    border-radius: 5px;
    background-color: #f8f9fa;
    font-size: 16px;
}

.btn-register {
    padding: 10px 20px;
    background-color: #6c63ff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    width: 100%;
    font-size: 16px;
    margin-top: 20px;
}

.btn-register:hover {
    background-color: #524eff;
}

.login-link {
    margin-top: 15px;
    font-size: 14px;
    color: #000000;
}

.login-link a {
    color: #000000;
    text-decoration: none;
    font-weight: bold;
}

.login-link a:hover {
    text-decoration: underline;
}

/* Media query for responsiveness */
@media (max-width: 768px) {
    .navbar {
        position: relative;
    }

    .navbar-links {
        flex-direction: column;
        margin-left: 0;
        margin-top: 10px;
    }

    .navbar-links li {
        margin: 10px 0;
    }

    .navbar-actions {
        flex-direction: column;
        margin-right: 0;
        margin-top: 10px;
    }

    .btn {
        width: 100%;
        text-align: center;
        margin: 5px 0;
    }

    .register-container {
        width: 100%;
        padding: 10px;
        top: auto;
        right: auto;
        margin-top: 70px;
    }

    .brand-logo {
        width: 100px;
        position: relative;
        top: 0;
        right: 0;
        margin-top: 20px;
    }

    .register-form h2 {
        font-size: 22px;
        position: relative;
        top: 0;
        right: 0;
        text-align: center;
    }

    .form-row {
        flex-direction: column;
        width: 100%;
    }

    .form-group {
        width: 100%;
        margin-bottom: 10px;
    }

    .form-group label {
        font-size: 14px;
    }

    .form-group input,
    .form-group select {
        font-size: 14px;
        padding: 10px;
    }

    .btn-register {
        font-size: 14px;
        padding: 10px;
    }

    .login-link {
        font-size: 12px;
        text-align: center;
    }
}

/* Efek loading */
#loading {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 5px;
}

#loading img {
    width: 100px; /* Ukuran gambar loading */
    height: 100px; /* Ukuran gambar loading */
    animation: spin 1s linear infinite;
}

@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}

/* Animasi umum untuk elemen lainnya */
.content-container h1,
.date-box,
.chart-container,
.analysis-matrix .content-box,
.target-check .target-check-box,
.icon-box .icon-item,
.btn {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.content-container h1:hover,
.date-box:hover,
.chart-container:hover,
.analysis-matrix .content-box:hover,
.target-check .target-check-box:hover,
.icon-box .icon-item:hover,
.btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

/* Menambahkan transisi pada navbar */
.navbar {
    transition: background-color 0.3s ease;
}

.navbar:hover {
    background-color: #e3e3e3;
}

    </style>
</head>

<body>
 
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM Impact Mate</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bootcamp</a>
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

    <div class="register-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-form">
                <img src="images/imm.png" alt="Brand Logo" class="brand-logo">
                <h2>Daftarkan akun</h2>
                <div class="form-row">
                    <div class="form-group">
                        <label for="fullName">Nama Lengkap</label>
                        <input type="text" id="fullName" name="nama" placeholder="isi disini" />
                    </div>
                    <div class="form-group">
                        <label for="country">Negara</label>
                        <input type="text" id="country" name="negara" placeholder="isi disini" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik" placeholder="Masukkan disini" />
                    </div>
                    <div class="form-group">
                        <label for="province">Provinsi</label>
                        <input type="text" id="province" name="provinsi" placeholder="isi disini" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" placeholder="Isi disini" />
                    </div>
                    <div class="form-group">
                        <label for="address">Alamat Lengkap</label>
                        <input type="text" id="address" name="alamat" placeholder="Masukkan alamat lengkap" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" placeholder="Isi disini" />
                    </div>
                    <div class="form-group">
                        <label for="phone">Nomor Telepon</label>
                        <input type="text" id="phone" name="telepon" placeholder="Isi disini" />
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <label for="confirmPassword">Konfirmasi Password</label>
                        <input type="password" id="confirmPassword" name="password_confirmation"
                            placeholder="Isi disini" />
                    </div>
                </div>
                <button class="btn-register" type="submit" id="simpanBtn">Simpan Data</button>
                <div class="login-link">Sudah punya akun? <a href="login">Masuk</a></div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fungsi untuk menampilkan notifikasi dan mengarahkan ke halaman login
function simpanData() {
    // Tampilkan notifikasi
    alert("Data berhasil disimpan!");

    // Arahkan ke halaman login
    window.location.href = "login"; // Ganti "halaman-login.html" dengan URL halaman login Anda
}

// Tambahkan event listener untuk tombol "Simpan Data"
document.getElementById("simpanBtn").addEventListener("click", simpanData);

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 3000 milidetik = 3 detik
});

    </script>
</body>

</html>
