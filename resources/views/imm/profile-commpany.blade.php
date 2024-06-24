@extends('layouts.app-imm')
@section('title', '')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/profile/profile-commpany.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

@section('css')

@endsection
@section('content')

<body>



<div class="container ">
    <div class="mx-5">
        <h4>My Company</h4>
    </div>
    <!-- content form -->
    <div class="container "  >
        <form method="POST" action="{{ route('profile-commpany', ['id' => $company->id]) }}">
            @csrf
            @method('PUT')
            <section> 
                <div class="row propil mx-5 py-3 px-4 border border-dark">
                    <div class="col-2">
                        <h5>Basic Details</h5>
                    </div>
                    <div class="col-10">
                        <div class="row mb-3 flex align-items-center">
                            <img src="images/profile-company.svg" width="50" height="50" alt="">
                            <label>
                                <div class="unggah">
                                    Change Picture
                                </div>
                                <input type="file" class="gambar" name="gambar" accept="image/*" style="display: none;" multiple>
                            </label>
                            <span class="preview-container d-flex flex-wrap"></span>
                        </div>
                        <div class="row mb-3">
                            <div class="col">
                                <label for="nama-depan" class="">Nama Lengkap</label>
                                <input type="text" name="nama_depan" id="nama-depan" class="form-control" placeholder="First Name" aria-label="First name" value="{{$user->nama_depan}}">
                            </div>
                           
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput1" class="form-label">Nama Perusahaan</label>
                            <input type="text" name="company_name" class="form-control" id="formGroupExampleInput1" placeholder="Nama Perusahaan" value="{{$company->nama}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{$user->email}}">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{$user->password}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Profil </label>
                            <input type="text" name="profile" class="form-control" id="formGroupExampleInput2" placeholder="Profil Perusahaan" value="{{$company->profile}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput3" class="form-label">Nama PIC</label>
                            <input type="text" name="nama_pic" class="form-control" id="formGroupExampleInput3" placeholder="Nama PIC" value="{{$company->nama_pic}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput4" class="form-label">Posisi PIC</label>
                            <input type="text" name="posisi_pic" class="form-control" id="formGroupExampleInput4" placeholder="Posisi PIC" value="{{$company->posisi_pic}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput5" class="form-label">Nomor Telepon</label>
                            <input type="text" name="telepon" class="form-control" id="formGroupExampleInput5" placeholder="Nomor Telepon" value="{{$company->telepon}}"> 
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput6" class="form-label">Jumlah Pekerja</label>
                            <input type="text" name="jumlah_karyawan" class="form-control" id="formGroupExampleInput6" placeholder="Jumlah Pekerja" value="{{$company->jumlah_karyawan}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput7" class="form-label">Tipe Perusahaan</label>
                            <input type="text" name="company_type" class="form-control" id="formGroupExampleInput7" placeholder="Tipe Perusahaan" value="{{$company->tipe}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput8" class="form-label">Negara</label>
                            <input type="text" name="negara" class="form-control" id="formGroupExampleInput8" placeholder="Negara" value="{{$company->negara}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput9" class="form-label">Provinsi</label>
                            <input type="text" name="provinsi" class="form-control" id="formGroupExampleInput9" placeholder="Provinsi" value="{{$company->provinsi}}">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput10" class="form-label">Kabupaten</label>
                            <input type="text" name="kabupaten" class="form-control" id="formGroupExampleInput10" placeholder="Kabupaten" value="{{$company->kabupaten}}">
                        </div>
        
                        {{-- <button type="submit" class="btn btn-primary">Update</button> --}}
                    </div>
                </div>
            </section>
        </form>
        
        
    </div>

    <!-- end content form -->

    <section>
        <div
            class="row bahasa border flex justify-content-center text-white align-items-center rounded mt-3 py-1 mx-5 ">
            <div class="col">General preferance for the web</div>
            <img src="images/icon-negara.svg" height="23" width="23" alt="">
            <div class=" mx-2">Language</div>
            <div class="btn-group ">
                <button class="btn dropdown-toggle text-white" type="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    Bahasa Indonesia
                </button>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                    <li><a class="dropdown-item" href="#">Menu item</a></li>
                </ul>
            </div>
        </div>
    </section>
</div>
    <section>
        <div class="row my-3 mx-5 justify-content-center align-items-center" style="gap: 50px">
          <a href="/homepage"><button type="submit" class=" btn btn-primary">Exit</button></a> 
          <form id="logout-form" action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-primary mt-4"><i class="fas fa-sign-out-alt"></i> Log Out</button>
        </form>
        </div>
        </div>
    </section>




   
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>


@endsection
