<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Pendaftaran</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm/pendaftaranperusahaan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="bootcamp">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="imm">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="register-container">
        <h2>Daftarkan Perusahaan Anda</h2>
        <form action="{{ route('companies.store') }}" method="POST">
            @csrf
            <div class="register-form row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="nama">Nama Perusahaan</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="profile">Profil Perusahaan</label>
                        <input type="text" class="form-control" id="profile" name="profile" placeholder="Masukkan link disini" required>
                        <small class="form-text text-muted">Dalam bentuk website, media sosial, atau lainnya</small>
                    </div>
                    <div class="form-group">
                        <label for="nama_pic">Nama PIC</label>
                        <input type="text" class="form-control" id="nama_pic" name="nama_pic" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="posisi_pic">Posisi PIC</label>
                        <input type="text" class="form-control" id="posisi_pic" name="posisi_pic" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Telepon PIC</label>
                        <input type="text" class="form-control" id="telepon" name="telepon" placeholder="Isi disini" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <select class="form-control" id="negara" name="negara" required>
                            <option>Pilih Negara</option>
                            <!-- Tambahkan opsi negara di sini -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <select class="form-control" id="provinsi" name="provinsi" required>
                            <option>Pilih Provinsi</option>
                            <!-- Tambahkan opsi provinsi di sini -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kabupaten">Kabupaten</label>
                        <select class="form-control" id="kabupaten" name="kabupaten" required>
                            <option>Pilih Kabupaten</option>
                            <!-- Tambahkan opsi kabupaten di sini -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_karyawan">Jumlah Karyawan</label>
                        <input type="number" class="form-control" id="jumlah_karyawan" name="jumlah_karyawan" placeholder="Isi disini" required>
                    </div>
                    <div class="form-group">
                        <label for="tipe">Tipe Perusahaan</label>
                        <input type="text" class="form-control" id="tipe" name="tipe" placeholder="Isi disini" required>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <button class="btn btn-primary" type="submit" id="simpanBtn">Simpan Data</button>
                </div>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/imm/pendaftaran.js') }}"></script>

</body>

</html>
