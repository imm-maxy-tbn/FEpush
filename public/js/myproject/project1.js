// Data for the chart
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
let completedProjects = [];

function displayProjects() {
    const draftProjectList = document.getElementById("draft-project-list");
    const ongoingProjectList = document.getElementById("ongoing-project-list");

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
    } else {
        projects.forEach((project, index) => {
            const newProjectId = `project-${index + 1}`;
            const draftProject = `
                <div class="col-md-4" id="${newProjectId}">
                    <div class="card project-card">
                        <img src="${
                            project.imageUrl
                        }" class="card-img-top" alt="${project.name}">
                        <div class="card-body">
                            <h5 class="card-title">${project.name}</h5>
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: ${
                                    project.progress
                                }%;" aria-valuenow="${
                project.progress
            }" aria-valuemin="0" aria-valuemax="100">${
                project.progress
            }% completed</div>
                            </div>
                            <button class="btn btn-secondary mt-2" onclick="updateProject('${newProjectId}', ${index})">Update</button>
                            <button class="btn btn-danger mt-2" onclick="deleteProject('${newProjectId}', ${index})">Delete</button>
                            <a href="detail" class="btn btn-secondary btn-detail mt-2">Detail</a>
                            ${
                                project.progress === 100
                                    ? `<button class="btn btn-success mt-2" onclick="completeProject('${newProjectId}', ${index})">FINISHED</button>`
                                    : ""
                            }
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
    }

    displayCompletedProjects();
    updateProjectCount();
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
                    <td>Oct 17, 2023</td>
                    <td><span class="status-finished">FINISHED</span></td>
                    <td><i class="fas fa-download download-icon"></i></td>
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
    completedProjects.push(project);
    displayProjects();
}

function updateProjectCount() {
    const projectCountElement = document.querySelector(".all-projects-title");
    projectCountElement.textContent = `All projects (${projects.length})`;

    const ongoingProjectCountElement = document.querySelector(
        "#dropdownMenuButton2"
    );
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
