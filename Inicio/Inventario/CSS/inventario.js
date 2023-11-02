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
    { codigo: '097', nombre: 'Libro 97', autor: 'Autor 97', editorial: 'Editorial 97', cantidad: 10, copia: 4 },
    { codigo: '098', nombre: 'Libro 98', autor: 'Autor 98', editorial: 'Editorial 98', cantidad: 9, copia: 3 },
    { codigo: '099', nombre: 'Libro 99', autor: 'Autor 99', editorial: 'Editorial 99', cantidad: 8, copia: 2 },
    { codigo: '100', nombre: 'Libro 100', autor: 'Autor 100', editorial: 'Editorial 100', cantidad: 15, copia: 7 }
];

const tabla = document.getElementById('tabla-libros').getElementsByTagName('tbody')[0];

libros.forEach((libro, index) => {
    const fila = tabla.insertRow();
    fila.classList.add('fila-tabla');
    fila.setAttribute('data-index', index);
    fila.innerHTML = `<td><a href="#" class="seleccionar-fila-btn">Seleccionar</a></td>
                    <td>${libro.codigo}</td>
                    <td>${libro.nombre}</td>
                    <td>${libro.autor}</td>
                    <td>${libro.editorial}</td>
                    <td>${libro.cantidad}</td>
                    <td>${libro.copia}</td>`;
    
    const seleccionarBtn = fila.querySelector('.seleccionar-fila-btn');
    seleccionarBtn.addEventListener('click', function(event) {
        event.preventDefault();
        fila.classList.toggle('fila-seleccionada');
    });
});

const rectanguloBlanco = document.querySelector('.rectangulo-blanco');
if (tabla.offsetHeight > rectanguloBlanco.offsetHeight) {
    rectanguloBlanco.style.overflowY = 'scroll';
}

rectanguloBlanco.style.overflowX = 'scroll';

const searchInput = document.getElementById('searchInput');
const searchButton = document.getElementById('searchButton');

function buscarEnTabla() {
    const textoBusqueda = searchInput.value.toLowerCase();
    const filas = tabla.getElementsByTagName('tr');

    for (let fila of filas) {
        const celdas = fila.getElementsByTagName('td');
        let encontrado = false;

        for (let celda of celdas) {
            if (celda.textContent.toLowerCase().includes(textoBusqueda)) {
                encontrado = true;
                break;
            }
        }

        if (encontrado) {
            fila.style.display = '';
        } else {
            fila.style.display = 'none';
        }
    }
}

searchButton.addEventListener('click', buscarEnTabla);

searchInput.addEventListener('keyup', function(event) {
    if (event.key === 'Enter') {
        buscarEnTabla();
    }
});

const cantidadInput = document.getElementById('Cantidad');
cantidadInput.addEventListener('input', function () {
    const valor = cantidadInput.value.replace(/\D/g, '');
    if (cantidadInput.value !== valor) {
        cantidadInput.value = valor;
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