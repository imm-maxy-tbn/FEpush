<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/responden/edit-survey.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>


     
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
    </div>
</nav>

<div class="container content mt-5 mb-5">
    <div class="container">
        <div class="sub-content"></div> 
        <p style="font-size: 40px;font-weight: bold;">Judul Survey anda</p>
        <p style="font-size: 20px">Survey ini bertujuan untuk mengevaluasi dampak bisnis ternak lele Deskripsi survey anda.</p>

        <div class="row d-flex justify-content-between">
            <button class="btn-mulai">Mulai Survey</button>
            <button class="btn-akhiri">Akhiri Survey</button>
            <button class="btn-lihat d-flex justify-content-around align-items-center">
                <span>Lihat Survey</span> 
                <img src="images/mata-icon.png" width="25" height="20" alt="">
            </button>
            <button class="btn-simpan d-flex justify-content-around align-items-center">
                <span>Simpan Survey</span>
                <img src="images/simpan-icon.png" width="29" height="auto" alt="">
            </button>
        </div>
    </div>
</div>

<div class="container content mt-5">
    <div class="container d-flex align-items-center justify-content-between">
        <span>
            <p style="font-size: 40px;font-weight: bold;">Bagian 1</p>
            <p style="font-size: 20px">Tambahkan deskripsi</p>
        </span>
        <span>
            <select id="projectSelect" class="form-control-select">
          
                <option value="Teks Isian">Teks Isian</option>
                <option value="Pilihan Ganda">Pilihan Ganda</option>
                <option value="Skala">Skala</option>
            </select>
        </span>
    </div>
</div>

<div class="container content mt-5">
    <div class="container">
        <div id="form-container">
            <div class="form-esay" id="form-esay" style="display: none;">
                <div class="row d-flex align-items-center">
                    <span class="angka d-flex justify-content-center align-items-center">
                        1
                    </span>
                    <div class="mb-4 mt-4">
                        <label for="nama_depan_1" class="form-label">Tambahkan pertanyaan</label>
                        <input type="text" id="nama_depan_1" class="form-control" placeholder="Isi disini">
                    </div>
                </div>
            </div>

            <div class="form-pilihan-ganda" id="form-pilihan-ganda" style="display: none;">
                <div class="row d-flex" style="gap: 45px">
                    <span class="angka d-flex justify-content-center align-items-center">
                        1
                    </span>
                    <div class="mb-4 d-flex flex-column">
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios" id="optionsRadios1" value="option1" checked="">Lorem ipsum 
                        </label>
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios" id="optionsRadios2" value="option2" checked="">Lorem ipsum 
                        </label>
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios" id="optionsRadios3" value="option3" checked="">Lorem ipsum 
                        </label>
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios" id="optionsRadios4" value="option4" checked="">Lorem ipsum 
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-skala" id="form-skala" style="display: none;">
                <div class="row d-flex" style="gap: 45px">
                    <span class="angka d-flex justify-content-center align-items-center">
                        1
                    </span>
                    <div class="row d-flex flex-column">
                        <label>Lorem ipsum dolor sit amet consectetur adipiscing elit, mus eu faucibus dui platea libero ?</label>
                        <div class="mb-5 d-flex" style="gap: 125px">
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                <label for="optionsRadios1">1</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                <label for="optionsRadios2">2</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
                                <label for="optionsRadios3">3</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios" id="optionsRadios4" value="option4">
                                <label for="optionsRadios4">4</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios" id="optionsRadios5" value="option5">
                                <label for="optionsRadios5">5</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end mt-4">
            <button class="btn-tambah hidden" id="add-question-btn">Tambah Pertanyaan</button>
        </div>
    </div>

</div>
<div class="container content mt-5" id="bagian-container">
    <div class="container d-flex justify-content-center">
        <span class="btn-tambah-bagian" id="add-section-btn">Tambah Bagian Survey +</span>
    </div>
</div>
<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="brand-info">
                <h3>IMM</h3>
                <p>(TBN INDONESIA X MAXY ACADEMY)</p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Bootcamp</a></li>
                        <li><a href="#">IMM</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="social-media">
                    <p class="footer-social-media">Social Media</p>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    let questionCount = 1;

    

    document.getElementById('projectSelect').addEventListener('change', function() {
        const addButton = document.getElementById('add-question-btn');
        addButton.classList.remove('hidden');
    });

    document.getElementById('projectSelect').addEventListener('change', function() {

 
        
        let formEsay = document.getElementById('form-esay');
        let formPilihanGanda = document.getElementById('form-pilihan-ganda');
        let formSkala = document.getElementById('form-skala');
        formEsay.style.display = 'none';
        formPilihanGanda.style.display = 'none';
        formSkala.style.display = 'none';

        if (this.value === 'Teks Isian') {
            formEsay.style.display = 'block';
        } else if (this.value === 'Pilihan Ganda') {
            formPilihanGanda.style.display = 'block';
        } else if (this.value === 'Skala') {
            formSkala.style.display = 'block';
        }
    });

    document.getElementById('add-question-btn').addEventListener('click', function() {
        const selectedFormType = document.getElementById('projectSelect').value;

        if (selectedFormType === 'none') {
            alert('Pilih jenis form terlebih dahulu!');
            return;
        }

        questionCount++;
        const formContainer = document.getElementById('form-container');

        if (selectedFormType === 'Teks Isian') {
            const newForm = document.createElement('div');
            newForm.classList.add('form-esay');
            newForm.innerHTML = `
                <div class="row d-flex align-items-center">
                    <span class="angka d-flex justify-content-center align-items-center">
                        ${questionCount}
                    </span>
                    <div class="mb-4 mt-4">
                        <label for="nama_depan_${questionCount}" class="form-label">Tambahkan pertanyaan</label>
                        <input type="text" id="nama_depan_${questionCount}" class="form-control" placeholder="Isi disini">
                    </div>
                </div>
            `;
            formContainer.appendChild(newForm);
        } else if (selectedFormType === 'Pilihan Ganda') {
            const newForm = document.createElement('div');
            newForm.classList.add('form-pilihan-ganda');
            newForm.innerHTML = `
                <div class="row d-flex" style="gap: 45px">
                    <span class="angka d-flex justify-content-center align-items-center">
                        ${questionCount}
                    </span>
                    <div class="mb-4 d-flex flex-column">
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios_${questionCount}" value="option1" checked="">Lorem ipsum 
                        </label>
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios_${questionCount}" value="option2" checked="">Lorem ipsum 
                        </label>
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios_${questionCount}" value="option3" checked="">Lorem ipsum 
                        </label>
                        <label>
                            <input type="radio" class="mb-3" name="optionsRadios_${questionCount}" value="option4" checked="">Lorem ipsum 
                        </label>
                    </div>
                </div>
            `;
            formContainer.appendChild(newForm);
        } else if (selectedFormType === 'Skala') {
            const newForm = document.createElement('div');
            newForm.classList.add('form-skala');
            newForm.innerHTML = `
                <div class="row d-flex" style="gap: 45px">
                    <span class="angka d-flex justify-content-center align-items-center">
                        ${questionCount}
                    </span>
                    <div class="row d-flex flex-column">
                        <label>Lorem ipsum dolor sit amet consectetur adipiscing elit, mus eu faucibus dui platea libero ?</label>
                        <div class="mb-5 d-flex" style="gap: 125px">
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios_${questionCount}" value="option1" checked>
                                <label for="optionsRadios_${questionCount}">1</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios_${questionCount}" value="option2">
                                <label for="optionsRadios_${questionCount}">2</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios_${questionCount}" value="option3">
                                <label for="optionsRadios_${questionCount}">3</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios_${questionCount}" value="option4">
                                <label for="optionsRadios_${questionCount}">4</label>
                            </div>
                            <div class="radio-item">
                                <input type="radio" name="optionsRadios_${questionCount}" value="option5">
                                <label for="optionsRadios_${questionCount}">5</label>
                            </div>
                        </div>
                    </div>
                </div>
            `;
            formContainer.appendChild(newForm);
            addButton.style.display = 'block';
        }
    });
</script>
<script src="{{ asset('js/imm/metrix.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
