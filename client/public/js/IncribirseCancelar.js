const inscribirseCancelar = document.getElementById('inscribirseCancelar');
const modal_container = document.getElementById('modal_container');
const close = document.getElementById('close');
const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
const alertt = document.getElementById('alertAña');
let html = document.querySelector("html");
var aña;


function inscriptionButton() {
    let pathname = window.location.pathname;
    if (pathname == "/LEAFING/Crea-J-2022/client/public/php/evento-especifico.php") {
        fetch('/LEAFING/Crea-J-2022/client/api/sessions.php?peticion=1')
            .then(res => res.json())
            .then(data => {
                // data['dataID'];//User_ID
                // data['estatus'];//True:logeado
                // data['typeof'];//1: admin, 2:user
                //console.log(data)
                if (data == 'ERROR') {
                    if (html.lang == "es") {
                        inscribirseCancelar.innerHTML = `<button class="ModalOpen open" id="inscribirse"onclick=inscribirse(this)> Inscribirse</button>`;
                    } else {
                        inscribirseCancelar.innerHTML = `<button class="ModalOpen open" id="inscribirse"onclick=inscribirse(this)> Register</button>`;
                    }
                } else {
                    let estiben = window.location.search;
                    fetch(`/LEAFING/Crea-J-2022/client/api/sessions.php${estiben}&peticion=2`)
                        .then(res => res.json())
                        .then(data => {
                            //console.log(data)
                            if (data == 0) {
                                if (html.lang == "es") {
                                    inscribirseCancelar.innerHTML = `<button class="ModalOpen open" id="inscribirse"onclick=inscribirse(this)> Inscribirse</button>`;
                                } else {
                                    inscribirseCancelar.innerHTML = `<button class="ModalOpen open" id="inscribirse"onclick=inscribirse(this)> Register</button>`;
                                }
                            } else if (data == 1) {
                                if (html.lang == "es") {
                                    inscribirseCancelar.innerHTML = `<button id="Cancelar" onclick=CancelarInscripcion(this)>Cancelar inscripcion</button>`;
                                } else {
                                    inscribirseCancelar.innerHTML = `<button id="Cancelar" onclick=CancelarInscripcion(this)>Cancel registration</button>`;
                                }

                            } else {
                                console.log(data);
                            }
                        })
                }
            })
    }
}



function getAña(id) {
    aña = id
}
function closeModal() {
    modal_container.classList.remove('show');
}


function inscribirse(id) {
    //    console.log(id.id);
    modal_container.classList.add('show');
    fetch('/LEAFING/Crea-J-2022/client/api/sessions.php?peticion=1')
        .then(res => res.json())
        .then(data => {
            if (data == 'ERROR') {
                if (html.lang == "es") {
                    contenidoModalInscripcionMesajeSin("Necesitas tener una cuenta para poder inscribirte al evento", "¿Ya tienes una cuenta?", "¿Aún no tienes una cuenta?", "Cerrar")
                } else {
                    contenidoModalInscripcionMesajeSin("You need to have an account to register for the event", "Do you already have an account?", "Don't you have an account yet?", "Close")
                }
            } else {
                getAña(data['dataID'])
                if (html.lang == "es") {
                    contenidoModalInscripcionMesaje("¿En realidad deseas inscribirte a este evento?", "Si te inscribes deberas asistir al evento en la fecha y lugar indicados", "Inscribirse", "Cerrar", "inscripcion")
                } else {
                    contenidoModalInscripcionMesaje("Do you really want to register for this event?", "If you register, you must attend the event on the date and at the place indicated", "Register", "Close", "inscripcion")
                }



            }
        })

}

function CancelarInscripcion(id) {
    modal_container.classList.add('show');
    fetch('/LEAFING/Crea-J-2022/client/api/sessions.php?peticion=1')
        .then(res => res.json())
        .then(data => {
            if (data != 'ERROR') {
                getAña(data['dataID'])
                if (html.lang == "es") {
                    contenidoModalInscripcionMesaje("¿En realidad deseas cancelar la inscripcion a este evento ?", "Acuerdate que ellos cuentan con tu presencia :)", "Cancelar inscripcion", "Cerrar", "cancelarInscripcion")
                } else {
                    contenidoModalInscripcionMesaje("Do you really want to cancel the registration to this event?", "Remember that they count on your presence :)", "Cancel registration", "Close", "cancelarInscripcion")
                }
            }
        })

}


function inscripcion() {
    let estiben = window.location.search;
    id = estiben.split('=')
    fetch("/LEAFING/Crea-J-2022/client/api/ejecutar.php?sql=INSERT INTO`inscriptions`(`id_inscriptions`, `id_event`, `id_persona_inscrita`, `date_inscriptions`) VALUES(NULL, '" + id[1] + "', '" + aña + "', NOW()); ")
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
    fetch("/LEAFING/Crea-J-2022/client/api/ejecutar.php?sql=DELETE FROM inscriptions WHERE id_event = '" + id[1] + "' AND id_persona_inscrita ='" + aña + "';")
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
function contenidoModalInscripcionMesajeSin(dato, dato1, dato3, dato4) {
    let contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
    contenidoModalInscripcion.innerHTML = `
    <h1>${dato}</h1>
    <div class="BotonesRegistroInicio">
            <a href="../php/formulario_inicio-sesion.php" class="question">${dato1}</a>
            <a href="../php/formulario_registro.php" class="question">${dato3}</a>
    </div>
    <button id="close" class="buttonxd" onclick=closeModal()>${dato4}</button>
    `;
}

function contenidoModalInscripcionMesaje(dato, dato2, dato3, dato4, funtion) {
    let contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
    contenidoModalInscripcion.innerHTML = `
    <h1>${dato}</h1>
    <p>${dato2}</p>
    <div class="BotonesRegistroInicio">
        <button class="buttonxd" id="inscribirse" onclick=${funtion}()>${dato3}</button>
        <button id="close" class="buttonxd" onclick=closeModal()>${dato4}</button>
    </div>`;
}

function warning(msg) {
    return `
        <div class="alert hide warning" id = "alert">
            <div class="containerNotification">
                <span class="msg">${msg}</span>
                <div class="close-btn" id="close" onclick="hideNotification()">
                    <img src="../img/iconos/close.svg" alt="">
                </div>
            </div>
</div> `
}

function alertf(msg) {
    return `
        <div class="alert hide" id = "alert">
            <div class="containerNotification">
                <span class="msg">${msg}</span>
                <div class="close-btn" id="close" onclick="hideNotification()">
                    <img src="../img/iconos/close.svg" alt="">
                </div>
            </div>
</div> `
}


function nice(msg) {
    return `
        <div class="alert hide nice" id = "alert">
            <div class="containerNotification">
                <span class="msg">${msg}</span>
                <div class="close-btn" id="close" onclick="hideNotification()">
                    <img src="../img/iconos/close.svg" alt="">
                </div>
            </div>
</div> `
}
