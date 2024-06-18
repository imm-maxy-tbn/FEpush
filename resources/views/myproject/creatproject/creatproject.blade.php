<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/creatproject.css') }}">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/pemilihansdgs.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container mt-5">
        <h1>Buat Projek Baru</h1>
        <div class="tags-container mt-3">
            <div class="tag">Environment <span class="remove-tag">&times;</span></div>
            <div class="tag">Education <span class="remove-tag">&times;</span></div>
            <div class="tag">Health <span class="remove-tag">&times;</span></div>
        </div>
        <p class="mt-3">Pilih Tag atau Buat yang Baru</p>
    </div>


    <div class="container mt-5">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            <div id="form-section">
                <div class="row">
                    <div class="col-md-6">
                        <!-- Konten Gambar Pertama -->
                        <h2 class="project-title">Tentang Proyek Anda</h2>
                        @csrf
                        <div class="form-group">
                            <label for="projectName">Nama Proyek</label>
                            <input type="text" class="form-control" name="nama" id="projectName">
                        </div>
                        <div class="form-group">
                            <label for="projectDescription">Deskripsi Proyek</label>
                            <textarea class="form-control" name="deskripsi" id="projectDescription" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="projectGoals">Tujuan Proyek</label>
                            <textarea class="form-control" name="tujuan" id="projectGoals" rows="2"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="startDate">Tanggal Mulai Proyek</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" required>
                        </div>
                        <div class="form-group">
                            <label for="endDate">Tanggal Berakhir Proyek</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" required>
                        </div>
                        <div class="form-group">
                            <label for="city">Kota</label>
                            <input type="text" class="form-control" name="kota" id="city"
                                placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="province">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="province"
                                placeholder="Provinsi">
                        </div>
                        <div class="form-group">
                            <label for="gmaps">Google Maps URL:</label>
                            <input type="text" class="form-control" id="gmaps" name="gmaps" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- Konten Gambar Kedua -->
                        <h2 class="project-title">Pendanaan</h2>
                        <div class="form-group">
                            <label for="fundAmount">Jumlah Dana</label>
                            <input type="number" class="form-control" name="jumlah_pendanaan" id="fundAmount">
                        </div>
                        <div class="form-group">
                            <label for="otherFunds">Pendanaan Lainnya</label>
                            <button type="button" class="btn btn-primary btn-add-dana ml-2 mb-2"><i
                                    class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
                            <div class="spesifikasi-pendanaan">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Jenis Dana</th>
                                            <th>Nominal</th>
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
                            <label for="company_id">Company:</label>
                            <select class="form-control" id="company_id" name="company_id" required>
                                <option value="">Pilih Company</option>
                                @foreach ($companies as $company)
                                    <option value="{{ $company->id }}">{{ $company->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="impactTags">Tag Tema Dampak Yang Selaras dengan Prioritas Dampak Anda</label>
                            <div class="tags-container" style="height: 200px; overflow-y: auto;">
                                @foreach ($tags as $tag)
                                    <div class="form-check ml-3">
                                        <div>
                                            <input class="form-check-input" type="checkbox"
                                                value="{{ $tag->id }}" id="tag{{ $tag->id }}"
                                                name="tag_ids[]">
                                            <label class="form-check-label"
                                                for="tag{{ $tag->id }}">{{ $tag->nama }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="customerDescription">Segmentasi dan Deskripsi Pelanggan</label>
                            <textarea class="form-control" id="customerDescription" rows="3"
                                placeholder="Jelaskan target pelanggan, karakteristik demografis, kebutuhan, dan preferensi"></textarea>
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
                                                <input type="text" class="form-control"
                                                    name="target_pelanggans[0][rentang_usia]">
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="target_pelanggans[0][deskripsi_pelanggan]"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        {{-- <div class="form-group">
                        <label for="socialImpactGoals">Tujuan Dampak Sosial</label>
                        <textarea class="form-control" id="socialImpactGoals" rows="2"
                            placeholder="Jelaskan tujuan dampak sosial dari proyek"></textarea>
                    </div> --}}
                        <a class="btn btn-primary btn-block mt-3" id="next-section">Simpan dan
                            Lanjutkan</a>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="form-group">
                    <div id="sdg-section" style="display: none;">
                        <h2>Pilih SDGs yang Relevan dengan Proyek Anda</h2>
                        @foreach ($sdgs as $sdg)
                            <div class="sdg-item" data-sdg="{{ $sdg->id }}">
                                <img src="images/E-WEB-Goal-{{ $sdg->order }}.png" alt="SDG {{ $sdg->order }}">
                                <h5>{{ $sdg->order }}. {{ $sdg->name }}</h5>
                                <i class="fas fa-chevron-down sdg-toggle"></i>
                                <input type="checkbox" class="sdg-checkbox" name="sdg_ids[]"
                                    value="{{ $sdg->id }}">
                                <div class="sdg-description">
                                    <p>{{ $sdg->description ?? 'Tidak ada deskripsi' }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </form>


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
                    <a href=""><li>HomePage</li></a>
                    <a href=""><li>Bootcamp</li></a>
                    <a href=""><li>IMM</li></a>
                    <a href=""><li>Comunity</li></a>
                    <a href=""><li>Profile</li></a>
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
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>

        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        {{-- <script>
        function initMap() {
            var mapOptions = {
                center: new google.maps.LatLng(-6.9175, 107.6191), // Koordinat Bandung, Indonesia
                zoom: 12,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        }
    </script> --}}
        <script>
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

                document.querySelector('.target-pelanggan').addEventListener('click', function(e) {
                    if (e.target.classList.contains('btn-remove-pelanggan')) {
                        e.target.closest('tr').remove();
                    }
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

                document.querySelector('.spesifikasi-pendanaan').addEventListener('click', function(e) {
                    if (e.target.classList.contains('btn-remove-dana')) {
                        e.target.closest('tr').remove();
                        $(".btn-add-dana").prop('disabled', false);
                    }
                });




                $('#tags, #indicators').change(function() {
                    updateMetrics();
                });

                $('#sdgs').change(function() {
                    var selectedSdg = $(this).val();
                    $('#indicators').empty();
                    @foreach ($sdgs as $sdg)
                        @foreach ($sdg->indicators as $indicator)
                            if (selectedSdg.includes('{{ $sdg->id }}')) {
                                $('#indicators').append(
                                    '<option value="{{ $indicator->id }}">{{ $indicator->order }}. {{ $indicator->name }}</option>'
                                );
                            }
                        @endforeach
                    @endforeach
                });

                updateMetrics();
                var nextButton = document.getElementById("next-section");
                var formSection = document.getElementById("form-section");
                var sdgSection = document.getElementById("sdg-section");

                nextButton.addEventListener("click", function() {
                    formSection.style.display = "none";
                    sdgSection.style.display = "block";
                });

                var sdgItems = document.querySelectorAll(".sdg-item");

                sdgItems.forEach(function(item) {
                    item.addEventListener("click", function() {
                        var description = item.querySelector(".sdg-description");
                        var toggle = item.querySelector(".sdg-toggle");

                        if (description.style.display === "block") {
                            description.style.display = "none";
                            toggle.classList.remove("fa-chevron-up");
                            toggle.classList.add("fa-chevron-down");
                            item.classList.remove("active");
                        } else {
                            description.style.display = "block";
                            toggle.classList.remove("fa-chevron-down");
                            toggle.classList.add("fa-chevron-up");
                            item.classList.add("active");
                        }
                    });
                });
            });
        </script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var nextButton = document.getElementById("next-section");
                var formSection = document.getElementById("form-section");
                var sdgSection = document.getElementById("sdg-section");

                nextButton.addEventListener("click", function() {
                    formSection.style.display = "none";
                    sdgSection.style.display = "block";
                });

                var sdgItems = document.querySelectorAll(".sdg-item");

                sdgItems.forEach(function(item) {
                    item.addEventListener("click", function() {
                        var description = item.querySelector(".sdg-description");
                        var toggle = item.querySelector(".sdg-toggle");

                        if (description.style.display === "block") {
                            description.style.display = "none";
                            toggle.classList.remove("fa-chevron-up");
                            toggle.classList.add("fa-chevron-down");
                            item.classList.remove("active");
                        } else {
                            description.style.display = "block";
                            toggle.classList.remove("fa-chevron-down");
                            toggle.classList.add("fa-chevron-up");
                            item.classList.add("active");
                        }
                    });
                });
            });
        </script>

</body>

</html>
