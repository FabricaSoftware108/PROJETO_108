let popup = document.getElementById("popup-cadastroAdm");

function openPopup(){
    popup.classList.add("open-popup");
}
function closePopup(){
    popup.classList.remove("open-popup");
}


$(document).ready(function() {
// Função para gerar senha aleatória
function generateRandomPassword(length) {
    var chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_+";
    var password = "";
    for (var i = 0; i < length; i++) {
    var randomNumber = Math.floor(Math.random() * chars.length);
    password += chars.substring(randomNumber, randomNumber + 1);
    }
    return password;
}

// Atribuir senha aleatória ao campo de senha pré-definida
$('#cadastro-adm-senha').val(generateRandomPassword(7));
});
