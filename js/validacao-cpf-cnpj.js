document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('CPF').addEventListener('blur', validarCPF);
    document.getElementById('cnpj').addEventListener('blur', validarCNPJ);
});

function validarCPF() {
    const cpf = document.getElementById('CPF').value.replace(/\D/g, '');
    if (!isCPFValid(cpf)) {
        alert("CPF inválido! Verifique e tente novamente.");
    }
}

function validarCNPJ() {
    const cnpj = document.getElementById('cnpj').value.replace(/\D/g, '');
    if (!isCNPJValid(cnpj)) {
        alert("CNPJ inválido! Verifique e tente novamente.");
    }
}

function isCPFValid(cpf) {
    if (cpf.length !== 11 ||
        /^(\d)\1+$/.test(cpf)) {
        return false;
    }

    let sum = 0;
    for (let i = 0; i < 9; i++) {
        sum += parseInt(cpf.charAt(i)) * (10 - i);
    }
    let remainder = 11 - (sum % 11);
    if (remainder === 10 || remainder === 11) {
        remainder = 0;
    }
    if (remainder !== parseInt(cpf.charAt(9))) {
        return false;
    }

    sum = 0;
    for (let i = 0; i < 10; i++) {
        sum += parseInt(cpf.charAt(i)) * (11 - i);
    }
    remainder = 11 - (sum % 11);
    if (remainder === 10 || remainder === 11) {
        remainder = 0;
    }
    if (remainder !== parseInt(cpf.charAt(10))) {
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
