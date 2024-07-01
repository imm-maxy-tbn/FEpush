<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMM | My Project</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/myproject/myproject.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <meta name="description" content="Manage your projects efficiently with MyProject">
    <meta name="keywords" content="project management, task management, productivity">
    <meta name="author" content="Your Name">
    <style>
        .navbar {
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 1000;
        }

        body {
            padding-top: 56px;
            /* Adjust this value according to the height of your navbar */
        }

        .see-all-button {
            display: none;
            text-align: center;
            margin-top: 20px;
        }

        .see-all-button button {
            background-color: #6c63ff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
        }
    </style>
</head>
kalau blm aku kasih ini ya

@extends('layouts.app-imm')
@section('title', 'My Project')

@section('css')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ asset('css/myproject/myproject.css') }}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
<meta name="description" content="Manage your projects efficiently with MyProject">
<meta name="keywords" content="project management, task management, productivity">
<meta name="author" content="Your Name">
@endsection
@section('content')

<!DOCTYPE html>
<html lang="en">


<body>








    <div class="container mt-5">

        <div class="row jarak" style="margin-top:100px">
            <div class="col-md-8">
                <div class="input-group">
                    <input type="text" class="form-control search-input" placeholder="Search..." aria-label="Search">
                    <div class="input-group-append">
                        <span class="input-group-text search-icon" aria-label="Search Button"><i
                                class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>

            <div class="col-md-4 text-right">
                <button class="btn btn-primary btn-create-project" data-toggle="modal"
                    data-target="#projectModal">Create New Project</button>
            </div>
        </div>
        <h4 class="all-projects-title">All projects (0)</h4>
        <div class="row mt-3 "  id="draft-project-list">
            <div class="col-md-12">
                <h1>Daftar Proyek</h1>
                @if($projects->isEmpty())
                    <p>Tidak ada proyek yang ditemukan.</p>
                @else
                    <div class="row">
                        @foreach($projects as $index => $project)
                            @if($index % 3 == 0 && $index != 0)
                                </div><div class="row mt-4">
                            @endif
                            <div class="col-md-4 mb-4" id="project-{{ $project->id }}">
                                <div class="card project-card">
                                    <img src="{{ env('APP_BACKEND_URL') . '/images/' . $project->img }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title"> {{$project->nama}} </h5>
                                        <button class="btn btn-secondary mt-2" onclick="updateProject('project-{{ $project->id }}', {{ $index }})">Update</button>
                                        <button class="btn btn-danger mt-2" onclick="deleteProject('project-{{ $project->id }}', {{ $index }})">Delete</button>
                                        <a href="detail/{{ $project->id }}" class="btn btn-secondary btn-detail mt-2">Detail</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>
        <div class="see-all-button" id="see-all-button">
            <button onclick="showAllProjects()">See All</button>
        </div>
    </div>

<div class="container">




    <h2 class="done-projects-titlee mt-5">On Going Project</h2>
    <div class="card mt-3 done-projects-card">

        <table class="table mt-3 ongoing-projects-table">
            <thead>
                <tr >
                    <th>Nama Proyek</th>

                    <th>Tanggal Mulai</th>
                    <th>Tanggal Selesai</th>
                    <th>SDGs Terpilih</th>

                    <th>Jumlah Pendanaan</th>

                </tr>
            </thead>
            @foreach($projects as $project)
            <tr>
                <td>{{ $project->nama }}</td>

                <td>{{ $project->start_date }}</td>
                <td>{{ $project->end_date }}</td>

                <td>             {{ $project->sdgs->implode('order', ', ') }}
                </td>


                <td>{{ $project->jumlah_pendanaan }}</td>

            </tr>
        @endforeach
        </table>



    </div>

        <h2 class="project-title mb-5 mt-5">Done Projects</h2>
        <div class="card mt-3 done-projects-card">
            <div class="card-header d-flex justify-content-between align-items-center done-projects-header">
                <span>Proyek Selesai</span>
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle done-projects-dropdown-toggle" type="button"
                        id="dropdownMenuButton3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span>Bulan</span> <i class="fas fa-calendar-alt ml-2"></i>
                    </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3">
                        <a class="dropdown-item" href="#">Hari</a>
                        <a class="dropdown-item" href="#">Minggu</a>
                        <a class="dropdown-item" href="#">Bulan</a>
                    </div>
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
                    <td> {{$project->nama}} </td>
                    <td> {{$project->end_date}} </td>
                    <td> <div class="span bg-secondary text-white" style="padding: 5px 0; border-radius:50px">Succes</div> </td>
                    <td> <img src="images/unduh.png" alt=""> </td>
                </tr>
            </tbody>
        </table>
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



    </div>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" async></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" async></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 1000); // 3000 milidetik = 3 detik
        });
    </script>
    <script>// Data for the chart
        const performanceData = {
            labels: ["Wells Fargo", "State Employees", "PNC", "SunTrust", "Fidelity"],
            datasets: [
                {
                    label: "Score",
                    data: [5, 6, 7, 8, 9], // Example data
                    backgroundColor: "rgba(108, 99, 255, 0.2)",
                    borderColor: "rgba(108, 99, 255, 1)",
                    borderWidth: 1,
                },
            ],
        };

        // Configuration for the chart
        const config = {
            type: "bar",
            data: performanceData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        max: 10,
                    },
                },
                plugins: {
                    legend: {
                        display: false,
                    },
                    tooltip: {
                        callbacks: {
                            label: function (context) {
                                return context.raw;
                            },
                        },
                    },
                },
            },
        };

        // Render the chart
        const ctx = document.getElementById("performance-chart").getContext("2d");
        new Chart(ctx, config);



        let projects = [];
        let completedProjects = [];


        function addSelectedProject() {
            const selectedProject = document.getElementById("projectSelect").value;
            const newProject = {
                name: selectedProject,
                imageUrl: projectTemplates[selectedProject].imageUrl,
                progress: 0,
                impact: projectTemplates[selectedProject].impact,
                tags: projectTemplates[selectedProject].tags,
                total: projectTemplates[selectedProject].total,
            };


            projects.push(newProject);
            displayProjects();


            // Close the modal
            $("#projectModal").modal("hide");
        }


        function updateProject(projectId, index) {
            const project = projects[index];
            if (project.progress < 100) {
                project.progress += 15;
                if (project.progress > 100) project.progress = 100;
            }
            displayProjects();
        }


        function deleteProject(projectId, index) {
            projects.splice(index, 1);
            displayProjects();
        }


        function completeProject(projectId, index) {
            const project = projects[index];
            projects.splice(index, 1);
            completedProjects.push({
                name: project.name,
                completionDate: "Oct 17, 2023",
                status: "SELESAI"
            });
            displayProjects();
        }


        function updateProjectCount() {
            const projectCountElement = document.querySelector(".all-projects-title");
            projectCountElement.textContent = All projects (${projects.length});

            const ongoingProjectCountElement = document.querySelector(
                "#dropdownMenuButton2"
            );
            ongoingProjectCountElement.textContent = ${projects.length} of ${projects.length};
        }


        function renderCalendar() {
            const calendarBody = document.getElementById("calendar-body");
            calendarBody.innerHTML = "";
            const daysInMonth = 31;
            const startDayOfWeek = 3; // Assuming the month starts on Wednesday (index 3)
            const status = ["Present", "Sick leave", "Absent", "Holiday"];
            const statusClasses = ["present", "sick-leave", "absent", "holiday"];


            let dayCounter = 1;


            for (let i = 0; i < 5; i++) {
                // Assume 5 weeks in a month
                let row = "<tr>";
                for (let j = 0; j < 7; j++) {
                    if (i === 0 && j < startDayOfWeek) {
                        row += "<td></td>";
                    } else if (dayCounter <= daysInMonth) {
                        const randomStatusIndex = Math.floor(
                            Math.random() * status.length
                        );
                        const dayStatus = status[randomStatusIndex];
                        const dayStatusClass = statusClasses[randomStatusIndex];
                        row += <td><div class="${dayStatusClass}">${dayStatus}</div><div>${dayCounter}</div></td>;
                        dayCounter++;
                    } else {
                        row += "<td></td>";
                    }
                }
                row += "</tr>";
                calendarBody.innerHTML += row;
            }
        }


        // Initial display
        updateProjectCount();
        renderCalendar();
        displayProjects();

        document.addEventListener("DOMContentLoaded", function () {
            setTimeout(function () {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 1000); // 3000 milidetik = 3 detik
        });
    </script>
</body>

@endsection
