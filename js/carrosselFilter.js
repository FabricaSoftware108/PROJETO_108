var carrossels = document.getElementsByClassName("fabricaCarrossel");

document.querySelector("#fabricasFilter").addEventListener("input", (e) => {
    for(var i = 0; i <= carrossels.length; i++){
        if(!carrossels[i].id.includes(e.target.value.toLowerCase())){
            carrossels[i].classList.add("d-none")
        }else{
            carrossels[i].classList.remove("d-none")
        }
            
        
    }
})