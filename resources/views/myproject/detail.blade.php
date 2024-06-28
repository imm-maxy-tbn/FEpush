@extends('layouts.app-imm')
@section('title', 'Detail Proyek')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet"> <style>
        .header-image {
            width: 100%;
            height: auto;
        }

        .fa-trash-alt{
            cursor: pointer;
           color: red;
        }

        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .left-content,
        .right-content {
            flex: 1;
            min-width: 300px;
        }

        .card-title {
            font-weight: bold;
        }

        .card-body {
            padding: 20px;
        }

        .input-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .mt-3 {
            margin-top: 1rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .btn-block {
            display: block;
            width: 100%;
        }

        .badge-pill {
            border-radius: 50rem;
        }

        .progress-bar {
            background-color: #007bff;
        }

        .footer {
            background-color: #343a40;
            color: #ffffff;
            padding: 20px;
        }

        .span-footer {
            font-size: 0.9rem;
        }

        .sosmed a {
            color: #ffffff;
            margin-left: 10px;
        }

        .sosmed a:hover {
            color: #007bff;
        }

        .btn-custom {
            width: 100px;
        }

        .edit-icon {
            cursor: pointer;
            font-size: 1.2rem;
            color: #007bff;
        }

        .edit-icon:hover {
            color: #0056b3;
        }

        .edit-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn-wide {
            width: 300px;
            text-align: center;
        }

        .btn-purple {
            background-color: #5e42a6;
            color: white;
        }

        .btn-purple:hover {
            background-color: #4e3690;
            color: white;
        }

        .mt-5 {
            margin-top: 3rem !important;
        }

        .scrollable {
            max-height: 200px;
            overflow-y: auto;
        }

        .upload-container {
      
            width: 100%;
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 2px solid #ccc;
            color: #fff;
            font-size: 1.2rem;
        }

        .upload-container input[type="file"] {
            display: none;
        }

        .upload-container label {
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-container label i {
            font-size: 2rem;
        }

        .hidden {
            display: none;
        }
        .upload-container{
            cursor: pointer;
        }
        img{
            background-size: cover;
            
        }

    </style>
@endsection
@section('content')


   


<body>


<!-- Main Container -->
<div class="container mt-5 pt-5 contentTop">
    <div class="row">
        <div class="col-12">
            <div class="container">
                <label for="file-upload" class=" w-100" aria-placeholder=""> 
                    <img class="upload-container" src="/images/banner-bootcamp.png" id="image-preview"   >
                <input type="file" id="file-upload" accept="image/*" style="display: none" >
            
                    <i class="fas fa-cloud-upload-alt" style="display: none"></i>
                </label>
            </div>
    
        </div>
    </div>
</div>

<!-- Content Section -->
<div class="container mt-3">
    <div class="row">
        <!-- Left Content -->
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="edit-container">
                        <h5 class="card-title">Nama Proyek</h5>
                        <i class="fas fa-edit edit-icon" id="edit-nama-proyek"></i>
                    </div>
                    <input type="text" class="form-control" id="nama-proyek" value="Projek Anti-Phising" readonly>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="edit-container">
                        <h5 class="card-title">Deskripsi Proyek</h5>
                        <i class="fas fa-edit edit-icon" id="edit-deskripsi-proyek"></i>
                    </div>
                    <textarea class="form-control" id="deskripsi-proyek" rows="4" readonly>Proyek komprehensif yang bertujuan untuk memanfaatkan teknologi dan ilmu komputer untuk mencapai berbagai Tujuan Pembangunan Berkelanjutan (SDGs).</textarea>
                </div>
                
                
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">SDG'S</h5>
                    <div class="row">
                        <div class="col-4">
                            <img src="{{ asset('images/ASVG/sdg1.svg') }}" class="img-fluid" alt="SDG 4">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/ASVG/sdg2.svg') }}" class="img-fluid" alt="SDG 9">
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('images/ASVG/sdg3.svg') }}" class="img-fluid" alt="SDG 10">
                        </div>
                    </div>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Dokumen Validitas Data</h5>
                    <button class="btn btn-purple" id="tambah-dokumen">Tambah Dokumen</button>
                    <input type="file" id="file-input" style="display: none;">
                </div>
                <ul class="list-group" id="file-list">
                    <li class="list-group-item">
                        <a href="#" class="file-link">File a.csv</a>
                        <span class="float-right">
                            <i class="fas fa-trash-alt delete-icon"></i>
                        </span>
                    </li>
                </ul>
            </div>

            <div class="card mb-4">
                <div class="card-body d-flex justify-content-between align-items-center">
                    <h5 class="card-title">Survey Pendukung</h5>
                    <button class="btn btn-purple">Mulai Survey</button>
                </div>
                <ul class="list-group">
                    <li class="list-group-item">Survey Kesadaran CyberSecurity <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                    <li class="list-group-item">Survey Korban Phising <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                    <li class="list-group-item">Survey Korban Phising <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                    <li class="list-group-item">Survey Korban Phising <span class="float-right"><i class="fas fa-trash-alt"></i></span></li>
                </ul>
                
            </div>

            <button class="btn btn-purple btn-block mb-5">Project Selesai</button>
        </div>

        <!-- Right Content -->
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Metrix Anda</h5>
                    <input type="text" class="form-control" placeholder="Cari Matrix anda">
                    <ul class="list-group mt-3 scrollable">
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Premi Penghematan Klien</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Bias-Reducing Investment Practices</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Lorem ipsum dolor sit amet</a>
                        </li>
                        <li class="list-group-item">
                            <a href="impact" class="text-dark">Consectetur adipiscing elit</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <h5 class="card-title">Indicator</h5>
                    <ul class="list-group">
                        <li class="list-group-item">4.1.1.(a) Proporsi anak-anak dan remaja di: (a) kelas 5 (b) kelas 8, dan (c) usia 15 tahun yang mencapai setidaknya tingkat kemahiran minimum dalam: (i) membaca, (ii) matematika.</li>
                        <li class="list-group-item">4.4.1.(a) Proporsi remaja (usia 15-24 tahun) dan dewasa (usia 15-59 tahun) dengan keterampilan teknologi informasi dan komunikasi (TIK).</li>
                        <li class="list-group-item">9.5.2 Jumlah sumber daya manusia bidang ilmu pengetahuan dan teknologi (peneliti, perekayasa, dan dosen) pada instansi pemerintah dan perguruan tinggi per satu juta penduduk.</li>
                        <li class="list-group-item">10.4.1.(b) Proporsi peserta Program Jaminan Sosial Bidang Ketenagakerjaan.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    
</div>
<div class="container d-flex justify-content-center mt-5">
    <a href="myproject" class="btn w-50 btn-purple px-4 py-2 btn-wide text-white hidden" id="save-button" style="font-weight:bold;">Simpan Perubahan Detail Proyek</a>
</div>



<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $('#file-upload').on('change', function() {
            var file = this.files[0];
            if (file) {
                if (file.size > 5 * 1024 * 1024 * 1024 * 1024 * 1024) { // Check if file size is more than 5 MB
                    alert('Ukuran file terlalu besar. Maksimal 5 MB.');
                    this.value = null; // Reset input file
                    return;
                }

                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#image-preview').html('<img src="' + e.target.result + '" class="img-fluid" alt="Preview">');
                };
                reader.readAsDataURL(file);
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        $('#tambah-dokumen').on('click', function() {
            $('#file-input').click();
        });

        $('#file-input').on('change', function() {
            var file = this.files[0];
            if (file) {
                var fileName = file.name;
                var listItem = $('<li class="list-group-item"></li>');
                var fileLink = $('<a href="#" class="file-link"></a>').text(fileName);
                var deleteIcon = $('<i class="fas fa-trash-alt delete-icon"></i>');

                deleteIcon.on('click', function() {
                    listItem.remove();
                });

                listItem.append(fileLink).append($('<span class="float-right"></span>').append(deleteIcon));
                $('#file-list').append(listItem);
            }
        });
    });
</script><script>
    document.querySelectorAll('.fa-trash-alt').forEach(function(trashIcon) {
        trashIcon.addEventListener('click', function() {
            var listItem = this.closest('.list-group-item');
            listItem.remove();
        });
    });
</script>

<script>
    document.getElementById('edit-deskripsi-proyek').addEventListener('click', function() {
        var textareaField = document.getElementById('deskripsi-proyek');
        if (textareaField.hasAttribute('readonly')) {
            textareaField.removeAttribute('readonly');
            textareaField.focus();  // Optional: to automatically focus the textarea when it becomes editable
        } else {
            textareaField.setAttribute('readonly', 'readonly');
        }
    });
</script>


<script>
    document.getElementById('edit-nama-proyek').addEventListener('click', function() {
        var inputField = document.getElementById('nama-proyek');
        if (inputField.hasAttribute('readonly')) {
            inputField.removeAttribute('readonly');
            inputField.focus();  // Optional: to automatically focus the input field when it becomes editable
        } else {
            inputField.setAttribute('readonly', 'readonly');
        }
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const editIcons = document.querySelectorAll('.edit-icon');
        const saveButton = document.getElementById('save-button');
        let isButtonVisible = false;

        editIcons.forEach(icon => {
            icon.addEventListener('click', function() {
                isButtonVisible = !isButtonVisible;
                if (isButtonVisible) {
                    saveButton.classList.remove('hidden');
                } else {
                    saveButton.classList.remove('hidden');
                }
            });
        });
    });
</script>
</body>
@endsection

