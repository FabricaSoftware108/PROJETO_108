$(document).ready(function(){ 
    $('#cpf').on('input', function() {
        var cpf = $(this).val().replace(/\D/g, '');
        if (cpf.length > 0) {
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            cpf = cpf.replace(/(\d{3})(\d)/, '$1.$2');
            cpf = cpf.replace(/(\d{3})(\d{1,2})$/, '$1-$2');
        }
        $(this).val(cpf);
    });
    $('#telefone').on('input', function() {
        var telefone = $(this).val().replace(/\D/g, '');
        if (telefone.length > 0) {
            telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2');
            telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2');
        }
        $(this).val(telefone);
    });
    $(document).ready(function(){
        $('#cep').on('input', function() {
            var cep = $(this).val().replace(/\D/g, '');
            if (cep.length > 8) {
                cep = cep.substr(0, 8);
            }
            if (cep.length > 5) {
                cep = cep.replace(/^(\d{5})(\d)/, '$1-$2');
            }
            $(this).val(cep);
        });
    });
});