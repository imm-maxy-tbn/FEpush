<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | @yield('title')</title>
    <!-- CSS Umum -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS Khusus Halaman -->
    @yield('css')
    <style>

.navbar {
        background-color: #ffffff;
        color: #000000;
        padding: 15px 0;
        position: fixed;
        top: 0;
        right: 0;
        left: 0;
        z-index: 1000;
        border-bottom: 3px solid #5940cb;
    }

    .nav-item {
        margin-right: 10px; /* Adjust margin between nav items */
    }

    .navbar-brand {
        font-size: 20px; /* Adjust navbar brand font size */
        font-weight: bold; /* Make navbar brand text bold */
    }

    .nav-link,
    .navbar-button {
        color: #000000;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .nav-link:hover,
    .navbar-button:hover {
        background-color: #f0f0f0; /* Light grey background on hover */
    }

    .navbar-button.active,
.nav-link.active {
    background-color: #5940cb;
    color: #ffffff !important; /* Important to override existing color */
}

    .navbar-toggler {
        border: none; /* Remove border from toggler button */
    }

    .navbar-actions {
        margin-left: auto; /* Push login/register buttons to the right */
    }

    .btn {
        margin-left: 10px; /* Adjust margin between login/register buttons */
    }




        .footer {
    background-color: #5940cb;
    color: #ffffff;
    height: 167px;
    text-align: center;
    border-top-left-radius: 40px;
    border-top-right-radius: 40px;
    width: 100%;
}

.footer ul {
    text-decoration: none;
    list-style-type: none;
}

.footer ul li {
    color: #fff;
    font-size: 12px;
}

.span-footer {
    font-size: 15px;
    font-weight: bold;
    color: #fff;
}

.sosmed {
    gap: 15px;
}

.sosmed a {
    color: #fff;
    gap: 30px;
    margin: 0 10px;
}

.col-footer {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
    </style>


</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/welcome">
            <img src="images/logo-imm.svg" width="100" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('homepage') ? 'active' : '' }}" href="homepage">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('myproject') ? 'active' : '' }}" href="myproject">My Project</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile-commpany') ? 'active' : '' }}" href="profile-commpany">Profile Company</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

        @yield('content')

        <footer>
            <div class="container footer mt-5 d-flex justify-content-center align-items-center  ">
                <div class="row d-flex  justify-content-center align-items-center">
                    <div class="col-4 d-flex flex-column" style="gap: 20px">
                        <h5 class=" text-white  text-left">IMM</h5>
                        <span class="span-footer text-left">Impact Measurement and Management
                                <br> (TBN INDONESIA X MAXY ACADEMY)</span>
                    </div>
                    <div class="col-5 d-flex justify-content-center align-items-center">
                        <ul class=" d-flex " style="gap: 30px">
                            <a href=""><li>HomePage</li></a>
                            <a href=""><li>Bootcamp</li></a>
                            <a href=""><li>IMM</li></a>
                            <a href=""><li>Comunity</li></a>
                            <a href=""><li>Profile</li></a>
                        </ul>
                    </div>
                    <div class="col-3 d-flex flex-column justify-content-center" style="gap: 30px">
                        <span class="span-footer text-center">Sosial Media</span>
                        <div class="sosmed d-flex justify-content-end  ">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
        
         </div>
        </footer>
  
        <script>
            $(document).ready(function() {
    $('.navbar-button').click(function() {
        $('.navbar-button').removeClass('active');
        $(this).addClass('active');
    });
});

        </script>
</html>