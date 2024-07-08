@extends('layouts.app-imm')
@section('title', 'Profil Perusahaan')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<style>
    @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&family=Quicksand:wght@300..700&display=swap");
html,
body {
    margin: 0;
    font-family: "Poppins", sans-serif;
}

* {
    text-decoration: none;
    list-style-type: none;
}

.btn-keluar {
    width: 183px;
    height: 35px;
    background-color: white;
    border: 2px solid #5940cb;
    border-radius: 7px;
}

.btn-masuk {
    width: 183px;
    height: 35px;
    background-color: #5940cb;
    color: white;
    border: none;
    border-radius: 7px;
}

.btn-masukkk {
    width: 383px;
    height: 35px;
    background-color: #5940cb;
    color: white;
    border: none;
    border-radius: 7px;
}

.btn-masukkk:hover {
    background-color: #5e41de;
}

.modal-content {
    width: 699px;
    height: 253px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-body {
    gap: 20px;
    margin: 0 51px;
    height: 100%;
    display: flex;
    align-items: start;
    justify-content: center;
    flex-direction: column;
}

.btnn {
    display: flex;
    align-content: center;
    justify-content: space-around;
    width: 100%;
}


/* Navbar */

.propil {
    margin-top: 120px;
}


/* Footer */

.bahasa {
    background-color: #5940cb;
}

#preview {
    width: 100px;
    height: 100px;
    border-radius: 50%;
    object-fit: cover;
    border: 1px solid #ccc;
}

#changeText {
    cursor: pointer;
    color: #5940cb;
}
</style>
@endsection

@section('content')
<div class="container propil">
    <div class="container">
        <form method="POST" action="{{ route('profile-commpany.update', ['id' => $company->id]) }}" id="companyForm">
            @csrf
            @method('PUT')
            <section>
                <div class="row mt-5 d-flex justify-content-center">
                    <div class="col-12 col-md-10">
                        <div class="row mb-3">
                            <div class="d-flex align-items-center">
                                <h5 class="mr-5">Edit Data Perusahaan</h5>
                                <img style="cursor: pointer" id="editButton" src="images/icon-edit.svg" width="20" alt="">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput1" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="nama" class="form-control" id="formGroupExampleInput1" placeholder="Nama Perusahaan" value="{{ $company->nama }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Profil Perusahaan</label>
                            <input type="text" name="profile" class="form-control" id="formGroupExampleInput2" placeholder="Profil Perusahaan" value="{{ $company->profile }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Nama PIC</label>
                            <input type="text" name="nama_pic" class="form-control" id="formGroupExampleInput3" placeholder="Nama PIC" value="{{ $company->nama_pic }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Posisi PIC</label>
                            <input type="text" name="posisi_pic" class="form-control" id="formGroupExampleInput4" placeholder="Posisi PIC" value="{{ $company->posisi_pic }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Nomor Telepon</label>
                            <input type="number" name="telepon" class="form-control" id="formGroupExampleInput5" placeholder="Nomor Telepon" value="{{ $company->telepon }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput8" class="form-label">Negara</label>
                            <input type="text" name="negara" class="form-control" id="formGroupExampleInput8" placeholder="Negara" value="{{ $company->negara }}" readonly>
                        </div>
                        <div class="form-group mb-3">
                            <label for="provinsi">Provinsi</label>
                            <select class="form-control" disabled name="provinsi"  id="provinsi"  required onchange="populateCities()">
                                <option value="" disabled selected>{{ $company->provinsi }}</option>
                                <option value="Aceh">Aceh</option>
                                <option value="Sumatera Utara">Sumatera Utara</option>
                                <option value="Sumatera Barat">Sumatera Barat</option>
                                <option value="Riau">Riau</option>
                                <option value="Jambi">Jambi</option>
                                <option value="Sumatera Selatan">Sumatera Selatan</option>
                                <option value="Bengkulu">Bengkulu</option>
                                <option value="Lampung">Lampung</option>
                                <option value="Kepulauan Bangka Belitung">Kepulauan Bangka Belitung</option>
                                <option value="Kepulauan Riau">Kepulauan Riau</option>
                                <option value="DKI Jakarta">DKI Jakarta</option>
                                <option value="Jawa Barat">Jawa Barat</option>
                                <option value="Jawa Tengah">Jawa Tengah</option>
                                <option value="DI Yogyakarta">DI Yogyakarta</option>
                                <option value="Jawa Timur">Jawa Timur</option>
                                <option value="Banten">Banten</option>
                                <option value="Bali">Bali</option>
                                <option value="Nusa Tenggara Barat">Nusa Tenggara Barat</option>
                                <option value="Nusa Tenggara Timur">Nusa Tenggara Timur</option>
                                <option value="Kalimantan Barat">Kalimantan Barat</option>
                                <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                                <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                                <option value="Kalimantan Timur">Kalimantan Timur</option>
                                <option value="Kalimantan Utara">Kalimantan Utara</option>
                                <option value="Sulawesi Utara">Sulawesi Utara</option>
                                <option value="Sulawesi Tengah">Sulawesi Tengah</option>
                                <option value="Sulawesi Selatan">Sulawesi Selatan</option>
                                <option value="Sulawesi Tenggara">Sulawesi Tenggara</option>
                                <option value="Gorontalo">Gorontalo</option>
                                <option value="Sulawesi Barat">Sulawesi Barat</option>
                                <option value="Maluku">Maluku</option>
                                <option value="Maluku Utara">Maluku Utara</option>
                                <option value="Papua">Papua</option>
                                <option value="Papua Barat">Papua Barat</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="kabupaten">Kota/Kabupaten</label>
                            <select class="form-control" disabled name="kabupaten" id="kabupaten" required>
                                <option value=""  selected>{{ $company->kabupaten }}</option>
                            </select>
                        </div>
                  
                        <div class="mb-3">
                            <label for="formGroupExampleInput6" class="form-label">Jumlah Pekerja</label>
                            <input type="number" name="jumlah_karyawan" class="form-control" id="formGroupExampleInput6" placeholder="Jumlah Pekerja" value="{{ $company->jumlah_karyawan }}" readonly>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput7" class="form-label">Tipe Perusahaan</label>
                            <input type="text" name="tipe" class="form-control" id="formGroupExampleInput7" placeholder="Tipe Perusahaan" value="{{ $company->tipe }}" readonly>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="row my-3 d-flex justify-content-center align-items-center">
                    <button type="button" id="saveButton" class="btn-masukkk" style="display: none;" data-toggle="modal" data-target="#confirmModal">
                        <div class="out d-flex justify-content-center align-items-center" style="gap: 10px">
                            <span>Simpan Perubahan Data Perusahaan</span>
                            <img src="images/icon-save.svg" width="20" alt="">
                        </div>
                    </button>
                </div>
            </section>
        </form>
    </div>

    <!-- Email Modal -->
    <div class="modal fade" id="emailModal" tabindex="-1" role="dialog" aria-labelledby="emailModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-body">
                    <p class="text-muted">Silakan ubah email Anda di Email pengguna.</p>
                    <div class="btnn">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-masuk" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Modal -->
    <div class="modal fade" id="passwordModal" tabindex="-1" role="dialog" aria-labelledby="passwordModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-body">
                    <p class="text-muted">Silakan ubah password Anda di Password pengguna.</p>
                    <div class="btnn">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-masuk" data-dismiss="modal">Tutup</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Confirmation Modal -->
    <div class="modal fade" id="confirmModal" tabindex="-1" role="dialog" aria-labelledby="confirmModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content shadow">
                <div class="modal-body">
                    <p class="text-muted">Apakah Anda yakin ingin menyimpan perubahan ini?</p>
                    <div class="btnn">
                        <button type="button" class="btn btn-keluar" data-dismiss="modal">Belum, cek kembali</button>
                        <button type="button" class="btn btn-masuk" data-dismiss="modal" id="confirmSaveButton">Ya, sudah benar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('editButton').addEventListener('click', function() {
            document.querySelectorAll('input').forEach(input => {
                input.removeAttribute('readonly');
            });
            document.querySelectorAll('select').forEach(select => {
                select.removeAttribute('disabled');
            });
            document.getElementById('saveButton').style.display = 'block';
            document.getElementById('editButton').style.display = 'none';
        });

        document.getElementById('confirmSaveButton').addEventListener('click', function() {
            document.getElementById('companyForm').submit();
        });
    </script>
     <script>
        function populateCities() {
            var provinsiSelect = document.getElementById("provinsi");
            var kotaSelect = document.getElementById("kabupaten");
            var selectedProvinsi = provinsiSelect.value;
    
            // Clear existing options
            kotaSelect.innerHTML = '<option value="" disabled selected>Pilih Kota/Kabupaten</option>';
    
            // Add options based on selected provinsi
            switch (selectedProvinsi) {
                case "Aceh":
                    addOption(kotaSelect, "Banda Aceh", "Banda Aceh");
                    addOption(kotaSelect, "Sabang", "Sabang");
                    addOption(kotaSelect, "Lhokseumawe", "Lhokseumawe");
                    addOption(kotaSelect, "Langsa", "Langsa");
                    addOption(kotaSelect, "Aceh Barat", "Aceh Barat");
                    addOption(kotaSelect, "Aceh Barat Daya", "Aceh Barat Daya");
                    addOption(kotaSelect, "Aceh Besar", "Aceh Besar");
                    addOption(kotaSelect, "Aceh Jaya", "Aceh Jaya");
                    addOption(kotaSelect, "Aceh Selatan", "Aceh Selatan");
                    addOption(kotaSelect, "Aceh Singkil", "Aceh Singkil");
                    addOption(kotaSelect, "Aceh Tamiang", "Aceh Tamiang");
                    addOption(kotaSelect, "Aceh Tengah", "Aceh Tengah");
                    addOption(kotaSelect, "Aceh Tenggara", "Aceh Tenggara");
                    addOption(kotaSelect, "Aceh Timur", "Aceh Timur");
                    addOption(kotaSelect, "Aceh Utara", "Aceh Utara");
                    addOption(kotaSelect, "Bener Meriah", "Bener Meriah");
                    addOption(kotaSelect, "Bireuen", "Bireuen");
                    addOption(kotaSelect, "Gayo Lues", "Gayo Lues");
                    addOption(kotaSelect, "Nagan Raya", "Nagan Raya");
                    addOption(kotaSelect, "Pidie", "Pidie");
                    addOption(kotaSelect, "Pidie Jaya", "Pidie Jaya");
                    addOption(kotaSelect, "Simeulue", "Simeulue");
                    break;
                case "Sumatera Utara":
                    addOption(kotaSelect, "Medan", "Medan");
                    addOption(kotaSelect, "Binjai", "Binjai");
                    addOption(kotaSelect, "Pematangsiantar", "Pematangsiantar");
                    addOption(kotaSelect, "Tanjungbalai", "Tanjungbalai");
                    addOption(kotaSelect, "Tebing Tinggi", "Tebing Tinggi");
                    addOption(kotaSelect, "Deli Serdang", "Deli Serdang");
                    addOption(kotaSelect, "Karo", "Karo");
                    addOption(kotaSelect, "Langkat", "Langkat");
                    addOption(kotaSelect, "Mandailing Natal", "Mandailing Natal");
                    addOption(kotaSelect, "Nias", "Nias");
                    addOption(kotaSelect, "Padang Lawas", "Padang Lawas");
                    addOption(kotaSelect, "Padang Lawas Utara", "Padang Lawas Utara");
                    addOption(kotaSelect, "Pakpak Bharat", "Pakpak Bharat");
                    addOption(kotaSelect, "Samosir", "Samosir");
                    addOption(kotaSelect, "Serdang Bedagai", "Serdang Bedagai");
                    addOption(kotaSelect, "Simalungun", "Simalungun");
                    addOption(kotaSelect, "Tapanuli Selatan", "Tapanuli Selatan");
                    addOption(kotaSelect, "Tapanuli Tengah", "Tapanuli Tengah");
                    addOption(kotaSelect, "Tapanuli Utara", "Tapanuli Utara");
                    addOption(kotaSelect, "Toba Samosir", "Toba Samosir");
                    break;
                case "Sumatera Barat":
                    addOption(kotaSelect, "Padang", "Padang");
                    addOption(kotaSelect, "Bukittinggi", "Bukittinggi");
                    addOption(kotaSelect, "Padang Panjang", "Padang Panjang");
                    addOption(kotaSelect, "Payakumbuh", "Payakumbuh");
                    addOption(kotaSelect, "Pariaman", "Pariaman");
                    addOption(kotaSelect, "Sawahlunto", "Sawahlunto");
                    addOption(kotaSelect, "Solok", "Solok");
                    addOption(kotaSelect, "Agam", "Agam");
                    addOption(kotaSelect, "Dharmasraya", "Dharmasraya");
                    addOption(kotaSelect, "Kepulauan Mentawai", "Kepulauan Mentawai");
                    addOption(kotaSelect, "Lima Puluh Kota", "Lima Puluh Kota");
                    addOption(kotaSelect, "Padang Pariaman", "Padang Pariaman");
                    addOption(kotaSelect, "Pasaman", "Pasaman");
                    addOption(kotaSelect, "Pasaman Barat", "Pasaman Barat");
                    addOption(kotaSelect, "Sijunjung", "Sijunjung");
                    addOption(kotaSelect, "Solok Selatan", "Solok Selatan");
                    addOption(kotaSelect, "Tanah Datar", "Tanah Datar");
                    break;
                    case "Riau":
            addOption(kotaSelect, "Pekanbaru", "Pekanbaru");
            addOption(kotaSelect, "Dumai", "Dumai");
            addOption(kotaSelect, "Bengkalis", "Bengkalis");
            addOption(kotaSelect, "Indragiri Hilir", "Indragiri Hilir");
            addOption(kotaSelect, "Indragiri Hulu", "Indragiri Hulu");
            addOption(kotaSelect, "Kampar", "Kampar");
            addOption(kotaSelect, "Kepulauan Meranti", "Kepulauan Meranti");
            addOption(kotaSelect, "Pelalawan", "Pelalawan");
            addOption(kotaSelect, "Rokan Hilir", "Rokan Hilir");
            addOption(kotaSelect, "Rokan Hulu", "Rokan Hulu");
            addOption(kotaSelect, "Siak", "Siak");
            break;
        case "Jambi":
            addOption(kotaSelect, "Jambi", "Jambi");
            addOption(kotaSelect, "Sungai Penuh", "Sungai Penuh");
            addOption(kotaSelect, "Bungo", "Bungo");
            addOption(kotaSelect, "Kerinci", "Kerinci");
            addOption(kotaSelect, "Merangin", "Merangin");
            addOption(kotaSelect, "Muaro Jambi", "Muaro Jambi");
            addOption(kotaSelect, "Sarolangun", "Sarolangun");
            addOption(kotaSelect, "Tanjung Jabung Barat", "Tanjung Jabung Barat");
            addOption(kotaSelect, "Tanjung Jabung Timur", "Tanjung Jabung Timur");
            addOption(kotaSelect, "Tebo", "Tebo");
            break;
        case "Sumatera Selatan":
            addOption(kotaSelect, "Palembang", "Palembang");
            addOption(kotaSelect, "Prabumulih", "Prabumulih");
            addOption(kotaSelect, "Banyuasin", "Banyuasin");
            addOption(kotaSelect, "Empat Lawang", "Empat Lawang");
            addOption(kotaSelect, "Lahat", "Lahat");
            addOption(kotaSelect, "Muara Enim", "Muara Enim");
            addOption(kotaSelect, "Musi Banyuasin", "Musi Banyuasin");
            addOption(kotaSelect, "Musi Rawas", "Musi Rawas");
            addOption(kotaSelect, "Ogan Ilir", "Ogan Ilir");
            addOption(kotaSelect, "Ogan Komering Ilir", "Ogan Komering Ilir");
            addOption(kotaSelect, "Ogan Komering Ulu", "Ogan Komering Ulu");
            addOption(kotaSelect, "Ogan Komering Ulu Selatan", "Ogan Komering Ulu Selatan");
            addOption(kotaSelect, "Ogan Komering Ulu Timur", "Ogan Komering Ulu Timur");
            addOption(kotaSelect, "Penukal Abab Lematang Ilir", "Penukal Abab Lematang Ilir");
            break;
        case "Bengkulu":
            addOption(kotaSelect, "Bengkulu", "Bengkulu");
            addOption(kotaSelect, "Bengkulu Selatan", "Bengkulu Selatan");
            addOption(kotaSelect, "Bengkulu Tengah", "Bengkulu Tengah");
            addOption(kotaSelect, "Bengkulu Utara", "Bengkulu Utara");
            addOption(kotaSelect, "Kaur", "Kaur");
            addOption(kotaSelect, "Kepahiang", "Kepahiang");
            addOption(kotaSelect, "Lebong", "Lebong");
            addOption(kotaSelect, "Mukomuko", "Mukomuko");
            addOption(kotaSelect, "Rejang Lebong", "Rejang Lebong");
            addOption(kotaSelect, "Seluma", "Seluma");
            break;
        case "Lampung":
            addOption(kotaSelect, "Bandar Lampung", "Bandar Lampung");
            addOption(kotaSelect, "Metro", "Metro");
            addOption(kotaSelect, "Lampung Barat", "Lampung Barat");
            addOption(kotaSelect, "Lampung Selatan", "Lampung Selatan");
            addOption(kotaSelect, "Lampung Tengah", "Lampung Tengah");
            addOption(kotaSelect, "Lampung Timur", "Lampung Timur");
            addOption(kotaSelect, "Lampung Utara", "Lampung Utara");
            addOption(kotaSelect, "Mesuji", "Mesuji");
            addOption(kotaSelect, "Pesawaran", "Pesawaran");
            addOption(kotaSelect, "Pesisir Barat", "Pesisir Barat");
            addOption(kotaSelect, "Pringsewu", "Pringsewu");
            addOption(kotaSelect, "Tanggamus", "Tanggamus");
            addOption(kotaSelect, "Tulang Bawang", "Tulang Bawang");
            addOption(kotaSelect, "Tulang Bawang Barat", "Tulang Bawang Barat");
            addOption(kotaSelect, "Way Kanan", "Way Kanan");
            break;
            case "Kepulauan Bangka Belitung":
            addOption(kotaSelect, "Pangkal Pinang", "Pangkal Pinang");
            addOption(kotaSelect, "Bangka", "Bangka");
            addOption(kotaSelect, "Bangka Barat", "Bangka Barat");
            addOption(kotaSelect, "Bangka Selatan", "Bangka Selatan");
            addOption(kotaSelect, "Bangka Tengah", "Bangka Tengah");
            addOption(kotaSelect, "Belitung", "Belitung");
            addOption(kotaSelect, "Belitung Timur", "Belitung Timur");
            break;
        case "Kepulauan Riau":
            addOption(kotaSelect, "Batam", "Batam");
            addOption(kotaSelect, "Tanjung Pinang", "Tanjung Pinang");
            addOption(kotaSelect, "Bintan", "Bintan");
            addOption(kotaSelect, "Karimun", "Karimun");
            addOption(kotaSelect, "Lingga", "Lingga");
            addOption(kotaSelect, "Natuna", "Natuna");
            break;
        case "DKI Jakarta":
            addOption(kotaSelect, "Jakarta Pusat", "Jakarta Pusat");
            addOption(kotaSelect, "Jakarta Utara", "Jakarta Utara");
            addOption(kotaSelect, "Jakarta Barat", "Jakarta Barat");
            addOption(kotaSelect, "Jakarta Timur", "Jakarta Timur");
            addOption(kotaSelect, "Jakarta Selatan", "Jakarta Selatan");
            break;
        case "Jawa Barat":
            addOption(kotaSelect, "Bandung", "Bandung");
            addOption(kotaSelect, "Banjar", "Banjar");
            addOption(kotaSelect, "Bekasi", "Bekasi");
            addOption(kotaSelect, "Bogor", "Bogor");
            addOption(kotaSelect, "Cimahi", "Cimahi");
            addOption(kotaSelect, "Cirebon", "Cirebon");
            addOption(kotaSelect, "Depok", "Depok");
            addOption(kotaSelect, "Sukabumi", "Sukabumi");
            addOption(kotaSelect, "Tasikmalaya", "Tasikmalaya");
            addOption(kotaSelect, "Bandung Barat", "Bandung Barat");
            addOption(kotaSelect, "Bekasi", "Bekasi");
            addOption(kotaSelect, "Bogor", "Bogor");
            addOption(kotaSelect, "Ciamis", "Ciamis");
            addOption(kotaSelect, "Cianjur", "Cianjur");
            addOption(kotaSelect, "Garut", "Garut");
            addOption(kotaSelect, "Indramayu", "Indramayu");
            addOption(kotaSelect, "Karawang", "Karawang");
            addOption(kotaSelect, "Kuningan", "Kuningan");
            addOption(kotaSelect, "Majalengka", "Majalengka");
            addOption(kotaSelect, "Pangandaran", "Pangandaran");
            addOption(kotaSelect, "Purwakarta", "Purwakarta");
            addOption(kotaSelect, "Subang", "Subang");
            addOption(kotaSelect, "Sukabumi", "Sukabumi");
            addOption(kotaSelect, "Sumedang", "Sumedang");
            addOption(kotaSelect, "Tasikmalaya", "Tasikmalaya");
            break;
            case "Jawa Tengah":
            addOption(kotaSelect, "Semarang", "Semarang");
            addOption(kotaSelect, "Salatiga", "Salatiga");
            addOption(kotaSelect, "Surakarta (Solo)", "Surakarta");
            addOption(kotaSelect, "Pekalongan", "Pekalongan");
            addOption(kotaSelect, "Tegal", "Tegal");
            addOption(kotaSelect, "Magelang", "Magelang");
            addOption(kotaSelect, "Banjarnegara", "Banjarnegara");
            addOption(kotaSelect, "Banyumas", "Banyumas");
            addOption(kotaSelect, "Batang", "Batang");
            addOption(kotaSelect, "Blora", "Blora");
            addOption(kotaSelect, "Boyolali", "Boyolali");
            addOption(kotaSelect, "Brebes", "Brebes");
            addOption(kotaSelect, "Cilacap", "Cilacap");
            addOption(kotaSelect, "Demak", "Demak");
            addOption(kotaSelect, "Grobogan", "Grobogan");
            addOption(kotaSelect, "Jepara", "Jepara");
            addOption(kotaSelect, "Karanganyar", "Karanganyar");
            addOption(kotaSelect, "Kebumen", "Kebumen");
            addOption(kotaSelect, "Kendal", "Kendal");
            addOption(kotaSelect, "Klaten", "Klaten");
            addOption(kotaSelect, "Kudus", "Kudus");
            addOption(kotaSelect, "Pati", "Pati");
            addOption(kotaSelect, "Pemalang", "Pemalang");
            addOption(kotaSelect, "Purbalingga", "Purbalingga");
            addOption(kotaSelect, "Purworejo", "Purworejo");
            addOption(kotaSelect, "Rembang", "Rembang");
            addOption(kotaSelect, "Sragen", "Sragen");
            addOption(kotaSelect, "Sukoharjo", "Sukoharjo");
            addOption(kotaSelect, "Tegal", "Tegal");
            addOption(kotaSelect, "Temanggung", "Temanggung");
            addOption(kotaSelect, "Wonogiri", "Wonogiri");
            addOption(kotaSelect, "Wonosobo", "Wonosobo");
            break;

        case "DI Yogyakarta":
            addOption(kotaSelect, "Yogyakarta", "Yogyakarta");
            addOption(kotaSelect, "Bantul", "Bantul");
            addOption(kotaSelect, "Gunung Kidul", "Gunung Kidul");
            addOption(kotaSelect, "Kulon Progo", "Kulon Progo");
            addOption(kotaSelect, "Sleman", "Sleman");
            break;

        case "Jawa Timur":
            addOption(kotaSelect, "Surabaya", "Surabaya");
            addOption(kotaSelect, "Malang", "Malang");
            addOption(kotaSelect, "Batu", "Batu");
            addOption(kotaSelect, "Probolinggo", "Probolinggo");
            addOption(kotaSelect, "Pasuruan", "Pasuruan");
            addOption(kotaSelect, "Mojokerto", "Mojokerto");
            addOption(kotaSelect, "Madiun", "Madiun");
            addOption(kotaSelect, "Kediri", "Kediri");
            addOption(kotaSelect, "Blitar", "Blitar");
            addOption(kotaSelect, "Tulungagung", "Tulungagung");
            addOption(kotaSelect, "Trenggalek", "Trenggalek");
            addOption(kotaSelect, "Jombang", "Jombang");
            addOption(kotaSelect, "Nganjuk", "Nganjuk");
            addOption(kotaSelect, "Lamongan", "Lamongan");
            addOption(kotaSelect, "Gresik", "Gresik");
            addOption(kotaSelect, "Bangkalan", "Bangkalan");
            addOption(kotaSelect, "Mojokerto", "Mojokerto");
            addOption(kotaSelect, "Pamekasan", "Pamekasan");
            addOption(kotaSelect, "Sampang", "Sampang");
            addOption(kotaSelect, "Sumenep", "Sumenep");
            addOption(kotaSelect, "Bangkalan", "Bangkalan");
            addOption(kotaSelect, "Banyuwangi", "Banyuwangi");
            addOption(kotaSelect, "Blitar", "Blitar");
            addOption(kotaSelect, "Bojonegoro", "Bojonegoro");
            addOption(kotaSelect, "Bondowoso", "Bondowoso");
            addOption(kotaSelect, "Gresik", "Gresik");
            addOption(kotaSelect, "Jember", "Jember");
            addOption(kotaSelect, "Jombang", "Jombang");
            addOption(kotaSelect, "Kediri", "Kediri");
            addOption(kotaSelect, "Lamongan", "Lamongan");
            addOption(kotaSelect, "Lumajang", "Lumajang");
            addOption(kotaSelect, "Madiun", "Madiun");
            addOption(kotaSelect, "Magetan", "Magetan");
            addOption(kotaSelect, "Malang", "Malang");
            addOption(kotaSelect, "Mojokerto", "Mojokerto");
            addOption(kotaSelect, "Nganjuk", "Nganjuk");
            addOption(kotaSelect, "Ngawi", "Ngawi");
            addOption(kotaSelect, "Pacitan", "Pacitan");
            addOption(kotaSelect, "Pamekasan", "Pamekasan");
            addOption(kotaSelect, "Pasuruan", "Pasuruan");
            break;

        case "Banten":
            addOption(kotaSelect, "Serang", "Serang");
            addOption(kotaSelect, "Cilegon", "Cilegon");
            addOption(kotaSelect, "Tangerang", "Tangerang");
            addOption(kotaSelect, "South Tangerang", "South Tangerang");
            addOption(kotaSelect, "Pandeglang", "Pandeglang");
            addOption(kotaSelect, "Lebak", "Lebak");
            addOption(kotaSelect, "Tangerang", "Tangerang");
            break;

        case "Bali":
            addOption(kotaSelect, "Denpasar", "Denpasar");
            addOption(kotaSelect, "Badung", "Badung");
            addOption(kotaSelect, "Bangli", "Bangli");
            addOption(kotaSelect, "Buleleng", "Buleleng");
            addOption(kotaSelect, "Gianyar", "Gianyar");
            addOption(kotaSelect, "Jembrana", "Jembrana");
            addOption(kotaSelect, "Karangasem", "Karangasem");
            addOption(kotaSelect, "Klungkung", "Klungkung");
            addOption(kotaSelect, "Tabanan", "Tabanan");
            break;
case "Nusa Tenggara Barat":
addOption(kotaSelect, "Mataram", "Mataram");
addOption(kotaSelect, "Bima", "Bima");
addOption(kotaSelect, "Bima", "Bima");
addOption(kotaSelect, "Dompu", "Dompu");
addOption(kotaSelect, "Lombok Barat", "Lombok Barat");
addOption(kotaSelect, "Lombok Tengah", "Lombok Tengah");
addOption(kotaSelect, "Lombok Timur", "Lombok Timur");
addOption(kotaSelect, "Sumbawa", "Sumbawa");
addOption(kotaSelect, "Sumbawa Barat", "Sumbawa Barat");
break;

case "Nusa Tenggara Timur":
addOption(kotaSelect, "Kupang", "Kupang");
addOption(kotaSelect, "Soe", "Soe");
addOption(kotaSelect, "Alor", "Alor");
addOption(kotaSelect, "Belu", "Belu");
addOption(kotaSelect, "Ende", "Ende");
addOption(kotaSelect, "Flores Timur", "Flores Timur");
addOption(kotaSelect, "Kupang", "Kupang");
addOption(kotaSelect, "Lembata", "Lembata");
addOption(kotaSelect, "Malaka", "Malaka");
addOption(kotaSelect, "Manggarai", "Manggarai");
addOption(kotaSelect, "Manggarai Barat", "Manggarai Barat");
addOption(kotaSelect, "Manggarai Timur", "Manggarai Timur");
addOption(kotaSelect, "Nagekeo", "Nagekeo");
addOption(kotaSelect, "Ngada", "Ngada");
addOption(kotaSelect, "Rote Ndao", "Rote Ndao");
addOption(kotaSelect, "Sabu Raijua", "Sabu Raijua");
addOption(kotaSelect, "Sikka", "Sikka");
addOption(kotaSelect, "Sumba Barat", "Sumba Barat");
addOption(kotaSelect, "Sumba Barat Daya", "Sumba Barat Daya");
addOption(kotaSelect, "Sumba Tengah", "Sumba Tengah");
addOption(kotaSelect, "Sumba Timur", "Sumba Timur");
addOption(kotaSelect, "Timor Tengah Selatan", "Timor Tengah Selatan");
addOption(kotaSelect, "Timor Tengah Utara", "Timor Tengah Utara");
break;

case "Kalimantan Barat":
addOption(kotaSelect, "Pontianak", "Pontianak");
addOption(kotaSelect, "Singkawang", "Singkawang");
addOption(kotaSelect, "Bengkayang", "Bengkayang");
addOption(kotaSelect, "Kapuas Hulu", "Kapuas Hulu");
addOption(kotaSelect, "Kayong Utara", "Kayong Utara");
addOption(kotaSelect, "Ketapang", "Ketapang");
addOption(kotaSelect, "Kubu Raya", "Kubu Raya");
addOption(kotaSelect, "Landak", "Landak");
addOption(kotaSelect, "Melawi", "Melawi");
addOption(kotaSelect, "Mempawah", "Mempawah");
addOption(kotaSelect, "Sambas", "Sambas");
addOption(kotaSelect, "Sanggau", "Sanggau");
addOption(kotaSelect, "Sekadau", "Sekadau");
addOption(kotaSelect, "Sintang", "Sintang");
break;

case "Kalimantan Tengah":
addOption(kotaSelect, "Palangkaraya", "Palangkaraya");
addOption(kotaSelect, "Barito Selatan", "Barito Selatan");
addOption(kotaSelect, "Barito Timur", "Barito Timur");
addOption(kotaSelect, "Barito Utara", "Barito Utara");
addOption(kotaSelect, "Gunung Mas", "Gunung Mas");
addOption(kotaSelect, "Kapuas", "Kapuas");
addOption(kotaSelect, "Katingan", "Katingan");
addOption(kotaSelect, "Kotawaringin Barat", "Kotawaringin Barat");
addOption(kotaSelect, "Kotawaringin Timur", "Kotawaringin Timur");
addOption(kotaSelect, "Lamandau", "Lamandau");
addOption(kotaSelect, "Murung Raya", "Murung Raya");
addOption(kotaSelect, "Pulang Pisau", "Pulang Pisau");
addOption(kotaSelect, "Sukamara", "Sukamara");
addOption(kotaSelect, "Seruyan", "Seruyan");
break;

case "Kalimantan Selatan":
addOption(kotaSelect, "Banjarmasin", "Banjarmasin");
addOption(kotaSelect, "Banjarbaru", "Banjarbaru");
addOption(kotaSelect, "Balangan", "Balangan");
addOption(kotaSelect, "Banjar", "Banjar");
addOption(kotaSelect, "Barito Kuala", "Barito Kuala");
addOption(kotaSelect, "Hulu Sungai Selatan", "Hulu Sungai Selatan");
addOption(kotaSelect, "Hulu Sungai Tengah", "Hulu Sungai Tengah");
addOption(kotaSelect, "Hulu Sungai Utara", "Hulu Sungai Utara");
addOption(kotaSelect, "Kota Baru", "Kota Baru");
addOption(kotaSelect, "Tabalong", "Tabalong");
addOption(kotaSelect, "Tanah Bumbu", "Tanah Bumbu");
addOption(kotaSelect, "Tanah Laut", "Tanah Laut");
addOption(kotaSelect, "Tapin", "Tapin");
break;

case "Kalimantan Timur":
addOption(kotaSelect, "Balikpapan", "Balikpapan");
addOption(kotaSelect, "Samarinda", "Samarinda");
addOption(kotaSelect, "Bontang", "Bontang");
addOption(kotaSelect, "Berau", "Berau");
addOption(kotaSelect, "Kutai Barat", "Kutai Barat");
addOption(kotaSelect, "Kutai Kartanegara", "Kutai Kartanegara");
addOption(kotaSelect, "Kutai Timur", "Kutai Timur");
addOption(kotaSelect, "Mahakam Ulu", "Mahakam Ulu");
addOption(kotaSelect, "Paser", "Paser");
addOption(kotaSelect, "Penajam Paser Utara", "Penajam Paser Utara");
break;

case "Kalimantan Utara":
addOption(kotaSelect, "Tarakan", "Tarakan");
addOption(kotaSelect, "Bulungan", "Bulungan");
addOption(kotaSelect, "Malinau", "Malinau");
addOption(kotaSelect, "Nunukan", "Nunukan");
addOption(kotaSelect, "Tana Tidung", "Tana Tidung");
break;
case "Sulawesi Utara":
    addOption(kotaSelect, "Manado", "Manado");
    addOption(kotaSelect, "Bitung", "Bitung");
    addOption(kotaSelect, "Tomohon", "Tomohon");
    addOption(kotaSelect, "Bolaang Mongondow", "Bolaang Mongondow");
    addOption(kotaSelect, "Bolaang Mongondow Selatan", "Bolaang Mongondow Selatan");
    addOption(kotaSelect, "Bolaang Mongondow Timur", "Bolaang Mongondow Timur");
    addOption(kotaSelect, "Bolaang Mongondow Utara", "Bolaang Mongondow Utara");
    addOption(kotaSelect, "Kepulauan Sangihe", "Kepulauan Sangihe");
    addOption(kotaSelect, "Kepulauan Talaud", "Kepulauan Talaud");
    addOption(kotaSelect, "Minahasa", "Minahasa");
    addOption(kotaSelect, "Minahasa Selatan", "Minahasa Selatan");
    addOption(kotaSelect, "Minahasa Tenggara", "Minahasa Tenggara");
    addOption(kotaSelect, "Minahasa Utara", "Minahasa Utara");
    break;

case "Sulawesi Tengah":
    addOption(kotaSelect, "Palu", "Palu");
    addOption(kotaSelect, "Banggai", "Banggai");
    addOption(kotaSelect, "Banggai Kepulauan", "Banggai Kepulauan");
    addOption(kotaSelect, "Banggai Laut", "Banggai Laut");
    addOption(kotaSelect, "Buol", "Buol");
    addOption(kotaSelect, "Donggala", "Donggala");
    addOption(kotaSelect, "Morowali", "Morowali");
    addOption(kotaSelect, "Parigi Moutong", "Parigi Moutong");
    addOption(kotaSelect, "Poso", "Poso");
    addOption(kotaSelect, "Sigi", "Sigi");
    addOption(kotaSelect, "Tojo Una-Una", "Tojo Una-Una");
    addOption(kotaSelect, "Tolitoli", "Tolitoli");
    break;

case "Sulawesi Selatan":
    addOption(kotaSelect, "Makassar", "Makassar");
    addOption(kotaSelect, "Palopo", "Palopo");
    addOption(kotaSelect, "Parepare", "Parepare");
    addOption(kotaSelect, "Bantaeng", "Bantaeng");
    addOption(kotaSelect, "Barru", "Barru");
    addOption(kotaSelect, "Bone", "Bone");
    addOption(kotaSelect, "Bulukumba", "Bulukumba");
    addOption(kotaSelect, "Enrekang", "Enrekang");
    addOption(kotaSelect, "Gowa", "Gowa");
    addOption(kotaSelect, "Jeneponto", "Jeneponto");
    addOption(kotaSelect, "Kepulauan Selayar", "Kepulauan Selayar");
    addOption(kotaSelect, "Luwu", "Luwu");
    addOption(kotaSelect, "Luwu Timur", "Luwu Timur");
    addOption(kotaSelect, "Luwu Utara", "Luwu Utara");
    addOption(kotaSelect, "Maros", "Maros");
    addOption(kotaSelect, "Pangkajene dan Kepulauan", "Pangkajene dan Kepulauan");
    addOption(kotaSelect, "Pinrang", "Pinrang");
    addOption(kotaSelect, "Sidenreng Rappang", "Sidenreng Rappang");
    addOption(kotaSelect, "Sinjai", "Sinjai");
    addOption(kotaSelect, "Soppeng", "Soppeng");
    addOption(kotaSelect, "Takalar", "Takalar");
    addOption(kotaSelect, "Tana Toraja", "Tana Toraja");
    addOption(kotaSelect, "Toraja Utara", "Toraja Utara");
    addOption(kotaSelect, "Wajo", "Wajo");
    break;

case "Sulawesi Tenggara":
    addOption(kotaSelect, "Kendari", "Kendari");
    addOption(kotaSelect, "Bau-Bau", "Bau-Bau");
    addOption(kotaSelect, "Bombana", "Bombana");
    addOption(kotaSelect, "Buton", "Buton");
    addOption(kotaSelect, "Buton Selatan", "Buton Selatan");
    addOption(kotaSelect, "Buton Tengah", "Buton Tengah");
    addOption(kotaSelect, "Buton Utara", "Buton Utara");
    addOption(kotaSelect, "Kolaka", "Kolaka");
    addOption(kotaSelect, "Kolaka Timur", "Kolaka Timur");
    addOption(kotaSelect, "Konawe", "Konawe");
    addOption(kotaSelect, "Konawe Kepulauan", "Konawe Kepulauan");
    addOption(kotaSelect, "Konawe Selatan", "Konawe Selatan");
    addOption(kotaSelect, "Konawe Utara", "Konawe Utara");
    addOption(kotaSelect, "Muna", "Muna");
    addOption(kotaSelect, "Wakatobi", "Wakatobi");
    break;

case "Gorontalo":
    addOption(kotaSelect, "Gorontalo", "Gorontalo");
    addOption(kotaSelect, "Boalemo", "Boalemo");
    addOption(kotaSelect, "Bone Bolango", "Bone Bolango");
    addOption(kotaSelect, "Gorontalo Utara", "Gorontalo Utara");
    addOption(kotaSelect, "Pohuwato", "Pohuwato");
    break;
case "Sulawesi Barat":
    addOption(kotaSelect, "Mamuju", "Mamuju");
    addOption(kotaSelect, "Majene", "Majene");
    addOption(kotaSelect, "Mamasa", "Mamasa");
    addOption(kotaSelect, "Mamuju Tengah", "Mamuju Tengah");
    addOption(kotaSelect, "Mamuju Utara", "Mamuju Utara");
    addOption(kotaSelect, "Polewali Mandar", "Polewali Mandar");
    break;

case "Maluku":
    addOption(kotaSelect, "Ambon", "Ambon");
    addOption(kotaSelect, "Buru", "Buru");
    addOption(kotaSelect, "Buru Selatan", "Buru Selatan");
    addOption(kotaSelect, "Kepulauan Aru", "Kepulauan Aru");
    addOption(kotaSelect, "Maluku Barat Daya", "Maluku Barat Daya");
    addOption(kotaSelect, "Maluku Tengah", "Maluku Tengah");
    addOption(kotaSelect, "Maluku Tenggara", "Maluku Tenggara");
    addOption(kotaSelect, "Maluku Tenggara Barat", "Maluku Tenggara Barat");
    addOption(kotaSelect, "Seram Bagian Barat", "Seram Bagian Barat");
    addOption(kotaSelect, "Seram Bagian Timur", "Seram Bagian Timur");
    break;

case "Maluku Utara":
    addOption(kotaSelect, "Ternate", "Ternate");
    addOption(kotaSelect, "Tidore Kepulauan", "Tidore Kepulauan");
    addOption(kotaSelect, "Halmahera Barat", "Halmahera Barat");
    addOption(kotaSelect, "Halmahera Tengah", "Halmahera Tengah");
    addOption(kotaSelect, "Halmahera Timur", "Halmahera Timur");
    addOption(kotaSelect, "Halmahera Utara", "Halmahera Utara");
    addOption(kotaSelect, "Kepulauan Sula", "Kepulauan Sula");
    addOption(kotaSelect, "Morotai", "Morotai");
    addOption(kotaSelect, "Pulau Taliabu", "Pulau Taliabu");
    break;

case "Papua":
    addOption(kotaSelect, "Jayapura", "Jayapura");
    addOption(kotaSelect, "Merauke", "Merauke");
    addOption(kotaSelect, "Sorong", "Sorong");
    addOption(kotaSelect, "Asmat", "Asmat");
    addOption(kotaSelect, "Biak Numfor", "Biak Numfor");
    addOption(kotaSelect, "Boven Digoel", "Boven Digoel");
    addOption(kotaSelect, "Deiyai", "Deiyai");
    addOption(kotaSelect, "Dogiyai", "Dogiyai");
    addOption(kotaSelect, "Intan Jaya", "Intan Jaya");
    addOption(kotaSelect, "Jayawijaya", "Jayawijaya");
    addOption(kotaSelect, "Keerom", "Keerom");
    addOption(kotaSelect, "Kepulauan Yapen", "Kepulauan Yapen");
    addOption(kotaSelect, "Lanny Jaya", "Lanny Jaya");
    addOption(kotaSelect, "Mamberamo Raya", "Mamberamo Raya");
    addOption(kotaSelect, "Mamberamo Tengah", "Mamberamo Tengah");
    addOption(kotaSelect, "Mappi", "Mappi");
    addOption(kotaSelect, "Merauke", "Merauke");
    addOption(kotaSelect, "Mimika", "Mimika");
    addOption(kotaSelect, "Nabire", "Nabire");
    addOption(kotaSelect, "Nduga", "Nduga");
    addOption(kotaSelect, "Paniai", "Paniai");
    addOption(kotaSelect, "Pegunungan Bintang", "Pegunungan Bintang");
    addOption(kotaSelect, "Puncak", "Puncak");
    addOption(kotaSelect, "Puncak Jaya", "Puncak Jaya");
    addOption(kotaSelect, "Sarmi", "Sarmi");
    addOption(kotaSelect, "Supiori", "Supiori");
    addOption(kotaSelect, "Tolikara", "Tolikara");
    addOption(kotaSelect, "Waropen", "Waropen");
    addOption(kotaSelect, "Yahukimo", "Yahukimo");
    addOption(kotaSelect, "Yalimo", "Yalimo");
    break;

case "Papua Barat":
    addOption(kotaSelect, "Manokwari", "Manokwari");
    addOption(kotaSelect, "Sorong", "Sorong");
    addOption(kotaSelect, "Fak-Fak", "Fak-Fak");
    addOption(kotaSelect, "Kaimana", "Kaimana");
    addOption(kotaSelect, "Manokwari Selatan", "Manokwari Selatan");
    addOption(kotaSelect, "Maybrat", "Maybrat");
    addOption(kotaSelect, "Raja Ampat", "Raja Ampat");
    addOption(kotaSelect, "Sorong Selatan", "Sorong Selatan");
    addOption(kotaSelect, "Tambrauw", "Tambrauw");
    addOption(kotaSelect, "Teluk Bintuni", "Teluk Bintuni");
    addOption(kotaSelect, "Teluk Wondama", "Teluk Wondama");
    break;
            }
        }
    
       function addOption(selectElement, optionText, optionValue) {
    var option = document.createElement("option");
    option.text = optionText;
    option.value = optionValue.replace(/\s+/g, '').toLowerCase();
    selectElement.add(option);
}
    </script>
</div>
@endsection
