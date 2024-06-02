<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Homepage</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ asset('css/Register.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">IMM Impact Mate</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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
    <div class="register-form">
      <img src="images/imm.png" alt="Brand Logo" class="brand-logo">
      <h2>Daftarkan akun</h2>
      <div class="form-row">
        <div class="form-group">
          <label for="fullName">Nama Lengkap</label>
          <input type="text" id="fullName" placeholder="isi disini" />
        </div>
        <div class="form-group">
          <label for="country">Negara</label>
          <select id="country">
            <option>Pilih Negara</option>
            <!-- Add more options here -->
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="nik">NIK</label>
          <input type="text" id="nik" placeholder="Masukkan disini" />
        </div>
        <div class="form-group">
          <label for="province">Provinsi</label>
          <select id="province">
            <option>Pilih Provinsi</option>
            <!-- Add more options here -->
          </select>
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" placeholder="Isi disini" />
        </div>
        <div class="form-group">
          <label for="address">Alamat Lengkap</label>
          <input type="text" id="address" placeholder="Masukkan alamat lengkap" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" placeholder="Isi disini" />
        </div>
        <div class="form-group">
          <label for="phone">Nomor Telepon</label>
          <input type="text" id="phone" placeholder="Isi disini" />
        </div>
      </div>
      <div class="form-row">
        <div class="form-group">
          <label for="confirmPassword">Konfirmasi Password</label>
          <input type="password" id="confirmPassword" placeholder="Isi disini" />
        </div>
      </div>
      <button class="btn-register" id="simpanBtn">Simpan Data</button>
      <div class="login-link">Sudah punya akun? <a href="login">Masuk</a></div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="{{ asset('js/register.js') }}"></script>
</body>
</html>
