document.addEventListener("DOMContentLoaded", function() {
    var checkbox = document.getElementById("subscribe");
    var subContainer = document.getElementById("sub-container");

    checkbox.addEventListener("change", function() {
        if (checkbox.checked) {
            subContainer.style.display = "block"; // Menampilkan sub-container jika checkbox dicentang
        } else {
            subContainer.style.display = "none"; // Menyembunyikan sub-container jika checkbox tidak dicentang
        }
    });

    var sdgGoals = document.querySelectorAll(".sdg-goal");

    sdgGoals.forEach(function(goal) {
        goal.addEventListener("click", function() {
            var target = document.querySelector(goal.getAttribute("data-target"));
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

    setTimeout(function() {
        var loading = document.getElementById("loading");
        loading.style.display = "none"; // Menghilangkan efek loading setelah waktu tunggu
    }, 1000); // 1000 milidetik = 1 detik
});