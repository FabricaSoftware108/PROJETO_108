document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("audio_visual_oferta1");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_audio_visual_oferta1() {
    var table = document.getElementById("audio_visual_oferta1");

    if (table.style.display === "" || table.style.display === "none") {
        table.style.display = "block";
    } else {
        table.style.display = "none";
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("audio_visual_oferta2");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_audio_visual_oferta2() {
    var table = document.getElementById("audio_visual_oferta2");

    if (table.style.display === "" || table.style.display === "none") {
        table.style.display = "block";
    } else {
        table.style.display = "none";
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("audio_visual_oferta3");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_audio_visual_oferta3() {
    var table = document.getElementById("audio_visual_oferta3");

    if (table.style.display === "" || table.style.display === "none") {
        table.style.display = "block";  
    } else {
        table.style.display = "none";
    }
}
