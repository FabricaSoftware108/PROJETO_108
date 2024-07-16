// Pedro Diniz Santana

document.querySelector('.dev1').addEventListener("mouseenter", function(){
    document.querySelector(".dev1").style.border = "#CC3E52 solid 1px";
    document.querySelector("#devSocialBg1").style.background = "#CC3E52";
    for(var i = 0; i < document.querySelectorAll("#devSocialBg1 a").length; i++){
        document.querySelectorAll("#devSocialBg1 a")[i].style.color = "white";

    }

})
document.querySelector('.dev1').addEventListener("mouseleave", function(){
    document.querySelector(".dev1").style.border = "none";
    document.querySelector("#devSocialBg1").style.background = "#f1f1f1";
    for(var i = 0; i < document.querySelectorAll("#devSocialBg1 a").length; i++){
        document.querySelectorAll("#devSocialBg1 a")[i].style.color = "black";

    }
})

//Larissa

document.querySelector('.dev2').addEventListener("mouseenter", function(){
    document.querySelector(".dev2").style.border = "#344E44 solid 1px";
    document.querySelector("#devSocialBg2").style.background = "#344E44";
    for(var i = 0; i < document.querySelectorAll("#devSocialBg1 a").length; i++){
        document.querySelectorAll("#devSocialBg2 a")[i].style.color = "white";

    }

})
document.querySelector('.dev2').addEventListener("mouseleave", function(){
    document.querySelector(".dev2").style.border = "none";
    document.querySelector("#devSocialBg2").style.background = "#f1f1f1";
    for(var i = 0; i < document.querySelectorAll("#devSocialBg1 a").length; i++){
        document.querySelectorAll("#devSocialBg2 a")[i].style.color = "black";

    }
})


//Gleisson

document.querySelector('.dev3').addEventListener("mouseenter", function(){
    document.querySelector(".dev3").style.border = "#8B8178 solid 1px";
    document.querySelector("#devSocialBg3").style.background = "#8B8178";
    for(var i = 0; i < document.querySelectorAll("#devSocialBg1 a").length; i++){
        document.querySelectorAll("#devSocialBg3 a")[i].style.color = "white";

    }

})
document.querySelector('.dev3').addEventListener("mouseleave", function(){
    document.querySelector(".dev3").style.border = "none";
    document.querySelector("#devSocialBg3").style.background = "#f1f1f1";
    for(var i = 0; i < document.querySelectorAll("#devSocialBg1 a").length; i++){
        document.querySelectorAll("#devSocialBg3 a")[i].style.color = "black";

    }
})