window.onload = () => {
    const form_asociate = document.querySelector('.formulario_asociate_socios');
    const contenedor_asociate = document.querySelector('.mostrar_mensajes_asociate');

    form_asociate.addEventListener('submit', (e) => {
        e.preventDefault();
        let data_asociate = new FormData(e.currentTarget);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/controlador_asociate.php', true);
        xhr.send(data_asociate);
        xhr.addEventListener('load', () => {
            let valor = xhr.response;

            /*# Sweet Alert #*/
            if (valor == "Registrado con exito") {
                setTimeout(() => {


                    let timerInterval
                    Swal.fire({
                        color: 'white',
                        title: 'Verificando Datos',
                        html: 'Esta ventana se cerrará en <b></b> milisegundos.',
                        timer: 2200,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                b.textContent = Swal.getTimerLeft()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {
                            console.log('I was closed by the timer')
                        }
                    })
                }, 500);
                setTimeout(() => {
                    Swal.fire({
                        color: 'white',
                        position: 'center',
                        icon: 'success',
                        title: 'Registrado con exito',
                        showConfirmButton: false,
                        timer: 1500
                    })
                }, 3300);

                setTimeout(() => {
                    window.location.href = './socios_acceso.php';
                }, 4200);

            }
        })
    })
}