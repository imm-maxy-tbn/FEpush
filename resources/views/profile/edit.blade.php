<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile/profiledit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>

<div id="loading">
    <img src="images/imm.png" alt="Loading...">
</div>
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

<div class="profile-container">
    <h1>Profile</h1>
    <p>Kelola pengaturan profil Anda</p>
    <div class="profile-picture-container">
        <img src="https://via.placeholder.com/150" alt="Profile Picture">
        <div class="edit-icon">
            <i class="fas fa-edit"></i>
        </div>
    </div>
    <form id="profileForm">
        <div class="form-group">
            <label for="fullName">Nama Lengkap</label>
            <input type="text" id="fullName" class="form-control">
        </div>
        <div class="form-group">
            <label for="address">Alamat Lengkap</label>
            <input type="text" id="address" class="form-control">
        </div>
        <div class="form-group">
            <label for="phone">Nomor Handphone</label>
            <div class="phone-input">
                <img src="https://flagcdn.com/id.svg" alt="ID Flag">
                <span>(+62)</span>
                <input type="text" id="phone" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="city">Kota / Kabupaten</label>
            <input type="text" id="city" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="province">Provinsi</label>
            <input type="text" id="province" class="form-control">
        </div>
        <div class="form-buttons">
    <a href="profile" class="btn btn-back">Kembali</a>
    <button type="submit" class="btn btn-save">Simpan</button>
</div>
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
<script src="{{ asset('js/welcome/script.js') }}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    document.getElementById('profileForm').addEventListener('submit', function(event) {
        event.preventDefault();
        alert('Profil berhasil disimpan!');
        window.location.href = 'profile'; // Ubah 'profile' dengan URL halaman profil Anda
    });
</script>

</body>
</html>
