document.addEventListener('DOMContentLoaded', function() {
var inputs = document.querySelectorAll('input');

for (var i = 0; i < inputs.length; i++) {
    inputs[i].setAttribute('readonly', 'readonly');
}


});

