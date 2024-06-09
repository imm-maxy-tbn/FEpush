document.addEventListener("DOMContentLoaded", function () {
    var metricItems = document.querySelectorAll(".metric-item");

    metricItems.forEach(function (item) {
        item.addEventListener("click", function () {
            var checkbox = item.querySelector(".metric-checkbox");
            checkbox.checked = !checkbox.checked;
        });
    });
});
