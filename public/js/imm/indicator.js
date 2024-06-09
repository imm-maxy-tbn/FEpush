document.addEventListener("DOMContentLoaded", function () {
    var selectedSDGs = JSON.parse(localStorage.getItem("selectedSDGs")) || [];
    var sdgContainer = document.getElementById("selected-sdgs");

    selectedSDGs.forEach(function (sdg) {
        var sdgItem = document.querySelector(`.sdg-item[data-sdg="${sdg}"]`);
        if (sdgItem) {
            var clonedItem = sdgItem.cloneNode(true);
            clonedItem.querySelector(".sdg-checkbox").remove();
            sdgContainer.appendChild(clonedItem);
        }
    });
});
