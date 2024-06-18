<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bias-Reducing Investment Practices</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/creatproject/matrixreport.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
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
                    <a class="nav-link" href="welcome">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Bootcamp</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">IMM</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Community</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="profile">Profile</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5 content-container">
    <h1>Bias-Reducing Investment Practices</h1>
    <div class="date-box">10/06/24</div>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
</div>

<div class="container mt-5 main-content">
    <div class="row">
        <div class="col-md-8 analysis-matrix">
            <div class="content-box">
                <h2>Analysis Matrix</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo gravida rhoncus id accumsan mus litora dignissim...</p>
            </div>
            <div class="content-box mt-4">
                <h2>Evaluasi Matrix</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum justo gravida rhoncus id accumsan mus litora dignissim...</p>
            </div>
        </div>
        <div class="col-md-4 target-check">
            <div class="icon-box d-flex justify-content-between mb-4">
                <div class="icon-item">
                    <img src="{{ asset('images/ASVG/zero.svg') }}" alt="Zero Hunger">
                </div>
                <div class="icon-item">
                    <img src="{{ asset('images/ASVG/clean.svg') }}" alt="Clean Water and Sanitation">
                </div>
            </div>
            <div class="target-check-box">
                <h3>Target Check</h3>
                <div class="target-item">
                    <input type="checkbox" id="sdg1" checked>
                    <label for="sdg1">SDG Target 2.1</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg2">
                    <label for="sdg2">SDG Target 2.2</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg3">
                    <label for="sdg3">SDG Target 2.3</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg4">
                    <label for="sdg4">SDG Target 2.4</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg5">
                    <label for="sdg5">SDG Target 6.1</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg6">
                    <label for="sdg6">SDG Target 6.2</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg7">
                    <label for="sdg7">SDG Target 6.3</label>
                </div>
                <div class="target-item">
                    <input type="checkbox" id="sdg8">
                    <label for="sdg8">SDG Target 6.4</label>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-4">
                <button class="btn export-btn">Export</button>
                <button class="btn save-btn">Save</button>
            </div>
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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/myproject/impact.js') }}"></script>

</body>
</html>
