const formulario = document.querySelector('#formulario');
const users = document.querySelector('#users');
const password = document.querySelector('#password');
const btn_enviar = document.querySelector('#enlace');


eventos();

function eventos() {
    document.addEventListener('DOMContentLoaded', iniciarApp);
    users.addEventListener('blur', validacionFormulario);
    password.addEventListener('blur', validacionFormulario);
    formulario.addEventListener('submit', enviarFormulario);
}

function iniciarApp() {
    btn_enviar.disabled = true;
}

function validacionFormulario(e) {
    e.preventDefault();
    if (e.target.value.length > 0) {
        users.classList.remove('br-red');
        users.classList.add('br-green');
    } else {
        users.classList.remove('br-green');
        users.classList.add('br-red');

    }

    if (e.target.value.length > 0) {
        password.classList.remove('br-red');
        password.classList.add('br-green');
    } else {
        password.classList.remove('br-green');
        password.classList.add('br-red');
    }

    if (users.value.length != 0 && password.value.length != 0) {
        btn_enviar.disabled = false;
    } else {
        btn_enviar.disabled = true;
    }
}

function enviarFormulario() {
    
}