<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/welcome/Welcome.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="/">IMM</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ">
                        <a class="nav-link" href="welcome">Home</a>
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
                        <a class="nav-link" href="blog">Explore</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile">Profile</a>
                    </li>
                </ul>                <div class="navbar-actions">
                    <a href="login" class="btn btn-primary">Login</a>
                    <a href="register" class="btn btn-outline-primary">Register</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container">
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
    </div>


    <div class="container mt-5">
        <h2>Dashboard</h2>
        <div class="row mt-5">
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


    <div class="container" style="margin-top: -100px">
        <div class="section-img">
            <div class="row">
                <div class="col-2 d-flex justify-content-center align-items-center">
                    <img src="images/5.png" width="145" height="auto" alt="">

                </div>
                <div class="col-10 d-flex flex-column justify-content-center align-items-start">
                    <span class="text-white" style="font-size:20px"><Strong>Someone</Strong> <br /> Data Science
                        Bootcamp</span>


                    <div class="image-container" style="display: none">
                        <img src="images/2.png" alt="Foto 1" class="first-image">
                        <div class="loading-overlay">
                            <div class="loader"></div>
                            <div class="percentage">50% Completed</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-5">

            <div class="col-7  d-flex flex-column justify-content-center" style="margin-top: -60px">
    
                    <table class="box-table">
                        <h2 class="table-title mb-3">New Assignment</h2>
                        <tr>
                            
                            <td class="top-text ">Analisis Data Menggunakan Metode Machine Learning:</td>
                        </tr>
                        
                        <tr>
                            <td class="bottom-text">Studi Kasus pada Industri Retail</td>
                        </tr>
                    </table>
                    <table class="box-table">
                        <h2 class="table-title mb-3">New Quiz</h2>
                        <tr>
                            <td class="top-text">Kuis Big Data: Tes Pengetahuan Anda tentang Pengolahan</td>
                        </tr>
                        <tr>
                            <td class="bottom-text">dan Analisis Data Besar</td>
                        </tr>
                    </table>
          
            </div>
            <div class="col-5">
<div class="table">
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
                <div class="calendar-footer">Today: May 5, 2024</div></div>
                <div class="container"></div>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('js/welcome/script.js') }}"></script>

</body>

</html>
