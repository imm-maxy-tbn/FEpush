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
                        <a class="nav-link" href="bootcamp">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="comunity">Community</a>
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
                        <div class="form-group" >
                            <input type="file" class="form-control-file" id="img" name="img" hidden>
                        </div>
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
            {{-- Indikator --}}
            <div id="indicator-section" style="display: none">
                <div class="container mt-5">
                    <h1 class="text-center" id="project-title"></h1>
                    <p class="text-center">Goals SDGs project anda</p>
                    <div class="d-flex justify-content-center mb-4" id="sdg-images-container"></div>
                    <div class="text-center bg-light p-3 mb-4" id="project-long-description"></div>
                    <h5 class="text-center mb-4">Tentukan indikator SDGs sebagai target project anda! Anda dapat memilih
                        lebih dari satu indikator</h5>
    
                        @foreach ($sdgs as $sdg)
                        <div class="goal-description mb-4 p-3 bg-white shadow-sm rounded" id="goal{{ $sdg->id }}-description">
                            <div class="d-flex align-items-center">
                                <img src="{{ env('APP_BACKEND_URL') . '/images/' . $sdg->img }}" alt="SDG {{ $sdg->id }}"
                                    class="mr-3" width="50">
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
                                                id="indicator-{{ $indicator->id }}" value="{{ $indicator->order }}"
                                                data-target="sub-container-{{ $indicator->id }}">
                                            <span>{{ $indicator->order }} </span><span>{{ $indicator->name }}</span>
                                        </label>
                                    </div>
                                @endif
                    
                                {{-- Sub-container untuk indikator level 2 --}}
                                @if ($indicator->level == 1)
                                <div class="sub-container" id="sub-container-{{ $indicator->id }}"
                                    style="display: none; margin-top: 10px;">
                                    <div class="d-flex flex-column" style="gap: 15px; margin-left: 50px;">
                                        @foreach ($indicator->childIndicators as $childIndicator)
                                        <div class=" d-flex">
                                            <span>{{ $childIndicator->order }} </span><span>{{ $childIndicator->name }}</span><br>
                                        </div>
                                        @endforeach
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
                    <div id="metrics" class="metric-item mb-4 p-3 bg-white shadow-sm rounded"></div>
                    <div class="pagination mt-4">
                        <ul class="pagination">
                            <!-- Pagination links -->
                        </ul>
                    </div>
                    <div class="d-flex justify-content-between mt-3">
                        <button type="button" class="btn btn-secondary" id="back-to-indicator-section">Back</button>
                        <button type="button" class="btn btn-primary" id="next-to-review-section">Next</button>
                    </div>
                </div>
            </div>
                    
            <div id="review-section" style="display: none;">
                <div class="container mt-5 pt-5">
                    <h1 class="text-center">Detail Review: SDGs Goals, Indicators, dan Metrix</h1>
                    <p class="text-center">Goals SDGs project anda</p>
                    <div class="d-flex justify-content-center mb-4" id="review-sdg-images-container"></div>
                    <div class="goals-text mt-4">
                        <div class="goal-description" id="selected-sdgs-container"></div>
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
                    <button type="button" class="btn btn-secondary" id="back-to-metric-section">Back</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/imm/indicator.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/imm/pemilihansdgs.js') }}"></script>

    <script async defer src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap"></script>
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
$('#next-to-metric-section').on('click', function() {
    var selectedTags = $('input[name="tag_ids[]"]:checked').map(function() {
        return $(this).val();
    }).get();
    var selectedIndicators = $('.indicator-checkbox:checked').map(function() {
        return $(this).val();
    }).get();

    $.ajax({
        url: '{{ route("projects.filterMetrics") }}',
        method: 'POST',
        data: {
            _token: '{{ csrf_token() }}',
            tag_ids: selectedTags,
            indicator_ids: selectedIndicators
        },
        success: function(response) {
            // Memproses respons dari server (response berisi metrik yang sesuai)
            $('#metrics').empty();
            $.each(response, function(index, metric) {
                var metricHtml = `
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h5 class="text-primary">(${metric.code}) ${metric.name}</h5>
                            <p class="mb-0">${metric.definition}</p>
                        </div>
                        <input type="checkbox" class="metric-checkbox" name="metrics[]" value="${metric.id}">
                    </div>
                `;
                $('#metrics').append(metricHtml);
            });

            // Menyembunyikan Indicator Section dan menampilkan Metric Section
            $('#indicator-section').hide();
            $('#metric-section').show();
        },
        error: function(xhr) {
            console.log(xhr.responseText);
        }
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
            $('#sdg-images-container').append('<img src="' + src + '" alt="SDG" class="img-fluid mx-2 sdg-goal">');
        });

        // Project Description
        var projectDescription = $('#deskripsi').val();
        $('#project-long-description').text(projectDescription);

        // Selected SDGs and Indicators
        var selectedSdgs = $('.sdg-checkbox:checked').map(function() {
            var sdgId = $(this).val();
            var sdgName = $(this).closest('.sdg-item').find('.sdg-name').text().trim();
            var sdgImage = $(this).closest('.sdg-item').find('img').attr('src');
            var selectedIndicators = $('#sub-container-' + sdgId + ' input:checked').map(function() {
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
            sdgsHtml += '<img src="' + sdg.image + '" alt="' + sdg.name + '" class="img-fluid mx-2 sdg-goal">';
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
        var metricsHtml = '<div>';
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
            $('#review-sdg-images-container').append('<img src="' + src + '" alt="SDG" class="img-fluid mx-2 sdg-goal">');
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
            sdgsHtml += '<div class="goal-description">SDGs ' + sdg.order + '. ' + sdg.name + '</div>';
        });
        $('#selected-sdgs-container').html(sdgsHtml);

        // Selected Indicators
        var selectedIndicatorsHtml = '';
        selectedSdgs.forEach(function(sdg) {
            var sdgImage = $('#goal' + sdg.id + '-description').find('img').attr('src');
            var selectedIndicators = $('#goal' + sdg.id + '-description .indicator-checkbox:checked').map(function() {
                var indicatorOrder = $(this).closest('label').find('span:first').text().trim();
                var indicatorName = $(this).closest('label').find('span:last').text().trim();
                var childIndicators = $('#sub-container-' + $(this).val() + ' .d-flex').map(function() {
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
                selectedIndicatorsHtml += '<div class="sdg-indicators mb-4">';
                selectedIndicatorsHtml += '<div class="d-flex align-items-center">';
                selectedIndicatorsHtml += '<img src="' + sdgImage + '" alt="SDG ' + sdg.order + '" class="mr-3" width="50">';
                selectedIndicatorsHtml += '<h5>SDGs ' + sdg.order + '. ' + sdg.name + '</h5>';
                selectedIndicatorsHtml += '</div>';

                selectedIndicators.forEach(function(indicator) {
                    selectedIndicatorsHtml += '<div class="indicator-item mt-4">';
                    selectedIndicatorsHtml += '<h5>' + indicator.order + '. ' + indicator.name + '</h5>';
                    if (indicator.children.length > 0) {
                        selectedIndicatorsHtml += '<ul class="mt-2 ml-4">';
                        indicator.children.forEach(function(child) {
                            selectedIndicatorsHtml += '<li>' + child.order + ' ' + child.name + '</li>';
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
            metricsHtml += '<div class="d-flex justify-content-between align-items-center p-3 border">';
            metricsHtml += '<div><h5 class="indicator-title">' + metric.title + '</h5>';
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

    // Submit form action
    $('form').on('submit', function(e) {
        e.preventDefault(); // Assuming your form has an action attribute defined
        // Perform form submission or AJAX request here
    });
});
    </script>
    
</body>

</html>