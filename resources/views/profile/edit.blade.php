@extends('layouts.app-imm')
@section('title', 'Edit Profil')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/profile/profiledit.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection

@section('content')
<div class="container d-flex justify-content-center">
    <div class="profile-container" style="margin-top:130px">
        <div class="text-left">
            <h1>Profile</h1>
            <p>Kelola pengaturan profil Anda</p>
        </div>
        <div class="profile-picture-container">
            <img src="https://via.placeholder.com/150" alt="Profile Picture">
            <div class="edit-icon">
                <i class="fas fa-edit"></i>
            </div>
            <input type="file" id="file-input" accept="image/*">
        </div>
        <form action="{{ route('profile.update') }}" method="POST" id="profileForm">
            @csrf
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="nama_depan">Nama Depan</label>
                        <input type="text" id="nama_depan" name="nama_depan" class="form-control" value="{{ $user->nama_depan }}">
                    </div>
                    <div class="form-group">
                        <label for="nik">NIK</label>
                        <input type="text" id="nik" name="nik" class="form-control" value="{{ $user->nik }}" readonly>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" class="form-control" value="{{ $user->email }}">
                    </div>
                    <div class="form-group">
                        <label for="current_password">Password Saat Ini</label>
                        <input type="password" id="current_password" name="current_password" class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label for="negara">Negara</label>
                        <input type="text" id="negara" name="negara" class="form-control" value="{{ $user->negara }}">
                    </div>
                    <div class="form-group">
                        <label for="provinsi">Provinsi</label>
                        <input type="text" id="provinsi" name="provinsi" class="form-control" value="{{ $user->provinsi }}">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Alamat Lengkap</label>
                        <input type="text" id="alamat" name="alamat" class="form-control" value="{{ $user->alamat }}">
                    </div>
                    <div class="form-group">
                        <label for="telepon">Nomor Handphone</label>
                        <div class="phone-input">
                            <img src="https://flagcdn.com/id.svg" alt="ID Flag">
                            <span>(+62)</span>
                            <input type="text" id="telepon" name="telepon" class="form-control" value="{{ $user->telepon }}">
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-buttons">
                <a href="{{ route('profile') }}"> <button type="button" class="btn-back">Kembali</button></a>
                <button type="submit" class="btn-save">Simpan</button>
            </div>
        </form>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/welcome/script.js') }}"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script>
    document.querySelector('.edit-icon').addEventListener('click', function() {
        document.getElementById('file-input').click();
    });

    document.getElementById('file-input').addEventListener('change', function() {
        if (this.files && this.files[0]) {
            var img = document.querySelector('.profile-picture-container img');
            img.src = URL.createObjectURL(this.files[0]);
        }
    });
</script>
@endsection
