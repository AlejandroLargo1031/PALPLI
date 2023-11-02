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

const libros = [
    { codigo: '090', nombre: 'Libro 90', autor: 'Autor 90', editorial: 'Editorial 90', cantidad: 15, copia: 7 },
    { codigo: '091', nombre: 'Libro 91', autor: 'Autor 91', editorial: 'Editorial 91', cantidad: 7, copia: 2 },
    { codigo: '092', nombre: 'Libro 92', autor: 'Autor 92', editorial: 'Editorial 92', cantidad: 11, copia: 6 },
];

const tabla = document.getElementById('tabla-libros').getElementsByTagName('tbody')[0];

libros.forEach((libro, index) => {
    const fila = tabla.insertRow();
    fila.classList.add('fila-tabla');
    fila.setAttribute('data-index', index);

    fila.innerHTML = `<td><a href="#" class="seleccionar-fila-btn">Seleccionar</a></td>
                     <td>${libro.idpres}</td>
                     <td>${libro.codigo}</td>
                     <td>${libro.cantidad}</td>
                     <td>${libro.nombre}</td>
                     <td>${libro.primernombre}</td>
                     <td>${libro.segundonombre}</td>
                     <td>${libro.apellido}</td>
                     <td>${libro.documento}</td>
                     <td>${libro.fechalimite}</td>
                     <td>${libro.fechadeprestamo}</td>
                     <td>${libro.fechadeentrega}</td>
                     <td>${libro.estado}</td>`;

    // Agrega un evento de clic al botón de selección de esta fila
    const seleccionarBtn = fila.querySelector('.seleccionar-fila-btn');
    seleccionarBtn.addEventListener('click', function(event) {
        event.preventDefault(); // Prevenir el comportamiento predeterminado del enlace
        fila.classList.toggle('fila-seleccionada'); // Alternar clase para resaltar la fila seleccionada
    });
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

const cantidadInput = document.getElementById('Cantidad');
cantidadInput.addEventListener('input', function () {
    const valor = cantidadInput.value.replace(/\D/g, '');
    if (cantidadInput.value !== valor) {
        cantidadInput.value = valor;
    }
});
const documentoInput = document.getElementById('Documento');
documentoInput.addEventListener('input', function () {
    const valor = documentoInput.value.replace(/\D/g, '');
    if (documentoInput.value !== valor) {
        documentoInput.value = valor;
    }
});
const fechaInput = document.getElementById('Fecha');
fechaInput.addEventListener('input', function () {
    const valor = fechaInput.value;
    const regex = /^\d{4}-\d{2}-\d{2}$/;
    
    if (regex.test(valor)) {
        console.log('Fecha válida: ' + valor);
    } else {
        console.log('Fecha no válida');
    }
});
});