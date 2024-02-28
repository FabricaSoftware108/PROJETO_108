document.addEventListener("DOMContentLoaded", function() {
    // Função para abrir o popup
    window.openPopup = function() {
        let popup = document.getElementById("popup-cadastroAdm");
        if (popup) {
            popup.classList.add("open-popup");
            popup.style.visibility = "visible";
        } else {
            console.error("Elemento do popup não encontrado.");
        }
    }

    // Função para fechar o popup
    window.closePopup = function() {
        let popup = document.getElementById("popup-cadastroAdm");
        if (popup) {
            popup.classList.remove("open-popup");
            popup.style.visibility = "hidden";
        } else {
            console.error("Elemento do popup não encontrado.");
        }
    }

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
