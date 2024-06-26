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
        <div class="container d-flex align-items-center justify-content-center">
            <a class="navbar-brand" href="/">IMM</a>
            <div class="justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="bootcamp">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                    <a href="imm" class="navbar-button">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="community">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<form action="{{ route('companies.store') }}" method="POST">
    @csrf
    <div class="register-container">
        <h2>Daftarkan Perusahaan Anda</h2>
        <div class="register-form">
            <div class="informasi-pribadi">
                <table>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-building"></i></span></td>
                        <td><input type="text" placeholder="Nama Perusahaan" id="nama" name="nama" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-id-card"></i></span></td>
                        <td><input type="text" placeholder="Profil Perusahaan" id="profile" name="profile" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-user"></i></span></td>
                        <td><input type="text" placeholder="Nama PIC" id="nama_pic" name="nama_pic" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-user-tie"></i></span></td>
                        <td><input type="text" placeholder="Posisi PIC" id="posisi_pic" name="posisi_pic" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-phone"></i></span></td>
                        <td><input type="text" placeholder="Nomor Telepon" id="telepon" name="telepon" required /></td>
                    </tr>
                </table>
            </div>

            <div class="informasi-alamat">
                <table>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-globe"></i></span></td>
                        <td><input type="text" placeholder="Negara" id="negara" name="negara" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-map-marker-alt"></i></span></td>
                        <td><input type="text" placeholder="Provinsi" id="provinsi" name="provinsi" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-map-marker-alt"></i></span></td>
                        <td><input type="text" placeholder="Kabupaten" id="kabupaten" name="kabupaten" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-users"></i></span></td>
                        <td><input type="number" placeholder="Jumlah Karyawan" id="jumlah_karyawan" name="jumlah_karyawan" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-industry"></i></span></td>
                        <td><input type="text" placeholder="Tipe Perusahaan" id="tipe" name="tipe" required /></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn btn-primary" type="submit" id="simpanBtn">Simpan Data</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</form>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/imm/pendaftaran.js') }}"></script>

</body>
</html>
