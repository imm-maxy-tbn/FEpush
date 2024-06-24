<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <title>Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/event/eventt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Custom CSS for Responsiveness */
        .btn-blog, .btn-event {
            margin: 5px;
        }

        .search-container input {
            width: calc(100% - 50px);
            display: inline-block;
        }

        .search-container button {
            width: 40px;
        }

        .sosmed a {
            margin: 0 10px;
        }

        /* Footer adjustments */
        footer .row {
            margin-top: 20px;
        }

        /* Adjust layout for smaller screens */
        @media (max-width: 768px) {
            .navbar-brand {
                font-size: 1.5rem;
            }

            .navbar-nav .nav-link {
                font-size: 1rem;
            }

            .subscribe-container {
                text-align: center;
            }

            .footer {
                flex-direction: column;
                text-align: center;
            }

            .footer .row {
                flex-direction: column;
                gap: 20px;
            }
        }

        @media (max-width: 576px) {
            .input-group {
                flex-direction: column;
            }

            .input-group input {
                width: 100%;
                margin-bottom: 10px;
            }

            .input-group-append {
                width: 100%;
            }

            .input-group-append button {
                width: 100%;
            }
        }
    </style>
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
                    <li class="nav-item">
                        <a class="nav-link" href="welcome">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="myproject">My Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="homepage">My Company</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container mt-5">
        <div class="btn d-flex flex-wrap justify-content-center">
            <a href="/blog"><button class="btn btn-blog">Blog Artikel</button></a>
            <a href="/event"><button class="btn btn-event">Event</button></a>
        </div>
        <div class="search-container mt-4 d-flex justify-content-center">
            <input type="text" class="form-control" placeholder="cari disini" id="searchInput">
            <button onclick="searchBlog()"><i class="fas fa-search"></i></button>
        </div>
        <div class="row" id="blogContainer">
            <!-- Blog cards will be inserted here by JavaScript -->
        </div>
        <div class="pagination-container text-center mt-4">
            <p>Halaman <span id="currentPage">1</span> dari 123</p>
        </div>
        <div class="subscribe-container text-center mt-4">
            <p>Jangan tertinggal artikel seputar gerakan berdampak!</p>
            <p><strong>Langganan melalui e-mail sekarang GRATIS</strong></p>
            <div class="d-flex justify-content-center">
                <div class="input-group" style="max-width: 500px;">
                    <input type="text" class="form-control" placeholder="masukkan e-mail anda disini">
                    <div class="input-group-append">
                    <button class="btnn btn-primary" type="button"><i class="fas fa-envelope"></i></button>
                </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="container footer mt-5 d-flex justify-content-center align-items-center">
            <div class="row d-flex justify-content-center align-items-center w-100">
                <div class="col-md-4 d-flex flex-column" style="gap: 20px">
                    <h5 class="text-white text-left">IMM</h5>
                    <span class="span-footer text-left">Impact Measurement and Management<br> (TBN INDONESIA X MAXY ACADEMY)</span>
                </div>
                <div class="col-md-5 d-flex justify-content-center align-items-center">
                    <ul class="d-flex flex-wrap justify-content-center" style="gap: 30px">
                        <li><a href="">HomePage</a></li>
                        <li><a href="">Bootcamp</a></li>
                        <li><a href="">IMM</a></li>
                        <li><a href="">Community</a></li>
                        <li><a href="">Profile</a></li>
                    </ul>
                </div>
                <div class="col-md-3 d-flex flex-column justify-content-center" style="gap: 30px">
                    <span class="span-footer text-center">Sosial Media</span>
                    <div class="sosmed d-flex justify-content-center">
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-mqKpeec0Hl6bZ7gTz04dVpW2uPtQ+rmJlKzUoeoaSY1Vp4iAAaYI+yMMYJqKQoJz4ygHji9m9ko96mMUpjMRZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/blog-event/event.js') }}"></script>
</body>

</html>
