<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/homepageimm/repotbulanan.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="homepage">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>

    <div class="container mt-5 mb-5">
        <a class="navbar-brand" href="laporanproject"><i class="fas fa-arrow-left"></i> Laporan Project Bulan Pertama</a>
        <h1>Laporan Project Bulan Pertama</h1>
        <form id="laporanForm">
            <div class="form-group">
                <textarea class="form-control" rows="5"
                    placeholder="Bulan Juni 2024 merupakan bulan yang produktif bagi organisasi kami dengan berbagai kegiatan yang berfokus pada peningkatan dampak sosial dan lingkungan. Berikut adalah rangkuman aktivitas yang telah dilakukan:"></textarea>
            </div>

            <div id="notification" class="mt-3"></div>
        </form>
    </div>

    <div id="report-container"></div>

    <template id="report-template">
        <div class="container report">
            <h5 class="text-left">Activity/Program</h5>
            <div class="container d-flex flex-column align-items-center">
                <div class="container mx-5">
                    <div class="section d-flex align-items-center my-4">
                        <div class="number">
                            1
                        </div>
                        <span class="" style="font-size: 24; font-weight:500">Masukkan nama aktivitas/program</span>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control berita" rows="3" placeholder="Berita acara kegiatan"></textarea>
                    </div>
                    <div class="section d-flex align-items-center justify-content-between">
                        <span style="font-size: 20px; font-weight:500">Jumlah peserta aktivitas/program</span>
                        <input type="text" class="text-orang form-control" placeholder="Isi jumlah orang" name="" id="">
                    </div>
                    <div class="section d-flex mt-3 align-items-center justify-content-between">
                        <span style="font-size: 20px; font-weight:500">Unggah dokumentasi aktivitas/program</span>
                        <div>
                            <label>
                                <div class="unggah">
                                    Unggah
                                </div>
                                <input type="file" class="gambar" name="gambar" accept="image/*" style="display: none;" multiple>
                            </label>
                        </div>
                    </div>
                    <div class="preview-container d-flex flex-wrap"></div>
                </div>
            </div>
        </div>
    </template>

    <div class="container tombol mt-5 mb-5">
        <div class="section d-flex tombol justify-content-center flex-column align-items-center">
            <button type="button" class="btntambah w-75" onclick="addReport()">Tambahkan Activity/Program</button>
          <a href="homepage"><button type="submit" class=" btn-primary w-75 mt-3">Simpan Laporan</a></button>
        </div>
    </div>

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
                        <a href=""><li>HomePage</li></a>
                        <a href=""><li>Bootcamp</li></a>
                        <a href=""><li>IMM</li></a>
                        <a href=""><li>Comunity</li></a>
                        <a href=""><li>Profile</li></a>
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
</body>

</html>
