window.onload = () => {
    const form_acceso = document.querySelector('.formulario_acceso_socios');
    const mensaje_acceso = document.querySelector('.contenedor_mostrar_mensaje_acceso');

    form_acceso.addEventListener('submit', (e) => {
        e.preventDefault();

        let data_acceso = new FormData(e.currentTarget);
        let xhr = new XMLHttpRequest();
        xhr.open('POST', '../php/controlador_acceso.php', true);
        xhr.send(data_acceso);
        xhr.addEventListener('load', () => {
            let valor = xhr.response;


            /*# Sweet Alert #*/
            if (valor.includes("Bienvenido")) {

                Swal.fire({
                    color: 'white',
                    title: `${valor}`,
                    text: 'Club de Futbol Deportivo Palo',
                    timer: 1000,
                    icon: 'success',
                    confirmButtonColor: 'green',
                    confirmButtonText: 'Aceptar',

                }).then((result) => {
                    if (result) {
                        setTimeout(() => {
                            window.location.href = '../index.php';
                        }, 300);
                    }
                })
            }
        })
    })
}
