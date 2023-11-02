/*MAIN FUTBOL*/
const boton_fixture = document.querySelector('.boton_fixture_encender');
const boton_calendario = document.querySelector('.boton_calendario_apagar');
const contenedor_calendario = document.querySelector('.contenedor_principal_main_calendario_ocultar');
const contenedor_fixture = document.querySelector('.mostrar_fixture');

boton_fixture.addEventListener('click', () => {
    boton_fixture.removeAttribute('id', 'boton_fixture_apagar');
    boton_calendario.removeAttribute('id', 'boton_calendario_encender');
    contenedor_calendario.removeAttribute('id', 'contenedor_principal_main_calendario_mostrar');
    contenedor_fixture.removeAttribute('id', 'ocultar_fixture');

    for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
        contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
        contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
    }
});

boton_calendario.addEventListener('click', () => {
    boton_calendario.setAttribute('id', 'boton_calendario_encender');
    boton_fixture.setAttribute('id', 'boton_fixture_apagar');
    contenedor_calendario.setAttribute('id', 'contenedor_principal_main_calendario_mostrar');
    contenedor_fixture.setAttribute('id', 'ocultar_fixture');

    contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_ocultar')
});

/*CONTENEDORES JORNADAS*/
const contenedor_jr1 = document.querySelector('.contenedor_jornada1');
const contenedor_jr2 = document.querySelector('.contenedor_jornada2');
const contenedor_jr3 = document.querySelector('.contenedor_jornada3');
const contenedor_jr4 = document.querySelector('.contenedor_jornada4');
const contenedor_jr5 = document.querySelector('.contenedor_jornada5');
const contenedor_jr6 = document.querySelector('.contenedor_jornada6');
const contenedor_jr7 = document.querySelector('.contenedor_jornada7');
const contenedor_jr8 = document.querySelector('.contenedor_jornada8');
const contenedor_jr9 = document.querySelector('.contenedor_jornada9');
const contenedor_jr10 = document.querySelector('.contenedor_jornada10');

/*JORNADAS*/
const jr1 = document.querySelectorAll(".jornada1");
const jr2 = document.querySelectorAll('.jornada2');
const jr3 = document.querySelectorAll('.jornada3');
const jr4 = document.querySelectorAll('.jornada4');
const jr5 = document.querySelectorAll('.jornada5');
const jr6 = document.querySelectorAll('.jornada6_mostrar');
const jr6_ocultar = document.querySelectorAll('.jornada6_ocultar');
const jr7 = document.querySelectorAll('.jornada7_mostrar');
const jr7_ocultar = document.querySelectorAll('.jornada7_ocultar');
const jr8 = document.querySelectorAll('.jornada8');
const jr9 = document.querySelectorAll('.jornada9');
const jr10 = document.querySelectorAll('.jornada10');

/*JORNADAS DESPLEGABLES*/
const contenedor_jrs_desplegables = document.querySelectorAll('.contenedor_listas_desplegables_ocultar');
const btn_jrs_desplegables = document.querySelectorAll('#boton_lista_desplegable')

for (let i = 0; i < btn_jrs_desplegables.length; i++) {
    btn_jrs_desplegables[i].addEventListener('click', () => {
        for (let j = 0; j < contenedor_jrs_desplegables.length; j++) {
            contenedor_jrs_desplegables[j].classList.toggle('contenedor_listas_desplegables_mostrar')


        };
    });
};

/*FUNCIONALIDAD DE JORNADAS*/
for (let i = 0; i < jr1.length; i++) {
    jr1[i].addEventListener('click', () => {
        contenedor_jr1.removeAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr2.length; i++) {
    jr2[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.setAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr3.length; i++) {
    jr3[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.setAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr4.length; i++) {
    jr4[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.setAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr5.length; i++) {
    jr5[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.setAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr6.length; i++) {
    jr6[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.setAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr6_ocultar.length; i++) {
    jr6_ocultar[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.setAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr7.length; i++) {
    jr7[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.setAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr7_ocultar.length; i++) {
    jr7_ocultar[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.setAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr8.length; i++) {
    jr8[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.setAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr9.length; i++) {
    jr9[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.setAttribute('id', 'mostrar_jornada');
        contenedor_jr10.removeAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

for (let i = 0; i < jr10.length; i++) {
    jr10[i].addEventListener('click', () => {
        contenedor_jr1.setAttribute('id', 'ocultar_jornada');
        contenedor_jr2.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr3.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr4.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr5.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr6.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr7.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr8.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr9.removeAttribute('id', 'mostrar_jornada');
        contenedor_jr10.setAttribute('id', 'mostrar_jornada');

        for (let i = 0; i < contenedor_jrs_desplegables.length; i++) {
            contenedor_jrs_desplegables[i].removeAttribute('class', 'contenedor_listas_desplegables_mostrar')
            contenedor_jrs_desplegables[i].setAttribute('class', 'contenedor_listas_desplegables_ocultar')
        }
    });
};

let goles = document.querySelector('.goles_contenedor');
let goles_encajados = document.querySelector('.goles_encajados_contenedor');
let tarjetas_amarillas = document.querySelector('.tarjetas_amarillas_contenedor');
let tarjetas_rojas = document.querySelector('.tarjetas_rojas_contenedor');

let id_goles_1 = document.querySelector('.id_goles_1');
let id_goles_2 = document.querySelector('.id_goles_2');
let id_goles_3 = document.querySelector('.id_goles_3');
let id_goles_4 = document.querySelector('.id_goles_4');
let id_goles_5 = document.querySelector('.id_goles_5');
let id_goles_6 = document.querySelector('.id_goles_6');
let id_goles_7 = document.querySelector('.id_goles_7');
let id_goles_8 = document.querySelector('.id_goles_8');
let id_goles_9 = document.querySelector('.id_goles_9');
let id_goles_10 = document.querySelector('.id_goles_10');
let id_goles_11 = document.querySelector('.id_goles_11');
let id_goles_12 = document.querySelector('.id_goles_12');
let id_goles_13 = document.querySelector('.id_goles_13');
let id_goles_14 = document.querySelector('.id_goles_14');
let id_goles_15 = document.querySelector('.id_goles_15');
let id_goles_16 = document.querySelector('.id_goles_16');
let id_goles_17 = document.querySelector('.id_goles_17');
let id_goles_18 = document.querySelector('.id_goles_18');

let id_goles_encajados_1 = document.querySelector('.id_goles_encajados_1');
let id_goles_encajados_2 = document.querySelector('.id_goles_encajados_2');

let id_tarjetas_amarillas_1 = document.querySelector('.id_tarjetas_amarillas_1');
let id_tarjetas_amarillas_2 = document.querySelector('.id_tarjetas_amarillas_2');
let id_tarjetas_amarillas_3 = document.querySelector('.id_tarjetas_amarillas_3');
let id_tarjetas_amarillas_4 = document.querySelector('.id_tarjetas_amarillas_4');
let id_tarjetas_amarillas_5 = document.querySelector('.id_tarjetas_amarillas_5');
let id_tarjetas_amarillas_6 = document.querySelector('.id_tarjetas_amarillas_6');
let id_tarjetas_amarillas_7 = document.querySelector('.id_tarjetas_amarillas_7');
let id_tarjetas_amarillas_8 = document.querySelector('.id_tarjetas_amarillas_8');
let id_tarjetas_amarillas_9 = document.querySelector('.id_tarjetas_amarillas_9');
let id_tarjetas_amarillas_10 = document.querySelector('.id_tarjetas_amarillas_10');
let id_tarjetas_amarillas_11 = document.querySelector('.id_tarjetas_amarillas_11');
let id_tarjetas_amarillas_12 = document.querySelector('.id_tarjetas_amarillas_12');
let id_tarjetas_amarillas_13 = document.querySelector('.id_tarjetas_amarillas_13');
let id_tarjetas_amarillas_14 = document.querySelector('.id_tarjetas_amarillas_14');
let id_tarjetas_amarillas_15 = document.querySelector('.id_tarjetas_amarillas_15');
let id_tarjetas_amarillas_16 = document.querySelector('.id_tarjetas_amarillas_16');
let id_tarjetas_amarillas_17 = document.querySelector('.id_tarjetas_amarillas_17');
let id_tarjetas_amarillas_18 = document.querySelector('.id_tarjetas_amarillas_18');

let id_tarjetas_rojas_1 = document.querySelector('.id_tarjetas_rojas_1');
let id_tarjetas_rojas_2 = document.querySelector('.id_tarjetas_rojas_2');
let id_tarjetas_rojas_3 = document.querySelector('.id_tarjetas_rojas_3');
let id_tarjetas_rojas_4 = document.querySelector('.id_tarjetas_rojas_4');
let id_tarjetas_rojas_5 = document.querySelector('.id_tarjetas_rojas_5');
let id_tarjetas_rojas_6 = document.querySelector('.id_tarjetas_rojas_6');
let id_tarjetas_rojas_7 = document.querySelector('.id_tarjetas_rojas_7');
let id_tarjetas_rojas_8 = document.querySelector('.id_tarjetas_rojas_8');
let id_tarjetas_rojas_9 = document.querySelector('.id_tarjetas_rojas_9');
let id_tarjetas_rojas_10 = document.querySelector('.id_tarjetas_rojas_10');
let id_tarjetas_rojas_11 = document.querySelector('.id_tarjetas_rojas_11');
let id_tarjetas_rojas_12 = document.querySelector('.id_tarjetas_rojas_12');
let id_tarjetas_rojas_13 = document.querySelector('.id_tarjetas_rojas_13');
let id_tarjetas_rojas_14 = document.querySelector('.id_tarjetas_rojas_14');
let id_tarjetas_rojas_15 = document.querySelector('.id_tarjetas_rojas_15');
let id_tarjetas_rojas_16 = document.querySelector('.id_tarjetas_rojas_16');
let id_tarjetas_rojas_17 = document.querySelector('.id_tarjetas_rojas_17');
let id_tarjetas_rojas_18 = document.querySelector('.id_tarjetas_rojas_18');

goles.addEventListener('click', () => {
    goles.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    goles.setAttribute('id', 'contenedor_goles_tarjetas_fondo_mostrar');
    goles_encajados.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    tarjetas_amarillas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    tarjetas_rojas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    id_goles_1.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_2.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_3.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_4.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_5.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_6.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_7.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_8.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_9.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_10.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_11.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_12.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_13.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_14.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_15.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_16.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_17.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_18.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_encajados_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_encajados_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
})

goles_encajados.addEventListener('click', () => {
    goles_encajados.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    goles.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    goles_encajados.setAttribute('id', 'contenedor_goles_tarjetas_fondo_mostrar');
    tarjetas_amarillas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    tarjetas_rojas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    id_goles_encajados_1.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_encajados_2.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
})

tarjetas_amarillas.addEventListener('click', () => {
    tarjetas_amarillas.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    goles.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    goles_encajados.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    tarjetas_amarillas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_mostrar');
    tarjetas_rojas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    id_tarjetas_amarillas_1.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_2.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_3.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_4.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_5.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_6.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_7.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_8.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_9.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_10.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_11.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_12.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_13.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_14.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_15.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_16.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_17.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_amarillas_18.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_goles_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_encajados_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_encajados_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
})

tarjetas_rojas.addEventListener('click', () => {
    tarjetas_amarillas.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    goles.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    goles_encajados.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    tarjetas_amarillas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_ocultar');
    tarjetas_rojas.setAttribute('id', 'contenedor_goles_tarjetas_fondo_mostrar');
    id_tarjetas_amarillas_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_amarillas_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_3.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_4.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_5.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_6.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_7.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_8.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_9.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_10.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_11.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_12.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_13.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_14.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_15.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_16.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_17.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_18.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_encajados_1.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_goles_encajados_2.setAttribute('id', 'contenedor_goles_tarjetas_ocultar');
    id_tarjetas_rojas_1.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_2.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_3.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_4.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_5.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_6.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_7.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_8.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_9.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_10.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_11.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_12.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_13.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_14.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_15.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_16.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_17.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
    id_tarjetas_rojas_18.setAttribute('id', 'contenedor_goles_tarjetas_mostrar');
})