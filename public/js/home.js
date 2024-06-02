document.addEventListener("DOMContentLoaded", function () {
    const yearSelector = document.getElementById("yearSelector");
    const totalBalanceElement = document.getElementById("totalBalance");
    const totalOutcomeElement = document.getElementById("totalOutcome");
    const ctx = document.getElementById("myChart").getContext("2d");
    const progressBar = document.querySelector(".progress-bar");

    const data = {
        2023: {
            income: [30, 25, 35, 40, 45, 50, 55, 60],
            outcome: [20, 30, 25, 35, 40, 45, 50, 55],
            balance: "Rp.40.000.000",
            outcomeTotal: "Rp.30.000.000",
        },
        2024: {
            income: [40, 30, 20, 25, 40, 35, 20, 15],
            outcome: [20, 30, 25, 35, 40, 45, 50, 55],
            balance: "Rp.50.000.000",
            outcomeTotal: "Rp.10.000.000",
        },
        2025: {
            income: [50, 40, 30, 35, 50, 45, 30, 25],
            outcome: [20, 30, 25, 35, 40, 45, 50, 55],
            balance: "Rp.60.000.000",
            outcomeTotal: "Rp.20.000.000",
        },
    };

    const myChart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
            datasets: [
                {
                    label: "Income",
                    backgroundColor: "#6A5ACD",
                    data: data["2023"].income,
                },
                {
                    label: "Outcome",
                    backgroundColor: "#87CEEB",
                    data: data["2023"].outcome,
                },
            ],
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: "top",
                },
                tooltip: {
                    mode: "index",
                    intersect: false,
                },
            },
            scales: {
                x: {
                    beginAtZero: true,
                },
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function (value) {
                            return value + "K";
                        },
                    },
                },
            },
        },
    });

    yearSelector.addEventListener("change", function () {
        const selectedYear = yearSelector.value;
        myChart.data.datasets[0].data = data[selectedYear].income;
        myChart.data.datasets[1].data = data[selectedYear].outcome;
        myChart.update();

        totalBalanceElement.textContent = data[selectedYear].balance;
        totalOutcomeElement.textContent = data[selectedYear].outcomeTotal;

        updateProgressBar(selectedYear);
    });

    function updateProgressBar(selectedYear) {
        if (selectedYear === "2024") {
            progressBar.style.width = "20%";
            progressBar.setAttribute("aria-valuenow", "20");
        } else if (selectedYear === "2023") {
            progressBar.style.width = "40%";
            progressBar.setAttribute("aria-valuenow", "40");
        } else if (selectedYear === "2025") {
            progressBar.style.width = "60%";
            progressBar.setAttribute("aria-valuenow", "60");
        } else {
            progressBar.style.width = "0%";
            progressBar.setAttribute("aria-valuenow", "0");
        }
    }

    // Set initial state
    updateProgressBar(yearSelector.value);
});

document.addEventListener("DOMContentLoaded", function () {
    const notificationSection = document.querySelector(".notification-section");
    const dropdownContent = document.getElementById("dropdownContent");

    notificationSection.addEventListener("click", function () {
        this.classList.toggle("active");
    });

    window.addEventListener("click", function (event) {
        if (!notificationSection.contains(event.target)) {
            notificationSection.classList.remove("active");
        }
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const gridItems = document.querySelectorAll(".grid-item");

    gridItems.forEach((item) => {
        item.addEventListener("click", function () {
            this.classList.toggle("active");
        });
    });

    const submitButton = document.querySelector(".submit-button");
    submitButton.addEventListener("click", function () {
        const selectedItems = document.querySelectorAll(".grid-item.active");
        const selectedIndexes = Array.from(selectedItems).map((item) =>
            item.getAttribute("data-index")
        );
        alert("Selected SDGs: " + selectedIndexes.join(", "));
    });
});

document.addEventListener("DOMContentLoaded", function () {
    const cityOverlays = document.querySelectorAll(".city-overlay");
    const locationInfo = document.getElementById("location-info");

    cityOverlays.forEach((overlay) => {
        overlay.addEventListener("click", function () {
            cityOverlays.forEach((o) => o.classList.remove("active"));
            this.classList.add("active");
            const cityName = this.getAttribute("data-city");
            locationInfo.textContent = cityName;
        });
    });
});
