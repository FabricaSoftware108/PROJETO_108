document.addEventListener('DOMContentLoaded', function () {
    initializeDropdown("audio_visual_oferta1");
    initializeDropdown("audio_visual_oferta2");
    initializeDropdown("audio_visual_oferta3");
});

function initializeDropdown(id) {
    var table = document.getElementById(id);

    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }

    table.addEventListener('click', function () {
        toggleTable(id);
    });
}

function toggleTable(id) {
    var table = document.getElementById(id);

    if (table.style.display === "" || table.style.display === "none") {
        closeAllDropdowns();
        table.style.display = "block";
    } else {
        table.style.display = "none";
    }
}

function closeAllDropdowns() {
    var dropdowns = document.querySelectorAll('.container-grad-table');

    dropdowns.forEach(function (dropdown) {
        dropdown.style.display = "none";
    });
}
