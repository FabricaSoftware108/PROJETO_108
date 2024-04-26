document.addEventListener('DOMContentLoaded', function() {
var buttonEditarUsuario = document.getElementById('button-editar_usuario');
var buttonConfirmarEditar = document.getElementById('button-confirmar_editar');
var buttonOutraAcao = document.getElementById('button-outra_acao');
var inputs = document.querySelectorAll('input');

for (var i = 0; i < inputs.length; i++) {
    inputs[i].setAttribute('readonly', 'readonly');
}

buttonEditarUsuario.addEventListener('click', function() {
    for (var i = 0; i < inputs.length; i++) {
    inputs[i].removeAttribute('readonly');
    }
    buttonEditarUsuario.classList.add('d-none');
    buttonConfirmarEditar.classList.remove('d-none');
});

buttonConfirmarEditar.addEventListener('click', function() {
    for (var i = 0; i < inputs.length; i++) {
    inputs[i].setAttribute('readonly', 'readonly');
    }
    buttonEditarUsuario.classList.remove('d-none');
    buttonConfirmarEditar.classList.add('d-none');
});

buttonOutraAcao.addEventListener('click', function() {
    alert('Outra ação executada!');
});
});





