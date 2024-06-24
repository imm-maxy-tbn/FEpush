<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/event/eventt.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">


    <style>
        /* Custom CSS for Responsiveness */
        .btn-blog,
        .btn-event {
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
        <div class="btn">
            <a href="/blog"><button class="btn-blog">Event Artikel</button></a>
            <a href="/event"><button class="btn-event">Event</button></a>
        </div>
        <div class="search-container mt-4">
            <input type="text" class="form-control" placeholder="cari disini" id="searchInput">
            <button onclick="searchBlog()"><i class="fas fa-search"></i></button>
        </div>
        <div class="row" id="blogContainer">
            <!-- Blog cards will be inserted here by JavaScript -->
        </div>
        <div class="pagination-container">
            <p>Halaman <span id="currentPage">1</span> dari 123</p>
        </div>
        <div class="subscribe-container d-flex flex-column align-items-center justify-content-center">
            <p>Jangan tertinggal artikel seputar gerakan berdampak!</p>
            <p class=" mt-2 mb-2"><strong>Langganan melalui e-mail sekarang GRATIS</strong></p>
            <div class="input-group mb-3 d-flex justify-content-center">
                <input type="text" class="form-control" placeholder="masukkan e-mail anda disini">
                <button class="btnn btn-primary" type="button"><i class="fas fa-envelope"></i></button>

            </div>
        </div>
    </div>

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
                        <a href="/"><li>HomePage</li></a>
                        <a href="bootcamp"><li>Bootcamp</li></a>
                        <a href="imm"><li>IMM</li></a>
                        <a href="#"><li>Comunity</li></a>
                        <a href="profile"><li>Profile</li></a>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
        integrity="sha512-mqKpeec0Hl6bZ7gTz04dVpW2uPtQ+rmJlKzUoeoaSY1Vp4iAAaYI+yMMYJqKQoJz4ygHji9m9ko96mMUpjMRZw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/blog-event/event.js') }}"></script>

    <script>
        const events = @json($events);

        document.addEventListener("DOMContentLoaded", function () {
            const eventContainer = document.getElementById("blogContainer");

            events.forEach((event) => {
                const eventCard = document.createElement("div");
                eventCard.className = "blog-card";
                eventCard.innerHTML = `
                    <a href="/event/${event.id}">
                        <div class="blog-image" style="background-image: url(${event.img});"></div>
                        <h3>${event.title}</h3>
                        <p>${event.description}</p>
                    </a>
                `;
                eventContainer.appendChild(eventCard);
            });

            document.getElementById("searchInput").addEventListener("input", searchBlog);
        });

        function searchBlog() {
            const input = document.getElementById("searchInput").value.toLowerCase();
            const eventCards = document.querySelectorAll(".blog-card");

            eventCards.forEach((card) => {
                const title = card.querySelector("h3").textContent.toLowerCase();
                const content = card.querySelector("p").textContent.toLowerCase();
                if (title.includes(input) || content.includes(input)) {
                    card.style.display = "block";
                } else {
                    card.style.display = "none";
                }
            });
        }
    </script>

</body>

</html>
