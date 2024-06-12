document.addEventListener("DOMContentLoaded", (event) => {
    const ctx = document.getElementById("myChart").getContext("2d");
    const myChart = new Chart(ctx, {
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
                    label: "Metrix : Bias-Reducing Investment Practices",
                    data: [2300, 4100, 6100, 4200, 7000, 6500, 6000],
                    backgroundColor: "rgba(103, 58, 183, 0.6)",
                    borderColor: "rgba(103, 58, 183, 1)",
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

    // Add event listeners for Reset Data and Simpan Data buttons
    document
        .querySelector(".btn-outline-primary")
        .addEventListener("click", () => {
            document
                .querySelectorAll('.metric-inputs input[type="number"]')
                .forEach((input) => (input.value = ""));
            document.querySelector(".form-range").value = 50;
        });

    document.querySelector(".btn-primary").addEventListener("click", () => {
        alert("Data berhasil disimpan!");
    });
});
