@extends('layouts.app')
@section('title', '')

@section('css')
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
            transition: background-color 0.3s ease;
        }

        .navbar:hover {
            background-color: #e3e3e3;
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
    border-bottom: 3px solid #4834a9;
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

.btn {
    display: inline-block;
    padding: 8px 16px;
    border-radius: 12px;
    text-decoration: none;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s;
}

.btn-primary {
    background-color: #ffffff;
    color: #0e0d13;
    border: 2px solid #5940cb;
}

.btn-outline-primary {
    background-color: #5940cb;
    color: #ffffff;
    border: 2px solid #5940cb8a;
    margin-left: 10px;
}

.btn-primary:hover,
.btn-outline-primary:hover {
    background-color: #5940cb8a;
}

        .navbar-collapse {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .navbar-nav {
            margin-left: 52px;
        }
.navbar-nav {
    margin-left: 52px;
}

.navbar-brand {
    margin-right: auto;
}

        .register-container {
            background-color: #fff;
            padding: 20px;
            width: 727px;
            margin: 0 auto;
            margin-top: 80px;
        }
        .register-container {
            background-color: #fff;

            width: 727px;
            margin: 0 auto;     margin-top: 50px

        }

        .register-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .register-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .brand-logo {
            width: 137px;
            margin-bottom: 20px;
        }
        .brand-logo {
            width: 137px;

        }

        .register-form h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #000000;
            font-weight: bold;
        }
        .register-form h2 {

            font-size: 26px;
            color: #000000;
            font-weight: bold;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 15px;
        }
        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;

        }

        .form-group {
            display: flex;
            flex-direction: column;
            width: 48%;
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
            transition: background-color 0.3s ease, transform 0.3s ease;
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
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-register:hover {
            background-color: #524eff;
            transform: scale(1.05);
        }
        .btn-register:hover {
            background-color: #524eff;
            transform: scale(1.05);
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
            color: #000000;
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
        .login-link a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }
        .login-link a:hover {
            text-decoration: underline;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .navbar {
                position: relative;
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
            .navbar-links {
                flex-direction: column;
                margin-left: 0;
                margin-top: 10px;
            }

            .navbar-links li {
                margin: 10px 0;
            }
            .navbar-links li {
                margin: 10px 0;
            }

            .navbar-actions {
                flex-direction: column;
                margin-right: 0;
                margin-top: 10px;
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
            .register-container {

                width: 100%;
                padding: 10px;


            }

            .brand-logo {
                width: 100px;
                position: relative;
                top: 0;
                right: 0;
                margin-top: 20px;
            }
            .brand-logo {
                width: 100px;
                position: relative;
                top: 0;
                right: 0;

            }

            .register-form h2 {
                font-size: 22px;
                position: relative;
                top: 0;
                right: 0;
                text-align: center;
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
            .form-row {
                flex-direction: column;
                width: 100%;
            }

            .form-group {
                width: 100%;
                margin-bottom: 10px;
            }
            .form-group {
                width: 100%;

            }

            .form-group label {
                font-size: 14px;
            }
            .form-group label {
                font-size: 14px;
            }

            .form-group input,
            .form-group select {
                font-size: 14px;
                padding: 10px;
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
            .btn-register {
                font-size: 14px;
                padding: 10px;
            }

            .login-link {
                font-size: 12px;
                text-align: center;
            }
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
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }
        #loading img {
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
            }
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
    </style>
@endsection
@section('content')
<!DOCTYPE html>
<html lang="en">


<body>


   
<div class="container">
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
                        <input type="number" id="phone" name="telepon" placeholder="Isi disini" />
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
    </div></div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        // Fungsi untuk menampilkan notifikasi dan mengarahkan ke halaman login
        function simpanData() {
            // Tampilkan notifikasi
            alert("Data berhasil disimpan!");
        function simpanData() {
            // Tampilkan notifikasi
            alert("Data berhasil disimpan!");

            // Arahkan ke halaman login
            window.location.href = "login"; // Ganti "halaman-login.html" dengan URL halaman login Anda
        }
            // Arahkan ke halaman login
            window.location.href = "login"; // Ganti "halaman-login.html" dengan URL halaman login Anda
        }

        // Tambahkan event listener untuk tombol "Simpan Data"
        document.getElementById("simpanBtn").addEventListener("click", simpanData);
        // Tambahkan event listener untuk tombol "Simpan Data"
        document.getElementById("simpanBtn").addEventListener("click", simpanData);

        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 1000); // 3000 milidetik = 3 detik
        });
        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 1000); // 3000 milidetik = 3 detik
        });
    </script>
</body>

@endsection
