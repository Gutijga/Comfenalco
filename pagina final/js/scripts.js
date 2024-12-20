/*!
* Start Bootstrap - Small Business v5.0.5 (https://startbootstrap.com/template/small-business)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-small-business/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

document.getElementById('togglePassword').addEventListener('click', function () {
    var passwordInput = document.getElementById('password');
    var eyeIcon = document.getElementById('eyeIcon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.src = 'https://img.icons8.com/ios-glyphs/30/null/visible.png'; // Cambia al ícono de "mostrar"
    } else {
        passwordInput.type = 'password';
        eyeIcon.src = 'https://img.icons8.com/ios-glyphs/30/null/hide.png'; // Cambia al ícono de "ocultar"
    }
});
