var category = document.getElementsByClassName('editalRelat');

document.querySelector("#relatorioAlunoAdmInput").addEventListener("input", function(e){
    for (let i = 0; i < category.length; i++) {
        if(!category[i].id.includes(e.target.value)){
            category[i].classList.add("d-none")

        }
        else{
            category[i].classList.remove("d-none")
        }
    }
})