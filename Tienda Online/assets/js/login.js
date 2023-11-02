/*Funcionalidades básicas para el formulario*/
const container = document.querySelector(".container"),
   pwShowHide = document.querySelectorAll(".showHidePw"),
   pwFields = document.querySelectorAll(".password"),
   signUp = document.querySelector(".signup-link"),
   login = document.querySelector(".login-link");

if (signUp) {
   pwShowHide.forEach(eyeIcon => {
      eyeIcon.addEventListener("click", () => {
         pwFields.forEach(pwField => {
            if (pwField.type === "password") {
               pwField.type = "text";
               pwShowHide.forEach(icon => {
                  icon.classList.replace("uil-eye-slash", "uil-eye");
               })
            } else {
               pwField.type = "password";
               pwShowHide.forEach(icon => {
                  icon.classList.replace("uil-eye", "uil-eye-slash");
               })
            }
         })
      })
   })
   signUp.addEventListener("click", () => {
      container.classList.add("active");
   });
   login.addEventListener("click", () => {
      container.classList.remove("active");
   });
}

/*Funcionalidad para que al hacer clic en el botón 'Mi cuenta' se muestre el formulario*/
document.addEventListener("DOMContentLoaded", function () {

   const miCuentaBtn = document.getElementById("miCuentaBtn");
   const contenedorPrincipal = document.querySelector(".contenedor-principal-login");
   const fondoNegro = document.querySelector(".contenedor-principal-login");
   const formulario_producto = document.querySelector("#formulario-producto-deslogeado");
   const carrito_deslogeado = document.querySelector('.carrito-deslogeado');

   if (miCuentaBtn && fondoNegro) {
      miCuentaBtn.addEventListener("click", function () {
         setTimeout(function () {
            contenedorPrincipal.classList.add("active");
            document.body.style.overflow = "hidden";

            document.documentElement.scrollTop = 0;
         }, 50);
      });

      if (formulario_producto) {
         formulario_producto.addEventListener("submit", (e) => {
            e.preventDefault();

            setTimeout(function () {
               contenedorPrincipal.classList.add("active");
               document.body.style.overflow = "hidden";
               document.documentElement.scrollTop = 0;
            }, 50);
         });
      }

      carrito_deslogeado.addEventListener('click', () => {
         setTimeout(function () {
            contenedorPrincipal.classList.add("active");
            document.body.style.overflow = "hidden";
            document.documentElement.scrollTop = 0;
         }, 50);
      });

      const cerrarTarjeta = document.querySelector(".cerrar-tarjeta");
      if (cerrarTarjeta) {
         cerrarTarjeta.addEventListener("click", function () {
            contenedorPrincipal.classList.remove("active");
            document.body.style.overflow = "auto";

            const camposTexto = contenedorPrincipal.querySelectorAll("input[type='text'], input[type='email'], input[type='password']");
            camposTexto.forEach(function (campo) {
               campo.value = "";
            });
         });
      }

      fondoNegro.addEventListener("click", function (event) {
         if (event.target === fondoNegro) {
            contenedorPrincipal.classList.remove("active");
            document.body.style.overflow = "auto";
         }
      });
   }
});

/* Register */
let emailForVerification;

const formulario_register = document.querySelector('#formulario-register');

if (formulario_register) {
   formulario_register.addEventListener('submit', async (e) => {
      e.preventDefault();

      const data_register = new FormData(e.currentTarget);
      emailForVerification = data_register.get('email-register');

      const recuerdameCheckbox = document.getElementById('recuerdame');
      data_register.append('recuerdame', recuerdameCheckbox.checked ? "1" : "0");

      const loadingAlert = Swal.fire({
         title: 'Verificando Datos...',
         text: 'Por favor, espere...',
         allowOutsideClick: false,
         showConfirmButton: false,
         willOpen: () => Swal.showLoading()
      });

      try {
         const response = await fetch('../config/controllers/controlador-register.php', {
            method: 'POST',
            body: data_register
         });

         const valor = await response.text();
         let mensajeSinError = valor.replace(/^Error:\s*/, '');
         loadingAlert.close();

         Swal.fire({
            icon: (valor.includes('Error') ? 'error' : 'success'),
            title: mensajeSinError,
            timer: 2000,
            showConfirmButton: false
         });

         if (valor === 'Enviando codigo de verificacion') {
            const codigoVerificacion = await Swal.fire({
               icon: 'info',
               title: 'Verificación de Correo',
               text: 'Revisa tu bandeja de entrada y sigue las instrucciones del correo electrónico. Tienes 2 minutos para verificar el código.',
               confirmButtonText: 'aceptar'
            });
         } else if (valor.includes('Bienvenido')) {
            Swal.fire({
               title: valor,
               text: 'Inicio de sesión exitoso',
               icon: 'success',
               showConfirmButton: false,
               timer: 2000
            }).then((result) => {
               location.href = 'pagina.php'
            });
         }
      } catch (error) {
         console.error(`Error: ${error}`);
      }
   });
}

async function verificarCodigoDeConfirmacion(codigo, email) {
   try {
      const response = await fetch(`../config/controllers/verificar-codigo.php?codigo=${codigo}&email=${email}`);
      const resultado = await response.text();

      Swal.fire({
         icon: (resultado === 'true' ? 'success' : 'error'),
         title: resultado,
         timer: 2000,
         showConfirmButton: false
      });

      if (resultado === 'true') {
         // El token es válido, actualiza la base de datos
         if (actualizarEstadoDeCorreoConfirmado(email)) {
            const fechaRegistro = obtenerFechaRegistro(email);

            if (haPasado60Segundos(fechaRegistro)) {
               eliminarUsuario(email);
               console.log("Registro eliminado. No se confirmó el correo en 60 segundos.");
               return;
            } else {
               console.log("Registrado con éxito. Verifica tu correo electrónico para completar el registro.");
            }
         } else {
            console.error("Error al actualizar el estado del correo confirmado.");
         }
      }
   } catch (error) {
      console.error(`Error: ${error}`);
   }
}

/* Login */
const formulario_login = document.querySelector('#formulario-login');
if (formulario_login) {
   formulario_login.addEventListener('submit', (e) => {
      e.preventDefault();
      let data_login = new FormData(e.currentTarget);

      const recuerdameCheckbox = document.getElementById('logCheck');
      data_login.append('recuerdame', recuerdameCheckbox.checked ? "1" : "0");

      fetch('../config/controllers/controlador-login.php', {
         method: 'POST',
         body: data_login
      })
         .then(response => response.text())
         .then(res => {
            console.log(res)
            if (res == 'Email No verificado') {
               Swal.fire({
                  icon: 'warning',
                  title: 'Correo no verificado',
                  text: 'Ese correo aún no ha sido verificado.',
                  confirmButtonText: 'Cerrar'
               });
            } else if (res.includes('Bienvenido')) {
               Swal.fire({
                  title: res,
                  text: 'Inicio de sesión exitoso',
                  icon: 'success',
                  showConfirmButton: false,
                  timer: 2000
               }).then((result) => {
                  location.href = 'pagina.php'
               });
            } else if (res == 'Correo inexistente') {
               Swal.fire({
                  title: 'Error',
                  text: 'Email no encontrado',
                  icon: 'error',
                  showConfirmButton: false,
                  timer: 2000
               });
            } else if (res == 'Contraseña incorrecta') {
               Swal.fire({
                  title: 'Error',
                  text: 'Contraseña incorrecta',
                  icon: 'error',
                  showConfirmButton: false,
                  timer: 2000
               });
            }
         })
         .catch(error => {
            console.log(error)
         })
   });

   function updateRecuerdame() {
      const recuerdameCheckbox = document.getElementById('logCheck');
      const recuerdameInput = document.getElementById('recuerdame');

      recuerdameInput.value = recuerdameCheckbox.checked ? "1" : "0";
   }
}

/* Usuario logeado */
let contenedorIconoMiCuenta = document.getElementById('contenedor-icono-miCuenta');
let barraDesplegable = document.querySelector('.barra-desplegable');

if (contenedorIconoMiCuenta) {
   contenedorIconoMiCuenta.addEventListener('click', function (event) {
      event.stopPropagation();
      barraDesplegable.classList.toggle('active');
   });
}

if (barraDesplegable) {
   document.addEventListener('click', function (event) {
      if (!barraDesplegable.contains(event.target) && event.target !== contenedorIconoMiCuenta) {
         barraDesplegable.classList.remove('active');
      }
   });
}

/* Cerrar sesión */
const btn_cerrar_sesion = document.querySelector('.btn_cerrar_sesion');

if (btn_cerrar_sesion) {
   btn_cerrar_sesion.addEventListener('click', () => {
      console.log('hola')
      Swal.fire({
         title: "¡Has cerrado sesión!",
         text: "Esperamos verte pronto de nuevo.",
         icon: "success",
         timer: 2500,
         showConfirmButton: false
      });

      // Eliminar la cookie de sesión al cerrar sesión
      document.cookie = "sesion_usuario=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;";

      setTimeout(() => {
         window.location.href = "../config/controllers/cerrar_sesion.php";
      }, 3000);
   });
}






