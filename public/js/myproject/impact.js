document.addEventListener("DOMContentLoaded", function () {
    var ctx = document.getElementById("metrixChart").getContext("2d");
    var chart = new Chart(ctx, {
        type: "bar",
        data: {
            labels: [
                "Bulan Januari",
                "Bulan Februari",
                "Bulan Maret",
                "Bulan April",
                "Bulan Mei",
                "Bulan Juni",
                "Bulan Juli",
            ],
            datasets: [
                {
                    label: "Bias-Reducing Investment Practices",
                    data: [2500, 4100, 6100, 4200, 7000, 6500, 6000],
                    backgroundColor: "rgba(89, 64, 203, 0.6)",
                    borderColor: "rgba(89, 64, 203, 1)",
                    borderWidth: 1,
                },
            ],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });

    document.querySelectorAll(".document-tab").forEach(function (tab) {
        tab.addEventListener("click", function () {
            document.querySelectorAll(".document-tab").forEach(function (t) {
                t.classList.remove("active");
            });
            tab.classList.add("active");
            // You can add functionality to change document files here
        });
    });

    document.querySelectorAll(".survey-tab").forEach(function (tab) {
        tab.addEventListener("click", function () {
            document.querySelectorAll(".survey-tab").forEach(function (t) {
                t.classList.remove("active");
            });
            tab.classList.add("active");
            // You can add functionality to change survey files here
        });
    });
});
