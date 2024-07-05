@extends('layouts.app-2fa')
@section('title', 'Verifikasi Diri')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm/verifikasidiri.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
    font-family: "Roboto", sans-serif;
}


/* Media query for responsiveness */

@media only screen and (max-width: 768px) {
    .brand-info,
    .footer-links,
    .social-media {
        flex-basis: 100%;
        /* Set width to 100% on small screens */
        text-align: center;
    }
    .footer {
        background-color: #5940cb;
        color: #ffffff;
        padding: 48px 0;
        text-align: center;
        position: fixed;
        bottom: 0;
        width: 100%;
        left: 0%;
        border-top-left-radius: 60px;
        border-top-right-radius: 60px;
        border-bottom-left-radius: 0;
        border-bottom-right-radius: 0;
        z-index: 1000;
    }
    .social-media {
        margin-right: auto;
        position: absolute;
        top: 29px;
        right: 23px;
    }
    .social-media a {
        color: #ffffff;
        text-decoration: none;
        font-size: 20px;
        margin-left: 10px;
    }
    .footer-nav ul {
        list-style-type: none;
        padding: 0px;
        margin: 0;
        position: absolute;
        top: 30px;
        right: 86px;
    }
}

.login-container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.login-form {
    width: 609px;
    padding: 10px;
    background-color: #ffffff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.login-form h2 {
    text-align: center;
    margin-bottom: 20px;
    right: -11px;
    position: relative;
}

table {
    width: 100%;
}

td {
    padding: 10px;
}

.input-icon {
    display: inline-block;
    width: 40px;
    text-align: center;
}

.input-icon i {
    font-size: 18px;
    line-height: 40px;
}

input[type="email"],
input[type="number"] {
    width: calc(100% - 40px);
    padding: 10px;
    border-radius: 5px;
    border: 1px solid #ccc;
}

.btn-login {
    width: 90%;
    padding: 10px;
    border: none;
    border-radius: 5px;
    background-color: #5940cb;
    color: #ffffff;
    font-size: 16px;
    cursor: pointer;
    transition: 0.3s;
    /* Menambahkan efek transisi untuk perubahan background */
}

.notification {
    display: none;
    /* Sembunyikan notifikasi secara default */
    background-color: #f2f2f2;
    color: #333;
    padding: 15px;
    margin-top: 20px;
    border-radius: 5px;
}
    </style>
@endsection
@section('content')


<body>

    <div class="login-container">
        <div class="login-form">
            <h2>Verifikasi Diri Anda</h2>
            <form id="verificationForm" method="POST" action="{{ route('send-otp') }}">
                @csrf
                <table>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-envelope"></i></span></td>
                        <td><input type="email" placeholder="Masukkan Email" id="email" name="email" required /></td>
                    </tr>
                    <tr>
                        <td><span class="input-icon"><i class="fas fa-phone"></i></span></td>
                        <td><input type="number" class="telepon" placeholder="Masukkan telepon" id="telepon" name="telepon" required /></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td><button class="btn-login" id="loginBtn" type="submit">Verifikasi</button></td>
                    </tr>
                </table>
                <div class="notification" id="notification"></div>
            </form>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/imm/sendOtp.js') }}"></script>

</body>

@endsection