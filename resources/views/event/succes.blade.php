@extends('layouts.app-navbar')
@section('title', 'Succes')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/event/event.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
@endsection
@section('content')


<body>


    <section class="banner" style="">
        <img src="images/bg-event.png" class="w-100 h-auto" alt="">
    </section>

    <div class="container content d-flex flex-column justify-content-center">
        <p class="text-center" style="font-size:32px; font-weight:500">Selamat Anda telah terdaftar! <br>
            pada event {{$event->title}}</p>


    </div>

    <div class="container content text-center">
       <p class=" text-dark" style="font-size: 20px">Anda akan segera kembali ke halaman utama. <a href="/event" class="text-dark" style="text-decoration: underline" > Klik disini jika kendala</a></p>
    </div>
   

<script>

</script>
</body>

@endsection