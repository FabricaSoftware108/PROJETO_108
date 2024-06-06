document.getElementById('toggle-password-btn').addEventListener('click', function() {
    var passwordInput = document.getElementById('senha');
    var btnIcon = this.querySelector('i');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        btnIcon.classList.remove('bi-eye');
        btnIcon.classList.add('bi-eye-slash');
    } else {
        passwordInput.type = 'password';
        btnIcon.classList.remove('bi-eye-slash');
        btnIcon.classList.add('bi-eye');
    }
});
