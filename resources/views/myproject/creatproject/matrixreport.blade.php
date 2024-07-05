@extends('layouts.app-imm')
@section('title', 'Laporan Matric')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<style>
    body {
    font-family: "Roboto", sans-serif;
    padding-top: 70px;
    /* Add padding to avoid content being hidden behind fixed navbar */
    background-color: #f8f9fa;
    /* Adjusted height */
}

.navbar {
    background-color: #ffffff;
    color: #000000;
    padding: 15px 0;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
    border-bottom: 3px solid #5940cb;
}

.navbar-nav {
    margin-left: 10px;
    margin-right: auto;
}

.navbar-links {
    list-style-type: none;
    display: flex;
    margin-left: -580px;
}

.navbar-links li {
    margin-right: 20px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    color: inherit;
    text-decoration: none;
}

.navbar-links a:hover {
    text-decoration: underline;
}

.navbar-actions {
    display: flex;
    margin-right: 20px;
}

.navbar {
    background-color: #ffffff;
    color: #000000;
    padding: 15px 0;
    position: fixed;
    top: 0;
    right: 0;
    left: 0;
    z-index: 1000;
    border-bottom: 3px solid #5940cb;
}

.navbar-nav {
    margin-left: 10px;
    margin-right: auto;
}

.navbar-links {
    list-style-type: none;
    display: flex;
    margin-left: -580px;
}

.navbar-links li {
    margin-right: 20px;
}

.navbar-links li:last-child {
    margin-right: 0;
}

.navbar-links a {
    color: inherit;
    text-decoration: none;
}

.navbar-links a:hover {
    text-decoration: underline;
}

.navbar-actions {
    display: flex;
    margin-right: 20px;
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
    gap: 10px;
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

.content-container {
    text-align: center;
    margin-top: 20px;
}

.content-container h1 {
    background-color: #5a67d8;
    color: white;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    transition: transform 0.3s ease-in-out;
}


/* .content-container h1:hover {
    transform: scale(1.05);
} */

.date-box {
    border: 2px solid #5a67d8;
    color: #5a67d8;
    padding: 10px;
    border-radius: 8px;
    display: inline-block;
    margin-bottom: 20px;
    font-size: 20px;
    transition: transform 0.3s ease-in-out;
}


/* .date-box:hover {
    transform: scale(1.05);
} */

.chart-container {
    width: 80%;
    margin: 0 auto;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    transition: box-shadow 0.3s ease-in-out;
}

.chart-container:hover {
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
}

.analysis-matrix .content-box,
.target-check .target-check-box {
    background-color: #ffffff;
    padding: 20px;
    border: 1px solid #ddd;
    border-radius: 8px;
    margin-bottom: 20px;
    transition: transform 0.3s ease-in-out;
}


/* .analysis-matrix .content-box:hover,
.target-check .target-check-box:hover {
    transform: scale(1.05);
} */

.analysis-matrix .content-box h2,
.target-check .target-check-box h3 {
    background-color: #5a67d8;
    color: white;
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 10px;
}

.icon-box .icon-item {
    text-align: center;
    flex: 1;
    margin: 10px;
    transition: transform 0.3s ease-in-out;
}

.icon-box .icon-item:hover {
    transform: scale(1.1);
}

.icon-box .icon-item img {
    width: 108px;
    height: 100px;
}

.icon-box .icon-item p {
    margin-top: 10px;
    font-size: 14px;
    color: #333;
}

.target-item {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
}

.target-item input[type="checkbox"] {
    margin-right: 10px;
}

.btn {
    background-color: #5a67d8;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #fff;
    border: none;
    border-radius: 8px;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.3s ease-in-out;
}


/* .btn:hover {
    background-color: #434190;
    transform: scale(1.05);
} */

.export-btn {
    margin-right: 10px;
}

.save-btn {
    background-color: #5a67d8;
}


/* Menambahkan transisi pada navbar */

.navbar {
    transition: background-color 0.3s ease;
}

.navbar:hover {
    background-color: #e3e3e3;
}
    .content-container h1 {
        background-color: #5940CB; /* Updated Purple color */
        color: #FFFFFF;
        padding: 10px;
        text-align: center;
        border-radius: 5px;
    }
    .date-box {
        background-color: #ffffff;
        color: #000000;
        padding: 10px;
        text-align: center;
        margin: 20px 0;
        border-radius: 5px;
        width: 250px;
        margin-left: auto;
        margin-right: auto;
    }
    .content-box {
        border: 2px solid #D9D9D9;
        padding: 20px;
        margin-bottom: 20px;
        border-radius: 5px;
    }
    .content-box h2 {
        background-color: #5940CB; /* Updated Purple color */
        color: #FFFFFF;
        padding: 10px;
        margin: -20px -20px 20px -20px;
        text-align: center;
        border-radius: 5px 5px 0 0;
    }
    .btn {
        width: 150px;
        height: 40px;
        margin: 10px 5px;
        font-weight: bold;
        border-radius: 5px;
        border: 2px solid #5940CB; /* Updated Purple color */
        text-align: center;
        line-height: 28px; /* Adjust line height for vertical centering */
    }
    .btn.export-btn {
        background-color: white;
        color: #5940CB; /* Updated Purple color */
    }
    .btn.export-btn:hover {
        background-color: #5940CB;
        color: white;
    }
    .btn.save-btn {
        background-color: #5940CB; /* Updated Purple color */
        color: white;
    }
    .btn.save-btn:hover {
        background-color: #4A235A;
    }
    .btn-container {
        display: flex;
        justify-content: center;
        margin-top: 20px;
    }
    input{
        border: none;
    }

</style>
@endsection
@section('content')

<body>
 

<div class="container mt-5 content-container">
    <h1>Matrix : Premi Penghematan Klien</h1>
    <div class="date-box">
        <input type="date" name="" id="">
    </div>
    <div class="chart-container">
        <canvas id="myChart"></canvas>
    </div>
</div>

<div class="container mt-5 main-content">
    <div class="row">
        <div class="col-md-12">
            <div class="content-box">
                <h2>Evaluasi Matrix</h2>
                <textarea class=" w-100" name="" id="" cols="30" placeholder="Isi evaluasi matric anda disini" rows="10"></textarea>
            </div>
            <div class="content-box">
                <h2>Analysis Matrix</h2>
                <textarea class=" w-100" name="" id="" cols="30" placeholder="Isi Analysis matric anda disini" rows="10"></textarea>
            </div>
            <div class="btn-container">
                <button type="button" class="btn export-btn">Export</button>
                <a href="detail"><button type="button" class="btn save-btn">Save</button></a>
            </div>
        </div>
    </div>
</div>



<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="{{ asset('js/myproject/impact.js') }}"></script>

</body>
@endsection
