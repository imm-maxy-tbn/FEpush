@extends('layouts.app-imm')
@section('title', 'Event')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/blog/blog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
   
@endsection
@section('content')

<body>
    <div class="container mt-5">
    <h5 class=" text-center mb-5">Temukan wawasan tentang dampak baru disini</h5>
        <div class="search-container mt-4">
            <input type="text" class="form-control" placeholder="cari disini" id="searchInput">
            <button onclick="searchBlog()" class="btn-search"><i class="fas fa-search"></i></button>
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


    

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js"
            integrity="sha512-mqKpeec0Hl6bZ7gTz04dVpW2uPtQ+rmJlKzUoeoaSY1Vp4iAAaYI+yMMYJqKQoJz4ygHji9m9ko96mMUpjMRZw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        {{-- <script src="{{ asset('js/blog-event/event.js') }}"></script> --}}
        <script>
            const backendUrl = @json($backendUrl);
            const events = @json($events);

            document.addEventListener("DOMContentLoaded", function() {
                const eventContainer = document.getElementById("blogContainer");

                events.forEach((event) => {
                    const eventCard = document.createElement("div");
                    eventCard.className = "blog-card";
                    eventCard.innerHTML = `
                <a href="/event/${event.id}">
                    <div class="blog-image" style="background-image: url(${event.cover_img});"></div>
                    <h3>${event.title}</h3>
                    <p>${event.description}</p>
                </a>
            `;
                    blogContainer.appendChild(eventCard);
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
@endsection
