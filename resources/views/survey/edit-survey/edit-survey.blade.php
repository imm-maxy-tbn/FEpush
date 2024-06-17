<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/responden/edit-survey.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap");
        @import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap");

        body {
            font-family: "Roboto", sans-serif;
            padding-top: 70px;
            padding-bottom: 140px;
            /* Add padding to avoid content being hidden behind fixed navbar */
            background-color: #ffffff;
            font-family: "Quicksand", sans-serif;
        }

        .navbar {
            background-color: #ffffff;
            color: #000000;
            padding: 15px 0;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            z-index: 1000;
            border-bottom: 3px solid #5940cb;
        }

        .navbar-nav {
            margin-left: 10px;
            margin-right: auto;
        }

        .navbar-links {
            list-style-type: none;
            display: flex;
            margin-left: -580px;
        }

        .navbar-links li {
            margin-right: 20px;
        }

        .navbar-links li:last-child {
            margin-right: 0;
        }

        .navbar-links a {
            color: inherit;
            text-decoration: none;
        }

        .navbar-links a:hover {
            text-decoration: underline;
        }

        .navbar-actions {
            display: flex;
            margin-right: 20px;
        }

        .footer {
            background-color: #5940cb;
            color: #ffffff;
            padding: 48px 0;
            text-align: center;
            position: fixed;
            bottom: 0;
            width: 80%;
            left: 10%;
            border-top-left-radius: 40px;
            border-top-right-radius: 40px;
            z-index: 1000;
        }

        .footer-container {
            max-width: 594px;
            margin: 0 auto;
        }

        .content {
            background-color: #f7f6fb;
            border-radius: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 50px;
            text-align: justify;
            /* Add some space between each section */
        }

        .form-control-select {
            width: 315px;
            height: 49px;
            background-color: #5940cb;
            color: white;
            font-size: 20px;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
        }

        .form-control {
            height: 47px;
            width: 702px;
            border: 2px solid #5940cb;
        }

        .btn-tambah-bagian {
            cursor: pointer;
            color: white;
            background-color: #5940cb;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 32px;
            font-family: "Quicksand", sans-serif;
            font-weight: bold;
        }

        .btn-tambah {
            width: 315px;
            height: 49px;
            background-color: #5940cb;
            border: 3px solid #5940cb;
            border-radius: 6px;
            color: white;
            font-size: 20px;
            font-family: "Quicksand", sans-serif;
            font-weight: bold;
        }

        .form-esay,
        .form-pilihan-ganda,
        .form-skala {
            padding: 20px;
            border-radius: 5px;
        }

        .radio-item {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .radio-item input {
            margin-bottom: 5px;
        }

        .btn-tambah.hidden {
            display: none;
        }

        .angka {
            height: 54px;
            width: 35px;
            background-color: #5940cb;
            font-size: 20px;
            font-family: "Poppins", sans-serif;
            font-weight: 500;
            color: white;
        }

        .radio-item {
            display: flex;
            align-items: center;
        }

        .radio-item input[type="radio"] {
            margin-right: 5px;
        }

        .form-container {
            display: flex;
            flex-wrap: wrap;
        }

        .form-container>div {
            flex: 1 1 30%;
            /* Adjust the percentage as needed to control the width */
            margin: 10px;
        }

        .btn {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .btn-lihat {
            width: 226px;
            height: 49px;
            background-color: white;
            border: 3px solid #5940cb;
            border-radius: 6px;
            color: #5940cb;
            font-size: 20px;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
        }

        .btn-mulai,
        .btn-akhiri {
            width: 379px;
            height: 49px;
            background-color: #5940cb;
            border: 3px solid #5940cb;
            border-radius: 6px;
            color: white;
            font-size: 20px;
            font-family: "Poppins", sans-serif;
            font-weight: bold;
        }

        .btn-simpan {
            width: 240px;
            height: 49px;
            background-color: #5940cb;
            border: 3px solid #5940cb;
            border-radius: 6px;
            color: white;
            font-size: 20px;
            font-family: "Quicksand", sans-serif;
            font-weight: bold;
            margin-top: 55px;
        }


        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .brand-info h3 {
            margin: 0;
            font-size: 20px;
            position: absolute;
            right: 860px;
            top: 20px;
        }

        .brand-info p {
            margin-top: 5px;
            font-size: 14px;
            position: absolute;
            top: 50px;
            right: 750px;
        }

        .footer-links {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .footer-nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            position: absolute;
            top: 40px;
            right: 280px;
        }

        .footer-nav ul li {
            display: inline-block;
            margin-right: 20px;
        }

        .footer-nav ul li:last-child {
            margin-right: 0;
        }

        .footer-nav ul li a {
            color: #ffffff;
            text-decoration: none;
            font-size: 16px;
        }

        .footer-nav ul li a:hover {
            text-decoration: underline;
        }

        .social-media {
            margin-right: auto;
            position: absolute;
            top: 29px;
            right: 23px;
        }

        .social-media a {
            color: #ffffff;
            text-decoration: none;
            font-size: 20px;
            margin-left: 10px;
        }

        .footer-description {
            margin-top: 20px;
            font-size: 14px;
        }

        .footer-social-media {
            margin-bottom: -10px;
            /* Jarak antara teks Social Media dan ikon */
            position: relative;
            top: -19px;
            right: -5px;
        }

        .metric-item:hover {
            filter: brightness(0.95);
        }

        .metric-checkbox {
            width: 20px;
            height: 20px;
        }

        .text-primary {
            color: #5940cb !important;
        }

        .sub-content {
            background-color: #e5e2f2;
            width: 100%;
            height: 182px;
            justify-content: center;
            display: flex;
            margin-bottom: 30px;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>
        </div>
    </nav>

    <div class="container content mt-5 mb-5">
        <div class="container"><label for="gambar" style="cursor: pointer;">
                <div class="sub-content d-flex justify-content-center align-items-center">


                    <img src="images/upload.png" width="42">
            </label>

            <input type="file" id="gambar" name="gambar" accept="image/*" style="display: none;">


        </div>
        <div class="mb-2 mt-2">
            <input type="text" name="" class="form-control" placeholder="Judul Survey anda"
                style="border: none; background:transparent; font-size: 40px;font-weight: bold;">
        </div>
        <div class="mb-2 mt-2">
            <textarea type="text" name="" class="form-control "
                style="font-size: 20px; border: none; background:transparent;" placeholder="Desksipsi survey anda"> Deskripsi Survey anda</textarea>
        </div>


        <div class="row d-flex justify-content-between">
            <button type="" class="btn-mulai">Mulai Survey</button>
            <button type="" class="btn-akhiri">Akhiri Survey</button>
            <button type="" class="btn-lihat d-flex justify-content-around align-items-center">
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

    <template id="section-template">
        <div class="container content mt-5">
            <div class="container  d-flex align-items-center justify-content-between">
                <span>
                    <div class="mb-2 mt-2">
                        <input type="text" name="" class="form-control section-number" placeholder="Bagian"
                            style="border: none; background:transparent; font-size: 40px;font-weight: bold;">
                    </div>

                    <textarea type="text" name="" class="form-control "
                        style="font-size: 20px; border: none; background:transparent;" placeholder="Tambahkan Desksipsi"> Deskripsi Survey anda</textarea>
                </span>
                <span>
                    <select class="form-control-select projectSelect">
                        <option value="Pilih disini">Pilih disini</option>
                        <option value="Teks Isian">Teks Isian</option>
                        <option value="Pilihan Ganda">Pilihan Ganda</option>
                        <option value="Skala">Skala</option>
                    </select>
                </span>
            </div>
            <div class="container">
                <div class="form-container"></div>
                <div class="d-flex justify-content-end mt-4">
                    <button class="btn-tambah hidden add-question-btn">Tambah Pertanyaan</button>
                </div>
            </div>
        </div>
    </template>

    <div class="container   mb-5" id="bagian-container">

    </div>


    <div class="container d-flex justify-content-center">
        <span class="btn-tambah-bagian" id="add-section-btn">Tambah Bagian Survey +</span>
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

        document.getElementById('add-section-btn').addEventListener('click', function() {
            const container = document.getElementById('bagian-container');
            const template = document.getElementById('section-template');
            const newSection = template.content.cloneNode(true);

            const sectionNumber = container.querySelectorAll('.container.content').length + 1;
            newSection.querySelector('.section-number').textContent = sectionNumber;

            const projectSelect = newSection.querySelector('.projectSelect');
            const addButton = newSection.querySelector('.add-question-btn');
            const formContainer = newSection.querySelector('.form-container');

            projectSelect.addEventListener('change', function() {
                addButton.classList.remove('hidden');
                clearFormContainer(formContainer);

                if (this.value === 'Teks Isian') {
                    showForm(formContainer, 'Teks Isian');
                } else if (this.value === 'Pilihan Ganda') {
                    showForm(formContainer, 'Pilihan Ganda');
                } else if (this.value === 'Skala') {
                    showForm(formContainer, 'Skala');
                }
            });

            addButton.addEventListener('click', function() {
                const selectedFormType = projectSelect.value;
                if (selectedFormType === 'Pilih disini') {
                    alert('Pilih jenis form terlebih dahulu!');
                    return;
                }
                addQuestion(formContainer, selectedFormType);
            });

            container.appendChild(newSection);
        });

        function clearFormContainer(container) {
            container.innerHTML = '';
        }

        function showForm(container, formType) {
            let form;
            if (formType === 'Teks Isian') {
                form = getEssayFormHtml(1);
            } else if (formType === 'Pilihan Ganda') {
                form = getMultipleChoiceFormHtml(1);
            } else if (formType === 'Skala') {
                form = getScaleFormHtml(1);
            }
            container.innerHTML = form;
        }

        function addQuestion(container, formType) {
            questionCount++;
            let newForm;
            if (formType === 'Teks Isian') {
                newForm = getEssayFormHtml(questionCount);
            } else if (formType === 'Pilihan Ganda') {
                newForm = getMultipleChoiceFormHtml(questionCount);
            } else if (formType === 'Skala') {
                newForm = getScaleFormHtml(questionCount);
            }
            container.innerHTML += newForm;
        }

        function getEssayFormHtml(questionNumber) {
            return `
    <div class="form-esay">
       <div class="row d-flex" style="gap: 45px">
            <span class="angka d-flex justify-content-center align-items-center">${questionNumber}</span>
            <div class="mb-2 ">
                <label for="nama_depan_${questionNumber}" class="form-label">Tambahkan pertanyaan</label>
                <input type="text" id="nama_depan_${questionNumber}" class="form-control" placeholder="Isi disini">
            </div>
        </div>
    </div>`;
        }

        function getMultipleChoiceFormHtml(questionNumber) {
            return `
    <div class="form-pilihan-ganda">
        <div class="row d-flex" style="gap: 45px">
            <span class="angka d-flex justify-content-center align-items-center">${questionNumber}</span>
            <div class="mb-2 d-flex flex-column">
                                  <input type="text" name="" class="form-control" placeholder="Tambahkan Pertanyaan"
                    style="border: none; background:transparent; font-size: 20px;">
                <label>
                    <input type="radio" class="mb-3" name="optionsRadios_${questionNumber}" value="option1" checked=""><input type="text" name="" class="" placeholder="Isi jawaban disini"
                    style="border: none; background:transparent; font-size: 5px;">
                </label>
                <label>
                    <input type="radio" class="mb-3" name="optionsRadios_${questionNumber}" value="option2"><input type="text" name="" class="" placeholder="Isi jawaban disini"
                    style="border: none; background:transparent; font-size: 5px;"> 
                </label>
                <label>
                    <input type="radio" class="mb-3" name="optionsRadios_${questionNumber}" value="option3"><input type="text" name="" class="" placeholder="Isi jawaban disini"
                    style="border: none; background:transparent; font-size: 5px;">
                <label>
                    <input type="radio" class="mb-3" name="optionsRadios_${questionNumber}" value="option4"><input type="text" name="" class="" placeholder="Isi jawaban disini"
                    style="border: none; background:transparent; font-size: 5px;"> 
                </label>
            </div>
        </div>
    </div>`;
        }

        function getScaleFormHtml(questionNumber) {
            return `
    <div class="form-skala">
        <div class="row d-flex" style="gap: 45px">
            <span class="angka d-flex justify-content-center align-items-center">${questionNumber}</span>
            <div class="row d-flex flex-column">
                  <input type="text" name="" class="form-control" placeholder="Tambahkan Pertanyaan"
                    style="border: none; background:transparent; font-size: 20px;">
                <div class="mb-2 d-flex" style="gap: 125px">
                    <div class="radio-item">
                        <input type="radio" name="optionsRadios_${questionNumber}" value="option1" checked>
                        <label for="optionsRadios_${questionNumber}">1</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" name="optionsRadios_${questionNumber}" value="option2">
                        <label for="optionsRadios_${questionNumber}">2</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" name="optionsRadios_${questionNumber}" value="option3">
                        <label for="optionsRadios_${questionNumber}">3</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" name="optionsRadios_${questionNumber}" value="option4">
                        <label for="optionsRadios_${questionNumber}">4</label>
                    </div>
                    <div class="radio-item">
                        <input type="radio" name="optionsRadios_${questionNumber}" value="option5">
                        <label for="optionsRadios_${questionNumber}">5</label>
                    </div>
                </div>
            </div>
        </div>
    </div>`;
        }
    </script>
    <script src="{{ asset('js/imm/metrix.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
