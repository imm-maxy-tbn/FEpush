<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | @yield('title')</title>
    <link rel="icon" href="/images/imm.png" type="image/png">
    <!-- CSS Umum -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- CSS Khusus Halaman -->
    @yield('css')
    <style>

@import url("https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Quicksand:wght@300..700&display=swap");

*{
    font-family: "Poppins", sans-serif;
    text-decoration: none;
    list-style-type: none;
}
.navbar {
        background-color: #ffffff;
        color: #000000;
        padding: 10px 0;
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
    .navbar .dropdown-menu {
            background-color: #6a0dad;
            border: none;
        }

        .navbar .dropdown-menu .dropdown-item {
            color: #fff;
        }

        .navbar .dropdown-menu .dropdown-item:hover {
            background-color: #4b0082;
        }

        .navbar .profile-img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }
    .nav-link,
    .navbar-button {
        color: #000000;
        text-decoration: none;
        padding: 10px 15px;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }



    .navbar-button.active,
.nav-link.active {
    background-color: #000000;
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

.btn-masukk,.btn-daftarr{
    width: 115px;
    height: 40px;
    display: flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    
}

.btn-masukk{
    background-color: #5940cb;
    color: white;
    font-size: 20px;
    font-weight: 500;
    border-radius:9px;
}

.btn-masukk a:hover{
    color: white
}
.btn-daftarr{
    background-color: transparent;
    color: #5940cb;
    font-size: 20px;
    font-weight: 500;
    border-radius:9px;
    border: 3px solid #5940cb;
}

.buton{
    gap: 10px
}
    </style>


</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/home">
        <img src="images/imm.png" width="100" height="55" alt=""></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a  class="nav-link {{ Request::is('/home') ? 'active' : '' }}" href="/home">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/homepage') ? 'active' : '' }}" href="/homepage">Proyek Saya</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/event') ? 'active' : '' }}" href="/event">Event</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('/blog') ? 'active' : '' }}" href="/blog">Artikel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('profile-commpany') ? 'active' : '' }}" href="{{ route('profile-commpany') }}">Perusahaan Saya</a>
                </li>
            </ul> 
            <!-- User is logged in -->
      
            <!-- User is not logged in -->
            <div class=" buton d-flex justify-content-center align-items-center">
                {{-- <a href="{{ route('login') }}"><button  class=" btn-masukk">Masuk</button></a>
                <a href="{{ route('register') }}"><button class=" btn-daftarr">Daftar</button></a> --}}

                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="btn btn-masukk" href="{{ route('login') }}">Masuk</a>
                            </li>
                            <li class="nav-item">
                                <a class="btn btn-daftarr" href="{{ route('register') }}">Daftar</a>
                            </li>
                        @endguest
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <img src="https://via.placeholder.com/40" alt="Profile Picture" class="profile-img">
                                    <span class="ml-2">{{ Auth::user()->nama_depan }}</span>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="{{ route('profile') }}">Profil Saya</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" class="dropdown-item">
                                            <i class="fas fa-sign-out-alt"></i> Log Out</button>
                                    </form>
                                </div>
                            </li>
                        @endauth
                    </ul>
                </div>
     

        </div>
    </div>
</nav>


        @yield('content')

        <footer>
            <div class="container footer mt-5 d-flex justify-content-center align-items-center  ">
           
                    <div class="col-4 d-flex flex-column" style="gap: 20px">
                        <a class=" d-flex justify-content-start" href="/home">
                            <img src="images/imm.png" width="100" height="55" alt=""></a>
                        <span class="span-footer text-left">Impact Measurement and Management
                                <br> (TBN INDONESIA X MAXY ACADEMY)</span>
                    </div>
                    <div class="col-6 d-flex justify-content-center align-items-center">
                        <ul class=" d-flex " style="gap: 15px">
                            <a href=""><li>Beranda</li></a>
                            <a href=""><li>Proyek Saya</li></a>
                            <a href=""><li>Event</li></a>
                            <a href=""><li>Artikel</li></a>
                            <a href=""><li>Perusahaan Saya</li></a>
                        </ul>
                    </div>
                    <div class="col-2 d-flex flex-column justify-content-center" style="gap: 30px">
                        <span class="span-footer text-center">Sosial Media</span>
                        <div class="sosmed d-flex justify-content-end  ">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
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