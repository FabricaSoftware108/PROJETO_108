

document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("oferta1");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_oferta1() {
    var of1 = document.getElementById("oferta1");
    var of2 = document.getElementById("oferta2");
    var of3 = document.getElementById("oferta3");


    if (of1.style.display === "" || of1.style.display === "none") {
        of1.style.display = "block";
        of2.style.display = "none";
        of3.style.display = "none";
    } else {
        of1.style.display = "none";
    }

    
}
document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("oferta2");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_oferta2() {
    var of1 = document.getElementById("oferta1");
    var of2 = document.getElementById("oferta2");
    var of3 = document.getElementById("oferta3");

    if (of2.style.display === "" || of2.style.display === "none") {
        of2.style.display = "block";
        of1.style.display = "none";
        of3.style.display = "none";
    } else {
        of2.style.display = "none";
    }
}
document.addEventListener('DOMContentLoaded', function () {
    var table = document.getElementById("oferta3");
    if (table) {
        table.style.display = "none";  // Initial state: hidden
    }
});

function toggleTable_oferta3() {
    var of1 = document.getElementById("oferta1");
    var of2 = document.getElementById("oferta2");
    var of3 = document.getElementById("oferta3");

    if (of3.style.display === "" || of3.style.display === "none") {
        of3.style.display = "block";  
        of1.style.display = "none";
        of2.style.display = "none";
    } else {
        of3.style.display = "none";
    }
}
