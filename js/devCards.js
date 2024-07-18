var devColors = {
    ederson: "#000",
    mauricio: "#000",
    pedro: "#5B5298",
    larissa: "#293E3B",
    luis: "#2D3337",
    igor: "#162945",
    joao: "#5E452D",
    gleisson: "#8C817D",
    ana: "#BAAAC3",
    gravena: "#88A7AC",
    nicolas: "#A38CE8",
    romano: "#948574",
    hentony: "#9F9699",
    christian: "#00A2D8",
    diego: "#3F648E",
    vinicius: "#211A16",
    evandro: "#1E4879",
    pontes: "#65819A",
    cantico: "#8A5731",
    jheron: "#5D96C1",
    matheus: "#4F6745",
}

var divs = []

for(var i = 0; i < document.getElementsByClassName("devCard").length ; i++){
    divs.push(document.getElementsByClassName("devCard")[i])
}

divs.forEach(function (element, index) {
    element.addEventListener("mouseenter", function(){
        element.style.border = `${Object.values(devColors)[index]} solid 1px`;
        element.querySelector("#devSocialBg").style.background = `${Object.values(devColors)[index]}`;
        for(var i = 0; i < element.querySelectorAll("#devSocialBg a").length; i++){
            element.querySelectorAll("#devSocialBg a")[i].style.color = "white";
            
        }
    })
    element.addEventListener("mouseleave", function(){
        element.style.border = "none";
        element.querySelector("#devSocialBg").style.background = "#f1f1f1";
        for(var i = 0; i < element.querySelectorAll("#devSocialBg a").length; i++){
            element.querySelectorAll("#devSocialBg a")[i].style.color = "black";
            
        }
    })
});

