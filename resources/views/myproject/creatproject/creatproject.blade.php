<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Membuat Projek</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">  <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/indicator.css') }}">
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
            <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" href="/homepage">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/myproject">My Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage">My Company</a>
                    </li>

                </ul>
                

            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}"
                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>
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
                            <input type="text" class="form-control" name="kota" id="city" placeholder="Kota">
                        </div>
                        <div class="form-group">
                            <label for="province">Provinsi</label>
                            <input type="text" class="form-control" name="provinsi" id="province" placeholder="Provinsi">
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
                                                <input type="number" class="form-control" name="dana[0][nominal]" required>
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
                                <!-- Add your company options here -->
                                <option value="1">Company 1</option>
                                <option value="2">Company 2</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="impactTags">Tag Tema Dampak Yang Selaras dengan Prioritas Dampak Anda</label>
                            <div class="tags-container" style="height: 200px; overflow-y: auto;">
                                <!-- Add your tags options here -->
                                <div class="form-check ml-3">
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="1" id="tag1" name="tag_ids[]">
                                        <label class="form-check-label" for="tag1">Tag 1</label>
                                    </div>
                                </div>
                                <div class="form-check ml-3">
                                    <div>
                                        <input class="form-check-input" type="checkbox" value="2" id="tag2" name="tag_ids[]">
                                        <label class="form-check-label" for="tag2">Tag 2</label>
                                    </div>
                                </div>
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
                        <div class="d-flex justify-content-between">
                            <button type="button" class="btn btn-primary" id="next-to-sdg-section">Next</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- SDG Section -->
            <div id="sdg-section" style="display: none;">
                <div class="container mt-5">
                    <h2>Pilih SDGs yang Relevan dengan Proyek Anda</h2>
                    <!-- Add your SDGs options here -->
                    <div class="sdg-item" data-sdg="1">
                        <img src="images/E-WEB-Goal-.png" alt="SDG 1">
                        <h5>SDG 1</h5>
                        <i class="fas fa-chevron-down sdg-toggle"></i>
                        <input type="checkbox" class="sdg-checkbox" name="sdg_ids[]" value="1">
                        <div class="sdg-description">
                            <p>Description for SDG 1</p>
                        </div>
                    </div>
                    <div class="sdg-item" data-sdg="2">
                        <img src="images/E-WEB-Goal-.png" alt="SDG 2">
                        <h5>SDG 2</h5>
                        <i class="fas fa-chevron-down sdg-toggle"></i>
                        <input type="checkbox" class="sdg-checkbox" name="sdg_ids[]" value="2">
                        <div class="sdg-description">
                            <p>Description for SDG 2</p>
                        </div>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-secondary" id="back-to-form-section">Back</button>
                        <button type="button" class="btn btn-primary" id="next-to-indicator-section">Next</button>
                    </div>
                </div>
            </div>

            <!-- Indicator Section -->
            <div id="indicator-section" style="display: none;">
                <div class="container mt-5">
                    <h1 class="text-center">Green Future Initiative</h1>
                    <p class="text-center">Goals SDGs project anda</p>
                    <div class="d-flex justify-content-center mb-4">
                        <img src="images/E-WEB-Goal-11.png" alt="SDG 11" class="img-fluid mx-2 sdg-goal" data-target="#goal11-description">
                        <img src="images/E-WEB-Goal-13.png" alt="SDG 13" class="img-fluid mx-2 sdg-goal" data-target="#goal13-description">
                        <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="img-fluid mx-2 sdg-goal" data-target="#goal15-description">
                    </div>
                    <div class="text-center bg-light p-3 mb-4">
                        <p>Kota dan Permukiman yang Inklusif, Aman, Tahan Lama: Membuat kota dan permukiman manusia menjadi inklusif, aman, tangguh, dan berkelanjutan</p>
                    </div>
                    <h5 class="text-center mb-4">Tentukan indikator SDGs sebagai target project anda! Anda dapat memilih lebih dari satu indikator</h5>
                
                    <div id="goal11-description" class="sdg-description mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center">
                            <img src="images/E-WEB-Goal-11.png" alt="SDG 11" class="mr-3" width="50">
                            <div>
                                <h5 class="mb-0">SDGs Goals 11</h5>
                                <p class="mb-0">Kota dan Komunitas yang Berkelanjutan (Sustainable Cities and Communities)</p>
                            </div>
                        </div>
                        <div class="mt-3 d-flex align-items-center" style="gap: 15px">
                            <label for="subscribe">
                                <input type="checkbox" id="subscribe" name="subscribe" value="yes">
                            </label>
                            <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                
                        </div>
                    </div>
                
                    <div id="goal13-description" class="sdg-description mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center">
                            <img src="images/E-WEB-Goal-13.png" alt="SDG 13" class="mr-3" width="50">
                            <div>
                                <h5 class="mb-0">SDGs Goals 13</h5>
                                <p class="mb-0">Penanganan Perubahan Iklim (Climate Action)</p>
                            </div>
                        </div>
                        <div class="mt-3 d-flex align-items-center" style="gap: 15px">
                            <label for="subscribe">
                                <input type="checkbox" id="subscribe" name="subscribe" value="yes">
                            </label>
                            <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                
                        </div>
                    </div>
                
                    <div id="goal15-description" class="sdg-description mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center">
                            <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="mr-3" width="50">
                            <div>
                                <h5 class="mb-0">SDGs Goals 15</h5>
                                <p class="mb-0">Ekosistem Daratan (Life on Land)</p>
                            </div>
                        </div>
                        <div class="mt-3 d-flex align-items-center" style="gap: 15px">
                            <label for="subscribe">
                                <input type="checkbox" id="subscribe" name="subscribe" value="yes">
                            </label>
                            <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                
                        </div>
                    </div>
                
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-secondary" id="back-to-sdg-section">Back</button>
                        <button type="button" class="btn btn-primary" id="next-to-metric-section">Next</button>
                    </div>
                </div>
            </div>

            <!-- Metric Section -->
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
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Assets Under Management: Managed by Fund Managers from Historically Marginalized Groups</h5>
                                <p class="mb-0">Value of the investing organization's assets under management (AUM) invested with fund managers from groups historically marginalized due to race and/or ethnicity as of the end of the reporting period.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Assets Under Management: Total</h5>
                                <p class="mb-0">Value of the investing organization's total assets under management as of the end of the reporting period.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Average Agricultural Yield</h5>
                                <p class="mb-0">Evaluates average agricultural yield per hectare of the set implied by another metric. For example, this metric applied to Client Individuals (PI4060) would yield the average agricultural yield of the organization's (farmer) clients. Organizations should calculate this metric for each individual agricultural product. See usage guidance for further information.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Average Client Agricultural Yield: Total</h5>
                                <p class="mb-0">Average agricultural yield per hectare of clients (who were farmers) of the organization during the reporting period.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Bias-Reducing Investment Practices</h5>
                                <p class="mb-0">Describes practices the investing organization implemented during the reporting period to reduce biases in investment criteria, policies, and processes that have disproportionately negative effects on entrepreneurs who are from groups historically marginalized due to race and/or ethnicity. See usage guidance for specific practices to address.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Biodiversity Assessment</h5>
                                <p class="mb-0">Indicates whether the organization has undertaken biodiversity-related assessments to evaluate the biological diversity and ecosystem condition present on the land that is directly or indirectly controlled by the organization.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Bulk Cargo Handled</h5>
                                <p class="mb-0">Volume of bulk cargo transported through a road, railway, port, or airport during the reporting period.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Business Innovation</h5>
                                <p class="mb-0">Describes whether the organization adopted or operationalized a product, internal process, technology, or financing structure that was new or not widely used in the operating geography and sector during the reporting period.</p>
                            </div>
                            <input type="checkbox" class="metric-checkbox">
                        </div>
                    </div>
                    <div class="metric-item mb-4 p-3 bg-white shadow-sm rounded">
                        <div class="d-flex align-items-center justify-content-between">
                            <div>
                                <h5 class="text-primary">Client Complaint Tracking System</h5>
                                <p class="mb-0">Indicates whether the organization has a system in place to receive and resolve client complaints..</p>
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
                </div>          <div class="d-flex justify-content-between mt-3">
                    <button type="button" class="btn btn-secondary" id="back-to-indicator-section">Back</button>
                    <a href="/myproject"><button type="submit" class="btn btn-primary">Submit</button></a>
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script><script src="{{ asset('js/imm/indicator.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>

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
        });

        function updateMetrics() {
            // Your function to update metrics
        }
    </script>

</body>

</html>
