@extends('layouts.app-2fa   ')
@section('title', 'Verifikasi Diri')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/imm/verifikasidiri.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
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
                        <td><span class="otp"><i class="fas fa-envelope"></i></span></td>
                        <td><input type="email" placeholder="Masukkan Email" id="email" name="email" required /></td>
                    </tr>
                    <tr>
                        <td>
                        <td><button class="btn-login" id="loginBtn" type="submit">Verifikasi</button></td>
                        </td>
                    </tr>
                </table>
                <!-- <div class="notification" id="notification"></div> -->
            </form>
        </div>
    </div>




    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/imm/sendOtp.js') }}"></script>

</body>

</html>
