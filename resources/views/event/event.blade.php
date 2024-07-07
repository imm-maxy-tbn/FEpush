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

        .btn-ungu{
            background-color: #5940cb;
            color:white;
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
        .btn:hover{
            color: white;
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
    <div class="container mt-5" >
        <h5 class="text-center mb-5"  style="margin-top: 70px; margin-bottom: 70px">Temukan wawasan tentang dampak baru disini</h5>
        <div class="search-container">
            <input type="text" class="form-control" placeholder="Cari disini" id="searchInput">
            <button onclick="searchEvent()" class="btn-search"><i class="fas fa-search"></i></button>
        </div>
        <div class="row mt-5" id="eventContainer">
            <!-- Event cards will be inserted here by JavaScript -->
        </div>
        <div class="pagination-container">
            <button id="prevPageBtn" class="btn btn-secondary mr-2" disabled>Sebelumnya</button>
<button id="nextPageBtn" class="btn btn-ungu">Berikutnya</button>
<p class="ml-2 mt-3">Halaman <span id="currentPage">1</span> dari <span id="totalPages"></span></p>


        </div>
        




    
    <script>
        const backendUrl = @json($backendUrl);
        const events = @json($events);

        document.addEventListener("DOMContentLoaded", function() {
    const eventContainer = document.getElementById("eventContainer");
    const eventsPerPage = 6; // Jumlah acara per halaman
    const totalPages = Math.ceil(events.length / eventsPerPage); // Total halaman yang diperlukan
    let currentPage = 1; // Halaman saat ini, diinisialisasi dengan 1

    function showEvents(page) {
        const startIndex = (page - 1) * eventsPerPage;
        const endIndex = startIndex + eventsPerPage;
        const currentEvents = events.slice(startIndex, endIndex);

        eventContainer.innerHTML = ''; // Mengosongkan kontainer acara sebelum menambahkan acara baru

        currentEvents.forEach((event) => {
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

        document.getElementById("currentPage").textContent = page; // Update halaman saat ini
        currentPage = page; // Simpan halaman saat ini ke variabel global
        updatePaginationButtons(); // Update status tombol navigasi
    }

    function updatePaginationButtons() {
        document.getElementById("totalPages").textContent = totalPages; // Update teks total halaman

        // Mengatur status tombol "Sebelumnya"
        if (currentPage > 1) {
            document.getElementById("prevPageBtn").disabled = false;
        } else {
            document.getElementById("prevPageBtn").disabled = true;
        }

        // Mengatur status tombol "Berikutnya"
        if (currentPage < totalPages) {
            document.getElementById("nextPageBtn").disabled = false;
        } else {
            document.getElementById("nextPageBtn").disabled = true;
        }
    }

    // Tampilkan halaman pertama saat halaman dimuat
    showEvents(1);

    // Event listener untuk tombol "Berikutnya"
    document.getElementById("nextPageBtn").addEventListener("click", function() {
        if (currentPage < totalPages) {
            showEvents(currentPage + 1);
        }
    });

    // Event listener untuk tombol "Sebelumnya"
    document.getElementById("prevPageBtn").addEventListener("click", function() {
        if (currentPage > 1) {
            showEvents(currentPage - 1);
        }
    });

    document.getElementById("searchInput").addEventListener("input", searchEvent);
});

function searchEvent() {
    const input = document.getElementById("searchInput").value.toLowerCase();
    const eventCards = document.querySelectorAll(".event-card");

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

        function searchEvent() {
            const input = document.getElementById("searchInput").value.toLowerCase();
            const eventCards = document.querySelectorAll(".event-card");

                if (found) {
                    noEventsMessage.style.display = "none";
                } else {
                    noEventsMessage.style.display = "block";
                }
            }
        </script>
    </body>
@endsection
