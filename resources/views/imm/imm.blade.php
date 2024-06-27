<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/imm/imm.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
<div id="loading">
        <img src="images/imm.png" alt="Loading">
    </div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="imm">IMM</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
                <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link" href="bootcamp">Bootcamp</a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="imm">IMM</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="community">Community</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="profile">Profile</a>
            </li>
        </ul>
        </div>
    </div>
</nav>


<div class="content">
    <img src="images/6.png" alt="Your Image" class="content-image">
    <div class="content-text">
        <h1>Selamat Datang di IMM</h1>
        <!-- <p>IMM (Impact Mate) adalah platform yang...</p> -->
        <a href="verifikasidiri" class="btn">Mulai Sekarang</a>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/imm/imm.js') }}"></script>

</body>
</html>
