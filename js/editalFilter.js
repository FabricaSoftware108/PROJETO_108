var category = document.getElementsByClassName('editalRelat');

var w;

document.querySelector("#relatorioAlunoAdmInput").addEventListener("input", function(e){
    for (let i = 0; i < category.length; i++) {
        if(!category[i].className.includes(e.target.value)){
            category[i].classList.add("d-none")

        }
        else{
            category[i].classList.remove("d-none")
        }
    }
})