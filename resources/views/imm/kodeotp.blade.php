@extends('layouts.app-2fa')
@section('title', 'Kode OTP')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm3.css') }}">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- <script src="{{ asset('js/otp.js') }}" defer></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
    font-family: "Roboto", sans-serif;
}


/* Navbar */


/* Media query for responsiveness */

@media only screen and (max-width: 768px) {
    .navbar-links {
        flex-direction: column;
        margin-left: 0;
        align-items: center;
    }
    .navbar-links li {
        margin-bottom: 10px;
    }
    .footer {
        width: 100%;
        left: 0;
        border-top-left-radius: 60px;
        border-top-right-radius: 60px;
    }
    .footer-content {
        flex-direction: column;
        text-align: center;
    }
    .brand-info,
    .footer-links,
    .social-media {
        width: 100%;
        margin-bottom: 20px;
    }
    .footer-nav ul {
        position: static;
        display: flex;
        justify-content: center;
    }
    .footer-nav ul li {
        margin-right: 10px;
        margin-bottom: 10px;
    }
}

@media only screen and (max-width: 576px) {
    .footer-nav ul li {
        margin-right: 5px;
    }
    .brand-info h3 {
        font-size: 18px;
    }
    .brand-info p {
        font-size: 12px;
    }
    .footer-nav ul li a {
        font-size: 14px;
    }
    .social-media a {
        font-size: 18px;
    }
}

.container {
    max-width: 960px;
    margin-right: auto;
    margin-left: auto;
    padding-right: 15px;
    padding-left: 15px;
}

.mt-4 {
    margin-top: 1.5rem !important;
}

.row {
    display: flex;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
}

.col {
    flex-basis: 0;
    flex-grow: 1;
    max-width: 100%;
    position: relative;
    width: 100%;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 4px;
    top: 170px;
}

.text-center {
    text-align: center !important;
}

.font-weight-bold {
    font-weight: bold;
}

.verification-code {
    display: flex;
    justify-content: center;
    margin-bottom: 20px;
}

.verification-code input[type="number"] {
    width: 52px;
    height: 50px;
    font-size: 24px;
    text-align: center;
    margin: 0 5px;
    border-radius: 12px;
}

.verification-code input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
    margin: 0;
}

.btn-resend {
    background-color: #5940cb;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}


/* Efek loading */

#loading {
    position: fixed;
    width: 100%;
    height: 100%;
    background: #fff;
    z-index: 9999;
    display: flex;
    justify-content: center;
    align-items: center;
}

#loading img {
    width: 100px;
    /* Ukuran gambar loading */
    height: 100px;
    /* Ukuran gambar loading */
    animation: spin 1s linear infinite;
}

@keyframes spin {
    100% {
        transform: rotate(360deg);
    }
}
    </style>
@endsection
@section('content')


<body>

    <div class="container min-vh-100 d-flex flex-column justify-content-center">
        <div class="card mx-auto" style="max-width: 400px;">
            <div class="card-body">
                <h5 class="card-title text-center">Masukan Kode Verifikasi Anda</h5>
                <p class="card-text text-center text-muted">
                    Masukkan kode verifikasi. Cek email anda untuk menerima kode.
                </p>
                <form id="otp-form">
                    @csrf
               
                    <div class="form-group d-flex justify-content-between">
                        @for ($i = 0; $i < 6; $i++)
                            <input type="text" class="form-control text-center" name="otp_code[]" maxlength="1"
                                style="width: 50px;">
                        @endfor
                    </div>
                    <div id="error-message" class="text-danger text-center"></div>
                    <p class="text-center text-muted">Belum menerima kode? tunggu <span id="seconds-remaining">60</span>
                    </p>
                    <div class="text-center mb-3">
                        <button type="button" id="resend-otp" class="btn btn-link">Kirim ulang kode</button>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Verifikasi</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
   <script>
    document.addEventListener("DOMContentLoaded", function() {
    const inputs = document.querySelectorAll(".verification-code input");
    inputs.forEach((input, index) => {
        input.addEventListener("input", () => {
            if (input.value.length === 1 && index < inputs.length - 1) {
                inputs[index + 1].focus();
            }
        });

        input.addEventListener("keydown", (e) => {
            if (e.key === "Backspace" && index > 0 && !input.value) {
                inputs[index - 1].focus();
            }
        });
    });

    inputs[0].focus();

    // Countdown Timer
    let timeLeft = 60;
    const countdownElement = document.getElementById("countdown");

    const countdownInterval = setInterval(() => {
        if (timeLeft <= 0) {
            clearInterval(countdownInterval);
            countdownElement.textContent = "0:00";
        } else {
            timeLeft--;
            let minutes = Math.floor(timeLeft / 60);
            let seconds = timeLeft % 60;
            countdownElement.textContent = `${minutes}:${
                seconds < 10 ? "0" : ""
            }${seconds}`;
        }
    }, 1000);

    // Function to check if all verification code inputs are filled
    function checkVerificationCode() {
        let filled = true;
        inputs.forEach((input) => {
            if (input.value === "") {
                filled = false;
            }
        });
        return filled;
    }

    // Function to handle the resend button click
    document
        .querySelector(".btn-resend")
        .addEventListener("click", function() {
            // Implement here the logic to resend the verification code
            // For now, let's just reset the countdown timer to 1 minute
            timeLeft = 60;
            countdownElement.textContent = "1:00";
            clearInterval(countdownInterval);
            countdownInterval = setInterval(() => {
                if (timeLeft <= 0) {
                    clearInterval(countdownInterval);
                    countdownElement.textContent = "0:00";
                } else {
                    timeLeft--;
                    let minutes = Math.floor(timeLeft / 60);
                    let seconds = timeLeft % 60;
                    countdownElement.textContent = `${minutes}:${
                        seconds < 10 ? "0" : ""
                    }${seconds}`;
                }
            }, 1000);
            document.getElementById("notification").textContent =
                "Kode OTP berhasil dikirim ke WhatsApp Anda!";
        });

    inputs.forEach((input) => {
        input.addEventListener("input", function() {
            if (checkVerificationCode()) {
                document.getElementById("notification").textContent =
                    "Verifikasi berhasil!";
                // Implement here the redirection to the new page
                setTimeout(() => {
                    window.location.href = "pendaftaranperusahaan";
                }, 2000);
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function() {
    setTimeout(function() {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000);
});
   </script>

</body>

</html>