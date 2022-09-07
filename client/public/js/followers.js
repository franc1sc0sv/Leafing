const buttonFollowDiv = document.getElementById('buttonFollow');
const alertProfile = document.getElementById('alertProfile');
let buttonFollowB = `<button class="followButon seguir" onclick="follow()">Seguir</button>`;
let editProfileB = `<a href="./account/cuenta.php"><button class="followButon editar">Editar</button></a>`;
let cancelFollowB = `<button class="followButon dejarSeguir" onclick="cancelFollow()">Dejar de seguir</button>`;
let spinner = `
<div class="containerSpinner">
<div class="sk-fading-circle">
  <div class="sk-circle1 sk-circle"></div>
  <div class="sk-circle2 sk-circle"></div>
  <div class="sk-circle3 sk-circle"></div>
  <div class="sk-circle4 sk-circle"></div>
  <div class="sk-circle5 sk-circle"></div>
  <div class="sk-circle6 sk-circle"></div>
  <div class="sk-circle7 sk-circle"></div>
  <div class="sk-circle8 sk-circle"></div>
  <div class="sk-circle9 sk-circle"></div>
  <div class="sk-circle10 sk-circle"></div>
  <div class="sk-circle11 sk-circle"></div>
  <div class="sk-circle12 sk-circle"></div>
</div>
</div>
`

window.onload = function () {
    definesButton();
    definesFollowers();
}

function definesFollowers() {
    let followers = document.getElementById('followers');
    let following = document.getElementById('following');
    let URLsearch = window.location.search;

    fetch(`/LEAFING/Crea-J-2022/client/api/followers.php${URLsearch}&stage=4`)
        .then(res => res.json())
        .then(data => {
            following.innerHTML = data[0][0];
        })

    fetch(`/LEAFING/Crea-J-2022/client/api/followers.php${URLsearch}&stage=5`)
        .then(res => res.json())
        .then(data => {
            followers.innerHTML = data[0][0];
        })
}


function definesButton() {
    let URLsearch = window.location.search;
    fetch(`/LEAFING/Crea-J-2022/client/api/followers.php${URLsearch}&stage=1`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == 'sesion') {
                buttonFollowDiv.innerHTML = ``;
            } else if (data == 'same') {
                buttonFollowDiv.innerHTML = editProfileB;
            } else if (data == 1) {
                buttonFollowDiv.innerHTML = cancelFollowB;
            } else if (data == 0) {
                buttonFollowDiv.innerHTML = buttonFollowB;
            } else {
                console.log(data)
            }


        })
}

function closeModal() {
    let modal_container = document.getElementById('modal_container');
    modal_container.classList.remove('show');
}

function follow() {
    let URLsearch = window.location.search;
    fetch(`/LEAFING/Crea-J-2022/client/api/followers.php${URLsearch}&stage=2`);
    buttonFollowDiv.innerHTML = spinner;

    let msg;
    if (html.lang == "es") {
        msg = nice("Proceso completado")
    } else {
        msg = nice("Procces complete")
    }
    alertProfile.innerHTML = msg;
    showNotification()

    setTimeout(() => {
        definesButton();
        definesFollowers();
    }, 3000);


}

function cancelFollow() {
    contenidoModalInscripcionMesajeFollow("Deseas dejar de seguir a esta cuenta", "Aceptar", "Cerrar", "fetchCancelFollow")
    let modal_container = document.getElementById('modal_container');
    modal_container.classList.add('show');
}

function fetchCancelFollow() {
    let URLsearch = window.location.search;
    fetch(`/LEAFING/Crea-J-2022/client/api/followers.php${URLsearch}&stage=3`);
    buttonFollowDiv.innerHTML = spinner;

    let msg;
    if (html.lang == "es") {
        msg = nice("Proceso completado")
    } else {
        msg = nice("Procces complete")
    }
    alertProfile.innerHTML = msg;
    showNotification()
    closeModal()
    setTimeout(() => {
        definesButton();
        definesFollowers();
    }, 3000);

}


function contenidoModalInscripcionMesajeFollow(dato, dato2, dato3, funtion) {
    let contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
    contenidoModalInscripcion.innerHTML = `
    <h1>${dato}</h1>
    <div class="BotonesRegistroInicio">
        <button class="buttonxd" id="inscribirse" onclick=${funtion}()>${dato2}</button>
        <button id="close" class="buttonxd" onclick=closeModal()>${dato3}</button>
    </div>`;
}

function nice(msg) {
    return `
        <div class="alert hide nice" id="alert">
            <div class="containerNotification">
                <span class="msg">${msg}</span>
                <div class="close-btn" id="close" onclick="hideNotification()">
                    <img src="../assets/iconos/close.svg" alt="">
                </div>
            </div>
        </div> `
}
