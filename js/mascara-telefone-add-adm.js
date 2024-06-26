$(document).ready(function(){
    $('#cadastro-adm-telefone').on('input', function() {
        var telefone = $(this).val().replace(/\D/g, '');
        if (telefone.length > 0) {
            telefone = telefone.replace(/^(\d{2})(\d)/g, '($1) $2');
            telefone = telefone.replace(/(\d)(\d{4})$/, '$1-$2');
        }
        $(this).val(telefone);
    })
});