const icono_img_anterior = document.querySelector('.main_icono_img_anterior');
const icono_img_siguiente = document.querySelector('.main_icono_img_siguiente');
const img1 = document.querySelector('.main_img1_mostrar');
const img2 = document.querySelector('.main_img2_ocultar');
const img3 = document.querySelector('.main_img3_ocultar');
const img4 = document.querySelector('.main_img4_ocultar');
const img5 = document.querySelector('.main_img5_ocultar');
const pt1 = document.querySelector('.main_punto1');
const pt2 = document.querySelector('.main_punto2');
const pt3 = document.querySelector('.main_punto3');
const pt4 = document.querySelector('.main_punto4');
const pt5 = document.querySelector('.main_punto5');

let numImg_Siguiente = 1;

if (pt1) {
   pt1.addEventListener('click', () => {
      numImg_Siguiente = 1

      if (numImg_Siguiente == 1) {
         img1.removeAttribute('class', 'main_img1_ocultar')
         img1.setAttribute('class', 'main_img1_mostrar')
         img2.removeAttribute('class', 'main_img2_mostrar')
         img2.setAttribute('class', 'main_img2_ocultar')
         img3.removeAttribute('class', 'main_img3_mostrar')
         img3.setAttribute('class', 'main_img3_ocultar')
         img4.removeAttribute('class', 'main_img4_mostrar')
         img4.setAttribute('class', 'main_img4_ocultar')
         img5.removeAttribute('class', 'main_img5_mostrar')
         img5.setAttribute('class', 'main_img5_ocultar')

         pt1.removeAttribute('id', 'ocultar');
         pt1.setAttribute('id', 'mostrar');
         pt2.removeAttribute('id', 'mostrar');
         pt2.setAttribute('id', 'ocultar');
         pt3.removeAttribute('id', 'mostrar');
         pt3.setAttribute('id', 'ocultar');
         pt4.removeAttribute('id', 'mostrar');
         pt4.setAttribute('id', 'ocultar');
         pt5.removeAttribute('id', 'mostrar');
         pt5.setAttribute('id', 'ocultar');
      }
   });
}

if (pt2) {
   pt2.addEventListener('click', () => {
      numImg_Siguiente = 2

      if (numImg_Siguiente == 2) {
         img1.removeAttribute('class', 'main_img1_mostrar')
         img1.setAttribute('class', 'main_img1_ocultar')
         img2.removeAttribute('class', 'main_img2_ocultar')
         img2.setAttribute('class', 'main_img2_mostrar')
         img3.removeAttribute('class', 'main_img3_mostrar')
         img3.setAttribute('class', 'main_img3_ocultar')
         img4.removeAttribute('class', 'main_img4_mostrar')
         img4.setAttribute('class', 'main_img4_ocultar')
         img5.removeAttribute('class', 'main_img5_mostrar')
         img5.setAttribute('class', 'main_img5_ocultar')

         pt1.removeAttribute('id', 'mostrar');
         pt1.setAttribute('id', 'ocultar');
         pt2.removeAttribute('id', 'ocultar');
         pt2.setAttribute('id', 'mostrar');
         pt3.removeAttribute('id', 'mostrar');
         pt3.setAttribute('id', 'ocultar');
         pt4.removeAttribute('id', 'mostrar');
         pt4.setAttribute('id', 'ocultar');
         pt5.removeAttribute('id', 'mostrar');
         pt5.setAttribute('id', 'ocultar');
      }

   });
}

if (pt3) {
   pt3.addEventListener('click', () => {
      numImg_Siguiente = 3

      if (numImg_Siguiente == 3) {
         img1.removeAttribute('class', 'main_img1_mostrar')
         img1.setAttribute('class', 'main_img1_ocultar')
         img2.removeAttribute('class', 'main_img2_mostrar')
         img2.setAttribute('class', 'main_img2_ocultar')
         img3.removeAttribute('class', 'main_img3_ocultar')
         img3.setAttribute('class', 'main_img3_mostrar')
         img4.removeAttribute('class', 'main_img4_mostrar')
         img4.setAttribute('class', 'main_img4_ocultar')
         img5.removeAttribute('class', 'main_img5_mostrar')
         img5.setAttribute('class', 'main_img5_ocultar')

         pt1.removeAttribute('id', 'mostrar');
         pt1.setAttribute('id', 'ocultar');
         pt2.removeAttribute('id', 'mostrar');
         pt2.setAttribute('id', 'ocultar');
         pt3.removeAttribute('id', 'ocultar');
         pt3.setAttribute('id', 'mostrar');
         pt4.removeAttribute('id', 'mostrar');
         pt4.setAttribute('id', 'ocultar');
         pt5.removeAttribute('id', 'mostrar');
         pt5.setAttribute('id', 'ocultar');
      }

   });
}

if (pt4) {
   pt4.addEventListener('click', () => {
      numImg_Siguiente = 4

      if (numImg_Siguiente == 4) {
         img1.removeAttribute('class', 'main_img1_mostrar')
         img1.setAttribute('class', 'main_img1_ocultar')
         img2.removeAttribute('class', 'main_img2_mostrar')
         img2.setAttribute('class', 'main_img2_ocultar')
         img3.removeAttribute('class', 'main_img3_mostrar')
         img3.setAttribute('class', 'main_img3_ocultar')
         img4.removeAttribute('class', 'main_img4_ocultar')
         img4.setAttribute('class', 'main_img4_mostrar')
         img5.removeAttribute('class', 'main_img5_mostrar')
         img5.setAttribute('class', 'main_img5_ocultar')

         pt1.removeAttribute('id', 'mostrar');
         pt1.setAttribute('id', 'ocultar');
         pt2.removeAttribute('id', 'mostrar');
         pt2.setAttribute('id', 'ocultar');
         pt3.removeAttribute('id', 'mostrar');
         pt3.setAttribute('id', 'ocultar');
         pt4.removeAttribute('id', 'ocultar');
         pt4.setAttribute('id', 'mostrar');
         pt5.removeAttribute('id', 'mostrar');
         pt5.setAttribute('id', 'ocultar');
      }

   });
}

if (pt5) {
   pt5.addEventListener('click', () => {
      numImg_Siguiente = 5

      if (numImg_Siguiente == 5) {
         img1.removeAttribute('class', 'main_img1_mostrar')
         img1.setAttribute('class', 'main_img1_ocultar')
         img2.removeAttribute('class', 'main_img2_mostrar')
         img2.setAttribute('class', 'main_img2_ocultar')
         img3.removeAttribute('class', 'main_img3_mostrar')
         img3.setAttribute('class', 'main_img3_ocultar')
         img4.removeAttribute('class', 'main_img4_mostrar')
         img4.setAttribute('class', 'main_img4_ocultar')
         img5.removeAttribute('class', 'main_img5_ocultar')
         img5.setAttribute('class', 'main_img5_mostrar')

         pt1.removeAttribute('id', 'mostrar');
         pt1.setAttribute('id', 'ocultar');
         pt2.removeAttribute('id', 'mostrar');
         pt2.setAttribute('id', 'ocultar');
         pt3.removeAttribute('id', 'mostrar');
         pt3.setAttribute('id', 'ocultar');
         pt4.removeAttribute('id', 'mostrar');
         pt4.setAttribute('id', 'ocultar');
         pt5.removeAttribute('id', 'ocultar');
         pt5.setAttribute('id', 'mostrar');
      }

   });
}

if (icono_img_siguiente) {
   icono_img_siguiente.addEventListener('click', () => {
      numImg_Siguiente++

      if (numImg_Siguiente == 2) {
         img1.removeAttribute('class', 'main_img1_mostrar')
         img1.setAttribute('class', 'main_img1_ocultar')
         img2.removeAttribute('class', 'main_img2_ocultar')
         img2.setAttribute('class', 'main_img2_mostrar')

         pt1.removeAttribute('id', 'mostrar');
         pt1.setAttribute('id', 'ocultar');
         pt2.removeAttribute('id', 'ocultar');
         pt2.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente == 3) {
         img2.removeAttribute('class', 'main_img2_mostrar')
         img2.setAttribute('class', 'main_img2_ocultar')
         img3.removeAttribute('class', 'main_img3_ocultar')
         img3.setAttribute('class', 'main_img3_mostrar')

         pt2.removeAttribute('id', 'mostrar');
         pt2.setAttribute('id', 'ocultar');
         pt3.removeAttribute('id', 'ocultar');
         pt3.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente == 4) {
         img3.removeAttribute('class', 'main_img3_mostrar')
         img3.setAttribute('class', 'main_img3_ocultar')
         img4.removeAttribute('class', 'main_img4_ocultar')
         img4.setAttribute('class', 'main_img4_mostrar')

         pt3.removeAttribute('id', 'mostrar');
         pt3.setAttribute('id', 'ocultar');
         pt4.removeAttribute('id', 'ocultar');
         pt4.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente == 5) {
         img4.removeAttribute('class', 'main_img4_mostrar')
         img4.setAttribute('class', 'main_img4_ocultar')
         img5.removeAttribute('class', 'main_img5_ocultar')
         img5.setAttribute('class', 'main_img5_mostrar')

         pt4.removeAttribute('id', 'mostrar');
         pt4.setAttribute('id', 'ocultar');
         pt5.removeAttribute('id', 'ocultar');
         pt5.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente > 5) {
         numImg_Siguiente--
      }
   });
}

if (icono_img_anterior) {
   icono_img_anterior.addEventListener('click', () => {
      numImg_Siguiente--

      if (numImg_Siguiente == 4) {
         img5.removeAttribute('class', 'main_img5_mostrar')
         img5.setAttribute('class', 'main_img5_ocultar')
         img4.removeAttribute('class', 'main_img4_ocultar')
         img4.setAttribute('class', 'main_img4_mostrar')

         pt5.removeAttribute('id', 'mostrar');
         pt5.setAttribute('id', 'ocultar');
         pt4.removeAttribute('id', 'ocultar');
         pt4.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente == 3) {
         img4.removeAttribute('class', 'main_img4_mostrar')
         img4.setAttribute('class', 'main_img4_ocultar')
         img3.removeAttribute('class', 'main_img3_ocultar')
         img3.setAttribute('class', 'main_img3_mostrar')

         pt4.removeAttribute('id', 'mostrar');
         pt4.setAttribute('id', 'ocultar');
         pt3.removeAttribute('id', 'ocultar');
         pt3.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente == 2) {
         img3.removeAttribute('class', 'main_img3_mostrar')
         img3.setAttribute('class', 'main_img3_ocultar')
         img2.removeAttribute('class', 'main_img2_ocultar')
         img2.setAttribute('class', 'main_img2_mostrar')

         pt3.removeAttribute('id', 'mostrar');
         pt3.setAttribute('id', 'ocultar');
         pt2.removeAttribute('id', 'ocultar');
         pt2.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente == 1) {
         img2.removeAttribute('class', 'main_img2_mostrar')
         img2.setAttribute('class', 'main_img2_ocultar')
         img1.removeAttribute('class', 'main_img1_ocultar')
         img1.setAttribute('class', 'main_img1_mostrar')

         pt2.removeAttribute('id', 'mostrar');
         pt2.setAttribute('id', 'ocultar');
         pt1.removeAttribute('id', 'ocultar');
         pt1.setAttribute('id', 'mostrar');
      }

      if (numImg_Siguiente < 1) {
         numImg_Siguiente++
      }
   });
}

/* # Formulario asociate # */
var inputs = document.getElementsByClassName('formulario_input');
for (var i = 0; i < inputs.length; i++) {
   inputs[i].addEventListener('keyup', function () {
      if (this.value.length >= 1) {
         this.nextElementSibling.classList.add('fijar');
      } else {
         this.nextElementSibling.classList.remove('fijar');
      }
   });
}

/* # Formulario acceso # */
var inputs = document.getElementsByClassName('formulario_input_acceso');
for (var i = 0; i < inputs.length; i++) {
   inputs[i].addEventListener('keyup', function () {
      if (this.value.length >= 1) {
         this.nextElementSibling.classList.add('fijar');
      } else {
         this.nextElementSibling.classList.remove('fijar');
      }
   });
}

const icono_clave_mostrar = document.querySelector('#icono_ojo_abierto_formulario_clave');
const icono_confirmarClave_mostrar = document.querySelector('#icono_ojo_abierto_formulario_confirmClave');
const input_clave = document.querySelector('.input_clave');
const input_confirmarclave = document.querySelector('.input_confirmarclave');

var numero_clave = 0;
var numero_confirmarClave = 0;

if (icono_clave_mostrar) {
   icono_clave_mostrar.addEventListener('click', () => {
      numero_clave++
      if ((numero_clave % 2) == 0 && numero_clave != 0) {
         icono_clave_mostrar.classList.remove('icono_ojo_cerrado_formulario_confirmClave', 'fa-sharp', 'fa-solid', 'fa-eye');
         icono_clave_mostrar.classList.add('icono_ojo_abierto_formulario_clave', 'fa-solid', 'fa-eye-slash');
         input_clave.type = "password";
      } else {
         icono_clave_mostrar.classList.remove('icono_ojo_abierto_formulario_clave', 'fa-solid', 'fa-eye-slash');
         icono_clave_mostrar.classList.add('icono_ojo_cerrado_formulario_confirmClave', 'fa-sharp', 'fa-solid', 'fa-eye');
         input_clave.type = "text";
      }
   })
}

if(icono_confirmarClave_mostrar){
icono_confirmarClave_mostrar.addEventListener('click', () => {
   numero_confirmarClave++
   if ((numero_confirmarClave % 2) == 0 && numero_confirmarClave != 0) {
      icono_confirmarClave_mostrar.classList.remove('icono_ojo_cerrado_formulario_confirmClave', 'fa-sharp', 'fa-solid', 'fa-eye');
      icono_confirmarClave_mostrar.classList.add('icono_ojo_abierto_formulario_confirmClave', 'fa-solid', 'fa-eye-slash');
      input_confirmarclave.type = "password"
   } else {
      icono_confirmarClave_mostrar.classList.remove('icono_ojo_abierto_formulario_confirmClave', 'fa-solid', 'fa-eye-slash');
      icono_confirmarClave_mostrar.classList.add('icono_ojo_cerrado_formulario_confirmClave', 'fa-sharp', 'fa-solid', 'fa-eye');
      input_confirmarclave.type = "text"
   }
})
}

/*Cambiar contraseña (seccion perfil)*/
let btn_cambiar_clave = document.querySelector('btn_cambiar_clave');

