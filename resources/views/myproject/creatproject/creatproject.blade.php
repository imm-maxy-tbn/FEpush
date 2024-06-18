<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/indicator.css') }}">
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
    </div>

    <div class="container mt-5">
        <form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
            <div id="form-section">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="project-title">Tentang Proyek Anda</h2>
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Proyek</label>
                            <input type="text" class="form-control" name="nama" id="nama" required>
                        </div>
                        <div class="form-group">
                            <label for="deskripsi">Deskripsi Proyek</label>
                            <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="tujuan">Tujuan Proyek</label>
                            <textarea class="form-control" name="tujuan" id="tujuan" rows="2"></textarea>
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
                            <input type="text" class="form-control" name="provinsi" id="provinsi" placeholder="Provinsi">
                        </div>
                        <div class="form-group">
                            <label for="kota">Kota</label>
                            <input type="text" class="form-control" name="kota" id="kota" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="gmaps">Google Maps URL:</label>
                            <input type="text" class="form-control" id="gmaps" name="gmaps" required>
                        </div>
                        <div class="form-group">
                            <label for="jumlah_pendanaan">Jumlah Dana Keseluruhan</label>
                            <input type="number" class="form-control" name="jumlah_pendanaan" id="jumlah_pendanaan">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2 class="project-title">Spesisifikasi Pendanaan</h2>
                        <div class="form-group">
                            <label for="otherFunds">Pendanaan Lainnya</label>
                            <button type="button" class="btn btn-primary btn-add-dana ml-2 mb-2"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
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
                                                <input type="number" class="form-control" name="dana[0][nominal]" required>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="impactTags">Tag Tema Dampak Yang Selaras dengan Prioritas Dampak Anda</label>
                            <div class="tags-container" style="height: 200px; overflow-y: auto;">
                                @foreach ($tags as $tag)
                                    <div class="form-check ml-3">
                                        <div>
                                            <input class="form-check-input" type="checkbox" value="{{ $tag->id }}" id="tag{{ $tag->id }}" name="tag_ids[]">
                                            <label class="form-check-label" for="tag{{ $tag->id }}">{{ $tag->nama }}</label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="targetCustomers">Target Pelanggan</label>
                            <button type="button" class="btn btn-primary btn-add-pelanggan ml-2 mb-2"><i class="fa-solid fa-plus" style="color: #ffffff;"></i></button>
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
                                                <input type="text" class="form-control" name="target_pelanggans[0][status]" required>
                                            </td>
                                            <td>
                                                <input type="text" class="form-control" name="target_pelanggans[0][rentang_usia]">
                                            </td>
                                            <td>
                                                <textarea class="form-control" name="target_pelanggans[0][deskripsi_pelanggan]"></textarea>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary" id="next-to-sdg-section">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <div class="form-group">
                    <div id="sdg-section" style="display: none;">
                        <h2>Pilih SDGs yang Relevan dengan Proyek Anda</h2>
                        @foreach ($sdgs as $sdg)
                            <div class="sdg-item" data-sdg="{{ $sdg->id }}">
                                <img src="{{ env('APP_BACKEND_URL') . '/images/' . $sdg->img }}" alt="SDG {{ $sdg->order }}">
                                <h5>{{ $sdg->order }}. {{ $sdg->name }}</h5>
                                <i class="fas fa-chevron-down sdg-toggle"></i>
                                <input type="checkbox" class="sdg-checkbox" name="sdg_ids[]" value="{{ $sdg->id }}">
                                <div class="sdg-description">
                                    <p>{{ $sdg->description ?? 'Tidak ada deskripsi' }}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-secondary" id="back-to-form-section">Back</button>
                            <button type="button" class="btn btn-primary" id="next-to-indicator-section">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <div id="indicator-section" style="display: none;">
                <div class="container mt-5">
                    <h1 class="text-center" id="project-name"></h1>
                    <div id="selected-sdgs" class="d-flex justify-content-center mb-4">
                        <!-- Selected SDGs will be displayed here -->
                    </div>
                    <p class="text-center" id="project-description"></p>
                    <div id="sdg-indicators" class="text-center bg-light p-3 mb-4">
                        <!-- SDG indicators will be displayed here -->
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-secondary" id="back-to-sdg-section">Back</button>
                        <button type="button" class="btn btn-primary" id="next-to-metric-section">Next</button>
                    </div>
                </div>
            </div>

            <div id="metric-section" style="display: none;">
                <div class="container mt-5">
                    <h1 class="text-center">Select Metrics Based on Your Chosen Indicator</h1>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Assets Under Management: Total</h5>
                                <p class="mb-0">Indicates whether the organization provides support to its clients after a sale of its product/service.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="pagination mt-4">
                        <ul class="pagination">
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item"><a class="page-link" href="#">4</a></li>
                            <li class="page-item"><a class="page-link" href="#">5</a></li>
                            <li class="page-item"><a class="page-link" href="#">6</a></li>
                            <li class="page-item"><a class="page-link" href="#">7</a></li>
                            <li class="page-item"><a class="page-link" href="#">8</a></li>
                            <li class="page-item"><a class="page-link" href="#">9</a></li>
                            <li class="page-item"><a class="page-link" href="#">10</a></li>
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-secondary" id="back-to-indicator-section">Back</button>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <div class="container footer mt-5 d-flex justify-content-center align-items-center">
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
                    <div class="sosmed d-flex justify-content-end">
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
    <script src="{{ asset('js/imm/indicator.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

    <script>
        $(document).ready(function() {
            var index = 1;
            $(".btn-add-pelanggan").click(function() {
                var newRow = '<tr>' +
                    '<td><input type="text" class="form-control" name="target_pelanggans[' + index + '][status]" required></td>' +
                    '<td><input type="text" class="form-control" name="target_pelanggans[' + index + '][rentang_usia]"></td>' +
                    '<td><textarea class="form-control" name="target_pelanggans[' + index + '][deskripsi_pelanggan]"></textarea></td>' +
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
                    '<td><select class="form-control" name="dana[' + indexDana + '][jenis_dana]" required>' +
                    optionsHtml +
                    '</select></td>' +
                    '<td><input type="number" class="form-control" name="dana[' + indexDana + '][nominal]" required></td>' +
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

            var nextButtonToSdg = document.getElementById("next-to-sdg-section");
            var nextButtonToIndicator = document.getElementById("next-to-indicator-section");
            var nextButtonToMetric = document.getElementById("next-to-metric-section");

            var backButtonToForm = document.getElementById("back-to-form-section");
            var backButtonToSdg = document.getElementById("back-to-sdg-section");
            var backButtonToIndicator = document.getElementById("back-to-indicator-section");

            var formSection = document.getElementById("form-section");
            var sdgSection = document.getElementById("sdg-section");
            var indicatorSection = document.getElementById("indicator-section");
            var metricSection = document.getElementById("metric-section");

            nextButtonToSdg.addEventListener("click", function() {
                formSection.style.display = "none";
                sdgSection.style.display = "block";
            });

            nextButtonToIndicator.addEventListener("click", function() {
                updateSelectedSdgs();
                document.getElementById("project-name").innerText = document.getElementById("nama").value;
                document.getElementById("project-description").innerText = document.getElementById("deskripsi").value;
                sdgSection.style.display = "none";
                indicatorSection.style.display = "block";
            });

            nextButtonToMetric.addEventListener("click", function() {
                indicatorSection.style.display = "none";
                metricSection.style.display = "block";
            });

            backButtonToForm.addEventListener("click", function() {
                sdgSection.style.display = "none";
                formSection.style.display = "block";
            });

            backButtonToSdg.addEventListener("click", function() {
                indicatorSection.style.display = "none";
                sdgSection.style.display = "block";
            });

            backButtonToIndicator.addEventListener("click", function() {
                metricSection.style.display = "none";
                indicatorSection.style.display = "block";
            });

            function updateSelectedSdgs() {
                var selectedSdgs = [];
                $('.sdg-checkbox:checked').each(function() {
                    selectedSdgs.push($(this).val());
                });
                $('#selected-sdgs').empty();
                selectedSdgs.forEach(function(sdg) {
                    var sdgElement = $('[data-sdg="' + sdg + '"] img').clone();
                    sdgElement.addClass('selected-sdg');
                    sdgElement.attr('data-sdg', sdg);
                    sdgElement.click(function() {
                        showSdgIndicators(sdg);
                    });
                    $('#selected-sdgs').append(sdgElement);
                });
            }

            function showSdgIndicators(sdgId) {
                $('#sdg-indicators').empty();
                var indicators = getIndicatorsBySdg(sdgId);
                indicators.forEach(function(indicator) {
                    var indicatorElement = $('<div class="indicator-item"></div>');
                    indicatorElement.text(indicator);
                    $('#sdg-indicators').append(indicatorElement);
                });
            }
        });
    </script>

</body>

</html>
