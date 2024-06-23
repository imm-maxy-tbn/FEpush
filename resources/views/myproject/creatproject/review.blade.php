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
                        <h1 class="text-center" id="project-title"></h1>
                        <p class="text-center">Goals SDGs project anda</p>
                        <div class="d-flex justify-content-center mb-4" id="sdg-images-container"></div>
                        <div class="text-center bg-light p-3 mb-4" id="project-long-description"></div>
                        <h5 class="text-center mb-4">Tentukan indikator SDGs sebagai target project anda! Anda dapat memilih lebih dari satu indikator</h5>
                
                        @foreach ($sdgs as $sdg)
                        <div class="goal-description mb-4 p-3 bg-white shadow-sm rounded" id="goal{{ $sdg->id }}-description">
                            <div class="d-flex align-items-center">
                                <img src="{{ env('APP_BACKEND_URL') . '/images/' . $sdg->img }}" alt="SDG {{ $sdg->id }}" class="mr-3" width="50">
                                <div>
                                    <h5 class="mb-0">SDGs Goals {{ $sdg->id }}</h5>
                                    <p class="mb-0">{{ $sdg->name }}</p>
                                </div>
                            </div>
                
                            @foreach ($sdg->indicators as $indicator)
                                @if ($indicator->level == 1)
                                <div class="mt-3 d-flex align-items-center level-1-indicator" style="gap: 15px">
                                    <label for="indicator-{{ $indicator->id }}">
                                        <input type="checkbox" class="indicator-checkbox" id="indicator-{{ $indicator->id }}" value="{{ $indicator->order }}" data-sub-container="sub-container-{{ $indicator->id }}">
                                        <span>{{ $indicator->order }} </span><span>{{ $indicator->name }}</span>
                                    </label>
                                </div>
                                @endif
                
                                {{-- Sub-container untuk indikator level 2 --}}
                                @if ($indicator->level == 2)
                                <div class="sub-container" id="sub-container-{{ $indicator->id }}" style="display: none; margin-top: 10px;">
                                    <div class="d-flex align-items-center" style="gap: 15px; margin-left: 70px;">
                                        <span>{{ $indicator->order }} </span><span>{{ $indicator->name }}</span>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                
                        </div>
                        @endforeach
                
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
                            <button type="button" id="next-to-review-section" class="btn btn-primary">Next</button>
                        </div>
                    </div>
                </div>



                <div id="review-section" style="display: none">
                    <div class="container mt-5">
                        <h1 class="text-center">Green Future Initiative</h1>
                        <p class="text-center">Goals SDGs project anda</p>
                        <div class="d-flex justify-content-center mb-4">
        
                            <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="img-fluid mx-2 sdg-goal" data-target="#goal15-description">
                        </div>
                        <div class="text-center bg-light p-3 mb-4">
                            <p>Kota dan Permukiman yang Inklusif, Aman, Tahan Lama: Membuat kota dan permukiman manusia menjadi inklusif, aman, tangguh, dan berkelanjutan</p>
                        </div>
                        <h5 class="text-center mb-4">Tentukan indikator SDGs sebagai target project anda! Anda dapat memilih lebih dari satu indikator</h5>
                    
                      
                       
                        <div id="goal15-description1" class="mb-4 p-3 bg-white shadow-sm rounded">
                            <div class="d-flex align-items-center">
                                <img src="images/E-WEB-Goal-15.png" alt="SDG 15" class="mr-3" width="50">
                                <div>
                                    <h5 class="mb-0">SDGs Goals 15</h5>
                                    <p class="mb-0">Ekosistem Daratan (Life on Land)</p>
                                </div>
                            </div>
                            <div class="section">
                            <div class="mt-3 d-flex align-items-center" style="gap: 15px">
                                <label for="subscribe1">
                                    <input type="checkbox" id="subscribe1" name="subscribe1" value="yes">
                                </label>
                                <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                            </div>
                            <div id="sub-container1" style="display: none; margin-top: 10px;">
                                <div class="d-flex align-items-center" style="gap: 15px; margin-left: 70px;">
                                    <span>11.11</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                                </div>
                            </div>
                        </div>
                            <div class="section">
                            <div class="mt-3 d-flex align-items-center" style="gap: 15px">
                                <label for="subscribe2">
                                    <input type="checkbox" id="subscribe2" name="subscribe2" value="yes">
                                </label>
                                <span>11.1</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                            </div>
                            <div id="sub-container2" style="display: none; margin-top: 10px;">
                                <div class="d-flex align-items-center" style="gap: 15px; margin-left: 70px;">
                                    <span>11.11</span><span>Pada tahun 2030, menjamin akses bagi semua orang terhadap perumahan dan layanan dasar yang layak, aman dan terjangkau serta memperbaiki kawasan kumuh</span>
                                </div>
                                
                            </div>
                        </div>

                      
                    
                    </div>
                        
                    <div class="container mt-5">
                        <h1 class="text-center">METRIC</h1>
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
                      
                    </div>
                        
                    
                        <div class="d-flex justify-content-between mt-3">
                            <button type="button" class="btn btn-secondary" id="back-to-metric-section">Back</button>
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
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
        <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var checkboxes = document.querySelectorAll("input[type=checkbox]");
                
                checkboxes.forEach(function(checkbox) {
                    checkbox.addEventListener("change", function() {
                        var subContainer = document.getElementById("sub-container" + this.id.replace("subscribe", ""));
                        
                        if (checkbox.checked) {
                            subContainer.style.display = "block"; // Menampilkan sub-container jika checkbox dicentang
                        } else {
                            subContainer.style.display = "none"; // Menyembunyikan sub-container jika checkbox tidak dicentang
                        }
                    });
                });
            });
        </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
        <script>
            $(document).ready(function() {
                $('.indicator-checkbox').change(function() {
                    var subContainerId = $(this).data('sub-container');
                    if ($(this).is(':checked')) {
                        $('#' + subContainerId).show();
                    } else {
                        $('#' + subContainerId).hide();
                    }
                });
            });
            </script>
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
        
                $(document).on('click', '.btn-remove-dana', function() {
                    $(this).closest('tr').remove();
                    $(".btn-add-dana").prop('disabled', false);
                });
        
                $('#next-to-sdg-section').on('click', function() {
                    $('#form-section').hide();
                    $('#sdg-section').show();
                });
        
                $('#back-to-form-section').on('click', function() {
                    $('#sdg-section').hide();
                    $('#form-section').show();
                });
                $('#next-to-metric-section').on('click', function() {
                    $('#indicator-section').hide();
                    $('#metric-section').show();
                });
                $('#next-to-review-section').on('click', function() {
                    $('#metric-section').hide();
                    $('#review-section').show();
                });
        
                $('#back-to-indicator-section').on('click', function() {
                    $('#metric-section').hide();
                    $('#indicator-section').show();
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
                        $('#sdg-images-container').append('<img src="'+src+'" alt="SDG" class="img-fluid mx-2 sdg-goal" data-target="#goal15-description">');
                    });
        
                    $('#sdg-section').hide();
                    $('#indicator-section').show();
                });
        
                $('#back-to-sdg-section').on('click', function() {
                    $('#indicator-section').hide();
                    $('#sdg-section').show();
                });
                $('#back-to-metric-section').on('click', function() {
                    $('#review-section').hide();
                    $('#metric-section').show();
                });
        
                $('.sdg-checkbox').on('change', function() {
                    var sdgId = $(this).val();
                    $('.goal-description').hide();
                    $('#goal' + sdgId + '-description').show();
                    $('#goal' + sdgId + '-description .sub-container').hide();
                    $('#goal' + sdgId + '-description .sub-container[data-level="2"]').show();
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
    });$(document).ready(function() {
        $('.sdg-checkbox').on('change', function() {
            // Semua checkbox SDG yang dipilih
            var selectedSdgs = $('.sdg-checkbox:checked');
            
            // Sembunyikan semua deskripsi SDG terlebih dahulu
            $('.goal-description').hide();

            // Tampilkan deskripsi untuk setiap SDG yang diceklis
            selectedSdgs.each(function() {
                var sdgId = $(this).val();
                $('#goal' + sdgId + '-description').show();
            });
        });
    });
        </script>
      
    </body>

    </html>