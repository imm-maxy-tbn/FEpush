@extends('layouts.app-imm')
@section('title', 'Tambah Penggunaan Dana')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        
<style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    text-decoration: none;
    list-style-type: none;
}

.tabel {
    background-color: #F7F6FB;
    border-radius: 5px;
}

.btn-unggah {
    width: 136px;
    height: 35px;
    background-color: #5940CB;
    color: white;
    border: none;
    border-radius: 5px;
}

.btn-tambah {
    width: 156px;
    height: 35px;
    background-color: #5940CB;
    color: white;
    border: none;
    border-radius: 5px;
}

.btn-tambahdana {
    width: 246px;
    height: 35px;
    background-color: #5940CB;
    color: white;
    border: none;
    border-radius: 5px;
}

.form-control {
    width: 298px;
}

.biaya {
    font-size: 24px;
}

a {
    color: black;
}

a:hover {
    color: black;
    text-decoration: none;
}

input[type="date"] {
    width: 274px;
}

input[type="number"] {
    width: 274px;
}

.upload-container input[type="file"] {
    display: none;
}

.upload-container button {
    margin-right: 10px;
    padding: 10px 20px;
    border: none;
    background-color: #007bff;
    color: white;
    cursor: pointer;
    border-radius: 5px;
}

.upload-container .file-name {
    font-size: 14px;
    color: #333;
}

.btn-keluar {
    width: 183px;
    height: 35px;
    background-color: white;
    border: 2px solid #5940cb;
    border-radius: 7px;
}

.btn-masuk {
    width: 183px;
    height: 35px;
    background-color: #5940cb;
    color: white;
    border: none;
    border-radius: 7px;
}

.modal-content {
    width: 699px;
    height: 253px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.modal-body {
    gap: 20px;
    margin: 0 51px;
    height: 100%;
    display: flex;
    align-items: start;
    justify-content: center;
    flex-direction: column;
}

.btnn {
    display: flex;
    align-content: center;
    justify-content: space-around;
    width: 100%;
}


/* Custom styles for the modal */

.modal-body {
    max-height: 700px;
    /* Adjust the height as needed */
    overflow-y: auto;
    ;
}

.list-group {
    display: flex;
    justify-content: center;
    width: 400px;
}

.list-group-item {
    display: flex;
    justify-content: center;
    font-size: 14px;
    /* Adjust the font size as needed */
}
</style>

    </style>

@endsection
@section('content')


    <body>

        <div class="container" style="padding-top: 120px">
            <a href="detail">
                <h4 class=" d-flex align-items-center"><strong style="font-size: 40px;">
                        <</strong> Unggah dokumen validitas</h4>
            </a>

        </div>

        <div class="container mt-5">
          
            <div class="row mt-4">
                <div class="col-3">
                    <h5>Jumlah Biaya</h5>
                </div>
                <div class="col-8"> <input type="text" name="" placeholder="namafile"></div>
            </div>
            
            <div class="row mt-4">
                <div class="col-3">
                    <h5>Upload Bukti</h5>
                </div>
                <div class="col-8"> <button class="btn-unggah" onclick="document.getElementById('file-input').click()">Unggah File</button>
                    <span class="file-name">Unggah bukti dalam bentuk .pdf (scan bukti pembayaran)</span>
                    <input type="file" id="file-input" onchange="updateFileName()" style="display: none">
                </div>
            </div>
        </div>
        <div class="container d-flex justify-content-center mt-5" >
           <button type="button" class=" btn-tambah px-3 "data-toggle="modal" data-target="#confirmationModal">  tambah Data</button>
        </div>
        <div class="modal fade" id="confirmationModal" tabindex="" aria-labelledby="confirmationModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content shadow ">
                   
                    <div class="modal-body">
                        <h5 class="modal-title" id="confirmationModalLabel">Apakah data sudah benar?</h5>
                        <span>
                            <strong>Note.</strong> Data yang anda tambahkan tidak bisa diubah kembali, pastikan sudah semua input data sudah benar</span>
                        <div class=" btnn">   <button type="button" class="btn btn-keluar" data-dismiss="modal">Belum, cek kembali</button>
                           <a href="/unggahdokumen"><button type="submit"   class="btn btn-masuk"  id="confirmUpdate">Ya, sudah benar</button></a> 
                         
                    
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            function updateFileName() {
                var input = document.getElementById('file-input');
                var fileName = input.files.length > 0 ? input.files[0].name : 'Tidak ada file yang dipilih';
                document.querySelector('.file-name').textContent = fileName;
            }
        </script>
        <script>

            
            </body>

        @endsection
