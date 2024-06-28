@extends('layouts.app-imm')
@section('title', 'Profil Perusahaan')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/profile/profile-commpany.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@section('css')

@endsection
@section('content')

<body>
<div class="container  propil">
    <div class="">
        <h4>My Company</h4>
    </div>
    <!-- content form -->
    <div class="container">

        {{-- <form method="POST" action="{{ route('profile-commpany', ['id' => $company->id]) }}">
            @csrf
            @method('PUT') --}}
            <section> 
                <div class="row mt-5 py-3 px-4 border border-dark">
                <div class="container d-flex justify-content-start align-items-end">
                    <h4 class="basic-detail">Basic Details</h4>
                </div>
                    <div class="col-12 col-md-2 mb-3">
                      
                    </div>
                    <div class="col-12 col-md-10">
                        
                        <div class="row mb-3 align-items-center">
                      
                    <div class="profil d-flex align-items-center" style="gap: 10px">
                        <img id="preview" src="images/imgprofile.svg" alt="Your Image" style="max-width: 100px; max-height: 100px;">
                        <br>
                        <input type="file" id="fileInput" style="display: none;" accept="image/*">
                        <span id="changeText">Upload Image</span>
                    
                    </div>
                            <div class="col-12 col-md-9">
                                <span class="preview-container d-flex flex-wrap"></span>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nama-depan">Nama Lengkap</label>
                                <input type="text" name="nama_depan" id="nama-depan" class="form-control" placeholder="First Name" aria-label="First name" value="">
                                {{-- {{$user->nama_depan}} --}}
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput1" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="company_name" class="form-control" id="formGroupExampleInput1" placeholder="Nama Perusahaan" value="">
                            {{-- {{$company->nama}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="">
                            {{-- {{$user->email}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="">
                            {{-- {{$user->password}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Profil</label>
                            <input type="text" name="profile" class="form-control" id="formGroupExampleInput2" placeholder="Profil Perusahaan" value="">
                            {{-- {{$company->profile}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Nama PIC</label>
                            <input type="text" name="nama_pic" class="form-control" id="formGroupExampleInput3" placeholder="Nama PIC" value="">
                            {{-- {{$company->nama_pic}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Posisi PIC</label>
                            <input type="text" name="posisi_pic" class="form-control" id="formGroupExampleInput4" placeholder="Posisi PIC" value="">
                            {{-- {{$company->posisi_pic}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Nomor Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="formGroupExampleInput5" placeholder="Nomor Telepon" value="">
                            {{-- {{$company->telepon}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput6" class="form-label">Jumlah Pekerja</label>
                            <input type="text" name="jumlah_karyawan" class="form-control" id="formGroupExampleInput6" placeholder="Jumlah Pekerja" value="">
                            {{-- {{$company->jumlah_karyawan}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput7" class="form-label">Tipe Perusahaan</label>
                            <input type="text" name="company_type" class="form-control" id="formGroupExampleInput7" placeholder="Tipe Perusahaan" value="">
                            {{-- {{$company->tipe}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput8" class="form-label">Negara</label>
                            <input type="text" name="negara" class="form-control" id="formGroupExampleInput8" placeholder="Negara" value="">   
                            {{-- {{$company->negara}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput9" class="form-label">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" id="formGroupExampleInput9" placeholder="Provinsi" value="">
                            {{-- {{$company->provinsi}} --}}
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput10" class="form-label">Kabupaten</label>
                            <input type="text" name="kabupaten" class="form-control" id="formGroupExampleInput10" placeholder="Kabupaten" value="">
                            {{-- {{$company->kabupaten}} --}}
                        </div>
                    </div>
                </div>
            </section>
        {{-- </form> --}}

    </div>
    <!-- end content form -->

    <section>
        <div class="row bahasa border py-3 flex justify-content-between text-white align-items-center rounded mt-3 py-1">
            <div class="col">General preference for the web</div>
            <img src="images/icon-negara.svg" height="23" width="23" alt="Icon Negara">
            <div class="mx-2">Language</div>
            <div class="btn-group mt-3">
                <button class="btn dropdown-toggle text-white" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Bahasa Indonesia
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Bahasa Indonesia</a>
                    <a class="dropdown-item" href="#">English</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="row my-3 d-flex justify-content-center align-items-center">
      
            <a href="/homepage"><button type="submit" class="btn btn-outline-secondary">
                <div class="out d-flex justify-content-center align-items-center " style="gap: 10px">
                    <span>Keluar</span>
                    <img src="images/icon-out.svg" width="20" alt="">
                </div></button></a>
             
                

        </div>
    </section>

    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        document.getElementById('changeText').addEventListener('click', function() {
            document.getElementById('fileInput').click();
        });

        document.getElementById('fileInput').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('preview').src = e.target.result;
                    document.getElementById('changeText').textContent = 'Ganti Gambar';
                };
                reader.readAsDataURL(file);
            }
        });
    </script>
</body>
@endsection
