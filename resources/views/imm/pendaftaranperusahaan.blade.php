<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
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
        <a class="navbar-brand" href="/">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                <li class="nav-item ">
                    <a class="nav-link" href="welcome">Home</a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="#">Bootcamp</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">IMM</a>
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

    <form action="{{ route('companies.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="register-container">
            <h2>Daftarkan Perusahaan Anda</h2>
            <div class="register-form">
                <div class="informasi-pribadi">
                    <table>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-building"></i></span></td>
                            <td><input type="text" placeholder="Nama Perusahaan" id="nama" name="nama"
                                    required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-id-card"></i></span></td>
                            <td><input type="text" placeholder="Profil Perusahaan" id="profile" name="profile"
                                    required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-user"></i></span></td>
                            <td><input type="email" placeholder="Nama PIC" id="nama_pic" name="nama_pic" required />
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-user-tie"></i></span></td>
                            <td><input type="text" placeholder="Posisi PIC" id="posisi_pic" name="posisi_pic"
                                    required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-phone"></i></span></td>
                            <td><input type="number" placeholder="Nomor Telepon" id="telepon" name="telepon"
                                    required /></td>
                        </tr>
                    </table>
                </div>

                <div class="informasi-alamat">
                    <table>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-globe"></i></span></td>
                            <td>
                                <div class="dropdown">
                                    <input type="text" placeholder="Negara" id="negara" name="negara" required />
                     
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-map-marker-alt"></i></span></td>
                            <td>
                                <div class="dropdown">
                                    <input type="text" placeholder="Provinsi" id="provinsi" name="provinsi"
                                        required />
                       
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-map-marker-alt"></i></span></td>
                            <td>
                                <div class="dropdown">
                                    <input type="text" placeholder="Kabupaten" id="kabupaten" name="kabupaten"
                                        required />
                      
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-users"></i></span></td>
                            <td><input type="number" placeholder="Jumlah Karyawan" id="jumlah_karyawan"
                                    name="jumlah_karyawan" required /></td>
                        </tr>
                        <tr>
                            <td><span class="input-icon"><i class="fas fa-industry"></i></span></td>
                            <td><input type="text" placeholder="Tipe Perusahaan" id="tipe" name="tipe"
                                    required /></td>
                        </tr>
                        <tr>
                            <button class="btn btn-primary" type="submit" id="simpanBtn">Simpan Data
                            </button>
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
