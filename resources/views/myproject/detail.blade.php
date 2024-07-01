@extends('layouts.app-imm')
@section('title', 'Detail Proyek')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .header-image {
            width: 100%;
            height: auto;
        }

        .fa-trash-alt {
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

        .upload-container {
            cursor: pointer;
        }

        img {
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
                            <img class="upload-container" src="/images/banner-bootcamp.png" id="image-preview">
                            <input type="file" id="file-upload" accept="image/*" style="display: none">

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
                    <form id="projectForm" action="{{ route('projects.update', $project->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="edit-container">
                                    <h5 class="card-title">Nama Proyek</h5>
                                    <i class="fas fa-edit edit-icon" id="edit-nama-proyek"></i>
                                </div>
                                <input type="text" class="form-control" id="nama-proyek" name="nama"
                                    value="{{ $project->nama }}" readonly>
                            </div>
                        </div>

                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="edit-container">
                                    <h5 class="card-title">Deskripsi Proyek</h5>
                                    <i class="fas fa-edit edit-icon" id="edit-deskripsi-proyek"></i>
                                </div>
                                <textarea class="form-control" id="deskripsi-proyek" name="deskripsi" rows="4" readonly>{{ $project->deskripsi }}</textarea>
                            </div>
                        </div>

                        <!-- Dokumen Validitas Data section -->
                        <div class="card mb-4">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Dokumen Validitas Data</h5>
                                <button type="button" class="btn btn-purple" id="tambah-dokumen">Tambah Dokumen</button>
                                <input type="file" id="file-input" name="documents[]" style="display: none;" multiple>
                            </div>
                            <ul class="list-group" id="file-list">
                                {{-- @foreach ($project->documents as $document)
                                    <li class="list-group-item">
                                        <a href="{{ asset('storage/' . $document->path) }}"
                                            class="file-link">{{ $document->name }}</a>
                                        <span class="float-right">
                                            <i class="fas fa-trash-alt delete-icon" data-id="{{ $document->id }}"></i>
                                        </span>
                                    </li>
                                @endforeach --}}
                            </ul>
                        </div>

                        <!-- Survey Pendukung section -->
                        <div class="card mb-4">
                            <div class="card-body d-flex justify-content-between align-items-center">
                                <h5 class="card-title">Survey Pendukung</h5>
                                <a href="edit-survey-new/{{ $project->id }}"><button class="btn btn-purple">Tambah
                                        Survey</button></a>
                            </div>
                            <ul class="list-group">
                                @foreach ($project->surveys as $survey)
                                    <li class="list-group-item d-flex justify-content-between align-items-center">
                                        {{ $survey->name }}
                                        <div>
                                            {{-- <a href="{{ route('survey.edit', $survey->id) }}"
                                                class="btn btn-sm btn-info">Edit</a> --}}
                                            <form action="{{ route('surveys.destroy', $survey->id) }}" method="POST"
                                                style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm"><i
                                                        class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </div>
                                    </li>
                                @endforeach
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
                                @foreach ($project->metrics as $metric)
                                    <li class="list-group-item">
                                        <a href="impact" class="text-dark">({{ $metric->code }}) {{ $metric->name }}</a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Indicator</h5>
                            <ul class="list-group">
                                @foreach ($project->indicators as $indicator)
                                    <li class="list-group-item">{{ $indicator->description }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>

                    <!-- Penggunaan Dana section -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Penggunaan Dana</h5>
                            @php
                                $totalDana = $project->dana->sum('nominal');
                            @endphp
                            @foreach ($project->dana as $dana)
                                @php
                                    $percentage = $totalDana > 0 ? ($dana->nominal / $totalDana) * 100 : 0;
                                @endphp
                                <div class="mb-3">
                                    <div class="d-flex justify-content-between">
                                        <span>{{ $dana->jenis_dana }}</span>
                                        <span
                                            class="font-weight-bold">{{ number_format($dana->nominal, 0, ',', '.') }}</span>
                                    </div>
                                    <div class="progress">
                                        <div class="progress-bar bg-primary" role="progressbar"
                                            style="width: {{ $percentage }}%;" aria-valuenow="{{ $percentage }}"
                                            aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            @endforeach
                            <div>
                                <div class="d-flex justify-content-between">
                                    <span>Total Dana</span>
                                    <span class="font-weight-bold">{{ number_format($totalDana, 0, ',', '.') }}</span>
                                </div>
                                <div class="progress">
                                    <div class="progress-bar bg-primary" role="progressbar" style="width: 100%;"
                                        aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                            <p class="mt-3 text-center">Total Dana Untuk Proyek Ini Telah Terpenuhi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container d-flex justify-content-center mt-5">
            <a href="myproject" class="btn w-50 btn-purple px-4 py-2 btn-wide text-white hidden" id="save-button"
                style="font-weight:bold;"><button type="submit">Simpan Perubahan Detail Proyek</button></a>
        </div>
        </form>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                let isEdited = false;

                function toggleEditState(element) {
                    if (element.attr('readonly')) {
                        element.removeAttr('readonly');
                        element.focus();
                    } else {
                        element.attr('readonly', 'readonly');
                    }
                    isEdited = true;
                    $('#save-button').removeClass('hidden');
                }

                $('#edit-nama-proyek').click(function() {
                    toggleEditState($('#nama-proyek'));
                });

                $('#edit-deskripsi-proyek').click(function() {
                    toggleEditState($('#deskripsi-proyek'));
                });

                $('#tambah-dokumen').click(function() {
                    $('#file-input').click();
                });

                $('#file-input').change(function() {
                    let files = this.files;
                    for (let i = 0; i < files.length; i++) {
                        let file = files[i];
                        let listItem = $('<li class="list-group-item"></li>');
                        listItem.text(file.name);
                        $('#file-list').append(listItem);
                    }
                    isEdited = true;
                    $('#save-button').removeClass('hidden');
                });

                $(document).on('click', '.delete-icon', function() {
                    let documentId = $(this).data('id');
                    $(this).closest('li').remove();
                    $('<input>').attr({
                        type: 'hidden',
                        name: 'delete_documents[]',
                        value: documentId
                    }).appendTo('#projectForm');
                    isEdited = true;
                    $('#save-button').removeClass('hidden');
                });

                $('#projectForm').submit(function(e) {
                    if (!isEdited) {
                        e.preventDefault();
                        alert('No changes were made.');
                    }
                });
            });
        </script>
    </body>
@endsection
