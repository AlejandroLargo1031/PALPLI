document.addEventListener('DOMContentLoaded', function() {
    const buttons = document.querySelectorAll('.nav__button--inside');
    const rectangles = document.querySelectorAll('.rectangle');

    buttons.forEach((button, index) => {
        button.addEventListener('click', function() {
   
            const isRectangleVisible = rectangles[index].classList.contains('visible');

       
            rectangles.forEach(rectangle => {
                rectangle.classList.remove('visible');
            });

            if (!isRectangleVisible) {
                rectangles[index].classList.add('visible');
            }
        });
    });

    const listElements = document.querySelectorAll('.list__button--click');
    listElements.forEach(listElement => {
        listElement.addEventListener('click', () => {
            listElement.classList.toggle('arrow');
            let height = 0;
            let menu = listElement.nextElementSibling;
            if (menu.clientHeight === 0) {
                height = menu.scrollHeight;
            }
            menu.style.height = `${height}px`;
        });
    });

    const documentoInput = document.getElementById('documento');
    documentoInput.addEventListener('input', function () {
        const valor = documentoInput.value.replace(/\D/g, '');
    
        // Establecer el valor limpio en el campo
        documentoInput.value = valor;
    });
    const telefonoInput = document.getElementById('telefono');
    telefonoInput.addEventListener('input', function () {
        const valor = telefonoInput.value.replace(/\D/g, '');
        telefonoInput.value = valor;
    });

window.onload = function () {
    cargarChecklistPassword();
};

function cargarChecklistPassword() {
    // Función para cargar la checklist de contraseña al cargar la página
    const passwordInput = document.getElementById('contrasena_registro');
    const passwordRequirements = document.getElementById('passwordRequirements');

    const password = passwordInput.value;
    const isMinLength = password.length >= 6;
    const hasUppercase = /[A-Z]/.test(password);
    const hasNumber = /\d/.test(password);
    const hasSpecialChar = /[@#$%^&+=!]/.test(password);
    const hasNoSpaces = !/\s/.test(password);

    // Actualizar checklist de contraseña al cargar la página
    passwordRequirements.innerHTML = '';
    if (isMinLength) {
        passwordRequirements.innerHTML += '&#10004; Mínimo 6 caracteres<br>';
    } else {
        passwordRequirements.innerHTML += '&#10008; Mínimo 6 caracteres<br>';
    }
    if (hasUppercase) {
        passwordRequirements.innerHTML += '&#10004; Una mayúscula<br>';
    } else {
        passwordRequirements.innerHTML += '&#10008; Una mayúscula<br>';
    }
    if (hasNumber) {
        passwordRequirements.innerHTML += '&#10004; Números<br>';
    } else {
        passwordRequirements.innerHTML += '&#10008; Números<br>';
    }
    if (hasSpecialChar) {
        passwordRequirements.innerHTML += '&#10004; Signos (@#$%^&+=!)<br>';
    } else {
        passwordRequirements.innerHTML += '&#10008; Signos (@#$%^&+=!)<br>';
    }
    if (hasNoSpaces) {
        passwordRequirements.innerHTML += '&#10004; Sin espacios en blanco';
    } else {
        passwordRequirements.innerHTML += '&#10008; Sin espacios en blanco';
    }
}

function validarDocumento() {
    // Función para validar el documento de identidad
    const documentoInput = document.getElementById('documento');
    const documentoMessage = document.getElementById('documentoMessage');
    const hasInvalidChars = /[./\-]/.test(documentoInput.value);

    // Cambiar el color del mensaje de documento si hay caracteres inválidos
    if (hasInvalidChars) {
        documentoMessage.style.display = 'block';
    } else {
        documentoMessage.style.display = 'none';
    }
}

function validarCorreo() {
    // Función para validar el correo electrónico
    const emailInput = document.getElementById('correo');
    const emailRequirements = document.getElementById('emailRequirements');

    const email = emailInput.value;
    const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

    // Mostrar el mensaje de correo en función de su validez
    emailRequirements.style.display = 'block';
    if (isValid) {
        emailRequirements.style.color = '#FFFFFF'; // Color blanco para mensajes válidos
    } else {
        emailRequirements.style.color = '#dc3545'; // Color rojo para mensajes inválidos
    }
}

function actualizarColorCorreo() {
    // Función para actualizar el color del mensaje de correo en función de su validez
    const emailInput = document.getElementById('correo');
    const emailRequirements = document.getElementById('emailRequirements');

    const email = emailInput.value;
    const isValid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);

    if (isValid) {
        emailRequirements.style.color = '#FFFFFF'; // Color blanco para mensajes válidos
    } else {
        emailRequirements.style.color = '#dc3545'; // Color rojo para mensajes inválidos
    }
}

function mostrarContrasena(inputId) {
    // Función para mostrar/ocultar la contraseña
    const input = document.getElementById(inputId);
    if (input.type === 'password') {
        input.type = 'text';
    } else {
        input.type = 'password';
    }
}

const passwordInput = document.getElementById('contrasena_registro');
passwordInput.addEventListener('input', function () {
    cargarChecklistPassword();
    
});

   const usuarios = [
    
    { codigo: '090', nombre: 'Libro 90', autor: 'Autor 90', editorial: 'Editorial 90', cantidad: 15, copia: 7 },
    { codigo: '091', nombre: 'Libro 91', autor: 'Autor 91', editorial: 'Editorial 91', cantidad: 7, copia: 2 },
    { codigo: '092', nombre: 'Libro 92', autor: 'Autor 92', editorial: 'Editorial 92', cantidad: 11, copia: 6 },
    
];

const tabla = document.getElementById('tabla-usuarios').getElementsByTagName('tbody')[0];

usuarios.forEach(usuarios => {
    const fila = tabla.insertRow();
    
    fila.innerHTML = `
    <td>${usuarios.primernombre}</td>
    <td>${usuarios.segundonombre}</td>
    <td>${usuarios.apellido}</td>
    <td>${usuarios.documento}</td>
    <td>${usuarios.correo}</td>
    <td>${usuarios.telefono}</td>
    <td>${usuarios.direccion}</td>
    <td>${usuarios.contra}</td>

`;

});

// Agregar una barra de desplazamiento si la tabla es muy larga
const rectanguloBlanco = document.querySelector('.rectangulo-blanco');
if (tabla.offsetHeight > rectanguloBlanco.offsetHeight) {
    rectanguloBlanco.style.overflowY = 'scroll';
}
rectanguloBlanco.style.overflowX = 'scroll';


document.getElementById('searchButton').addEventListener('click', function() {
    let input = document.getElementById('searchInput').value.toLowerCase();
    let tableRows = document.getElementById('tabla-libros-body').getElementsByTagName('tr');

    for (let i = 0; i < tableRows.length; i++) {
        let rowData = tableRows[i].getElementsByTagName('td');
        let found = false;
        for (let j = 0; j < rowData.length; j++) {
            if (rowData[j]) {
                let cellData = rowData[j].textContent.toLowerCase();
                if (cellData.includes(input)) {
                    found = true;
                    break;
                }
            }
        }
        if (found) {
            tableRows[i].style.display = '';
        } else {
            tableRows[i].style.display = 'none';
        }
    }
});

});

