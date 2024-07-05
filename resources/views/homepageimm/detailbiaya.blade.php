@extends('layouts.app-imm')
@section('title', 'Detail Biaya')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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

@endsection
@section('content')


    <body>

        <div class="container" style="padding-top: 120px">
            <div class="row d-flex justify-content-between">
                <a href="{{ route('kelola-pengeluaran') }}">
                    <h4 class=" d-flex align-items-center"><strong style="font-size: 40px;">
                            <</strong> Detail penggunaan biaya proyek {{ $project->nama }}</h4>
                </a>
                <a href="{{ route('tambah.penggunaan.dana', ['project_id' => $project_id]) }}"><button
                        class="btn-tambahdana">Tambah Penggunaan Dana</button></a>
            </div>
            <h5>Detail Biaya</h5>
        </div>

        <div class="container">
            <table class="table tabel mt-3 text-center ">
                <thead>
                    <tr>
                        <th>Tanggal</th>
                        <th>Jumlah Biaya</th>
                        <th>Keterangan</th>
                        <th>Bukti</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($outcomes as $outcome)
                        <tr>
                            <td>{{ $outcome->date }}</td>
                            <td>Rp{{ number_format($outcome->jumlah_biaya, 0, ',', '.') }}</td>
                            <td>{{ $outcome->keterangan }}</td>
                            <td>
                                <span href="" data-toggle="modal" style="cursor: pointer"
                                    data-target="#notificationModal{{ $outcome->id }}">
                                    <img src="{{ asset('images/icon-bukti.svg') }}" alt="Bukti">
                                </span>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <!-- Modal for Each Outcome -->
        @foreach ($outcomes as $outcome)
            <div class="modal fade" id="notificationModal{{ $outcome->id }}" tabindex="-1"
                aria-labelledby="notificationModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content pb-4" style="height: 400px">
                        <div class="modal-header">
                            <h5 class="modal-title" id="notificationModalLabel">Bukti Pengeluaran</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ env('APP_BACKEND_URL') }}/images/{{ $outcome->bukti }}" alt="Bukti Pengeluaran"
                                class="img-fluid my-4">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach


        <script>
            < /body>

        @endsection
