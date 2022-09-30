const id = document.querySelector('.drop');
const caja = document.querySelector('#dp_1');
const icono = document.querySelector('#icono');
const bar = document.querySelector('#barra');
const contenido = document.querySelector('#contenido');
const user = document.querySelector('#user');
const userContenido = document.querySelector('#user__contenido');


mostrarCaja();

function mostrarCaja() {
    id.addEventListener('click', efectoCaja);
    icono.addEventListener('click', mostraBarra);
    user.addEventListener('click', mostrarUsuario);
}

function efectoCaja() {
    if (caja.classList.contains('d-block')) {
        caja.classList.remove('d-block');
        caja.classList.add('d-none');
    } else {
        caja.classList.remove('d-none');
        caja.classList.add('d-block');
    }
}

function mostraBarra() {
    if (icono.classList.contains('left-0')) {
        icono.classList.remove('left-0');
        icono.classList.add('left-200');
    } else {
        icono.classList.remove('left-200');
        icono.classList.add('left-0');
    }
    if (bar.classList.contains('block-fixed')) {
        bar.classList.remove('block-fixed');
        bar.classList.add('none-fixed');
    } else {
        bar.classList.remove('none-fixed');
        bar.classList.add('block-fixed');
    }

    if (contenido.classList.contains('contenido--1')) {
        contenido.classList.remove('contenido--1');
        contenido.classList.add('pl-210');

    } else {
        contenido.classList.remove('pl-210');
        contenido.classList.add('contenido--1');

    }
}

function mostrarUsuario() {
    if (userContenido.classList.contains('d-block')) {
        userContenido.classList.remove('d-block');
        userContenido.classList.add('d-none');
    } else {
        userContenido.classList.remove('d-none');
        userContenido.classList.add('d-block');
    }
}