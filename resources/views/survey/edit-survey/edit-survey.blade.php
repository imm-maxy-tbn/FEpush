<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | Edit Survey</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" href="{{ asset('css/responden/edit-survey.css') }}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/responden/edit-survey.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>
        </div>
    </nav>

<<<<<<< HEAD
    <form action="{{ route('surveys.store') }}" method="POST">
        @csrf
        <div class="container content mt-5 mb-5">
            <div class="mb-2 mt-2">
                <input type="text" name="name" class="form-control" placeholder="Judul Survey anda"
                    style="border: none; background:transparent; font-size: 40px;font-weight: bold;" required>
            </div>

            <div class="row d-flex justify-content-between">
                <button type="submit" class="btn-simpan d-flex justify-content-around align-items-center">
                    <span class="text-white">Simpan Survey</span>
                    <img src="images/simpan-icon.png" width="29" height="auto" alt="">
                </button>
            </div>

            <div class="form-group" style="display: none;">
                <label for="accept-guest-entries">Accept Guest Entries</label>
                <input type="hidden" name="settings[accept-guest-entries]" id="accept-guest-entries" value="true"
                    class="form-control">
            </div>
            <div class="form-group" style="display: none;">
                <label for="limit-per-participant">Limit Per Participant</label>
                <input type="hidden" name="settings[limit-per-participant]" id="limit-per-participant"
                    class="form-control" value="-1">
            </div>

            {{-- <div id="sections-container">
                <!-- Sections will be added dynamically here -->
            </div> --}}

        </div>

        <div class="container mb-5" id="sections-container">

=======
    <div class="container content mt-5 mb-5">
        {{-- <div class="container">
            <label for="gambar" style="cursor: pointer;">
                <div class="sub-content d-flex justify-content-center align-items-center">
                    <img src="images/upload.png" width="42">
            </label>
            <input type="file" id="gambar" name="gambar" accept="image/*" style="display: none;">
        </div> --}}
        <div class="mb-2 mt-2">
            <input type="text" name="name" class="form-control" placeholder="Judul Survey anda"
                style="border: none; background:transparent; font-size: 40px;font-weight: bold;">
        </div>
        {{-- <div class="mb-2 mt-2">
            <textarea type="text" name="" class="form-control "
                style="font-size: 20px; border: none; background:transparent;" placeholder="Desksipsi survey anda"> Deskripsi Survey anda</textarea>
        </div> --}}
        <div class="form-group" style="display: none;">
            <label for="accept-guest-entries">Accept Guest Entries</label>
            <input type="hidden" name="settings[accept-guest-entries]" id="accept-guest-entries" value="true"
                class="form-control">
        </div>
        <div class="form-group" style="display: none;">
            <label for="limit-per-participant">Limit Per Participant</label>
            <input type="hidden" name="settings[limit-per-participant]" id="limit-per-participant" class="form-control"
                value="-1">
        </div>

        <div class="row d-flex justify-content-between">
            {{-- <button type="" class="btn-mulai">Mulai Survey</button>
            <button type="" class="btn-akhiri">Akhiri Survey</button>
            <button type="" class="btn-lihat d-flex justify-content-around align-items-center">
                <a href="responden" class="text-dark"><span>Lihat Survey</span></a>
                <img src="images/mata-icon.png" width="25" height="20" alt="">
            </button> --}}
            <button class="btn-simpan d-flex justify-content-around align-items-center">
                <a href="impact" class="text-white"><span>Simpan Survey</span></a>
                <img src="images/simpan-icon.png" width="29" height="auto" alt="">
            </button>
>>>>>>> 6727a490c701fb6c76a1b56899fa99c7d3590ec2
        </div>

        <div class="container d-flex justify-content-center mt-5">
            <span class="btn-tambah-bagian" id="add-section-btn">Tambah Bagian Survey +</span>
        </div>
    </form>


    <template id="section-template">
        <div class="section-group container content mt-5">
            <div class="container d-flex align-items-center justify-content-between">
                <span>
                    <div class="mb-2 mt-2">
                        <input type="text" name="sections[__INDEX__][name]" class="form-control section-number"
                            placeholder="Judul bagian"
                            style="border: none; background:transparent; font-size: 40px;font-weight: bold;" required>
                    </div>

                    {{-- <textarea name="sections[__INDEX__][description]" class="form-control"
                        style="font-size: 20px; border: none; background:transparent;" placeholder="Tambahkan Desksipsi"></textarea> --}}
                </span>
            </div>
            <div class="questions-container container mt-3"></div>
            <span>
                <button type="button" class="btn-tambah add-question ml-5">Tambah Pertanyaan</button>
            </span>
        </div>
    </template>

    <template id="question-template">
        <div class="form-group question-group">
            <span class="angka d-flex justify-content-center align-items-center mt-2 mb-1">__QUESTION_NUMBER__</span>
            <label for="question-content">Tambahkan pertanyaan</label>
            <input type="text" name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][content]"
                class="form-control mb-2" required>

            <label for="question-type">Tipe pertanyaan</label>
            <select name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][type]"
                class="form-control question-type mb-2" required>
                <option value="text">Text</option>
                <option value="number">Number</option>
                <option value="radio">Radio</option>
                <option value="multiselect">Multiselect</option>
                <option value="range">Range</option>
            </select>

            <input type="hidden" name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][rules]"
                class="form-control" value="">

            <div class="question-options-container mb-2">
                <label for="question-options">Opsi (untuk radio dan multiselect)</label>
                <input type="text" name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][options][0]"
                    class="form-control question-option mb-1" placeholder="Opsi 1" disabled>
                <input type="text" name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][options][1]"
                    class="form-control question-option mb-1" placeholder="Opsi 2" disabled>
                <input type="text" name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][options][2]"
                    class="form-control question-option mb-1" placeholder="Opsi 3" disabled>
                <input type="text" name="sections[__SECTION_INDEX__][questions][__QUESTION_INDEX__][options][3]"
                    class="form-control question-option mb-1" placeholder="Opsi 4" disabled>
            </div>
        </div>
    </template>


<<<<<<< HEAD
=======
    </div>


    <div class="container d-flex justify-content-center">
        <span class="btn-tambah-bagian" id="add-section-btn">Tambah Bagian Survey +</span>
    </div>
>>>>>>> 6727a490c701fb6c76a1b56899fa99c7d3590ec2
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
                        <a href="">
                            <li>HomePage</li>
                        </a>
                        <a href="">
                            <li>Bootcamp</li>
                        </a>
                        <a href="">
                            <li>IMM</li>
                        </a>
                        <a href="">
                            <li>Comunity</li>
                        </a>
                        <a href="">
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let sectionIndex = 0;

            function updateQuestionOptions(selectElement) {
                const type = selectElement.value;
                const formGroup = selectElement.closest('.form-group');
                const optionsContainer = formGroup.querySelector('.question-options-container');
                const optionsInputs = optionsContainer.querySelectorAll('.question-option');

                if (type === 'radio' || type === 'multiselect') {
                    optionsInputs.forEach(input => input.disabled = false);
                } else {
                    optionsInputs.forEach(input => {
                        input.disabled = true;
                        input.value = '';
                    });
                }
            }

            function addSection() {
                const sectionTemplate = document.getElementById('section-template').innerHTML;
                const container = document.getElementById('sections-container');
                const sectionHtml = sectionTemplate.replace(/__INDEX__/g, sectionIndex);
                container.insertAdjacentHTML('beforeend', sectionHtml);
                sectionIndex++;
            }

            function addQuestion(event) {
                const sectionGroup = event.target.closest('.section-group');
                const questionsContainer = sectionGroup.querySelector('.questions-container');
                const questionTemplate = document.getElementById('question-template').innerHTML;
                const sectionIndex = Array.from(sectionGroup.parentNode.children).indexOf(sectionGroup);
                const questionIndex = questionsContainer.querySelectorAll('.question-group').length;
                const questionNumber = `${sectionIndex + 1}.${questionIndex + 1}`;
                const questionHtml = questionTemplate
                    .replace(/__SECTION_INDEX__/g, sectionIndex)
                    .replace(/__QUESTION_INDEX__/g, questionIndex)
                    .replace(/__QUESTION_NUMBER__/g, questionNumber);
                questionsContainer.insertAdjacentHTML('beforeend', questionHtml);

                const newSelectElement = questionsContainer.querySelector(
                    `.question-group:last-child .question-type`);
                updateQuestionOptions(newSelectElement);
                newSelectElement.addEventListener('change', function() {
                    updateQuestionOptions(newSelectElement);
                });
            }

            document.getElementById('add-section-btn').addEventListener('click', addSection);

            document.addEventListener('click', function(event) {
                if (event.target.classList.contains('add-question')) {
                    addQuestion(event);
                }
            });

            document.addEventListener('change', function(event) {
                if (event.target.classList.contains('question-type')) {
                    updateQuestionOptions(event.target);
                }
            });

            // Initial setup if there are any existing sections (optional)
            // addSection(); // Uncomment this if you want to start with one section by default
        });
<<<<<<< HEAD
=======

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
>>>>>>> 6727a490c701fb6c76a1b56899fa99c7d3590ec2
    </script>
    <script src="{{ asset('js/imm/metrix.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>