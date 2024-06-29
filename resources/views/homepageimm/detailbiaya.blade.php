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
       <a href="tambahpenggunaandana"><button class="btn-tambahdana">Tambah Penggunaan Dana</button></a>
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
           
              
                <tr>
          <td>2024/05/25</td>
          <td>Rp 150.000</td>
          <td>Pembelian barang habis pakai
            Kertas HVS A4 (5 rim)
            Tinta printer Epson L100
            Bolpoin AE7 (1 lusin)</td>
          <td><span href="" data-toggle="modal" style="cursor: pointer" data-target="#notificationModal"><img src="/images/icon-bukti.svg" alt=""></span></td>
       
                </tr>
          
            </tbody>
        </table>
    </div>

    <!-- Trigger Button for Scrollable Modal -->

  
  <!-- Scrollable Modal -->
  <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-scrollable">
      <div class="modal-content pb-4" style="height: 400px">
        <div class="modal-header">
          <h5 class="modal-title" id="notificationModalLabel">Notifications</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
         
        </div>
      </div>
    </div>
  </div>

   

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
     
</body>

@endsection