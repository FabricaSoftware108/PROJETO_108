document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('cpf' ).addEventListener('blur', validarCPF);
    document.getElementById('cnpj' ).addEventListener('blur', validarCNPJ);


});



function validarCPF() {
    const cpf = document.getElementById('cpf').value.replace(/\D/g, '');
    if (isCPFValid!=(cpf)) {
        alert("CPF inválido! Verifique e tente novamente.");
        document.getElementById('cpf').value = ''; // Limpa o campo de input , quando clicado no ok, do alert.
    }
}

function validarCNPJ() {
    const cnpj = document.getElementById('cnpj').value.replace(/\D/g, '');
    if (!isCNPJValid(cnpj)) {
        alert("CNPJ inválido! Verifique e tente novamente.");
        document.getElementById('cnpj').value = ''; // Limpa o campo de input
    }
}

function isCPFValid(strCpf) {
        if (!/[0-9]{11}/.test(strCpf)) return false;
        if (strCpf === "00000000000") return false;
    
        var soma = 0;
    
        for (var i = 1; i <= 9; i++) {
            soma += parseInt(strCpf.substring(i - 1, i)) * (11 - i);
        }
    
        var resto = soma % 11;
    
        if (resto === 10 || resto === 11 || resto < 2) {
            resto = 0;
        } else {
            resto = 11 - resto;
        }
    
        if (resto !== parseInt(strCpf.substring(9, 10))) {
            return false;
        }
    
        soma = 0;
    
        for (var i = 1; i <= 10; i++) {
            soma += parseInt(strCpf.substring(i - 1, i)) * (12 - i);
        }
        resto = soma % 11;
    
        if (resto === 10 || resto === 11 || resto < 2) {
            resto = 0;
        } else {
            resto = 11 - resto;
        }
    
        if (resto !== parseInt(strCpf.substring(10, 11))) {
            return false;
        }
    
        return true;
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
