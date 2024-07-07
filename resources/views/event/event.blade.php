@extends('layouts.app-imm')
@section('title', 'Event')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body,
        html {
            font-family: "Roboto", sans-serif;
            height: 100%;
            padding-top: 30px;
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
        }

        .form-control {
            width: 60%;
        }

        .search-container input {
            padding: 10px;
            border: 2px solid #5940cb;
            border-radius: 5px 0 0 5px;
            font-size: 16px;
        }

        .search-container button {
            border: 2px solid #5940cb;
            border-left: none;
            padding: 5px 20px;
            background-color: #5940cb;
            border-radius: 0 5px 5px 0;
            cursor: pointer;
            color: #fff;
            font-size: 16px;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }

        .event-card {
            background: #4b00820f;
            color: #010101;
            padding: 20px;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: center;
            flex: 0 0 30%;
            /* Three columns for desktop */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .event-card a {
            text-decoration: none;
            color: inherit;
        }

        .event-card .event-image {
            height: 150px;
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .event-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            min-height: 3em;
        }

        .event-card p {
            font-size: 1rem;
            flex-grow: 1;
        }

        .pagination-container {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .pagination-container p {
            font-size: 16px;
        }

        .subscribe-container {
            background: #f0f0ff;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            margin-top: 30px;
        }

        .subscribe-container p {
            margin: 0;
            font-size: 1.2rem;
            color: #333;
        }

        @media only screen and (max-width: 992px) {
            .event-card {
                flex: 0 0 48%;
                /* Two columns for tablets */
            }
        }

        @media only screen and (max-width: 768px) {
            .event-card {
                flex: 0 0 90%;
                /* Full width for mobile */
                padding: 15px;
            }
        }
    </style>


@endsection

@section('content')

    <body>
        <div class="container mt-5">
            <h5 class="text-center mb-5" style="margin-top: 70px; margin-bottom: 70px">Temukan wawasan tentang dampak baru
                disini</h5>
            <div class="search-container">
                <input type="text" class="form-control" placeholder="Cari disini" id="searchInput">
                <button onclick="searchEvent()" class="btn-search"><i class="fas fa-search"></i></button>
            </div>
            <div class="row mt-5" id="eventContainer">
                <!-- Event cards will be inserted here by JavaScript -->
            </div>
            <p id="noEventsMessage" class="text-center mt-3" style="display: none;">Event tidak ditemukan</p>
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




        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
            integrity="sha512-mqKpeec0Hl6bZ7gTz04dVpW2uPtQ+rmJlKzUoeoaSY1Vp4iAAaYI+yMMYJqKQoJz4ygHji9m9ko96mMUpjMRZw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script>
            const backendUrl = @json($backendUrl);
            const events = @json($events);

            document.addEventListener("DOMContentLoaded", function() {
                const eventContainer = document.getElementById("eventContainer");

                events.forEach((event) => {
                    const eventCard = document.createElement("div");
                    eventCard.className = "event-card";
                    eventCard.innerHTML = `
                    <a href="/event/${event.id}" class="text-left">
                        <div class="event-image" style="background-image: url(${event.cover_img});"></div>
                        <h3>${event.title}</h3>
                        <p>${event.description}</p>
                    </a>
                `;
                    eventContainer.appendChild(eventCard);
                });

                document.getElementById("searchInput").addEventListener("input", searchEvent);
            });

            function searchEvent() {
                const input = document.getElementById("searchInput").value.toLowerCase();
                const eventCards = document.querySelectorAll(".event-card");
                const noEventsMessage = document.getElementById("noEventsMessage");
                let found = false;

                eventCards.forEach((card) => {
                    const title = card.querySelector("h3").textContent.toLowerCase();
                    const content = card.querySelector("p").textContent.toLowerCase();
                    if (title.includes(input) || content.includes(input)) {
                        card.style.display = "block";
                        found = true;
                    } else {
                        card.style.display = "none";
                    }
                });

                if (found) {
                    noEventsMessage.style.display = "none";
                } else {
                    noEventsMessage.style.display = "block";
                }
            }
        </script>
    </body>
@endsection
