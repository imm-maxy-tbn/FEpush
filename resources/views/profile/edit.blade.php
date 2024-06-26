<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Edit Profil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile/profiledit.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="imm">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bootcamp">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="imm">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a href="profile" class="navbar-button">Profile</a>
                    </li>
                </ul>                <div class="navbar-actions">
                    <a href="login" class="btn btn-primary">Login</a>
                    <a href="register" class="btn btn-outline-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

<div class="container d-flex justify-content-center">
<div class="profile-container"  style="margin-top:130px">
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
</div></div>
    </form>
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
                    <a href="/"><li>HomePage</li></a>
                    <a href="bootcamp"><li>Bootcamp</li></a>
                    <a href="imm"><li>IMM</li></a>
                    <a href="#"><li>Comunity</li></a>
                    <a href="profile"><li>Profile</li></a>
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
