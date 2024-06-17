<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome/Welcome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>
<body>
     

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Bootcamp</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="imm">IMM</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>
                <div class="navbar-actions">
                    <a href="login" class="btn btn-primary">Login</a>
                    <a href="register" class="btn btn-outline-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="notification-section">
        <div class="container">
            <div class="row">
                <div class="col-6">
                    <p id="notificationText">
                        <i class="fas fa-bell" style="color: #ffcc00;"></i> Notification
                    </p>
                </div>
                <div class="col-6 text-right">
                    <i id="dropdownIcon" class="fas fa-chevron-down"></i>
                </div>
            </div>
            <div id="dropdownContent" class="dropdown-content">
                <a href="#">Text 1</a>
                <a href="#">Text 2</a>
                <a href="#">Text 3</a>
            </div>
        </div>
    </div>

    <div class="container mt-5">
        <h2>Dashboard</h2>
        <div class="row">
            <div class="col-4">
                <div class="process-circle absensi">
                    <span class="process-text">Absensi</span>
                    <div class="progress-circle">
                        <span class="progress-percent">50%</span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="process-circle assignment">
                    <span class="process-text">Assignment</span>
                    <div class="progress-circle">
                        <span class="progress-percent">30%</span>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="process-circle progres">
                    <span class="process-text">Progress</span>
                    <div class="progress-circle">
                        <span class="progress-percent">75%</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <img src="images/abs.png" alt="Gambar" class="dashboard-image">
    </div>
    <div class="text-center mt-1">
        <img src="images/ass.png" alt="Gambar2" class="dashboard-image2">
    </div>
    <div class="text-center mt-3">
        <img src="images/prog.png" alt="Gambar3" class="dashboard-image3">
    </div>

    <div class="container mt-5">
        <div class="row">
            <div class="col">
                <table class="w-100">
                    <tr>
                        <td>
                            <div class="image-container">
                                <img src="images/2.png" alt="Foto 1" class="first-image">
                                <div class="loading-overlay">
                                    <div class="loader"></div>
                                    <div class="percentage">50% Completed</div>
                                </div>
                            </div>
                            <div class="image-text">Someone<br /> Data Science Bootcamp</div>
                        </td>
                        <td>
                            <div class="image-container">
                                <img src="images/3.png" alt="Foto 2" class="second-image">
                            </div>
                        </td>
                        <td>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

    <div class="imagee-container">
        <img src="images/5.png" alt="New Photo" class="third-image">
    </div>

    <div class="calendar">
        <div class="calendar-header">May 2024</div>
        <div class="calendar-days">
            <div class="calendar-day">Sun</div>
            <div class="calendar-day">Mon</div>
            <div class="calendar-day">Tue</div>
            <div class="calendar-day">Wed</div>
            <div class="calendar-day">Thu</div>
            <div class="calendar-day">Fri</div>
            <div class="calendar-day">Sat</div>
            <div class="calendar-day"></div>
            <div class="calendar-day"></div>
            <div class="calendar-day">1<span class="dot"></span></div>
            <div class="calendar-day">2<span class="dot"></span></div>
            <div class="calendar-day">3</div>
            <div class="calendar-day">4</div>
            <div class="calendar-day">5</div>
            <div class="calendar-day">6</div>
            <div class="calendar-day">7</div>
            <div class="calendar-day">8</div>
            <div class="calendar-day">9<span class="dot"></span></div>
            <div class="calendar-day">10<span class="dot"></span></div>
            <div class="calendar-day">11</div>
            <div class="calendar-day">12</div>
            <div class="calendar-day">13</div>
            <div class="calendar-day">14</div>
            <div class="calendar-day">15</div>
            <div class="calendar-day">16</div>
            <div class="calendar-day">17</div>
            <div class="calendar-day">18</div>
            <div class="calendar-day">19</div>
            <div class="calendar-day">20<span class="dot"></span></div>
            <div class="calendar-day">21</div>
            <div class="calendar-day">22</div>
            <div class="calendar-day">23<span class="dot"></span></div>
            <div class="calendar-day">24<span class="dot"></span></div>
            <div class="calendar-day">25</div>
            <div class="calendar-day">26</div>
            <div class="calendar-day">27</div>
            <div class="calendar-day">28</div>
            <div class="calendar-day">29</div>
            <div class="calendar-day">30</div>
            <div class="calendar-day">31</div>
        </div>
        <div class="calendar-footer">Today: May 5, 2024</div>
    </div>

    <div class="tabel-wrapper">
        <table class="table table-hari-raya">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Nama Hari Raya</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1 May</td>
                    <td>Nasional Hari Buruh</td>
                </tr>
                <tr>
                    <td>9 May - 10 May</td>
                    <td>Kenaikan Isa Almasih dan Cuti Bersama</td>
                </tr>
                <tr>
                    <td>20 May</td>
                    <td>Hari Kebangkitan Nasional</td>
                </tr>
                <tr>
                    <td>23 May - 24 May</td>
                    <td>Hari Kebangkitan Nasional dan Cuti Bersama</td>
                </tr>
            </tbody>
        </table>

        <table class="table table-catatan" id="catatanTable">
            <thead>
                <tr>
                    <th>Tanggal</th>
                    <th>Catatan</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>10 May</td>
                    <td onclick="editCatatan(this)" contenteditable="true">Klik menambahkan catatan</td>
                </tr>
                <!-- Isi tabel dengan data catatan -->
            </tbody>
        </table>

        <script>
            function editCatatan(cell) {
                if (cell.innerHTML.trim() === 'Klik untuk menambahkan catatan') {
                    cell.innerHTML = ''; // Menghapus teks saat diklik
                }
            }
        </script>
    </div>

    <div class="table-container">
        <table class="box-table">
            <h2 class="table-title">New Assignment</h2>
            <tr>
                <td class="top-text">Analisis Data Menggunakan Metode Machine Learning:</td>
            </tr>
            <tr>
                <td class="bottom-text">Studi Kasus pada Industri Retail</td>
            </tr>
        </table>
        <table class="box-table">
            <h2 class="table-title">New Quiz</h2>
            <tr>
                <td class="top-text">Kuis Big Data: Tes Pengetahuan Anda tentang Pengolahan</td>
            </tr>
            <tr>
                <td class="bottom-text">dan Analisis Data Besar</td>
            </tr>
        </table>
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
                        <li><a href="profile">Profile</a></li>
                    </ul>
                </div>
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
</footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/welcome/script.js') }}"></script>

</body>
</html>
