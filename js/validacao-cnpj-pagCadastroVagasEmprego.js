document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('cnpj' ).addEventListener('blur', validarCNPJ);

    
});


function validarCNPJ() {
    const cnpj = document.getElementById('cnpj').value.replace(/\D/g, '');
    if (!isCNPJValid(cnpj)) {
        alert("CNPJ inválido! Verifique e tente novamente.");
   
    }
}



function isCNPJValid(cnpj) {
    if (cnpj.length !== 14 ||
        /^(\d)\1+$/.test(cnpj)) {
        return false;
    }

    let length = cnpj.length - 2;
    let numbers = cnpj.substring(0, length);
    let digits = cnpj.substring(length);
    let sum = 0;
    let pos = length - 7;

    for (let i = length; i >= 1; i--) {
        sum += numbers.charAt(length - i) * pos--;
        if (pos < 2) {
            pos = 9;
        }
    }

    let result = sum % 11 < 2 ? 0 : 11 - sum % 11;
    if (result !== parseInt(digits.charAt(0))) {
        return false;
    }

    length += 1;
    numbers = cnpj.substring(0, length);
    sum = 0;
    pos = length - 7;

    for (let i = length; i >= 1; i--) {
        sum += numbers.charAt(length - i) * pos--;
        if (pos < 2) {
            pos = 9;
        }
    }

    result = sum % 11 < 2 ? 0 : 11 - sum % 11;
    if (result !== parseInt(digits.charAt(1))) {
        return false;
    }

    return true;
}
