<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Profile Commpany</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/profile/profile-commpany.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage">IMM</a>
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
                        <a class="nav-link" href="/profile-commpany">My Company</a>
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


<div class="container ">
    <div class="mx-5">
        <h4>My Company</h4>
    </div>
    <!-- content form -->
    <div class="container "  >
        <form method="POST" action="{{ route('profile-company.update', ['id' => $company->id]) }}">
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
                                <label for="nama-depan" class="">Nama Depan</label>
                                <input type="text" name="nama_depan" id="nama-depan" class="form-control" placeholder="First Name" aria-label="First name" value="{{$user->nama_depan}}">
                            </div>
                            <div class="col">
                                <label for="nama-belakang" class="">Last Name</label>
                                <input type="text" name="nama_belakang" id="nama-belakang" class="form-control" placeholder="Last name" aria-label="Last name" value="{{$user->nama_belakang}}">  
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
        
                        <button type="submit" class="btn btn-primary">Update</button>
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
        <div class="row my-3 mx-5 justify-content-center align-items-center " style="gap: 50px">
            <div class="row border border-dark rounded px-5 py-1 flex align-items-center">
                <span>Exit</span>
                <div class="mx-2"></div>
                <img src="images/icon-exit.svg" height="20" width="20" alt="Exit Icon">
            </div>
            <div class="row border border-dark rounded px-5 py-1 flex align-items-center">
                <button type="submit">Simpan
                <div class="mx-2"></div>
                <img src="images/icon-exit.svg" height="20" width="20" alt="Exit Icon"></button>
            </div>
            
        </div>
        </div>
    </section>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>


    <footer>
        <div class="container footer mt-5 d-flex justify-content-center align-items-center  ">
            <div class="row d-flex  justify-content-center align-items-center">
                <div class="col-4 d-flex flex-column" style="gap: 20px">
                    <h5 class=" text-white  text-left">IMM</h5>
                    <span class="span-footer text-left">Impact Measurement and Management
                        <br> (TBN INDONESIA X MAXY ACADEMY)</span>
                </div>
                <div class="col-5 d-flex justify-content-center align-items-center">
                    <ul class=" d-flex " style="gap: 30px">
                        <a href="/">
                            <li>HomePage</li>
                        </a>
                        <a href="bootcamp">
                            <li>Bootcamp</li>
                        </a>
                        <a href="imm">
                            <li>IMM</li>
                        </a>
                        <a href="#">
                            <li>Comunity</li>
                        </a>
                        <a href="profile">
                            <li>Profile</li>
                        </a>
                    </ul>
                </div>
                <div class="col-3 d-flex flex-column justify-content-center" style="gap: 30px">
                    <span class="span-footer text-center">Sosial Media</span>
                    <div class="sosmed d-flex justify-content-end  ">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </footer>



    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
<script>
    let reportCount = 1;

    function addReport() {
        const template = document.getElementById('report-template').content.cloneNode(true);
        const reportContainer = document.getElementById('report-container');

        // Update the number in the new report container
        template.querySelector('.number').textContent = reportCount;

        // Add event listener to the new file input
        const fileInput = template.querySelector('.gambar');
        fileInput.addEventListener('change', previewImages);

        reportCount++;
        reportContainer.appendChild(template);
    }

    function previewImages(event) {
        const files = event.target.files;
        const container = event.target.closest('.report');
        const previewContainer = container.querySelector('.preview-container');

        // Loop through each file and add a preview
        Array.from(files).forEach((file) => {
            const reader = new FileReader();

            reader.onload = function() {
                const previewDiv = document.createElement('div');
                previewDiv.className = 'preview';

                const img = document.createElement('img');
                img.src = reader.result;

                const fileName = document.createElement('p');
                fileName.textContent = file.name;

                const removeBtn = document.createElement('button');
                removeBtn.innerHTML = 'X';
                removeBtn.className = 'remove-btn';
                removeBtn.onclick = function() {
                    previewDiv.remove();
                };

                previewDiv.appendChild(img);
                previewDiv.appendChild(fileName);
                previewDiv.appendChild(removeBtn);
                previewContainer.appendChild(previewDiv);
            };

            reader.readAsDataURL(file);
        });
    }
</script>

</html>
