const boton_menu = document.querySelector('.header_icono_menu_mostrar');
const boton_cruz = document.querySelector('.header_icono_cruz_ocultar');
const header = document.querySelector('header');
const btn_inicio_usuario = document.querySelector('#contenedor_iniciar_sesion_responsive');
const boton_modo_oscuro = document.querySelector('.contenedor_boton_modo_oscuro');
const navResponsivo = document.querySelector('.header_nav_responsivo_ocultar');

boton_menu.addEventListener('click', () => {
    boton_menu.setAttribute('id', 'header_icono_menu_ocultar');
    boton_cruz.setAttribute('id', 'header_icono_cruz_mostrar');
    header.setAttribute('id', 'header_responsive');
    navResponsivo.setAttribute('id', 'header_nav_responsivo_mostrar');
    
    boton_modo_oscuro.style.display = 'none';
    btn_inicio_usuario.style.display = 'flex';
});

boton_cruz.addEventListener('click', () => {
    boton_menu.removeAttribute('id', 'header_icono_menu_ocultar');
    boton_cruz.removeAttribute('id', 'header_icono_cruz_mostrar');
    header.removeAttribute('id', 'header_responsive');
    navResponsivo.removeAttribute('id', 'header_nav_responsivo_mostrar');
    btn_inicio_usuario.removeAttribute('id', 'contenedor_iniciar_sesion');
    boton_modo_oscuro.style.display = 'block';
    btn_inicio_usuario.style.display = 'none';
});


addEventListener('resize', () => {
    if (screen.width > 768) {
        if (boton_modo_oscuro) {
            boton_modo_oscuro.removeAttribute('id', 'modo_oscuro');
        } else if (btn_inicio_usuario) {
            btn_inicio_usuario.style.display = 'none';
        }


    }
    else if (screen.width <= 768 && boton_cruz.id) {
        boton_modo_oscuro.setAttribute('id', 'modo_oscuro');
    }
})

/*Cerrar menu responsive al hacer click en seccion*/
let links_cerrar_menu_responsive = document.querySelectorAll('.header_cerrar_menu_responsive');

for (let i = 0; i < links_cerrar_menu_responsive.length; i++) {
    links_cerrar_menu_responsive[i].addEventListener('click', () => {
        boton_menu.removeAttribute('id', 'header_icono_menu_ocultar');
        boton_cruz.removeAttribute('id', 'header_icono_cruz_mostrar');
        header.removeAttribute('id', 'header_responsive');
        navResponsivo.removeAttribute('id', 'header_nav_responsivo_mostrar');
        btn_inicio_usuario.removeAttribute('id', 'contenedor_iniciar_sesion');
        boton_modo_oscuro.style.display = 'block';
        btn_inicio_usuario.style.display = 'none';
    });
}

/*# HACETE SOCIO, ACCESO SOCIO (BOTONES) #*/
const btn_hacete_socio = document.querySelector(".btn_hacete_socio_header");
const btn_acceder_socio = document.querySelector(".btn_acceder_socios_header");
const btn_hacete_socio_index = document.querySelector('.btn_hacete_socio_indexHeader')
const btn_acceso_socio_index = document.querySelector('.btn_acceso_socio_indexHeader');

btn_hacete_socio.addEventListener('click', () => {
    let url_actual = window.location.href;
    let booleano = url_actual.includes('index.php')
    if (booleano) {
        window.location.href = "./vistas/socios_asociate.php";
    } else {
        window.location.href = "./socios_asociate.php";
    }
})

btn_acceder_socio.addEventListener('click', () => {
    let url_actual = window.location.href;
    let booleano = url_actual.includes('index.php')
    if (booleano) {
        window.location.href = "./vistas/socios_acceso.php";
    } else {
        window.location.href = "./socios_acceso.php";
    }
})

/*# ANIMACION DE FOTO USUARIO (INICIO DE SESION) #*/
const btn_usuario = document.querySelectorAll('.btn_inicio_usuario');
const nav_btn_sesion = document.querySelector('.nav_btn_sesion');

let activar_animacion_usuario = false;

for (let i = 0; i < btn_usuario.length; i++) {
    btn_usuario[i].addEventListener('click', () => {
        activar_animacion_usuario = !activar_animacion_usuario;

        if (activar_animacion_usuario == false) {
            btn_usuario[i].blur();
        }
    });

    btn_usuario[i].addEventListener("blur", function () {
        activar_animacion_usuario = false;
    });
}










