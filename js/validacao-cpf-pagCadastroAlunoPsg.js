document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('cpf').addEventListener('blur', validarCPF);


    
});

function validarCPF() {
    const cpf = document.getElementById('cpf').value.replace(/\D/g, '');
    if (!isCPFValid(cpf)) {
        alert("CPF inválido! Verifique e tente novamente.");
        document.getElementById('cpf').value = ''; // Limpa o campo de input , quando clicado no ok, do alert.
      
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
