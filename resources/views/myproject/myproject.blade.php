@extends('layouts.app-imm')
@section('title', '')

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
    .seeAll{
         display: flex;
         align-items: center;
         cursor: pointer;
    }
</style>
@endsection
@section('content')


<body>

 
    <div class="container">
        <h2 class="project-title">Draft Project</h2>
        <div class="row mt-5">
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
        <div class="section d-flex justify-content-between justify-content-center">
        <h4 class="project-title mb-5 mt-5">Semua Proyek ({{ $projects->count() }})</h4>
        @if(count($projects) > 6) <h5 class="seeAll" id="show-all-btn">Lihat Semua</h5>@endif
    </div> 


   
    <div class="row mt-3" id="draft-project-list">
        <div class="col-md-12 no-projects mt-3">
            @if($projects->isEmpty())
                <p>Tidak ada proyek yang ditemukan.</p>
            @else
                <div class="row">
                    @foreach($projects as $index => $project)
                        <div class="col-md-4 mb-4" id="project-{{ $project->id }}" @if($index >= 6) style="display: none;" @endif>
                            <div class="card project-card" style="min-height: 300px">
                                <img height="150px" src="{{ env('APP_BACKEND_URL') . '/images/' . $project->img }}" class="card-img-top" alt="">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $project->nama }}</h5>
                                    <button class="btn btn-danger mt-2" onclick="deleteProject('project-{{ $project->id }}', {{ $index }})">Delete</button>
                                    <a href="{{ route('projects.view', $project->id) }}" class="btn btn-secondary btn-detail mt-2">Detail</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
              
            @endif
        </div>
    </div>
   
    </div>

    <div class="container">
        <h2 class="project-title mb-5 mt-5">On Going Project</h2>
        <div class="d-flex justify-content-between align-items-center mt-3 ongoing-projects-filters">
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Today
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Today</a>
                    <a class="dropdown-item" href="#">This Week</a>
                    <a class="dropdown-item" href="#">This Month</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton2"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                @foreach($projects as $project)
                <tr>
                    <td>{{ $project->nama }}</td>
                    <td>{{ $project->start_date }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td>{{ $project->sdgs->implode('order', ', ') }}</td>
                    <td>{{ $project->jumlah_pendanaan }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Modal -->
  

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
            <table class="table mt-3 done-projects-table">
                <thead>
                    <tr>
                        <th>Nama Proyek</th>
                        <th>tanggal penyelesaian</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="done-project-list">
                    <!-- Existing completed projects -->
                    @foreach($projects as $project)
                <tr>
                    <td>{{ $project->nama }}</td>
                    <td>{{ $project->end_date }}</td>
                    <td><div class="span bg-success text-white" style="padding: 5px 0; border-radius:50px">Succes</div></td>
             
                </tr>
                @endforeach
                </tbody>
            </table>
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

        const projectTemplates = {
            "Maths Department": {
                imageUrl: "images/25.png",
                impact: "Medium",
                tags: "Education",
                total: "Rp 7.000.000",
            },
            "Chemistry Department": {
                imageUrl: "images/20.png",
                impact: "High",
                tags: "Science",
                total: "Rp 8.000.000",
            },
            "Physics Department": {
                imageUrl: "images/21.png",
                impact: "Low",
                tags: "Research",
                total: "Rp 6.000.000",
            },
            "Computer Department": {
                imageUrl: "images/24.png",
                impact: "Medium",
                tags: "Technology",
                total: "Rp 7.500.000",
            },
            "English Department": {
                imageUrl: "images/22.png",
                impact: "Medium",
                tags: "Language",
                total: "Rp 7.000.000",
            },
            "Social Department": {
                imageUrl: "images/23.png",
                impact: "High",
                tags: "Community",
                total: "Rp 8.000.000",
            },
        };

        let projects = [];
        let completedProjects = [
            {
                name: "Social Department",
                completionDate: "Oct 17, 2023",
                status: "SELESAI"
            },
            {
                name: "Computer Department",
                completionDate: "Oct 17, 2023",
                status: "SELESAI"
            },
            {
                name: "Chemistry Department",
                completionDate: "Oct 17, 2023",
                status: "SELESAI"
            },
            {
                name: "Math Department",
                completionDate: "Oct 17, 2023",
                status: "SELESAI"
            }
        ];

        function displayProjects() {
            const draftProjectList = document.getElementById("draft-project-list");
            const ongoingProjectList = document.getElementById("ongoing-project-list");
            const seeAllButton = document.getElementById("see-all-button");

            draftProjectList.innerHTML = "";
            ongoingProjectList.innerHTML = "";

            if (projects.length === 0) {
                draftProjectList.innerHTML = `
                    <div class="col-md-12 no-projects mt-3">
                        <p>Belum memiliki project apapun.</p>
                    </div>
                `;
                ongoingProjectList.innerHTML = `
                    <tr>
                        <td colspan="5" class="text-center no-ongoing-projects">Tidak ada project yang sedang berjalan.</td>
                    </tr>
                `;
                seeAllButton.style.display = "none";
            } else {
                projects.slice(0, 6).forEach((project, index) => {
                    const newProjectId = `project-${index + 1}`;
                    const draftProject = `
                        <div class="col-md-4" id="${newProjectId}">
                            <div class="card project-card">
                                <img src="${project.imageUrl}" class="card-img-top" alt="${project.name}">
                                <div class="card-body">
                                    <h5 class="card-title">${project.name}</h5>
                                    <button class="btn btn-danger mt-2" onclick="deleteProject('${newProjectId}', ${index})">Delete</button>
                                    <a href="detail" class="btn btn-secondary btn-detail mt-2">Detail</a>
                                    ${project.progress === 100 ? `<button class="btn btn-success mt-2" onclick="completeProject('${newProjectId}', ${index})">FINISHED</button>` : ""}
                                </div>
                            </div>
                        </div>
                    `;
                    draftProjectList.innerHTML += draftProject;

                    const ongoingProject = `
                        <tr id="ongoing-${newProjectId}">
                            <td>${project.name}</td>
                            <td>Oct 17, 2023</td>
                            <td>${project.impact}</td>
                            <td>${project.tags}</td>
                            <td>${project.total}</td>
                        </tr>
                    `;
                    ongoingProjectList.innerHTML += ongoingProject;
                });

                if (projects.length > 6) {
                    seeAllButton.style.display = "block";
                } else {
                    seeAllButton.style.display = "none";
                }
            }

            displayCompletedProjects();
            updateProjectCount();
        }

        function showAllProjects() {
            const draftProjectList = document.getElementById("draft-project-list");

            draftProjectList.innerHTML = "";

            projects.forEach((project, index) => {
                const newProjectId = `project-${index + 1}`;
                const draftProject = `
                    <div class="col-md-4" id="${newProjectId}">
                        <div class="card project-card">
                            <img src="${project.imageUrl}" class="card-img-top" alt="${project.name}">
                            <div class="card-body">
                                <h5 class="card-title">${project.name}</h5>
                                <div class="progress">
                                    <div class="progress-bar" role="progressbar" style="width: ${project.progress}%;" aria-valuenow="${project.progress}" aria-valuemin="0" aria-valuemax="100">${project.progress}% completed</div>
                                </div>
                                <button class="btn btn-secondary mt-2" onclick="updateProject('${newProjectId}', ${index})">Update</button>
                                <button class="btn btn-danger mt-2" onclick="deleteProject('${newProjectId}', ${index})">Delete</button>
                                <a href="detail" class="btn btn-secondary btn-detail mt-2">Detail</a>
                                ${project.progress === 100 ? `<button class="btn btn-success mt-2" onclick="completeProject('${newProjectId}', ${index})">FINISHED</button>` : ""}
                            </div>
                        </div>
                    </div>
                `;
                draftProjectList.innerHTML += draftProject;
            });
        }

        function displayCompletedProjects() {
            const doneProjectList = document.getElementById("done-project-list");
            doneProjectList.innerHTML = "";

            if (completedProjects.length === 0) {
                doneProjectList.innerHTML = `
                    <tr>
                        <td colspan="4" class="text-center no-done-projects">Tidak ada project yang terselesaikan.</td>
                    </tr>
                `;
            } else {
                completedProjects.forEach((project, index) => {
                    const completedProject = `
                        <tr id="done-project-${index + 1}">
                            <td>${project.name}</td>
                            <td>${project.completionDate}</td>
                            <td><span class="badge badge-success">${project.status}</span></td>
                        </tr>
                    `;
                    doneProjectList.innerHTML += completedProject;
                });
            }
        }

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
            const projectCountElement = document.querySelector(".project-title.mb-5.mt-5");
            projectCountElement.textContent = `All projects (${projects.length})`;

            const ongoingProjectCountElement = document.querySelector("#dropdownMenuButton2");
            ongoingProjectCountElement.textContent = `${projects.length} of ${projects.length}`;
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
                        row += `<td><div class="${dayStatusClass}">${dayStatus}</div><div>${dayCounter}</div></td>`;
                        dayCounter++;
                    } else {
                        row += "<td></td>";
                    }
                }
                row += "</tr>";
                calendarBody.innerHTML += row;
            }
        }


    </script><script>
    document.querySelector('.seeAll').addEventListener('click', function() {
        document.querySelectorAll('#draft-project-list .col-md-4').forEach(function(project, index) {
            if (index >= 6) {
                project.style.display = 'block';
            }
        });
        document.querySelector('.seeAll').style.display = 'none';
    });

    document.getElementById('show-all-btn').addEventListener('click', function() {
        document.querySelectorAll('#draft-project-list .col-md-4').forEach(function(project) {
            project.style.display = 'block';
        });
        document.getElementById('show-all-btn').style.display = 'none';
    });
</script>
</body>

@endsection
