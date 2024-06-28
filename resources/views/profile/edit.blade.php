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


<body>




    <div class="container d-flex justify-content-center">
        <div class="profile-container" style="margin-top:130px">
            <div class="text-left ">
            <h1>Profile</h1>
            <p>Kelola pengaturan profil Anda</p></div>
            <div class="profile-picture-container">
                <img src="https://via.placeholder.com/150" alt="Profile Picture">
                <div class="edit-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <input type="file" id="file-input" accept="image/*">
            </div>
            <form id="profileForm">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="fullName">Nama Lengkap</label>
                            <input type="text" id="fullName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="fullName">NIK</label>
                            <input type="text" readonly id="fullName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="password">Email</label>
                            <input type="password" id="password" class="form-control">
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <label for="negara">Negara</label>
                            <input type="text" id="negara" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="province">Provinsi</label>
                            <input type="text" id="province" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="address">Alamat Lengkap</label>
                            <input type="text" id="address" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="phone">Nomor Handphone</label>
                            <div class="phone-input">
                                <img src="https://flagcdn.com/id.svg" alt="ID Flag">
                                <span>(+62)</span>
                                <input type="text" id="phone" class="form-control">
                            </div>
                        </div>
                    </div>
                </div>
                
                   
              
               
                <div class="form-buttons">
                   <a href="profile"> <button class="btn-back">Kembali</button></a>
                    <button type="submit" class="btn-save">Simpan</button>
                </div>
        </div>
        </form>
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

</body>


@endsection