@extends('layouts.app-imm-create')
@section('title', 'Membuat Proyek')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/indicator.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/creatproject.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/pemilihansdgs.css') }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection
@section('content')

    <body>



        <div class="container mt-5">

            <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
                <h1 class="mb-5" id="buatproject">Buat Projek Baru</h1>
                <div id="form-section">
                    <div class="row">
                        <div class="col-md-6">
                            <h2 class="project-title">Tentang Proyek Anda</h2>
                            @csrf
                            <div class="form-group">
                                <input type="file" class="form-control-file" id="img" name="img" hidden>
                            </div>
                            <div class="form-group">
                                <label for="nama">Nama Proyek</label>
                                <input type="text" class="form-control" name="nama" id="nama" required>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi Proyek</label>
                                <textarea class="form-control" name="deskripsi" id="deskripsi" rows="5" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="tujuan">Tujuan Proyek</label>
                                <textarea class="form-control" name="tujuan" id="tujuan" rows="5"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="start_date">Tanggal Mulai Proyek</label>
                                <input type="date" class="form-control" id="start_date" name="start_date" required>
                            </div>
                            <div class="form-group">
                                <label for="end_date">Tanggal Berakhir Proyek</label>
                                <input type="date" class="form-control" id="end_date" name="end_date" required>
                            </div>
                            <div class="form-group">
                                <label for="provinsi">Provinsi</label>
                                <select class="form-control" name="provinsi" id="provinsi" required onchange="populateCities()">
                                    <option value="" disabled selected>Pilih Provinsi</option>
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
                                <label for="kota">Kota/Kabupaten</label>
                                <select class="form-control" name="kota" id="kota" required>
                                    <option value="" disabled selected>Pilih Kota/Kabupaten</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gmaps">Google Maps URL:</label>
                                <input type="text" class="form-control" id="gmaps" name="gmaps" required>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <h2 class="project-title">Spesisifikasi Pendanaan</h2>
                            <div class="form-group">
                                <div class="form-group mt-3">
                                    <label for="jumlah_pendanaan">Jumlah Dana Keseluruhan</label>
                                    <input type="number" class="form-control" name="jumlah_pendanaan"
                                        id="jumlah_pendanaan">
                                </div>
                                <label for="otherFunds">Pendanaan Lainnya</label>

                                <button type="button" class="btn btn-primary btn-add-dana ml-2 mb-2"><i
                                        class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
                                <div class="spesifikasi-pendanaan">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Jenis Dana</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <select class="form-control" name="dana[0][jenis_dana]" required>
                                                        <option value="Hibah">Hibah</option>
                                                        <option value="Investasi">Investasi</option>
                                                        <option value="Pinjaman">Pinjaman</option>
                                                        <option value="Lainnya">Lainnya</option>
                                                    </select>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control" name="dana[0][nominal]"
                                                        required>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="form-group">

                                @if (auth()->check() && auth()->user()->companies)
                                    <input type="hidden" name="company_id" value="{{ auth()->user()->companies->id }}"
                                        id="company_id">
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="impactTags">Tag Tema Dampak Yang Selaras dengan Prioritas Dampak Anda</label>
                                <div class="tags-container" style="height: 200px; overflow-y: auto;">
                                    @foreach ($tags as $tag)
                                        <div class="form-check ">
                                            <button class="tag-button" data-tag-id="{{ $tag->id }}" type="button">
                                                {{ $tag->nama }}
                                            </button>
                                            <input class="form-check-input" type="checkbox" value="{{ $tag->id }}"
                                                id="tag{{ $tag->id }}" name="tag_ids[]" style="display: none;">
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="targetCustomers">Target Pelanggan</label>
                                <button type="button" class="btn btn-primary btn-add-pelanggan ml-2 mb-2"><i
                                        class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
                                <div class="target-pelanggan">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>Status Pekerjaan</th>
                                                <th>Rentang Usia</th>
                                                <th>Deskripsi Pelanggan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <input type="text" class="form-control"
                                                        name="target_pelanggans[0][status]" required>
                                                </td>
                                                <td>
                                                    <input type="number" class="form-control"
                                                        name="target_pelanggans[0][rentang_usia]">
                                                </td>
                                                <td>
                                                    <textarea class="form-control" name="target_pelanggans[0][deskripsi_pelanggan]"></textarea>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="section-img">
                                    <h5>Unggah Foto Sampul Proyek</h5>
                                    <p>Gunakan foto Default</p>
                                    <label for="imageInput" class="choose-file-label">
                                        <div class="unggah-image">
                                            <img id="previewImage" src=""
                                                alt="Unggah foto sampul 1920x1080
(.png, .jpg, .jpeg) Maximal 5 MB">
                                        </div>
                                    </label>
                                    <input type="file" id="imageInput" name="img" style="display: none;">

                                </div>
                                <div class="d-flex justify-content-start mt-4">
                                    <button type="button" class="btn btn-primary" id="next-to-sdg-section">Simpan dan
                                        Lanjutkan</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="container mt-5">
                    <div class="form-group">
                        <div id="sdg-section" style="display: none;">
                            <h2>Pilih SDGs yang Relevan dengan Proyek Anda</h2>
                            @foreach ($sdgs as $sdg)
                                <div class="sdg-item" data-sdg="{{ $sdg->id }} ">
                                    <img src="{{ env('APP_BACKEND_URL') . '/images/' . $sdg->img }}"
                                        alt="SDG {{ $sdg->order }}">
                                    <h5 class="sdg-name">{{ $sdg->order }}. {{ $sdg->name }}</h5>
                                    <i class="fas fa-chevron-down sdg-toggle"></i>
                                    <input type="checkbox" class="sdg-checkbox" name="sdg_ids[]"
                                        value="{{ $sdg->id }}">
                                </div>
                                <div class="sdg-description">
                                    <p>{{ $sdg->description ?? 'Tidak ada deskripsi' }}</p>
                                </div>
                            @endforeach
                            <div class="d-flex justify-content-between mt-3">
                                <button type="button" class="btn btn-secondary"
                                    id="back-to-form-section">Kembali</button>
                                <button type="button" class="btn btn-primary" id="next-to-indicator-section">Simpan dan
                                    Lanjutkan</button>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Indikator --}}
                <div id="indicator-section" style="display: none">
                    <div class="container mt-5">
                        <h1 class="text-center" id="project-title"></h1>
                        <p class="text-center">Goals SDGs project anda</p>
                        <div class="d-flex justify-content-center mb-4" id="sdg-images-container"></div>
                        <div class="text-center bg-light p-3 mb-4" id="project-long-description"></div>
                        <h5 class="text-center mb-4">Tentukan indikator SDGs sebagai target project anda! Anda dapat
                            memilih
                            lebih dari satu indikator</h5>

                        @foreach ($sdgs as $sdg)
                            <div class="goal-description mb-4 p-3 bg-white shadow-sm rounded"
                                id="goal{{ $sdg->id }}-description">
                                <div class="d-flex align-items-center">
                                    <img src="{{ env('APP_BACKEND_URL') . '/images/' . $sdg->img }}"
                                        alt="SDG {{ $sdg->id }}" class="mr-3" width="50">
                                    <div>
                                        <h5 class="mb-0">SDGs Goals {{ $sdg->id }}</h5>
                                        <p class="mb-0">{{ $sdg->name }}</p>
                                    </div>
                                </div>

                                @foreach ($sdg->indicators as $indicator)
                                    @if ($indicator->level == 1)
                                        <div class="mt-3 d-flex align-items-center level-1-indicator" style="gap: 15px">
                                            <label for="indicator-{{ $indicator->id }}">
                                                <input type="checkbox" class="indicator-checkbox"
                                                    id="indicator-{{ $indicator->id }}" name="indicator_ids[]"
                                                    value="{{ $indicator->id }}"
                                                    data-target="sub-container-{{ $indicator->id }}">
                                                <span>{{ $indicator->order }} </span><span>{{ $indicator->name }}</span>
                                            </label>
                                        </div>
                                    @endif

                                    {{-- Sub-container untuk indikator level 2 --}}
                                    @if ($indicator->level == 1)
                                        <div class="sub-container" id="sub-container-{{ $indicator->id }}"
                                            style="display: none; margin-top: 10px;">
                                            <div class="d-flex flex-column" style="gap: 15px; margin-left:45px;">
                                                @foreach ($indicator->childIndicators as $childIndicator)
                                                    <div class=" d-flex">
                                                        <span>{{ $childIndicator->order }}
                                                        </span><span>{{ $childIndicator->name }}</span><br>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>
                        @endforeach


                        <div class="d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-secondary" id="back-to-sdg-section">Kembali</button>
                            <button type="button" class="btn btn-primary" id="next-to-metric-section">Simpan dan
                                Lanjutkan</button>
                        </div>
                    </div>
                    
                </div>


                <div id="metric-section" style="display: none;">
                    <div class="container mt-5">
                        <h1 class="text-center">Pilih Metrik Berdasarkan Indikator yang Anda Pilih</h1>
                        <div id="metrics" class="mb-4 p-3 bg-white shadow-sm rounded"></div>
                        <div class="pagination mt-4">
                            <ul id="pagination-links" class="pagination justify-content-center">
                                <div class="pagination mt-4 d-flex justify-content-center">
                                    <ul id="pagination-links" class="pagination">
                                        <li class="page-item" id="previous-page-li">
                                            <button type="button" class="btn btn-secondary page-link"
                                                id="previous-page">Sebelumnya</button>
                                        </li>
                                        <!-- Page numbers will be dynamically inserted here -->
                                        <li class="page-item" id="next-page-li">
                                            <button type="button" class="btn btn-primary page-link"
                                                id="next-page">Berikutnya</button>
                                        </li>
                                    </ul>
                                </div>
                            </ul>
                        </div>
                        <div class="d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-secondary"
                                id="back-to-indicator-section">Kembali</button>
                            <button type="button" class="btn btn-primary" id="next-to-review-section">Simpan dan
                                Lanjutkan</button>
                        </div>
                    </div>
                </div>


                <div id="review-section" style="display: none;">

                    <div class="container mt-5 pt-5">
                        <h1 class="text-center">Detail Review: SDGs Goals, Indicators, dan Metrix</h1>
                        <p class="text-center">Goals SDGs project anda</p>
                        <div class="d-flex justify-content-center mb-4" id="review-sdg-images-container"></div>
                        <div class="goals-text mt-4">
                            <span class="goal-description" id="selected-sdgs-container"></span>
                        </div>
                    </div>
                    <!-- Bagian Indicators -->
                    <div class="indicators mt-5">
                        <h2 class="text-center">Indicators</h2>
                        <div id="selected-indicators-container"></div>
                    </div>
                    <!-- Bagian Metrics -->
                    <div class="indicators mt-5">
                        <h2 class="text-center">Metrics</h2>
                        <div id="review-selected-metrics"></div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-secondary" id="back-to-metric-section">Kembali</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </div>


            </form>
        </div>



        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="{{ asset('js/imm/indicator.js') }}"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>
        <script>
            function populateCities() {
                var provinsiSelect = document.getElementById("provinsi");
                var kotaSelect = document.getElementById("kota");
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

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                var imageInput = document.getElementById('imageInput');
                var previewImage = document.getElementById('previewImage');

                imageInput.addEventListener('change', function() {
                    var file = this.files[0];
                    if (file) {
                        var reader = new FileReader();
                        reader.onload = function(e) {
                            previewImage.src = e.target.result;
                        };
                        reader.readAsDataURL(file);
                    } else {
                        previewImage.src = "";
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.sdg-item').on('click', function(e) {
                    if (!$(e.target).is('.sdg-checkbox')) {
                        var checkbox = $(this).find('.sdg-checkbox');
                        checkbox.prop('checked', !checkbox.prop('checked'));
                    }

                    var description = $(this).next('.sdg-description');
                    description.slideToggle();

                    // Toggle the rotation class on the arrow icon
                    $(this).find('.sdg-toggle').toggleClass('rotate-180');
                });

                $('.sdg-checkbox').on('click', function(e) {
                    e.stopPropagation(); // Prevent the event from bubbling up to the parent div
                });

                $('#next-to-indicator-section').on('click', function() {
                    // Hide all goal descriptions first
                    $('.goal-description').hide();


                    // Get all selected SDG checkboxes
                    var selectedSdgs = $('.sdg-checkbox:checked');

                    // Show goal descriptions only for selected SDGs
                    selectedSdgs.each(function() {
                        var sdgId = $(this).val();
                        $('#goal' + sdgId + '-description').show();
                    });

                    // Move to the indicator section
                    $('#sdg-section').hide();
                    $('#indicator-section').show();
                });

                $('#back-to-sdg-section').on('click', function() {
                    $('#indicator-section').hide();
                    $('#sdg-section').show();
                });
            });
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                $('.tag-button').click(function() {
                    var $button = $(this);
                    var tagId = $button.data('tag-id');
                    var $checkbox = $('#tag' + tagId);

                    // Toggle the selected state
                    $button.toggleClass('selected');

                    // Sync the checkbox with the button state
                    $checkbox.prop('checked', $button.hasClass('selected'));
                });

                // Initialize button states based on checkboxes
                $('.form-check-input').each(function() {
                    var $checkbox = $(this);
                    var tagId = $checkbox.val();
                    var $button = $('button[data-tag-id="' + tagId + '"]');

                    if ($checkbox.prop('checked')) {
                        $button.addClass('selected');
                    }
                });
            });
        </script>

        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var checkboxes = document.querySelectorAll(".indicator-checkbox");

                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        var subContainerId = this.getAttribute("data-target");
                        var subContainer = document.getElementById(subContainerId);

                        if (this.checked) {
                            subContainer.style.display = "block"; // Menampilkan sub-container
                        } else {
                            subContainer.style.display = "none"; // Menyembunyikan sub-container
                        }
                    });
                });
            });
            $(document).ready(function() {
                var index = 1;
                $(".btn-add-pelanggan").click(function() {
                    var newRow = '<tr>' +
                        '<td><input type="text" class="form-control" name="target_pelanggans[' + index +
                        '][status]" required></td>' +
                        '<td><input type="text" class="form-control" name="target_pelanggans[' + index +
                        '][rentang_usia]"></td>' +
                        '<td><textarea class="form-control" name="target_pelanggans[' + index +
                        '][deskripsi_pelanggan]"></textarea></td>' +
                        '<td><button type="button" class="btn btn-danger btn-remove-pelanggan"><i class="fa-solid fa-minus" style="color: #ffffff;"></i></button></td>' +
                        '</tr>';
                    $('.target-pelanggan tbody').append(newRow);
                    index++;
                });

                $(document).on('click', '.btn-remove-pelanggan', function() {
                    $(this).closest('tr').remove();
                });

                var indexDana = 1;
                $(".btn-add-dana").click(function() {
                    var selectedOptions = $('.spesifikasi-pendanaan select').map(function() {
                        return $(this).val();
                    }).get();
                    var options = ['Hibah', 'Investasi', 'Pinjaman', 'Lainnya'];
                    var availableOptions = options.filter(function(option) {
                        return !selectedOptions.includes(option);
                    });
                    var optionsHtml = availableOptions.map(function(option) {
                        return '<option value="' + option + '">' + option + '</option>';
                    }).join('');
                    var newRow = '<tr>' +
                        '<td><select class="form-control" name="dana[' + indexDana +
                        '][jenis_dana]" required>' +
                        optionsHtml +
                        '</select></td>' +
                        '<td><input type="number" class="form-control" name="dana[' + indexDana +
                        '][nominal]" required></td>' +
                        '<td><button type="button" class="btn btn-danger btn-remove-dana"><i class="fa-solid fa-minus" style="color: #ffffff;"></i></button></td>' +
                        '</tr>';
                    $('.spesifikasi-pendanaan tbody').append(newRow);
                    indexDana++;

                    if (availableOptions.length === 1) {
                        $(".btn-add-dana").prop('disabled', true);
                    }
                });

                $(document).on('click', '.btn-remove-dana', function() {
                    $(this).closest('tr').remove();
                    $(".btn-add-dana").prop('disabled', false);
                });

                $('#next-to-sdg-section').on('click', function() {
                    $('#form-section').hide();
                    $('#buatproject').hide();
                    $('#sdg-section').show();

                });

                $('#next-to-metric-section').on('click', function() {
                    $('#indicator-section').hide();
                    $('#metric-section').show();
                });


                $('#next-to-review-section').on('click', function() {
                    $('#metric-section').hide();
                    $('#review-section').show();
                });


                $('#back-to-metric-section').on('click', function() {
                    $('#review-section').hide();
                    $('#metric-section').show();
                });

                $('#back-to-form-section').on('click', function() {
                    $('#sdg-section').hide();
                    $('#form-section').show();
                    $('#buatproject').show();
                });

                $('#next-to-indicator-section').on('click', function() {
                    const projectName = $('#nama').val();
                    const projectDescription = $('#deskripsi').val();
                    const selectedSdgImages = $('.sdg-checkbox:checked').map(function() {
                        return $(this).closest('.sdg-item').find('img').attr('src');
                    }).get();

                    $('#project-title').text(projectName);
                    $('#project-long-description').text(projectDescription);

                    $('#sdg-images-container').html('');
                    selectedSdgImages.forEach(function(src) {
                        $('#sdg-images-container').append('<img src="' + src +
                            '" alt="SDG" class="img-fluid mx-2 sdg-goal" data-target="#goal15-description">'
                            );
                    });

                    // Simpan selectedTags (tag_ids yang dipilih)
                    var selectedTags = $('input[name="tag_ids[]"]:checked').map(function() {
                        return $(this).val();
                    }).get();

                    // Simpan selectedIndicators (indicator_ids yang dipilih)
                    var selectedIndicators = $('.indicator-checkbox:checked').map(function() {
                        return $(this).val();
                    }).get();

                    // Menyembunyikan SDG Section dan menampilkan Indicator Section
                    $('#sdg-section').hide();
                    $('#indicator-section').show();
                });


                $('#back-to-sdg-section').on('click', function() {
                    $('#indicator-section').hide();
                    $('#sdg-section').show();
                });

                $('.sdg-checkbox').on('change', function() {
                    var sdgId = $(this).val();
                    $('.goal-description').hide();
                    $('#goal' + sdgId + '-description').show();
                    $('#goal' + sdgId + '-description .sub-container').hide();
                    $('#goal' + sdgId + '-description .sub-container[data-level="2"]').show();
                });

                $(document).on('change', '.indicator-checkbox', function() {
                    var indicatorId = $(this).val();
                    var subContainer = $('#sub-container-' + indicatorId);
                    if ($(this).is(':checked')) {
                        subContainer.insertAfter($(this).closest('.level-1-indicator')).show();
                    } else {
                        subContainer.hide();
                        subContainer.find('input[type="checkbox"]').prop('checked', false);
                    }
                });

                var checkbox = document.getElementById("subscribe");
                var subContainer = document.getElementById("sub-container");

                checkbox.addEventListener("change", function() {
                    if (checkbox.checked) {
                        subContainer.style.display = "block";
                    } else {
                        subContainer.style.display = "none"; // Corrected to hide when not checked
                    }
                });


                var sdgGoals = document.querySelectorAll(".sdg-goal");

                sdgGoals.forEach(function(goal) {
                    goal.addEventListener("click", function() {
                        var target = document.querySelector(goal.getAttribute("data-target"));
                        var descriptionVisible = target.classList.contains("show");

                        if (!descriptionVisible) {
                            target.classList.remove("hide");
                            target.classList.add("show");
                        } else {
                            target.classList.remove("show");
                            target.classList.add("hide");
                        }
                    });
                });

                setTimeout(function() {
                    var loading = document.getElementById("loading");
                    loading.style.display = "none";
                }, 1000);
            });
            document.addEventListener("DOMContentLoaded", function() {
                var checkbox = document.getElementById("subscribe");
                var subContainer = document.getElementById("sub-container");

                checkbox.addEventListener("change", function() {
                    if (checkbox.checked) {
                        subContainer.style.display = "block"; // Show sub-container when checkbox is checked
                    } else {
                        subContainer.style.display = "none"; // Hide sub-container when checkbox is unchecked
                    }
                });
            });

            $(document).ready(function() {
                var metricsPerPage = 15; // Jumlah metrik per halaman
                var currentPage = 1; // Halaman saat ini
                var metricsData = []; // Array untuk menyimpan data metrik dari response
                // Fungsi untuk menampilkan metrik pada halaman tertentu
                function displayMetrics(page) {
                    var startIndex = (page - 1) * metricsPerPage;
                    var endIndex = startIndex + metricsPerPage;
                    var metricsSlice = metricsData.slice(startIndex, endIndex);

                    $('#metrics').empty(); // Kosongkan container metrik terlebih dahulu
                    $.each(metricsSlice, function(index, metric) {
                        var metricHtml = `
                <div class="d-flex align-items-center justify-content-between p-3 my-3 border ">
                    <div class="metric-text">
                        <h5 style="color:#5940CB">(${metric.code}) ${metric.name}</h5>
                        <p class="mb-0 sdg-name-metric">${metric.definition}</p>
                    </div>
                    <input type="checkbox" class="metric-checkbox" name="metric_ids[]" value="${metric.id}">
                </div>
            `;
                        $('#metrics').append(metricHtml);
                    });

                    // Update pagination links
                    updatePagination();

                }

                // Fungsi untuk membuat dan mengatur tombol-tombol pagination
                function updatePagination() {
                    var totalPages = Math.ceil(metricsData.length / metricsPerPage);
                    var paginationLinks = $('#pagination-links');
                    paginationLinks.empty(); // Kosongkan tombol-tombol pagination terlebih dahulu

                    for (var i = 1; i <= totalPages; i++) {
                        var activeClass = (i === currentPage) ? 'active' : '';
                        var paginationBtn = $('<li class="page-item ' + activeClass +
                            '"><a class="page-link" href="#">' + i + '</a></li>');

                        paginationBtn.on('click', function() {
                            currentPage = parseInt($(this).text()); // Perbarui halaman saat ini
                            displayMetrics(currentPage); // Tampilkan metrik untuk halaman yang diklik
                        });

                        paginationLinks.append(paginationBtn);
                    }
                }

                // Event listener untuk tombol Kembali ke Bagian Indikator
                $('#back-to-indicator-section').on('click', function() {
                    $('#metric-section').hide();
                    $('#indicator-section').show();
                });

                // Event listener untuk tombol Simpan dan Lanjutkan ke Bagian Review
                $('#next-to-review-section').on('click', function() {
                    $('#metric-section').hide();
                    $('#review-section').show();
                });

                // Contoh penggunaan AJAX untuk mendapatkan data metrik dari server
                $.ajax({
                    url: '{{ route('projects.filterMetrics') }}',
                    method: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}',
                        tag_ids: selectedTags,
                        indicator_ids: selectedIndicators
                    },
                    success: function(response) {
                        metricsData = response; // Simpan data metrik dari response
                        displayMetrics(currentPage); // Tampilkan metrik untuk halaman pertama
                    },
                    error: function(xhr, status, error) {
                        console.error('Error fetching metrics:', error);
                        // Handle error case if needed
                    }
                });
            });

            $('#next-to-metric-section').on('click', function() {
                var selectedTags = $('input[name="tag_ids[]"]:checked').map(function() {
                    return $(this).val();
                }).get();
                var selectedIndicators = $('.indicator-checkbox:checked').map(function() {
                    return $(this).val();
                }).get();

                $(document).ready(function() {
                    var currentPage = 1; // Initial page
                    var totalPages = 1; // Total pages, will be updated after receiving response from server
                    var selectedMetricsIds = {}; // Object to store selected metric IDs
                    var allMetrics = {}; // Object to store all fetched metrics

                    // Function to fetch metrics based on selected tags and indicators
                    function fetchMetrics() {
                        $.ajax({
                            url: '{{ route('projects.filterMetrics') }}',
                            method: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}',
                                tag_ids: selectedTags,
                                indicator_ids: selectedIndicators,
                                page: currentPage // Send current page number to server
                            },
                            success: function(response) {
                                // $('#metrics').empty(); // Clear existing metrics

                                // Iterate through metrics and append to #metrics container
                                $.each(response.data, function(index, metric) {
                                    // Check if this metric is selected
                                    var isChecked = selectedMetricsIds[metric.id] ?
                                        'checked' : '';

                                    var metricHtml = `
                    <div class="d-flex align-items-center justify-content-between p-3 my-3 border">
                        <div class="metric-text">
                            <h5 style="color:#5940CB">(${metric.code}) ${metric.name}</h5>
                            <p class="mb-0 sdg-name-metric">${metric.definition}</p>
                        </div>
                        <input type="checkbox" class="metric-checkbox" name="metric_ids[]" value="${metric.id}" ${isChecked}>
                    </div>
                `;
                                    $('#metrics').append(metricHtml);
                                });

                                // Update total pages based on response
                                totalPages = response.last_page;

                                // Update pagination links
                                updatePagination();

                                // Initialize event handlers for newly added checkboxes
                                initializeCheckboxEventHandlers();
                            },
                            error: function(xhr, status, error) {
                                console.error('Error fetching metrics:', error);
                            }
                        });
                    }

                    function updatePagination() {
                        $('#pagination-links').empty(); // Clear existing pagination links

                        var startPage = Math.max(currentPage - 5, 1);
                        var endPage = Math.min(currentPage + 5, totalPages);


                        // Add first page button if startPage is greater than 1
                        if (startPage > 1) {
                            $('#pagination-links').append(`
                <li class="page-item">
                    <button type="button" class="btn btn-link page-link page-number">1</button>
                </li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
            `);
                        }

      

  

                        // Add next button
                        $('#pagination-links').append(`
            <li class="page-item ${currentPage === totalPages ? 'disabled' : ''}" id="next-page-li">
                <button type="button" class="btn btn-primary page-link" id="next-page">Berikutnya</button>
            </li>
        `);

                    

                        $('#next-page').on('click', function() {
                            if (currentPage < totalPages) {
                                currentPage++;
                                fetchMetrics(); // Fetch metrics for the next page
                            }
                        });
                    }

                    // Function to initialize event handlers for checkboxes
                    function initializeCheckboxEventHandlers() {
                        $('.metric-checkbox').on('change', function() {
                            var metricId = $(this).val();
                            if ($(this).prop('checked')) {
                                selectedMetricsIds[metricId] =
                                true; // Store the ID in selectedMetricsIds
                            } else {
                                delete selectedMetricsIds[
                                metricId]; // Remove the ID from selectedMetricsIds
                            }
                        });
                        // Make the metric-text div clickable to toggle the checkbox
                        $('.metric-text').on('click', function() {
                            var checkbox = $(this).siblings('.metric-checkbox');
                            checkbox.prop('checked', !checkbox.prop('checked'));
                            checkbox.trigger('change'); // Trigger the change event
                        });
                    }

                    // Initial fetch for metrics
                    fetchMetrics();
                });


            });

            $('#back-to-indicator-section').on('click', function() {
                $('#metric-section').hide();
                $('#indicator-section').show();
            });
            $(document).ready(function() {
                // Function to update review section with selected project details
                function updateReviewSection() {
                    // Project Name
                    var projectName = $('#nama').val();
                    $('#project-title').text(projectName);

                    // Selected SDG Images
                    var selectedSdgImages = $('.sdg-checkbox:checked').map(function() {
                        return $(this).closest('.sdg-item').find('img').attr('src');
                    }).get();
                    $('#sdg-images-container').html('');
                    selectedSdgImages.forEach(function(src) {
                        $('#sdg-images-container').append('<img src="' + src +
                            '" alt="SDG" class="img-fluid mx-2 sdg-goal">');
                    });

                    // Project Description
                    var projectDescription = $('#deskripsi').val();
                    $('#project-long-description').text(projectDescription);

                    // Selected SDGs and Indicators
                    var selectedSdgs = $('.sdg-checkbox:checked').map(function() {
                        var sdgId = $(this).val();
                        var sdgName = $(this).closest('.sdg-item').find('.sdg-name').text().trim();
                        var sdgImage = $(this).closest('.sdg-item').find('img').attr('src');
                        var selectedIndicators = $('#sub-container-' + sdgId + ' input:checked').map(
                    function() {
                            var indicatorId = $(this).val();
                            var indicatorName = $(this).next().text().trim();
                            return {
                                name: indicatorName
                            };
                        }).get();
                        return {
                            name: sdgName,
                            image: sdgImage,
                            indicators: selectedIndicators
                        };
                    }).get();

                    var sdgsHtml = '';
                    selectedSdgs.forEach(function(sdg) {
                        sdgsHtml += '<div class="mb-4">';
                        sdgsHtml += '<h3>' + sdg.name + '</h3>';
                        sdgsHtml += '<img src="' + sdg.image + '" alt="' + sdg.name +
                            '" class="img-fluid mx-2 sdg-goal">';
                        sdgsHtml += '<div class="ml-4 mt-2">';
                        sdg.indicators.forEach(function(indicator) {
                            sdgsHtml += '<h5>' + indicator.name + '</h5>';
                        });
                        sdgsHtml += '</div></div>';
                    });
                    $('#selected-sdgs-container').html(sdgsHtml);

                    // Selected Metrics
                    var selectedMetrics = $('.metric-checkbox:checked').map(function() {
                        return $(this).closest('.d-flex').find('h5').text().trim();
                    }).get();
                    var metricsHtml = '<div style=" m-3 border">';
                    selectedMetrics.forEach(function(metric) {
                        metricsHtml += '<h5 class="text-primary">' + metric + '</h5>';
                    });
                    metricsHtml += '</div>';
                    $('#review-selected-metrics').html(metricsHtml);
                }

                // Update review section when the Next or Back buttons are clicked
                $('#next-to-review-section, #back-to-metric-section').on('click', function() {
                    updateReviewSection();
                });

                // Submit form action
                $('#submit-project').on('click', function() {
                    // Perform form submission or AJAX request here
                    $('form').submit(); // Assuming your form has an action attribute defined
                });
            });
            $(document).ready(function() {
                // Function to update review section with selected project details
                function updateReviewSection() {
                    // Project Name
                    var projectName = $('#nama').val();
                    $('#project-title').text(projectName);

                    // Project Description
                    var projectDescription = $('#deskripsi').val();
                    $('#project-long-description').text(projectDescription);

                    // Selected SDG Images
                    var selectedSdgImages = $('.sdg-checkbox:checked').map(function() {
                        return $(this).closest('.sdg-item').find('img').attr('src');
                    }).get();
                    $('#review-sdg-images-container').html('');
                    selectedSdgImages.forEach(function(src) {
                        $('#review-sdg-images-container').append('<img src="' + src +
                            '" alt="SDG" class="img-fluid mx-2 sdg-goal">');

                    });

                    // Selected SDGs
                    var selectedSdgs = $('.sdg-checkbox:checked').map(function() {
                        var sdgId = $(this).val();
                        var sdgOrder = $(this).closest('.sdg-item').find('h5').text().split('.')[0];
                        var sdgName = $(this).closest('.sdg-item').find('h5').text().split('. ')[1];
                        return {
                            id: sdgId,
                            order: sdgOrder,
                            name: sdgName
                        };
                    }).get();

                    // Populate selected SDGs container
                    var sdgsHtml = '';
                    selectedSdgs.forEach(function(sdg) {
                        sdgsHtml += '<div class="goal-description">SDGs ' + sdg.order + '. ' + sdg.name +
                            '</div>';
                    });
                    $('#selected-sdgs-container').html(sdgsHtml);

                    // Selected Indicators
                    var selectedIndicatorsHtml = '';
                    selectedSdgs.forEach(function(sdg) {
                        var sdgImage = $('#goal' + sdg.id + '-description').find('img').attr('src');
                        var selectedIndicators = $('#goal' + sdg.id +
                            '-description .indicator-checkbox:checked').map(function() {
                            var indicatorOrder = $(this).closest('label').find('span:first').text()
                                .trim();
                            var indicatorName = $(this).closest('label').find('span:last').text()
                        .trim();
                            var childIndicators = $('#sub-container-' + $(this).val() + ' .d-flex').map(
                                function() {
                                    var childOrder = $(this).find('span:first').text().trim();
                                    var childName = $(this).find('span:last').text().trim();
                                    return {
                                        order: childOrder,
                                        name: childName
                                    };
                                }).get();
                            return {
                                order: indicatorOrder,
                                name: indicatorName,
                                children: childIndicators
                            };
                        }).get();

                        if (selectedIndicators.length > 0) {
                            selectedIndicatorsHtml += '<div class="sdg-indicators">';
                            selectedIndicatorsHtml += '<div class="d-flex align-items-center">';
                            selectedIndicatorsHtml += '<img src="' + sdgImage + '" alt="SDG ' + sdg.order +
                                '" class="mr-3 rounded" width="100">';
                            selectedIndicatorsHtml += '<h5>SDGs ' + sdg.order + '. ' + sdg.name + '</h5>';
                            selectedIndicatorsHtml += '</div>';

                            selectedIndicators.forEach(function(indicator) {
                                selectedIndicatorsHtml += '<div class="indicator-item mt-4">';
                                selectedIndicatorsHtml += '<h5>' + indicator.order + '. ' + indicator
                                    .name + '</h5>';
                                if (indicator.children.length > 0) {
                                    selectedIndicatorsHtml += '<ul class="mt-2 ml-4">';
                                    indicator.children.forEach(function(child) {
                                        selectedIndicatorsHtml += '<li>' + child.order + ' ' +
                                            child.name + '</li>';
                                    });
                                    selectedIndicatorsHtml += '</ul>';
                                }
                                selectedIndicatorsHtml += '</div>';
                            });

                            selectedIndicatorsHtml += '</div>';
                        }
                    });
                    $('#selected-indicators-container').html(selectedIndicatorsHtml);

                    // Selected Metrics
                    var selectedMetrics = $('.metric-checkbox:checked').map(function() {
                        return {
                            title: $(this).closest('.d-flex').find('h5').text().trim(),
                            description: $(this).closest('.d-flex').find('p').text().trim()
                        };
                    }).get();
                    var metricsHtml = '<div>';
                    selectedMetrics.forEach(function(metric) {
                        metricsHtml +=
                            '<div class="d-flex justify-content-between align-items-center p-3 border my-3">';
                        metricsHtml += '<div><h5 class="indicator-title" style="color:#5940CB">' + metric
                            .title + '</h5>';
                        metricsHtml += '<p class="indicator-description">' + metric.description + '</p></div>';
                        metricsHtml += '</div>';
                    });
                    metricsHtml += '</div>';
                    $('#review-selected-metrics').html(metricsHtml);
                }

                // Update review section when the Next or Back buttons are clicked
                $('#next-to-review-section').on('click', function() {
                    updateReviewSection();
                    $('#metric-section').hide();
                    $('#review-section').show();
                });

                $('#back-to-metric-section').on('click', function() {
                    $('#review-section').hide();
                    $('#metric-section').show();
                });

                $('#submit-project').on('click', function() {
                    // Collect form data
                    var formData = new FormData();
                    formData.append('nama', $('#nama').val());
                    formData.append('deskripsi', $('#deskripsi').val());
                    formData.append('company_id', $('#company_id')
                .val()); // Assuming $('#company_id').val() gives you the company_id integer

                    // Append sdg_ids
                    var sdgIds = $('.sdg-checkbox:checked').map(function() {
                        return $(this).val();
                    }).get();
                    formData.append('sdg_ids', JSON.stringify(sdgIds));

                    // Append indicator_ids
                    var indicatorIds = $('.indicator-checkbox:checked').map(function() {
                        return $(this).val();
                    }).get();
                    formData.append('indicator_ids', JSON.stringify(indicatorIds));

                    // Append metric_ids
                    var metricIds = $('.metric-checkbox:checked').map(function() {
                        return $(this).val();
                    }).get();
                    formData.append('metric_ids', JSON.stringify(metricIds));

                    // Handle img file
                    var imgFile = $('#img').prop('files')[0];
                    formData.append('img', imgFile);

                    // Perform AJAX request
                    $.ajax({
                        url: "{{ route('projects.store') }}",
                        method: 'POST',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            // Handle success response (redirect or show success message)
                            console.log(response);
                        },
                        error: function(xhr) {
                            // Handle error response (show error message if needed)
                            console.log(xhr.responseText);
                        }
                    });
                });

            });
        </script>

    </body>

@endsection