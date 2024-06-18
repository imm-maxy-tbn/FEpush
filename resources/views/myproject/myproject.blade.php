<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyProject</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/myproject.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta name="description" content="Manage your projects efficiently with MyProject">
    <meta name="keywords" content="project management, task management, productivity">
    <meta name="author" content="Your Name">
</head>
<body>

<div id="loading">
    <img src="images/imm.png" alt="Loading...">
</div>

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
                <li class="nav-item active">
                    <a class="nav-link" href="#">My Project</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="homepage">My Company</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
        <h2 class="project-title">Draft Project</h2>
        <div class="row mt-3">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Search..." aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text search-icon" aria-label="Search Button"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right">
            <a href="creatproject" class="btn btn-primary btn-create-new-project">Create New Project</a>
    <button class="btn btn-primary btn-create-project" data-toggle="modal" data-target="#projectModal">Create Project</button>
</div>

        </div>
        <h4 class="all-projects-title mt-5">All projects (0)</h4>
        <div class="row mt-3" id="draft-project-list">
            <div class="col-md-12 no-projects mt-3">
                <p>Belum memiliki project apapun.</p>
            </div>
        </div>
    </div>

    <h2 class="ongoing-projects-title mt-5">On Going Project</h2>
    <div class="d-flex justify-content-between align-items-center mt-3 ongoing-projects-filters">
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Today
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Today</a>
                <a class="dropdown-item" href="#">This Week</a>
                <a class="dropdown-item" href="#">This Month</a>
            </div>
        </div>
        <div class="dropdown">
            <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                0 of 0
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2">
                <a class="dropdown-item" href="#">0 of 0</a>
                <a class="dropdown-item" href="#">1 of 1</a>
            </div>
        </div>
    </div>
    <table class="table mt-3 ongoing-projects-table">
        <thead>
            <tr>
                <th>Project Name</th>
                <th>Date</th>
                <th>Impact</th>
                <th>SDGs</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody id="ongoing-project-list">
            <tr>
                <td colspan="5" class="text-center no-ongoing-projects">Tidak ada project yang sedang berjalan.</td>
            </tr>
        </tbody>
    </table>

    <!-- Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">Select Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="projectSelect" class="form-control">
                        <option value="Maths Department">Maths Department</option>
                        <option value="Chemistry Department">Chemistry Department</option>
                        <option value="Physics Department">Physics Department</option>
                        <option value="Computer Department">Computer Department</option>
                        <option value="English Department">English Department</option>
                        <option value="Social Department">Social Department</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addSelectedProject()">Add Project</button>
                </div>
            </div>
        </div>
    </div>

    <h2 class="done-projects-titlee mt-5">Done Projects And Surveys</h2>
    <div class="card mt-3 done-projects-card">
        <div class="card-header d-flex justify-content-between align-items-center done-projects-header">
            <span>Project Completed</span>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle done-projects-dropdown-toggle" type="button" id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span>Monthly</span> <i class="fas fa-calendar-alt ml-2"></i>
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                    <a class="dropdown-item" href="#">Daily</a>
                    <a class="dropdown-item" href="#">Weekly</a>
                    <a class="dropdown-item" href="#">Monthly</a>
                </div>
            </div>
        </div>
        <table class="tablee mt-3 done-projects-table">
            <thead>
                <tr>
                    <th>Project Name</th>
                    <th>Completion Date</th>
                    <th>Status</th>
                    <th>Export in Docs</th>
                </tr>
            </thead>
            <tbody id="done-project-list">
                <tr>
                    <td colspan="4" class="text-center no-done-projects">Tidak ada project yang terselesaikan.</td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">Select Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="projectSelect" class="form-control">
                        <option value="Maths Department">Maths Department</option>
                        <option value="Chemistry Department">Chemistry Department</option>
                        <option value="Physics Department">Physics Department</option>
                        <option value="Computer Department">Computer Department</option>
                        <option value="English Department">English Department</option>
                        <option value="Social Department">Social Department</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addSelectedProject()">Add Project</button>
                </div>
            </div>
        </div>
    </div>

<div class="banner">
        Survey
    </div>
    <div class="container mt-4">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="stats-box">
                    <h4>Survey Send</h4>
                    <p class="number">0</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-box">
                    <h4>Response Received</h4>
                    <p class="number text-success">0</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stats-box">
                    <h4>Response Pending</h4>
                    <p class="number text-warning">0</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card stats-card">
                    <div class="card-header stats-header d-flex justify-content-between">
                        <div>Average Time<br><span class="stats-value">0%</span></div>
                        <div>Completion Rate<br><span class="stats-value">0%</span></div>
                        <div><span class="completion-circle">0%</span></div>
                    </div>
                    <div class="card-body text-center">
                        <div class="total-responses">0%</div>
                        <div class="responses-text">Total Responses</div>
                        <div class="responses-line"></div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
        <div class="card performance-card">
            <div class="card-header performance-header">
                Vertical Performance
            </div>
            <div class="card-body">
                <!-- Placeholder for the chart -->
                <canvas id="performance-chart"></canvas>
            </div>
        </div>
    </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
            <a href="survey" class="btn btn-primary start-survey-btn">Start Your Survey</a>
            </div>
        </div>
    </div>

    <div class="container mt-4">
        <h1 class="schedule-title">Schedule Project</h1>
        <div class="row">
            <div class="col-md-4">
                <div class="schedule-box mb-3">Tidak ada jadwal</div>
                <div class="schedule-box mb-3">Tidak ada jadwal</div>
                <div class="schedule-box mb-3">Tidak ada jadwal</div>
            </div>
            <div class="col-md-8">
                <div class="calendar">
                    <div class="calendar-header">
                        <span class="month">MARET 2024</span>
                        <span class="view-options">
                            <a href="#">Daily</a>
                            <a href="#">Weekly</a>
                            <a href="#" class="active">Monthly</a>
                            <a href="#">Yearly</a>
                            <a href="#">New schedule</a>
                        </span>
                    </div>
                    <table class="tableee table-bordered table">
                        <thead>
                            <tr>
                                <th>Monday</th>
                                <th>Tuesday</th>
                                <th>Wednesday</th>
                                <th>Thursday</th>
                                <th>Friday</th>
                                <th>Saturday</th>
                                <th>Sunday</th>
                            </tr>
                        </thead>
                        <tbody id="calendar-body">
                            <!-- Calendar rows will be added by JavaScript -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="projectModal" tabindex="-1" role="dialog" aria-labelledby="projectModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="projectModalLabel">Select Project</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <select id="projectSelect" class="form-control">
                        <option value="Maths Department">Maths Department</option>
                        <option value="Chemistry Department">Chemistry Department</option>
                        <option value="Physics Department">Physics Department</option>
                        <option value="Computer Department">Computer Department</option>
                        <option value="English Department">English Department</option>
                        <option value="Social Department">Social Department</option>
                    </select>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" onclick="addSelectedProject()">Add Project</button>
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
                            <li><a href="/">Home</a></li>
                            <li><a href="bootcamp">Bootcamp</a></li>
                            <li><a href="imm">IMM</a></li>
                            <li><a href="comunity">Community</a></li>
                            <li><a href="profile">Profile</a></li>
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
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" async></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" async></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" async></script>
<script src="{{ asset('js/myproject/project1.js') }}" async></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        setTimeout(function() {
            var loading = document.getElementById("loading");
            loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
        }, 1000); // 3000 milidetik = 3 detik
    });
</script>
</body>
</html>
