@extends('layouts.app-imm')
@section('title', '')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection
@section('content')

    <body>

        <div class="container">
            <div class="section-video">
                <video src=""></video>
            </div>
        </div>

        <div class="container5 section-ukur d-flex justify-content-center">
            <div class="section-content1">
                <h5 id="title">Ukur dampak anda dengan <strong>percaya diri</strong></h5>
                <button class=" btn-mulai">Mulai Sekarang</button>
            </div>
        </div>

        <div class="container section-data">
            <div class="row">
                <div class="col-4 text-center mt-5">
                    <img src="/images/icon-realtem.svg" width="80" height="78" alt="">
                    <h5>Data Real-time</h5>
                    <span>Lacak dampak anda secara real-time dengan analitik yang tepat</span>
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="/images/icon-realtem.svg" width="80" height="78" alt="">
                    <h5>Strategi Keterlibatan </h5>
                    <span>Sesuaikan strategi keterlibatan untuk kebutuhan organisasi anda</span>
                </div>
                <div class="col-4 text-center mt-5">
                    <img src="/images/icon-realtem.svg" width="80" height="78" alt="">
                    <h5>Laporan Komprehensif</h5>
                    <span>Hasilkan laporan komprehensif untuk menunjukkan dampak anda</span>
                </div>
            </div>
        </div>

        <div class="container section-sdgs">
            <div class="row d-flex justify-content-center align-items-center w-100">
                <div class="col-6 d-flex justify-content-center">
                    <h5 id="sdgs">Pengukuran dengan <br>
                        <strong>17 Sustainable <br>Development Goals</strong>
                    </h5>
                </div>

                <div class="col-6">
                    <div class="row section-sdgs">
                        <div class="col-2"><img src="/images/E-WEB-Goal-1.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-2.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-3.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-4.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-5.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-6.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-7.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-8.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-9.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-10.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-11.png" width="97" alt=""></div>
                        <div class="col-2"><img src="/images/E-WEB-Goal-12.png" width="97" alt=""></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container bagaimana ">
            <h5 class="text-center text-content m-5">Bagaimana caranya?</h5>
            <div class="row d-flex justify-content-center">
                <div class="col-3 d-flex align-items-start">
                    <img src="/images/bulat.svg"  alt="">
                    <div class="text ml-3">
                        <h5 class="mb-3"><strong>Definisikan tujuan dampak anda</strong></h5>
                        <p>Tentukan tujuan dengan tag dampak dan 17 point SDGs</p>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start">
                    <img src="/images/bulat.svg"  alt="">
                    <div class="text ml-3">
                        <h5 class="mb-3"><strong>Atur Metrik anda</strong></h5>
                        <p>Pilihan metrik yang beragam sesuai dengan kebutuhan dampak organisasi</p>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start">
                    <img src="/images/bulat.svg"  alt="">
                    <div class="text ml-3">
                        <h5 class="mb-3"><strong>Kumpulkan dan analisa data</strong></h5>
                        <p>Didukung dengan fitur survey dan visualisasi data</p>
                    </div>
                </div>
                <div class="col-3 d-flex align-items-start">
                    <img src="/images/bulat.svg"  alt="">
                    <div class="text ml-3">
                        <h5 class="mb-3"><strong>Hasilkan laporan</strong></h5>
                        <p>Dokumentasi dampak anda dalam bentuk laporan komprehensif</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </body>






@endsection
