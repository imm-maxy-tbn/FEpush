<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/blog/blog.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link " href="welcome">Home</a>
                </li>
                <li class="nav-item ">
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
    <h1>Blog Artikel</h1>
    <div class="search-container">
        <input type="text" placeholder="cari disini" id="searchInput">
        <button onclick="searchBlog()"><i class="fas fa-search"></i></button>
    </div>
    <div class="row" id="blogContainer">
        <!-- Blog cards will be inserted here by JavaScript -->
    </div>
    <div class="pagination-container">
        <p>Halaman <span id="currentPage">1</span> dari 123</p>
    </div>
    <div class="subscribe-container">
        <p>Jangan tertinggal artikel seputar gerakan berdampak!</p>
        <p><strong>Langganan melalui e-mail sekarang GRATIS</strong></p>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="masukkan e-mail anda disini">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button"><i class="fas fa-envelope"></i></button>
            </div>
        </div>
    </div>
</div>

<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <div class="brand-info">
                <h3>IMM</h3>
                <p>(TBN INDONESIA X MAXY ACADEMY)</p>
            </div>
            <div class="footer-links">
                <div class="footer-nav">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Bootcamp</a></li>
                        <li><a href="#">IMM</a></li>
                        <li><a href="#">Community</a></li>
                        <li><a href="#">Profile</a></li>
                    </ul>
                </div>
                <div class="social-media">
                    <p class="footer-social-media">Social Media</p>
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
<script src="{{ asset('js/blog/blog.js') }}"></script>
<script>
    const backendUrl = @json($backendUrl);
    const posts = @json($posts);

    document.addEventListener("DOMContentLoaded", function () {
        const blogContainer = document.getElementById("blogContainer");

        posts.forEach((post) => {
            const blogCard = document.createElement("div");
            blogCard.className = "blog-card";
            blogCard.innerHTML = `
                <a href="${backendUrl}/posts/view/${post.id}">
                    <div class="blog-image" style="background-image: url(${post.img});"></div>
                    <h3>${post.title}</h3>
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

        blogCards.forEach((card) => {
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
