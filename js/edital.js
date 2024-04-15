

document.addEventListener('DOMContentLoaded', function () {
    var edital = document.getElementById("inscricoes1");
    if (edital) {
        edital.style.display = "none";  // Initial state: hidden
    }
});

function toggletabble_inscricoes1() {
    var ins1 = document.getElementById("inscricoes1");
    var ins2 = document.getElementById("inscricoes2");
    


    if (ins1.style.display === "" || ins1.style.display === "none") {
        ins1.style.display = "block";
        ins2.style.display = "none";
        
    } else {
        ins1.style.display = "none";
    }

    
}
document.addEventListener('DOMContentLoaded', function () {
    var edital = document.getElementById("inscricoes2");
    if (edital) {
        edital.style.display = "none";  // Initial state: hidden
    }
});

function toggletabble_inscricoes2() {
    var ins1 = document.getElementById("inscricoes1");
    var ins2 = document.getElementById("inscricoes2");
    

    if (ins2.style.display === "" || ins2.style.display === "none") {
        ins2.style.display = "block";
        ins1.style.display = "none";
        
    } else {
        ins2.style.display = "none";
    }
}


