function aplicarMascaraNome(input) {
    input.addEventListener('input', function () {
        let valor = input.value;
        // Permitir apenas letras e espaços
        input.value = valor.replace(/[^a-zA-ZÀ-ÿ\s]/g, '');
    });
}

document.addEventListener('DOMContentLoaded', function () {
    aplicarMascaraNome(document.getElementById('nome'));
    aplicarMascaraNome(document.getElementById('nomePai'));
    aplicarMascaraNome(document.getElementById('nomeMae'));
});
