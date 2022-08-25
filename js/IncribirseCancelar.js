const inscribirseCancelar = document.getElementById('inscribirseCancelar');
const butonInscribirse = `<button class="ModalOpen open" id="inscribirse"onclick=inscribirse(this)> Inscribirse</button>`;
const butonCancelar = `<button id="Cancelar" onclick=CancelarInscripcion(this)>Cancelar inscripcion</button>`;
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');
const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
let pathname = window.location.pathname;
if (pathname == "/LEAFING/Crea-J-2022/php/evento-especifico.php") {
    fetch('APISessions.php?peticion=1')
        .then(res => res.json())
        .then(data => {
            // data['dataID'];//User_ID
            // data['estatus'];//True:logeado
            // data['typeof'];//1: admin, 2:user
            console.log(data)
            if (data == 'ERROR') {
                inscribirseCancelar.innerHTML = butonInscribirse;
            } else {
                let estiben = window.location.search;
                fetch(`APISessions.php${estiben}&peticion=2`)
                    .then(res => res.json())
                    .then(data => {
                        //console.log(data)
                        if (data == 0) {
                            inscribirseCancelar.innerHTML = butonInscribirse;
                        } else if (data == 1) {
                            inscribirseCancelar.innerHTML = butonCancelar;
                        } else {
                            console.log(data);
                        }
                    })
            }
        })
}
function closeModal() {
    modal_container.classList.remove('show');
}


function inscribirse(id) {
    //    console.log(id.id);
    modal_container.classList.add('show');
    fetch('APISessions.php?peticion=1')
        .then(res => res.json())
        .then(data => {
            if (data == 'ERROR') {
                let contenidoModalInscripcionES = `
                <h1>Necesitas tener una cuenta para poder inscribirte al evento</h1>
                <div class="BotonesRegistroInicio">
                        <a href="../php/formulario_inicio-sesion.php" class="question">¿Ya tienes una cuenta?</a>
                        <a href="../php/formulario_registro.php" class="question">¿Aún no tienes una cuenta?</a>
                </div>
                <button id="close" class="buttonxd" onclick=closeModal()>Cerrar</button>
                `



                contenidoModalInscripcion.innerHTML = contenidoModalInscripcionES;
            } else {
                contenidoModalInscripcion.innerHTML = `
                <h1>Inscribete</h1>
                <button id="close" class="buttonxd" onclick=closeModal()>Cerrar</button>
                `;
            }
        })

}

function CancelarInscripcion(id) {
    modal_container.classList.add('show');
    contenidoModalInscripcion.innerHTML = `
    <h1>Cancelar inscripcion</h1>
    <button id="close" class="buttonxd" onclick=closeModal()>Cerrar</button>
    `;

}

