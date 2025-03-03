document.addEventListener('DOMContentLoaded', function() {
    const emailInput = document.getElementById('exampleInputEmail1');
    const passwordInput = document.getElementById('exampleInputPassword1');
    const rememberMeCheckbox = document.getElementById('rememberMe');

    if (localStorage.getItem('rememberMe') === 'true') {
        emailInput.value = localStorage.getItem('email');
        passwordInput.value = localStorage.getItem('password');
        rememberMeCheckbox.checked = true;
    }

    document.getElementById('loginForm').addEventListener('submit', function() {
        if (rememberMeCheckbox.checked) {
            localStorage.setItem('email', emailInput.value);
            localStorage.setItem('password', passwordInput.value);
            localStorage.setItem('rememberMe', 'true');
        } else {
            localStorage.removeItem('email');
            localStorage.removeItem('password');
            localStorage.setItem('rememberMe', 'false');
        }
    });
});