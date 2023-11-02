const documentoInput = document.getElementById('documento');

documentoInput.addEventListener('input', function () {
    // Obtener el valor actual del campo y eliminar cualquier carácter que no sea un número
    const valor = documentoInput.value.replace(/\D/g, '');

    // Establecer el valor limpio en el campo
    documentoInput.value = valor;
});

function mostrarContrasena(inputId) {
    const input = document.getElementById(inputId);
    if (input.type === "password") {
        input.type = "text";
    } else {
        input.type = "password";
    }
}
