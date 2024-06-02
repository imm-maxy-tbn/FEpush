<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/Register.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="register-container">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="register-form">
                <div class="informasi-pribadi">
                    <h3>Informasi Pribadi</h3>
                    <table>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-user"></i></span></td>
                            <td><input type="text" placeholder="Nama Lengkap" id="nama" name="nama"
                                    required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-id-card"></i></span></td>
                            <td><input type="text" placeholder="NIK" id="nik" name="nik" required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-envelope"></i></span></td>
                            <td><input type="email" placeholder="Email" id="email" name="email" required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-lock"></i></span></td>
                            <td><input type="password" placeholder="Password" id="password" name="password" required />
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-lock"></i></span></td>
                            <td><input id="password-confirm" placeholder="Konfirmasi Password" type="password"
                                    class="form-control" name="password_confirmation" required
                                    autocomplete="new-password"></td>
                        </tr>
                    </table>
                </div>

                <div class="informasi-alamat">
                    <h3>Informasi Alamat</h3>
                    <table>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-globe"></i></span></td>
                            <td>
                                <div class="dropdown">
                                    <input type="text" placeholder="Negara" id="negara" name="negara" required />
                                    <div class="dropdown-content">
                                        <a href="#">Negara 1</a>
                                        <a href="#">Negara 2</a>
                                        <a href="#">Negara 3</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-map-marker-alt"></i></span></td>
                            <td>
                                <div class="dropdown">
                                    <input type="text" placeholder="Provinsi" id="provinsi" name="provinsi"
                                        required />
                                    <div class="dropdown-content">
                                        <a href="#">Provinsi 1</a>
                                        <a href="#">Provinsi 2</a>
                                        <a href="#">Provinsi 3</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-address-card"></i></span></td>
                            <td><input type="text" placeholder="Alamat Lengkap" id="alamat" name="alamat"
                                    required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-phone"></i></span></td>
                            <td><input type="text" placeholder="Nomor Telepon" id="telepon" name="telepon"
                                    required /></td>
                        </tr>
                        <tr>
                            <button class="btn btn-primary" type="submit" id="simpanBtn">Simpan Data</button>
                            <pa>Sudah punya akun? <a href="login">Masuk</a></pa>
                        </tr>
                    </table>
        </form>
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
                            <li><a href="welcome">Home</a></li>
                            <li><a href="#">Bootcamp</a></li>
                            <li><a href="#">IMM</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Profile</a></li>
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
    <script src="{{ asset('js/register.js') }}"></script>
</body>

</html>
