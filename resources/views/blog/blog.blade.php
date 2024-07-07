@extends('layouts.app-imm')
@section('title', 'Artikel')

@section('css')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">



    <style>
        body,
        html {
            font-family: "Roboto", sans-serif;
            height: 100%;
            padding-top: 30px;
        }

        .form-control {
            width: 60%;
        }

        .search-container {
            display: flex;
            justify-content: center;
            margin-bottom: 20px;
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

        .blog-card {
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

        .blog-card a {
            text-decoration: none;
            color: inherit;
        }

        .blog-card .blog-image {
            height: 150px;
            background-size: cover;
            background-position: center;
            margin-bottom: 20px;
            border-radius: 5px;
        }

        .blog-card h3 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            min-height: 3em;
        }

        .blog-card p {
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
            .blog-card {
                flex: 0 0 48%;
                /* Two columns for tablets */
            }
        }

        @media only screen and (max-width: 768px) {
            .blog-card {
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
            <h5 class="text-center mb-5" style="margin-top: 70px">Temukan wawasan tentang dampak baru disini</h5>
            <div class="search-container">
                <input type="text" class="form-control" placeholder="Cari disini" id="searchInput">
                <button onclick="searchBlog()" class="btn-search"><i class="fas fa-search"></i></button>
            </div>
            <div class="row mt-5" id="blogContainer">
                <!-- Blog cards will be inserted here by JavaScript -->
            </div>
            <p id="noBlogsMessage" class="text-center mt-3" style="display: none;"> Artikel tidak ditemukan</p>
            <div class="pagination-container">
                <p>Halaman <span id="currentPage">1</span> dari 123</p>
            </div>
            <div class="subscribe-container">
                <p>Jangan lewatkan artikel berdampak lainnya!</p>
                <p class="mt-2 mb-2"><strong>Langganan melalui e-mail sekarang GRATIS</strong></p>
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Masukkan e-mail anda disini">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="button"><i class="fas fa-envelope"></i></button>
                    </div>
                </div>
            </div>
        </div>


        <script>
            const backendUrl = @json($backendUrl);
            const posts = @json($posts);

            document.addEventListener("DOMContentLoaded", function() {
                const blogContainer = document.getElementById("blogContainer");

                posts.forEach((post) => {
                    const blogCard = document.createElement("div");
                    blogCard.className = "blog-card";
                    blogCard.innerHTML = `
                    <a href="/blogarticle/${post.id}/view" class="text-left">
                        <div class="blog-image" style="background-image: url(${post.img});"></div>
                        <h3 class="title ">${post.title}</h3>
                        <p>${post.content}</p>
                    </a>
                `;
                    blogContainer.appendChild(blogCard);
                });

                document.getElementById("searchInput").addEventListener("input", searchBlog);
            });

            function searchBlog() {
                const input = document.getElementById("searchInput").value.toLowerCase();
                const blogCards = document.querySelectorAll(".blog-card");
                const noBlogsMessage = document.getElementById("noBlogsMessage");
                let found = false;

                blogCards.forEach((card) => {
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
                    noBlogsMessage.style.display = "none";
                } else {
                    noBlogsMessage.style.display = "block";
                }
            }
        </script>
    </body>

@endsection
