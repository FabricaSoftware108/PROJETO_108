$(document).ready(function(){
    $('#telefone').on('input', function() {
        var telefone = $(this).val().replace(/\D/g, '');
        if (telefone.length > 0) {
            telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2');
            telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2');
        }
        $(this).val(telefone);
    });

    $('#cpf').on('input', function() {
        var cpf = $(this).val().replace(/\D/g, '');
        if (cpf.length > 0) {
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }
        $(this).val(cpf);
    });

    $('#data_nascimento').on('input', function() {
        var data = $(this).val().replace(/\D/g, '');
        if (data.length > 0) {
            data = data.replace(/^(\d{2})(\d)/, '$1/$2');
            data = data.replace(/^(\d{2})\/(\d{2})(\d)/, '$1/$2/$3');
        }
        $(this).val(data);
    });
});