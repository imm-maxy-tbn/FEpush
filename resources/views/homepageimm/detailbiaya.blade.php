@extends('layouts.app-imm')
@section('title', 'Detail Biaya')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/homepageimm/kelolapengeluaran.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    
@endsection
@section('content')


<body>

    <div class="container" style="padding-top: 120px"> 
       <div class="row d-flex justify-content-between"><a href="kelolapengeluaran"> <h4 class=" d-flex align-items-center"><strong style="font-size: 40px;"><</strong>   Detail penggunaan biaya proyek ramah anak</h4></a>
       <a href="{{ route('tambah.penggunaan.dana', ['project_id' => $project_id]) }}"><button class="btn-tambahdana">Tambah Penggunaan Dana</button></a>
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
                      <span href="" data-toggle="modal" style="cursor: pointer" data-target="#notificationModal{{ $outcome->id }}">
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
    <div class="modal fade" id="notificationModal{{ $outcome->id }}" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable">
            <div class="modal-content pb-4" style="height: 400px">
                <div class="modal-header">
                    <h5 class="modal-title" id="notificationModalLabel">Bukti Pengeluaran</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="{{ env('APP_BACKEND_URL') }}/images/{{ $outcome->bukti }}" alt="Bukti Pengeluaran" class="img-fluid my-4">
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
     
</body>

@endsection
