let modal_container_form_mensaje = document.getElementById('modal_container_form_mensaje');
let alertNotification = document.getElementById('alertNotification');
let html = document.querySelector("html");

document.getElementById('formMensajeDudes').addEventListener('submit', function (e) {
    e.preventDefault();
    let añaXD = document.querySelector('.añaXD');
    console.log(añaXD.id);
    let data = new FormData(formMensajeDudes);

    fetch(`/LEAFING/Crea-J-2022/client/api/mailsMensajes.php?eventoID=${añaXD.id}`, {
        method: 'post',
        body: data
    })
        .then(res => res.json())
        .then(data => {
            // console.log(data);
            if (data == "invalidCode") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Mensaje invalido")
                } else {
                    msg = alertf("Invalid message")
                }
                alertNotification.innerHTML = msg;
                showNotification()
            } else if (data == "error") {
                let msg;
                msg = alertf("error :)")

                alertNotification.innerHTML = msg;
                showNotification()
            } else if (data == "nobody") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Nadie esta inscrito al evento")
                } else {
                    msg = alertf("No one is registered for the event")
                }
                alertNotification.innerHTML = msg;
                showNotification()
            } else {
                let msg;
                if (html.lang == "es") {
                    msg = nice("Mensajes enviado correctamente")
                } else {
                    msg = nice("Messages sent successfully")
                }
                alertNotification.innerHTML = msg;
                showNotification()
                closeModalMyevents()
            }
        })
})


function enviarCorreo(idEvent) {
    modal_container_form_mensaje.classList.add('show');
    let añaXD = document.querySelector('.añaXD');
    añaXD.setAttribute('id', `${idEvent}`);
}

function closeModalMyevents() {
    modal_container_form_mensaje.classList.remove('show');
}

function warning(msg) {
    return `
        <div class="alert hide warning" id = "alert">
            <div class="containerNotification">
                <span class="msg">${msg}</span>
                <div class="close-btn" id="close" onclick="hideNotification()">
                    <img src="../../assets/iconos/close.svg" alt="">
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
                    <img src="../../assets/iconos/close.svg" alt="">
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
                    <img src="../assets/iconos/close.svg" alt="">
                </div>
            </div>
</div> `
}