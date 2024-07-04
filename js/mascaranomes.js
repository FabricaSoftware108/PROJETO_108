function aplicarMascaraNome(input) {
    input.addEventListener('input', function () {
        let valor = input.value;
        input.value = valor.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });
}

document.addEventListener('DOMContentLoaded', function () {
    aplicarMascaraNome(document.getElementById('nome'));
    aplicarMascaraNome(document.getElementById('nomePai'));
    aplicarMascaraNome(document.getElementById('nomeMae'));
});


function aplicarMascaraNome(input) {
    input.addEventListener('input', function() {
        let valor = input.value;
        input.value = valor.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });
}

document.addEventListener('DOMContentLoaded', function() {
    aplicarMascaraNome(document.getElementById('nome_empresa'));
});

function aplicarMascaraNome(input) {
    input.addEventListener('input', function() {
        let valor = input.value;
        input.value = valor.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });
}

document.addEventListener('DOMContentLoaded', function() {
    aplicarMascaraNome(document.getElementById('rua'));
});

function aplicarMascaraNome(input) {
    input.addEventListener('input', function() {
        let valor = input.value;
        input.value = valor.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });
}

document.addEventListener('DOMContentLoaded', function() {
    aplicarMascaraNome(document.getElementById('nome_responsavel'));
    aplicarMascaraNome(document.getElementById('cidade'));
});
