/*Boton Menu*/
const botonMenu = document.getElementById('botonMenu');
const contenedorDesplegable = document.querySelector(".contenedor-listaDesplegable-header");

botonMenu.addEventListener('click', () => {
    botonMenu.classList.toggle('active');
    contenedorDesplegable.classList.toggle('active');
});

/* Redireccionar a la página de producto al hacer clic en un producto */
const contenedor_producto = document.querySelectorAll('.producto');
for (let i = 0; i < contenedor_producto.length; i++) {
    contenedor_producto[i].addEventListener('click', () => {
        window.location.href = "./producto.php";
    })
}

/* Tabular entre ver "todo","remeras" o "buzos" */
const tarjetasProductos = document.querySelectorAll('.contenedor-producto');
const todoTab = document.querySelector('.todo-tab');
const remerasTab = document.querySelector('.remeras-tab');
const buzosTab = document.querySelector('.buzos-tab');

function removeAllActive() {
    todoTab.classList.remove('active');
    remerasTab.classList.remove('active');
    buzosTab.classList.remove('active');
}
if (todoTab) {
    todoTab.addEventListener('click', () => {
        removeAllActive();
        todoTab.classList.add('active');

        tarjetasProductos.forEach((tarjeta) => {
            tarjeta.style.display = tarjeta.classList.contains('remera') ? 'flex' : 'flex';
        });
    });
}

if (remerasTab) {
    remerasTab.addEventListener('click', () => {
        removeAllActive();
        remerasTab.classList.add('active');

        tarjetasProductos.forEach((tarjeta) => {
            tarjeta.style.display = tarjeta.classList.contains('remera') ? 'flex' : 'none';
        });
    });
}

if (buzosTab) {
    buzosTab.addEventListener('click', () => {
        removeAllActive();
        buzosTab.classList.add('active');

        tarjetasProductos.forEach((tarjeta) => {
            tarjeta.style.display = tarjeta.classList.contains('buzo') ? 'flex' : 'none';
        });
    });
}

/* Cambiar color del producto al hacer clic en el color seleccionado */
const imagenPrincipal = document.getElementById('imagen-principal');

if (imagenPrincipal) {
    const colorSelectors = document.querySelectorAll('.color-selector');
    const seleccionarColor = document.getElementById('seleccionar-color');
    const disponiblesElement = document.getElementById('disponibles');
    const inputDisponibles = document.getElementById('input-disponibles');
    const inputNombreColor = document.querySelector('input[name="nombre_color"]');
    let rutaBaseImagen = imagenPrincipal.getAttribute('data-imagen');
    let colorSeleccionado = 1;


    // Función para inicializar el valor de "disponibles" y "nombre_color" al cargar la página
    function inicializarDisponibles() {
        const primerColor = document.querySelector('.color-selector');
        if (primerColor) {
            const disponiblesPredeterminado = primerColor.getAttribute('data-disponibles');
            const nombreColorPredeterminado = primerColor.getAttribute('data-nombre-color');
            disponiblesElement.textContent = `${disponiblesPredeterminado} (disponibles)`;
            inputDisponibles.value = disponiblesPredeterminado;
            inputNombreColor.value = nombreColorPredeterminado;

            updateAvailableQuantity(disponiblesPredeterminado);
        }
    }

    // Función para actualizar las opciones de cantidad según la disponibilidad
    function updateAvailableQuantity(disponibles) {
        var selectCantidad = document.getElementById('seleccionar-cantidad');
        var inputUnidades = document.querySelector('input[name="unidades"]');
        inputUnidades.value = 1;
        console.log("Update Available Quantity Called with:", disponibles);
        var currentOptionsLength = selectCantidad.options.length;
        var minOptionsLength = Math.min(currentOptionsLength, disponibles);

        for (var i = 0; i < minOptionsLength; i++) {
            selectCantidad.options[i].value = i + 1;
            selectCantidad.options[i].innerHTML = "<strong>" + (i + 1) + " unidad</strong>";
        }

        // Agrega nuevas opciones si hay más disponibles que las actuales
        for (var i = currentOptionsLength; i < disponibles; i++) {
            var option = document.createElement("option");
            option.value = i + 1;
            option.innerHTML = "<strong>" + (i + 1) + " unidad</strong>";
            selectCantidad.appendChild(option);
        }

        for (var i = currentOptionsLength - 1; i >= disponibles; i--) {
            selectCantidad.remove(i);
        }
    }


    // Función para cambiar el color
    function cambiarColor(selectedColor, disponibles, nombreColor) {
        imagenPrincipal.src = `${rutaBaseImagen}${selectedColor}.png`;
        colorSeleccionado = selectedColor;
        disponiblesElement.textContent = `${disponibles} (disponibles)`;
        inputDisponibles.value = disponibles;
        inputNombreColor.value = nombreColor;

        updateAvailableQuantity(disponibles);
    }

    // Evento click para los selectores de color
    colorSelectors.forEach(selector => {
        selector.addEventListener('click', () => {
            const selectedColor = selector.getAttribute('data-color');
            const disponibles = selector.getAttribute('data-disponibles');
            const nombreColor = selector.getAttribute('data-nombre-color');
            cambiarColor(selectedColor, disponibles, nombreColor);
            seleccionarColor.value = selectedColor;


            const url = new URL(window.location.href);
            url.searchParams.set('color', selectedColor);
            window.history.pushState({}, '', url);
        });
    });

    // Evento change para el selector de color principal
    seleccionarColor.addEventListener('change', () => {
        const selectedColor = seleccionarColor.value;
        const selector = document.querySelector(`.color-selector[data-color='${selectedColor}']`);
        const disponibles = selector.getAttribute('data-disponibles');
        const nombreColor = selector.getAttribute('data-nombre-color');
        cambiarColor(selectedColor, disponibles, nombreColor);


    });

    // Llamada a la función de inicialización al cargar la página
    inicializarDisponibles();
    const selectCantidad = document.getElementById('seleccionar-cantidad');
    const inputUnidades = document.querySelector('input[name="unidades"]');
    inputUnidades.value = 1;

    if (selectCantidad && inputUnidades) {
        selectCantidad.addEventListener('change', function () {
            inputUnidades.value = this.value;
        });
    }

    /*Scrolleo automatico hasta arriba de la pagina al hacer click en el option "Color"*/
    document.getElementById('seleccionar-color').addEventListener('change', function () {
        window.scrollTo(0, 0);
    });
}


/*Eliminar producto al presionar boton 'Eliminar'*/
function eliminarProducto(idProducto) {
    fetch('../config/functions/eliminar_producto.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: 'idProducto=' + encodeURIComponent(idProducto),
    })
        .then(response => response.text())
        .then(data => {
            location.reload();
        })
        .catch(error => {
            console.error('Error en la solicitud Fetch:', error);
        });
}

/*Actualizar unidades a comprar*/
function actualizarUnidades(idProducto, nuevasUnidades, disponibles) {
    if (nuevasUnidades !== null && parseInt(nuevasUnidades) > parseInt(disponibles)) {
        alert("No hay suficientes unidades disponibles.");
        return;
    } else {
        const formData = new FormData();
        formData.append('idProducto', idProducto);
        formData.append('nuevasUnidades', nuevasUnidades);

        fetch('../config/functions/actualizar_unidades.php', {
            method: 'POST',
            body: formData,
        })
            .then(response => response.text())
            .then(data => {
                location.reload();
            })
            .catch(error => {
                console.error('Error en la solicitud Fetch:', error);
            });
    }

}

/*recargar la pagina al entrar en carrito.php para actualizar siempre los valores*/
function actualizarDisponibles(selectElement) {
    var cantidadSeleccionada = selectElement.value;
    document.getElementById('disponibles').textContent = cantidadSeleccionada + ' (disponibles)';
}

/*Alerta para boton continuar compra*/
const btn_continuar_compra = document.querySelector('.btn_continuar_compra');

btn_continuar_compra.addEventListener('click', () => {
    Swal.fire({
        icon: 'info',
        title: 'Función no disponible',
        text: 'Lo sentimos, esta función aún no está disponible en este momento.',
    });
});