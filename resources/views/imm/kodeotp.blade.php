@extends('layouts.app-2fa')
@section('title', 'Kode OTP')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm/kodeotp.css') }}">
    <script src="{{ asset('js/otp.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
@endsection
@section('content')


<body>

 

    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h3 class="font-weight-bold">Masukan Kode Verifikasi</h3>
                <p>Cek WhatsApp Anda untuk menerima kode verifikasi.</p>
                <div class="verification-code">
                    <input type="number" id="digit1" maxlength="1" />
                    <input type="number" id="digit2" maxlength="1" />
                    <input type="number" id="digit3" maxlength="1" />
                    <input type="number" id="digit4" maxlength="1" />
                    <input type="number" id="digit5" maxlength="1" />
                </div>
                <p>Belum menerima kode? Tunggu <span id="countdown">1:00</span> menit.</p>
                <button class="btn-resend">Kirim ulang kode</button>
                <a href="berhasilverif"><button class="btn-resend" id="verifyOtpBtn">Verifikasi</button></a>
            </div>
        </div>
    </div>
    
 

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/imm/verificationOtp.js') }}"></script>

</body>

@endsection