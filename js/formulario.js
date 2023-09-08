const formulario = document.getElementById('formulario-registro');
const inputs = document.querySelectorAll('#formulario-registro input');
const BotonIniciarSesion = document.getElementById('btn-iniciar-sesion');

const expresiones = {
    /*FORMULARIO REGISTRARSE */
    nombre: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, // Letras y espacios, pueden llevar acentos.
    apellido: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, 
    usuario: /^[a-zA-ZÀ-ÿ\s]{1,20}$/, 
    password: /^[a-zA-Z0-9_.+-]+[a-zA-Z0-9-]+[a-zA-Z0-9-.]+$/, //todo tipo de caracter
    telefono: /^[0-9]+$/ //Solo numeros del 0 al 9
}

const campos = {
    /*FORMULARIO COTIZACION */
    nombre: false,
    apellido: false,
    usuario: false,
    password: false,
    telefono: false
}

const validarFormulario = (e) => {
    /*FORMULARIO REGISTRARSE */
    switch (e.target.name) {
        case "nombre":
            validarCampo(expresiones.nombre, e.target, 'nombre');
            break;
        case "apellido":
            validarCampo(expresiones.apellido, e.target, 'apellido');
            break;
        case "usuario":
            validarCampo(expresiones.usuario, e.target, 'usuario');
            break;
        case "password":
            validarCampo(expresiones.password, e.target, 'password');
            break;
        case "telefono":
            validarCampo(expresiones.telefono, e.target, 'telefono');
            break;
    }
}

const validarCampo = (expresion, input, campo) => {
    if (expresion.test(input.value)) {
        document.getElementById(`${campo}`).style.backgroundColor = "#68EC41";
        campos[campo] = true;
    } else {
        document.getElementById(`${campo}`).style.backgroundColor = "#FE564B";
        campos[campo] = false;
    }
}

inputs.forEach((input) => {
    input.addEventListener('keyup', validarFormulario);
    input.addEventListener('blur', validarFormulario);
});

/* const IniciarSesion = () => {
    location.href = "compras.html";
} */


