<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm3.css') }}">
    <script src="{{ asset('js/otp.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#">Bootcamp</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="#">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profile</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <div class="row">
            <div class="col text-center">
                <h3 class="font-weight-bold">Masukan Kode Verifikasi</h3>
                <p>Cek email Anda untuk menerima kode verifikasi.</p>
                <form id="verificationForm" method="POST" action="{{ route('verify-code') }}">
                    @csrf
                    <div class="verification-code">
                        <input type="text" id="digit1" maxlength="1" />
                        <input type="text" id="digit2" maxlength="1" />
                        <input type="text" id="digit3" maxlength="1" />
                        <input type="text" id="digit4" maxlength="1" />
                        <input type="text" id="digit5" maxlength="1" />
                    </div>
                    <input type="hidden" id="email" name="email" value="{{ $email }}" />
                    <button class="btn-resend" type="button" id="resendBtn">Kirim ulang kode</button>
                    <button id="verifyOtpBtn" type="submit">Verifikasi</button>
                </form>
                <p>Belum menerima kode? Tunggu <span id="countdown">1:00</span> menit.</p>
            </div>
        </div>
    </div>




    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <div class="brand-info">
                    <h3>IMM</h3>
                    <p>(TBN INDONESIA X MAXY ACADEMY)</p>
                </div>
                <div class="footer-links">
                    <div class="footer-nav">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Bootcamp</a></li>
                            <li><a href="#">IMM</a></li>
                            <li><a href="#">Community</a></li>
                            <li><a href="#">Profile</a></li>
                        </ul>
                    </div>
                    <div class="social-media">
                        <p class="footer-social-media">Social Media</p>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/imm3.js') }}"></script>
    <script>
        document.getElementById('verificationForm').addEventListener('submit', function(event) {
            event.preventDefault();

            var email = document.getElementById('email').value;
            var code = document.getElementById('digit1').value +
                document.getElementById('digit2').value +
                document.getElementById('digit3').value +
                document.getElementById('digit4').value +
                document.getElementById('digit5').value +
                document.getElementById('digit6').value;

            $.ajax({
                url: '{{ route('verify-code') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email,
                    code: code
                },
                success: function(response) {
                    if (response.success) {
                        alert('Verification successful!');
                    } else {
                        alert('Verification failed. Please try again.');
                    }
                },
                error: function() {
                    alert('An error occurred. Please try again.');
                }
            });
        });
    </script>
</body>

</html>
