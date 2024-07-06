@extends('layouts.app-imm')
@section('title', 'Proyek Saya')

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
<style>html,
    body {
        font-family: "Roboto", sans-serif;
        margin: 0;
        padding-top: 60px;
    }
    
    * {
        text-decoration: none;
        list-style-type: none;
    }
    
    .project-title,
    .project-titlee,
    .done-projects-title,
    .done-projects-titlee {
        font-weight: bold;
        border-left: 4px solid #6c63ff;
        padding-left: 10px;
        color: #333;
        margin-bottom: 20px;
        position: relative;
    }
    
    .project-titlee,
    .done-projects-titlee {
        top: -33px;
    }
    
    .input-group {
        border-radius: 12px;
        display: flex;
        align-items: stretch;
        width: 71%;
        margin-top: 20px;
    }
    
    .search-input {
        border: 1px solid #c5c5f7;
        border-right: none;
        border-radius: 5px 0 0 5px;
    }
    
    .search-icon {
        background-color: #ffffff;
        border: 1px solid #c5c5f7;
        border-left: none;
        color: #948d8d;
        border-radius: 0 5px 5px 0;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .btn-create-project {
        background-color: #6c63ff;
        border: none;
        border-radius: 14px;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        margin-top: 20px;
    }
    
    .btn-create-project:hover {
        background-color: #574dcf;
    }
    
    .no-projects {
        background-color: #f6f6ff;
        border: 1px solid #e2e2f7;
        border-radius: 28px;
        padding: 55px;
        text-align: center;
        color: #555;
        width: 88%;
        margin: 0 auto;
    }
    
    .no-projects p {
        margin: 0;
        font-weight: bold;
    }
    
    .see-all {
        color: #333;
        font-weight: bold;
        text-decoration: none;
        position: absolute;
        top: -28px;
        right: 145px;
    }
    
    .see-all:hover {
        text-decoration: underline;
    }
    
    .all-projects-title,
    .ongoing-projects-title {
        font-weight: bold;
        font-size: 20px;
        margin-top: 100px;
    }
    
    .table thead th,
    .done-projects-table thead th {
        background-color: #c5c5f7;
        border: none;
        color: #333;
        font-weight: bold;
        text-align: center;
    }
    
    .table tbody tr td,
    .done-projects-table tbody tr td {
        background-color: #f6f6ff;
    width: .55rem;
        color: #555;
        text-align: center;
    }
    
    .pagination .page-item.active .page-link {
        background-color: #6c63ff;
        border-color: #6c63ff;
        color: #fff;
    }
    
    .pagination .page-link {
        color: #6c63ff;
    }
    
    .pagination .page-link:hover {
        background-color: #f0f0f0;
    }
    
    .done-projects-card {
        width: 88%;
        padding: 20px;
        border-radius: 28px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        background-color: #f8f9fa;
    }
    
    .done-projects-header {
        background-color: #f8f9fa;
        border-bottom: none;
        font-weight: bold;
        font-size: 18px;
    }
    
    .done-projects-dropdown-toggle {
        border-radius: 30px;
        padding: 10px 20px;
        color: #6c63ff;
        border: 1px solid #6c63ff;
        font-size: 18px;
    }
    
    .stats-box {
        border: 1px solid #e2e2f7;
        border-radius: 10px;
        padding: 20px;
        background-color: #f8f9fa;
    }
    
    .stats-box h4 {
        font-size: 1.2rem;
        color: #555;
    }
    
    .stats-box .number {
        font-size: 2.5rem;
        font-weight: bold;
        margin-top: 10px;
    }
    
    .text-success {
        color: #28a745 !important;
    }
    
    .text-warning {
        color: #ffc107 !important;
    }
    
    .stats-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }
    
    .stats-header {
        background-color: #3b6978;
        color: white;
        padding: 15px;
        font-weight: bold;
        display: flex;
        justify-content: space-between;
    }
    
    .stats-value {
        font-size: 1.5rem;
    }
    
    .completion-circle {
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background-color: #e0e0e0;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.5rem;
    }
    
    .total-responses {
        font-size: 3rem;
        color: #28a745;
        margin-top: 103px;
    }
    
    .responses-text {
        font-size: 1.2rem;
        color: #555;
    }
    
    .responses-line {
        width: 80%;
        height: 2px;
        background-color: #6c63ff;
        margin: 10px auto 0;
    }
    
    .start-survey-btn {
        background-color: #6c63ff;
        color: white;
        padding: 15px 30px;
        border-radius: 30px;
        font-size: 1.2rem;
        font-weight: bold;
        border: none;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        text-align: center;
        text-decoration: none;
    }
    
    .start-survey-btn:hover {
        background-color: #574dcf;
    }
    
    .project-card {
        margin-bottom: 20px;
    }
    
    .project-card .card-title {
        font-weight: bold;
        color: #333;
    }
    
    .project-card .progress {
        height: 10px;
        border-radius: 5px;
        background-color: #e9ecef;
    }
    
    .project-card .progress-bar {
        background-color: #6c63ff;
    }
    
    .btn-secondary {
        background-color: #6c63ff;
        border: none;
        margin-right: 10px;
    }
    
    .btn-secondary:hover {
        background-color: #574dcf;
    }
    
    .btn-danger {
        background-color: #dc3545;
    }
    
    .btn-danger:hover {
        background-color: #c82333;
    }
    
    .project-title {
        font-size: 24px;
        font-weight: bold;
        color: #050505;
    }
    
    .download-icon {
        font-size: 20px;
        color: #333;
        cursor: pointer;
    }
    
    .present {
        background-color: #28a745;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }
    
    .absent {
        background-color: #dc3545;
        color: white;
        padding: 5px 10px;
        border-radius: 5px;
        font-weight: bold;
    }
    
    .btn-create-new-project{
        background-color: #6c63ff;
        border: none;
        border-radius: 14px;
        color: #fff;
        font-weight: bold;
        padding: 10px 20px;
        margin: 5px;
    }
    
    .btn-create-new-project:hover {
        background-color: #574dcf;
    }
    
    .btn-detail {
        background-color: #6c757d;
        border-color: #6c757d;
        color: #ffffff;
    }
    
    .btn-detail:hover {
        background-color: #5a6268;
        border-color: #545b62;
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
    
    .seeAll {
        display: flex;
        align-items: center;
        cursor: pointer;
    }
    
    @media (max-width: 768px) {

        body{
            padding-top: 40px;
        }

        .seeAll{
            font-size: 10px;
        }
        .project-title,
        .project-titlee,
        .done-projects-title,
        .done-projects-titlee {
            font-size: 14px;

        }
    
        .input-group {
            width: 100%;
            margin-top: 10px;
        }
    
        .btn-create-project {
            width: 50%;
            margin-top: 10px;
        }
    
        .no-projects {
            width: 100%;
        }
    
        .see-all {
            top: -15px;
            right: 10px;
        }
    
        .project-card {
            width: 100%;
            margin-bottom: 20px;
        }
    
        .see-all-button {
            text-align:        center;
        margin-top: 20px;
    }

    .stats-box,
    .stats-card {
        width: 100%;
        margin-bottom: 20px;
    }

    .table td, .table th {
    padding: .55rem;
    vertical-align: top;
    border-top: 1px solid #dee2e6;
}
    .responses-text {
        font-size: 1rem;
    }

    .project-title {
        font-size: 15px;
    }

    .done-projects-card {
        width: 100%;
    }

    .pagination {
        justify-content: center;
    }

    .dropdown-menu {
        width: 100%;
    }

    .done-projects-dropdown-toggle,
    .stats-box .number {
        font-size: 1rem;
    }
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
                        <span class="input-group-text search-icon" aria-label="Search Button"><i class="fas fa-search"></i></span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-right">
                <a href="creatproject">
                    <button class=" btn-primary btn-create-project">Create New Project</button>
                </a>
            </div>
        </div>
        <div class="section d-flex justify-content-between justify-content-center">
            <h4 class="project-title mb-5 mt-5">Semua Proyek ({{ $allProjects->count() }})</h4>
            @if($allProjects->count() > 6)
                <h5 class="seeAll" id="show-all-btn">Lihat Semua</h5>
            @endif
        </div>

        <div class="row mt-3" id="draft-project-list">
            <div class="col-md-12 no-projects mt-3">
                @if($allProjects->isEmpty())
                    <p>Tidak ada proyek yang ditemukan.</p>
                @else
                    <div class="row">
                        @foreach($allProjects as $index => $project)
                            <div class="col-md-4 mb-4" id="project-{{ $project->id }}" @if($index >= 6) style="display: none;" @endif>
                                <div class="card project-card" style="min-height: 150px">
                                    <img height="150px" src="{{ $project->img ? asset('images/' . $project->img) : asset('images/default_project.png') }}" class="card-img-top" alt="">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $project->nama }}</h5>
                                        <div class="d-flex justify-content-center">
                                            <a href="detail/{{ $project->id }}" class="btn btn-secondary btn-detail mt-2">Detail</a>
                                            <form action="{{ route('projects.destroy', $project->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger mt-2" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endif
            </div>
        </div>

        <div class="container">
            <h2 class="project-title mb-5 mt-5">Proyek yang sedang dikerjakan</h2>
            <div class="d-flex justify-content-between align-items-center mt-3 ongoing-projects-filters">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Hari ini
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
                        <th>Tanggal Mulai</th>
                        <th>Tenggat Waktu</th>
                        <th>Tujuan SDGs</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody id="ongoing-project-list">
                    @foreach($ongoingProjects as $project)
                        <tr>
                            <td>{{ $project->nama }}</td>
                            <td>{{ $project->start_date }}</td>
                            <td>{{ $project->end_date }}</td>
                            <td>{{ $project->sdgs->implode('order', ', ') }}</td>
                            <td>{{ 'Rp' . number_format($project->jumlah_pendanaan, 0, ',', '.') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <h2 class="project-title mb-5 mt-5">Proyek Selesai</h2>
            <div class="d-flex justify-content-between align-items-center mt-3 ongoing-projects-filters">
                <div class="dropdown">
                    <button class="btn btn-outline-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Proyek Selesai
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
            <table class="table mt-3 done-projects-table">
                <thead>
                    <tr>
                        <th>Nama Proyek</th>
                        <th>Tanggal Penyelesaian</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody id="done-project-list">
                    @foreach($completedProjects as $project)
                        <tr>
                            <td>{{ $project->nama }}</td>
                            <td>{{ $project->tanggal_penyelesaian }}</td>
                            <td><div class="span bg-success text-white" style="padding: 5px 0; border-radius:50px">{{ $project->status }}</div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </div>



    <!-- JavaScript Libraries -->
    
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            setTimeout(function() {
                var loading = document.getElementById("loading");
                loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
            }, 1000); // 3000 milidetik = 3 detik
        });
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
