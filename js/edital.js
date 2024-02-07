document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("inscricoes");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_inscricoes() {
    var seta = document.getElementById("inscricoes");

    if (seta.style.display === "" || seta.style.display === "none") {
        seta.style.display = "none";
    } else {
        seta.style.display = "none";
    }
}