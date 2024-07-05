@extends('layouts.app-2fa')
@section('title', 'IMM')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
    font-family: "Roboto", sans-serif;
}

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}


/* Navbar */

.content {
    display: flex;
    align-items: center;
    padding: 22px;
    position: relative;
    top: 130px;
}

.content-image {
    width: 50%;
    max-width: 400px;
    margin-right: 70px;
}

.btn {
    padding: 10px 130px;
    font-size: 16px;
    background-color: #5940cb;
    color: #ffffff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.btn:hover {
    background-color: #4834a9;
    color: #ffffff;
}


/* Media query for responsiveness */

@media only screen and (max-width: 768px) {
    .navbar-brand,
    .navbar-nav {
        margin: 0;
    }
    .navbar-links {
        flex-direction: column;
        margin-left: 0;
    }
    .navbar-links li {
        margin: 10px 0;
    }
    .footer {
        padding: 20px 0;
        width: 100%;
        left: 0;
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
    }
    .footer-container {
        padding: 20px;
    }
    .footer-content {
        flex-direction: column;
    }
    .brand-info,
    .footer-nav,
    .social-media {
        margin: 10px 0;
    }
    .footer-nav ul {
        flex-direction: column;
        align-items: center;
    }
    .footer-nav ul li {
        margin-bottom: 10px;
    }
    .content {
        flex-direction: column;
        align-items: center;
        padding: 10px;
        right: -1px;
        top: 67px;
    }
    .content-image {
        width: 100%;
        max-width: none;
        margin: 0;
    }
    .btn {
        padding: 10px 50px;
        width: 100%;
        text-align: center;
    }
}



@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}


/* Animasi umum untuk elemen lainnya */

.content-container h1,
.date-box,
.chart-container,
.analysis-matrix .content-box,
.target-check .target-check-box,
.icon-box .icon-item,
.btn {
    transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.content-container h1:hover,
.date-box:hover,
.chart-container:hover,
.analysis-matrix .content-box:hover,
.target-check .target-check-box:hover,
.icon-box .icon-item:hover,
.btn:hover {
    transform: scale(1.05);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}


/* Menambahkan transisi pada navbar */
</style>
@section('css')

@endsection
@section('content')


<body style="">
 
<div class="container content">
    <img src="images/6.png" alt="Your Image" class="content-image">
    <div class="content-text">
        <h1>Selamat Datang di IMM</h1>
        <!-- <p>IMM (Impact Mate) adalah platform yang...</p> -->
        <a href="verifikasidiri" class="btn">Mulai Sekarang</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/imm/imm.js') }}"></script>

</body>
@endsection