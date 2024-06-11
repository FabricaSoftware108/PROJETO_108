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

});