@extends('layouts.app-navbar')
@section('title', 'Event Detail')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/event/event.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
@section('content')


<body>

   
    <section class="banner" style=""> <img src="{{ env('APP_BACKEND_URL') . '/images/' . $event->img }}"
            class="w-100 h-auto" alt=""></section>
    <div class="container content">
        <div class="container">
            <div class="row d-flex flex-column align-items-center justify-content-center text-center">
                <p class="" style="max-width: 701px; font-size:32px">{{ $event->description }}</p>
                @if (in_array(Auth::id(), $eventUsers))
                    <a href="/event-register/{{ $event->id }}"><button class="btn-daftar mt-4" disabled>Anda Telah
                            Terdaftar</button></a>
                @else
                    <a href="/event-register/{{ $event->id }}"><button class="btn-daftar mt-4">Daftar
                            Sekarang</button></a>
                @endif
            </div>
        </div>

    </div>
    <div class="container content d-flex flex-column justify-content-center">
        <p class="text-center" style="font-size:32px; font-weight:bold">Kegiatan Bootcamp</p>
        <div class="row d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/icon-workshop.png') }}" alt="">
                <span class="nama-kegiatan">Workshop dan Pelatihan</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/icon-diskusi.png') }}" alt="">
                <span class="nama-kegiatan">Panel
                    Diskusi</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/icon-mentor.png') }}" alt="">
                <span class="nama-kegiatan">Mentorship Session</span>
            </div>
        </div>
        <div class="row mt-4 d-flex justify-content-center align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/icon-networking.png') }}" alt="">
                <span class="nama-kegiatan">Networking Lunch</span>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 d-flex flex-column justify-content-center align-items-center">
                <img src="{{ asset('images/icon-pitching.png') }}" alt="">
                <span class="nama-kegiatan">Pitching Session</span>
            </div>
        </div>
    </div>

    <div class="container content">
        <div class="row">
            <div class="col-md-6">
                <p style="font-size:40px">Bergabunglah dalam Bootcamp yang <strong>Akan Mengubah Bisnis Anda</strong>
                </p>
                @if (in_array(Auth::id(), $eventUsers))
                    <a href="/event-register/{{ $event->id }}"><button class="btn-daftar mt-4" disabled>Anda Telah
                            Terdaftar</button></a>
                @else
                    <a href="/event-register/{{ $event->id }}"><button class="btn-daftar mt-4">Daftar
                            Sekarang</button></a>
                @endif
            </div>
            <div class="col-md-6">
                <div class="img-grid">
                    <img src="{{ asset('images/img1-event.png') }}" class="img-event" alt="Event Image 1">
                    <img src="{{ asset('images/img2-event.png') }}" class="img-event" alt="Event Image 2">
                    <img src="{{ asset('images/img3-event.png') }}" class="img-event" alt="Event Image 3">
                    <img src="{{ asset('images/img4-event.png') }}" class="img-event" alt="Event Image 4">
                </div>
            </div>
        </div>
    </div>


</body>


@endsection
