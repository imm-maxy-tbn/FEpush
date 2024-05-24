document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("performance-chart").getContext("2d");
    var chart = new Chart(ctx, {
        type: "bar", // Change this to the type of chart you want
        data: {
            labels: [
                "Wells Fargo",
                "State Employees",
                "PNC",
                "SunTrust",
                "Fidelity",
            ],
            datasets: [
                {
                    label: "Score",
                    data: [3, 4, 5, 2, 6],
                    backgroundColor: "rgba(54, 162, 235, 0.6)",
                    borderColor: "rgba(54, 162, 235, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
});
