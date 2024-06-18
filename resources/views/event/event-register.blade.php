<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Succes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/event/event.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
 
    <header>
        <nav class="w-100">
            <div class="row w-100 d-flex justify-content-between align-items-center">
                <div class="col-auto">
                    <img src="images/logo-maxy.png" width="120" height="41" alt="img">
                </div>
                <div class="col-auto h-100 d-flex align-items-center">
                    <ul class="d-flex justify-content-center"
                        style="gap: 70px; margin: 0; padding: 0; list-style: none;">
                        <a href="/event">
                            <li>Kegiatan</li>
                        </a>
                        <a href="/event-register">
                            <li>Daftar</li>
                        </a>
                        <a href="/">
                            <li>Sponsor</li>
                        </a>
                    </ul>
                </div>
                <div class="col-auto d-flex justify-content-end">
                    <button class="btn">Login</button>
                </div>
            </div>
        </nav>

    </header>


    <section class="banner" style="">   <img src="images/bg-event.png" class="w-100 h-auto" alt=""></section>

    <div class="content d-flex flex-column justify-content-start">
        <div class="container">
            <p class="" style="font-size:40px; font-weight:bold">Isi Data Diri</p>
            <div class="mb-4 mt-4">
                <label for="nama_depan" class="form-label">Nama Lengkap</label>
                <input type="text" name="" id="nama_depan" class="form-control"
                    placeholder="Isi disini" required>
            </div>
            <div class="mb-4 mt-4">
                <label for="nama_depan" class="form-label">Email</label>
                <input type="text" name="" id="nama_depan" class="form-control"
                    placeholder="Isi disini" required>
            </div>

                <div class="mb-4 mt-4">
                    <label for="pekerjaan" class="form-label">Pekerjaan</label>
                    <select id="pekerjaan" class="form-control" required>
                        <option value="" disabled selected>Pilih Pekerjaan</option>
                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                        <option value="Guru/Dosen">Guru/Dosen</option>
                        <option value="Swasta">Swasta</option>
                        <option value="PNS">PNS</option>
                        <option value="Belum Bekerja">Belum Bekerja</option>
                        <option value="Lainnya">Lainnya...</option>
                    </select>
                    <input type="text" id="customPekerjaan" class="form-control hidden-input mt-2" placeholder="Isi disini" required>
                </div>
   
            
            <div class="mb-4 mt-4">
                <label for="nama_depan" class="form-label">Nama Intansi/Perusahaan ( Opsional )</label>
                <input type="text" name="" id="nama_depan" class="form-control"
                    placeholder="Isi disini" >
            </div>

            <a href="/succes"><button type="submit" class="btn-simpan mt-5" style="font-size: 20px; font-weight:bold">Simpan Data</button>
            </a>
        </div>
    </div>
    <footer>
        <div class="row-footer d-flex justify-content-center align-items-center">
            <div class="row-footer-in d-flex flex-column justify-content-center text-center align-items-center"
                style="">
                <div class="col text-white
                " style="font-size:32px; font-weight:500">Tertarik menjadi
                    sponsor</div>
                <div class="col">
                    <button class="btn-daftar ">Hubunggi Sekarang</button>
                </div>
                <div class="col d-flex justify-content-between" style="">

                    <div class="col d-flex justify-content-start" style="gap:50px">
                        <a href=""></a><img src="images/icon-yt.png" alt=""></a>
                        <a href=""> <img src="images/icon-ig.png" alt=""></a>
                        <a href=""> <img src="images/icon-fb.png" alt=""></a>
                    </div>
                    <div class="col-text">
                        <div class="row d-flex flex-column align-items-center " style="gap: 30px">
                            <div class="col text-left  d-flex justify-content-start" style="gap: 30px">

                                <a href="" class="text-white">Term of Reference</a>
                                <a href="" class="text-white">Contact</a>

                            </div>
                            <a href="" class="text-white">Privacy Policy</a>
                        </div>
                    </div>
                </div>
                <div class="col-text2 text-white">Maxyacademy Copyright @ 2024</div>
            </div>
        </div>
    </footer>

    <script>
        document.getElementById('pekerjaan').addEventListener('change', function () {
            var customInput = document.getElementById('customPekerjaan');
            if (this.value === 'Lainnya') {
                customInput.classList.remove('hidden-input');
            } else {
                customInput.classList.add('hidden-input');
            }
        });
    </script>
</body>

</html>
