document.addEventListener("DOMContentLoaded", function () {
    var sdgGoals = document.querySelectorAll(".sdg-goal");

    sdgGoals.forEach(function (goal) {
        goal.addEventListener("click", function () {
            var target = document.querySelector(
                goal.getAttribute("data-target")
            );
            var descriptionVisible = target.classList.contains("show");

            if (!descriptionVisible) {
                target.classList.remove("hide");
                target.classList.add("show");
            } else {
                target.classList.remove("show");
                target.classList.add("hide");
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    setTimeout(function () {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 3000 milidetik = 3 detik
});
