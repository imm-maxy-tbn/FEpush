@extends('layouts.app-imm')
@section('title', 'Artikel')

@section('css')<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/blog/blogarticle.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
@endsection
@section('content')

<body>
 

    <div class="container mt-5">
                <div class="back-link">
            <a href="/blog"><i class="fas fa-arrow-left mr-4"></i> Artikel</a>
        </div>
    </div>

    <div class="blog-detail mt-4">
        <h1 class="blog-title">{{ $post->title }}</h1>
        <p class="blog-author">Penulis: {{ $post->user->full_name }}</p>
        <p class="blog-date">{{ $post->created_at->format('d F Y') }}</p>
        <img src="{{ env('APP_BACKEND_URL') . '/images/' . $post->img }}" alt="Blog Image" class="img-fluid my-4">
        <div class="content text-justify">{!! $post->content !!}</div>
    </div>

    <div class="container mt-4">
        <div class="subscribe-container">
            <p>Jangan tertinggal artikel seputar gerakan berdampak!</p>
            <p><strong>Langganan melalui e-mail sekarang GRATIS</strong></p>
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="masukkan e-mail anda disini">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="button"><i class="fas fa-envelope"></i></button>
                </div>
            </div>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-mqKpeec0Hl6bZ7gTz04dVpW2uPtQ+rmJlKzUoeoaSY1Vp4iAAaYI+yMMYJqKQoJz4ygHji9m9ko96mMUpjMRZw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>

</body>
@endsection
