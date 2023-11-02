const fondo_btn_modo_oscuro = document.querySelector('.fondo_boton_modo_oscuro');
const btn_modo_oscuro = document.querySelector('.btn_modo_oscuro');
const icono_luna = document.querySelector('.btn_modo_oscuro .fa-moon');
const head = document.querySelector('head');

/*FUNCIONALIDAD DEL BOTON_MODO_OSCURO*/
let modo_oscuro = localStorage.getItem('modo_oscuro') === 'true' || false;

let ruta_index = "./css/modo_oscuro.css";
let ruta_vistas = "../css/modo_oscuro.css";
let elemento_link = document.createElement('link');
elemento_link.setAttribute("rel", "stylesheet");
elemento_link.setAttribute("type", "text/css");

fetch(ruta_index)
    .then(response => {
        if (response.ok) {
            /*Ruta para index*/
            elemento_link.setAttribute("href", ruta_index);
        } else {
            /*Ruta para vistas*/
            elemento_link.setAttribute("href", ruta_vistas);
        }
    })
    .catch(error => {
        console.log("Ocurrió un error al verificar la ruta:", error);
    });




// Función para aplicar el modo oscuro
function aplicarModoOscuro() {
    if (modo_oscuro) {
        if (!head.contains(elemento_link)) {
            head.appendChild(elemento_link);
            btn_modo_oscuro.setAttribute('id', 'btn_modo_oscuro')
            icono_luna.classList.remove('fa-moon')
            icono_luna.classList.add('fa-sun')
        }
    } else {
        if (head.contains(elemento_link)) {
            head.removeChild(elemento_link);
            btn_modo_oscuro.removeAttribute('id', 'btn_modo_oscuro')
            icono_luna.classList.add('fa-moon')
            icono_luna.classList.remove('fa-sun')
        }
    }
}

// Aplicar el modo oscuro al cargar la página
aplicarModoOscuro();

// Función para cambiar el modo oscuro y actualizar el estado en el Local Storage
function toggleModoOscuro() {
    modo_oscuro = !modo_oscuro;
    aplicarModoOscuro();



    // Guardar el estado de modo_oscuro en el Local Storage
    localStorage.setItem('modo_oscuro', modo_oscuro.toString());
}

btn_modo_oscuro.addEventListener('click', toggleModoOscuro);

// Guardar el estado de modo_oscuro en el Local Storage antes de recargar la página
window.addEventListener('beforeunload', () => {
    localStorage.setItem('modo_oscuro', modo_oscuro.toString());
});



