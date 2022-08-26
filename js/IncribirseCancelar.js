const inscribirseCancelar = document.getElementById('inscribirseCancelar');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');
const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
const alertt = document.getElementById('alertAña');
let html = document.querySelector("html");
var aña;

function getAña(id) {
    aña = id
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
                getAña(data['dataID'])
                let contenidoModalInscripcionES = `
                <h1>¿En realidad deseas inscribirte a este evento?</h1>
                <p>Si te inscribes deberas asistir al evento en la fecha y lugar indicados</p>
                <div class="BotonesRegistroInicio">
                    <button class="buttonxd" id="inscribirse" onclick=inscripcion()>Inscribirse</button>
                    <button id="close" class="buttonxd" onclick=closeModal()>Cerrar</button>
                </div>`
                contenidoModalInscripcion.innerHTML = contenidoModalInscripcionES;

            }
        })

}

function CancelarInscripcion(id) {
    modal_container.classList.add('show');
    fetch('APISessions.php?peticion=1')
        .then(res => res.json())
        .then(data => {
            if (data != 'ERROR') {
                getAña(data['dataID'])
                contenidoModalInscripcion.innerHTML = `
                <h1>¿En realidad deseas cancelar la inscripcion a este evento?</h1>
                <p>Acuerdate que ellos cuentan con tu presencia :)</p>
                <div class="BotonesRegistroInicio">
                    <button class="buttonxd" id="inscribirse" onclick=cancelarInscripcion()>Cancelar inscripcion</button>
                    <button id="close" class="buttonxd" onclick=closeModal()>Cerrar</button>
                </div>
                `;
            }
        })

}


function inscripcion() {
    let estiben = window.location.search;
    id = estiben.split('=')
    fetch("./ejecutar.php?sql=INSERT INTO`inscriptions`(`id_inscriptions`, `id_event`, `id_persona_inscrita`, `date_inscriptions`) VALUES(NULL, '" + id[1] + "', '" + aña + "', NOW()); ")
    let msg;
    if (html.lang == "es") {
        msg = nice("Proceso completado")
    } else {
        msg = nice("Procces complete")
    }
    alertt.innerHTML = msg;
    showNotification()
    setTimeout(function () {
        location.reload()
    }, 800);
}

function cancelarInscripcion() {
    let estiben = window.location.search;
    id = estiben.split('=');
    fetch("./ejecutar.php?sql=DELETE FROM inscriptions WHERE id_event = '" + id[1] + "' AND id_persona_inscrita ='" + aña + "';")
    let msg;
    if (html.lang == "es") {
        msg = nice("Proceso completado")
    } else {
        msg = nice("Procces complete")
    }
    alertt.innerHTML = msg;
    showNotification()
    setTimeout(function () {
        location.reload()
    }, 800);
}


function warning(msg) {
    return `
<div class="alert hide warning" id="alert">
    <div class="containerNotification">
        <span class="msg">${msg}</span>
        <div class="close-btn" id="close" onclick="hideNotification()">
            <img src="../img/iconos/close.svg" alt="">
        </div>
    </div>
</div>`
}

function alertf(msg) {
    return `
<div class="alert hide" id="alert">
    <div class="containerNotification">
        <span class="msg">${msg}</span>
        <div class="close-btn" id="close" onclick="hideNotification()">
            <img src="../img/iconos/close.svg" alt="">
        </div>
    </div>
</div>`
}


function nice(msg) {
    return `
<div class="alert hide nice" id="alert">
    <div class="containerNotification">
        <span class="msg">${msg}</span>
        <div class="close-btn" id="close" onclick="hideNotification()">
            <img src="../img/iconos/close.svg" alt="">
        </div>
    </div>
</div>`
}

