@extends('layouts.app')
@section('title', 'Daftar')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        body {
            font-family: "Roboto", sans-serif;
        }


        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        .btn {
            display: inline-block;
            padding: 8px 16px;
            border-radius: 12px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }


        .register-container {
            background-color: #fff;
            padding: 20px;
            width: 727px;
            margin: 0 auto;
            margin-top: 80px;
        }

        .register-container {
            background-color: #fff;

            width: 727px;
            margin: 0 auto;
            margin-top: 50px
        }

        .register-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .register-form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .brand-logo {
            width: 137px;
            margin-bottom: 20px;
        }

        .brand-logo {
            width: 137px;

        }

        .register-form h2 {
            margin-bottom: 20px;
            font-size: 26px;
            color: #000000;
            font-weight: bold;
        }

        .register-form h2 {

            font-size: 26px;
            color: #000000;
            font-weight: bold;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;
            margin-bottom: 15px;
        }

        .form-row {
            display: flex;
            justify-content: space-between;
            width: 100%;

        }

        .form-group {
            display: flex;
            flex-direction: column;
            width: 48%;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            width: 48%;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 2px;
            color: #000000;
        }

        .form-group label {
            font-weight: bold;
            margin-bottom: 2px;
            color: #000000;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f9fa;
            font-size: 16px;
        }

        .form-group input,
        .form-group select {
            width: 100%;
            padding: 6px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f8f9fa;
            font-size: 16px;
        }

        .btn-register {
            padding: 10px 20px;
            background-color: #6c63ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            margin-top: 20px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-register {
            padding: 10px 20px;
            background-color: #6c63ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn-register:hover {
            background-color: #524eff;
            transform: scale(1.05);
        }

        .btn-register:hover {
            background-color: #524eff;
            transform: scale(1.05);
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
            color: #000000;
        }

        .login-link {
            margin-top: 15px;
            font-size: 14px;
            color: #000000;
        }

        .login-link a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a {
            color: #000000;
            text-decoration: none;
            font-weight: bold;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        .login-link a:hover {
            text-decoration: underline;
        }

        /* Media query for responsiveness */
        @media (max-width: 768px) {
            .navbar {
                position: relative;
            }

            /* Media query for responsiveness */
            @media (max-width: 768px) {

                body {
                    padding-top: 20px;
                }

                .navbar {
                    position: relative;
                }

                .navbar-links {
                    flex-direction: column;
                    margin-left: 0;
                    margin-top: 10px;
                }

                .navbar-links {
                    flex-direction: column;
                    margin-left: 0;
                    margin-top: 10px;
                }

                .navbar-links li {
                    margin: 10px 0;
                }

                .navbar-links li {
                    margin: 10px 0;
                }

                .navbar-actions {
                    flex-direction: column;
                    margin-right: 0;
                    margin-top: 10px;
                }

                .navbar-actions {
                    flex-direction: column;
                    margin-right: 0;
                    margin-top: 10px;
                }

                .btn {
                    width: 100%;
                    text-align: center;
                    margin: 5px 0;
                }

                .btn {
                    width: 100%;
                    text-align: center;
                    margin: 5px 0;
                }

                .register-container {
                    width: 100%;
                    padding: 10px;
                    top: auto;
                    right: auto;
                    margin-top: 70px;
                }

                .register-container {

                    width: 100%;
                    padding: 10px;


                }

                .brand-logo {
                    width: 100px;
                    position: relative;
                    top: 0;
                    right: 0;
                    margin-top: 20px;
                }

                .brand-logo {
                    width: 100px;
                    position: relative;
                    top: 0;
                    right: 0;

                }

                .register-form h2 {
                    font-size: 22px;
                    position: relative;
                    top: 0;
                    right: 0;
                    text-align: center;
                }

                .register-form h2 {
                    font-size: 22px;
                    position: relative;
                    top: 0;
                    right: 0;
                    text-align: center;
                }

                .form-row {
                    flex-direction: column;
                    width: 100%;
                }

                .form-row {
                    flex-direction: column;
                    width: 100%;
                }

                .form-group {
                    width: 100%;
                    margin-bottom: 10px;
                }

                .form-group {
                    width: 100%;

                }

                .form-group label {
                    font-size: 14px;
                }

                .form-group label {
                    font-size: 14px;
                }

                .form-group input,
                .form-group select {
                    font-size: 14px;
                    padding: 10px;
                }

                .form-group input,
                .form-group select {
                    font-size: 14px;
                    padding: 10px;
                }

                .btn-register {
                    font-size: 14px;
                    padding: 10px;
                }

                .btn-register {
                    font-size: 14px;
                    padding: 10px;
                }

                .login-link {
                    font-size: 12px;
                    text-align: center;
                }
            }

            .login-link {
                font-size: 12px;
                text-align: center;
            }
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
            top: 5px;
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
            top: 5px;
        }

        #loading img {
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }

        #loading img {
            width: 100px;
            height: 100px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            100% {
                transform: rotate(360deg);
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
    </style>
@endsection

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <body>
        <div class="container">
            <div class="register-container">
                <form method="POST" action="{{ route('register') }}" id="registerForm">
                    @csrf
                    <div class="register-form">
                        <img src="images/imm.png" alt="Brand Logo" class="brand-logo">
                        <h2>Daftarkan akun</h2>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="fullName">Nama Lengkap</label>
                                <input type="text" id="fullName" name="nama" placeholder="Nama lengkap" required />
                            </div>
                            <div class="form-group">
                                <label for="country">Negara</label>
                                <select id="country" name="negara" required>
                                    <option value="">Pilih Negara</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="nik">NIK</label>
                                <input type="number" id="nik" name="nik" placeholder="NIK (16 digit)" required
                                    minlength="16" maxlength="16" />
                            </div>
                            <div class="form-group">
                                <label for="province">Provinsi</label>
                                <select id="province" name="provinsi" required>
                                    <option value="">Pilih Provinsi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" placeholder="email@gmail.com"
                                    required />
                            </div>
                            <div class="form-group">
                                <label for="address">Alamat Lengkap</label>
                                <input type="text" id="address" name="alamat" placeholder="Alamat lengkap" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" id="password" name="password" placeholder="password" required
                                    minlength="8" />
                            </div>
                            <div class="form-group">
                                <label for="phone">Nomor Telepon</label>
                                <input type="number" id="phone" name="telepon" placeholder="0812345678" required />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label for="confirmPassword">Konfirmasi Password</label>
                                <input type="password" id="confirmPassword" name="password_confirmation"
                                    placeholder="Konfirmasi password" required />
                            </div>
                        </div>
                        <button class="btn-register" type="submit" id="simpanBtn">Daftarkan akun</button>
                        <div class="login-link">Sudah punya akun? <a href="login">Masuk</a></div>
                    </div>
                </form>
            </div>
        </div>

        <!-- SweetAlert2 Library -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            // Function to validate form and show SweetAlert2 popups
            function validateForm(event) {
                event.preventDefault(); // Prevent form submission initially

                const password = document.getElementById('password').value;
                const confirmPassword = document.getElementById('confirmPassword').value;
                const nik = document.getElementById('nik').value;

                if (password.length < 8) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Password minimal 8 karakter.',
                    });
                    return;
                }

                if (password !== confirmPassword) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Password dan konfirmasi password tidak sama.',
                    });
                    return;
                }

                if (nik.length !== 16) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'NIK harus 16 digit.',
                    });
                    return;
                }

                Swal.fire({
                    title: 'Konfirmasi',
                    text: 'Pastikan NIK dan Email benar karena tidak bisa di edit nantinya.',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, simpan!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('registerForm').submit();
                        return false;
                    }
                });
            }

            document.getElementById('registerForm').addEventListener('submit', validateForm);

            // Handle server-side validation errors
            @if ($errors->any())
                let errorMessage = '';
                @foreach ($errors->all() as $error)
                    errorMessage += '{{ $error }}\n';
                @endforeach
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                });
            @endif
        </script>
        <script>
            const apiKey = 'YOUR_API_KEY_HERE'; // Replace with your actual API key
            const countrySelect = document.getElementById('country');
            const provinceSelect = document.getElementById('province');

            // Fetch countries
            fetch('https://api.countrystatecity.in/v1/countries', {
                    headers: {
                        'X-CSCAPI-KEY': apiKey
                    }
                })
                .then(response => response.json())
                .then(countries => {
                    countries.forEach(country => {
                        const option = document.createElement('option');
                        option.value = country.iso2;
                        option.textContent = country.name;
                        countrySelect.appendChild(option);
                    });
                })
                .catch(error => console.error('Error fetching countries:', error));

            // Fetch states/provinces when a country is selected
            countrySelect.addEventListener('change', function() {
                const selectedCountry = this.value;
                provinceSelect.innerHTML = '<option value="">Pilih Provinsi</option>'; // Reset provinces

                if (selectedCountry) {
                    fetch(`https://api.countrystatecity.in/v1/countries/${selectedCountry}/states`, {
                            headers: {
                                'X-CSCAPI-KEY': apiKey
                            }
                        })
                        .then(response => response.json())
                        .then(states => {
                            states.forEach(state => {
                                const option = document.createElement('option');
                                option.value = state.iso2;
                                option.textContent = state.name;
                                provinceSelect.appendChild(option);
                            });
                        })
                        .catch(error => console.error('Error fetching states:', error));
                }
            });

            function showLoading(select) {
                select.disabled = true;
                select.innerHTML = '<option>Loading...</option>';
            }

            function hideLoading(select) {
                select.disabled = false;
            }

            function showError(select, message) {
                select.innerHTML = `<option>${message}</option>`;
            }

            // Fetch countries
            showLoading(countrySelect);
            fetch('https://api.countrystatecity.in/v1/countries', {
                    headers: {
                        'X-CSCAPI-KEY': apiKey
                    }
                })
                .then(response => {
                    if (!response.ok) throw new Error('Network response was not ok');
                    return response.json();
                })
                .then(countries => {
                    hideLoading(countrySelect);
                    countrySelect.innerHTML = '<option value="">Pilih Negara</option>';
                    countries.forEach(country => {
                        const option = document.createElement('option');
                        option.value = country.iso2;
                        option.textContent = country.name;
                        countrySelect.appendChild(option);
                    });
                })
                .catch(error => {
                    console.error('Error fetching countries:', error);
                    showError(countrySelect, 'Error loading countries');
                });

            // Fetch states/provinces when a country is selected
            countrySelect.addEventListener('change', function() {
                const selectedCountry = this.value;
                showLoading(provinceSelect);

                if (selectedCountry) {
                    fetch(`https://api.countrystatecity.in/v1/countries/${selectedCountry}/states`, {
                            headers: {
                                'X-CSCAPI-KEY': apiKey
                            }
                        })
                        .then(response => {
                            if (!response.ok) throw new Error('Network response was not ok');
                            return response.json();
                        })
                        .then(states => {
                            hideLoading(provinceSelect);
                            provinceSelect.innerHTML = '<option value="">Pilih Provinsi</option>';
                            states.forEach(state => {
                                const option = document.createElement('option');
                                option.value = state.iso2;
                                option.textContent = state.name;
                                provinceSelect.appendChild(option);
                            });
                        })
                        .catch(error => {
                            console.error('Error fetching states:', error);
                            showError(provinceSelect, 'Error loading provinces');
                        });
                } else {
                    provinceSelect.innerHTML = '<option value="">Pilih Provinsi</option>';
                }
            });
        </script>
    </body>

    </html>
@endsection
