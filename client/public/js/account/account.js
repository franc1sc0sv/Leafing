if (document.getElementById('name')) {
    let namee = document.getElementById('name');
    let lastname = document.getElementById('lastname');
    let user = document.getElementById('usuario');
    let email = document.getElementById('email');
    let boutme = document.getElementById('sobre-mi');
    let container = document.getElementById('cont');
    let alertt = document.getElementById('alertt');


    //Detectar los cambios

    namee.addEventListener('change', () => {
        container.classList.remove('hide');
    })

    lastname.addEventListener('change', () => {
        container.classList.remove('hide');
    })

    user.addEventListener('change', () => {
        container.classList.remove('hide');
    })

    boutme.addEventListener('change', () => {
        container.classList.remove('hide');
    })

    const formCC = document.getElementById('formCC')
    const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
    const modal_container = document.getElementById('modal_container');

    function closeModal() {
        modal_container.classList.remove('show');
        setTimeout(function () {
            location.reload()
        }, 600);
    }

    formCC.addEventListener('submit', function (e) {
        e.preventDefault()
        let data = new FormData(formCC);

        fetch('/LEAFING/Crea-J-2022/client/api/account/accountUp.php', {
            method: 'post',
            body: data
        })

            .then(res => res.json())
            .then(data => {
                console.log(data)
                if (data == "updated") {
                    modal_container.classList.add('show');
                    let contenidoModalInscripcionES = `
                <h1>Tus datos han sido actualizados</h1>
                <div class=""container_imgCreated><img src="/LEAFING/Crea-J-2022/client/public/assets/iconos/comprobado.png" class="imgCreated"></div>
                <button id="close" class="buttonxd" onclick="closeModal()">Cerrar</button>
                `
                    contenidoModalInscripcion.innerHTML = contenidoModalInscripcionES;

                    let close = document.getElementById('close');
                    close.addEventListener('click', () => {
                        closeModal();
                    })

                } else {
                    let msg;
                    if (html.lang == "es") {
                        msg = alertf("Llena todos campos")
                    } else {
                        msg = alertf("Fill all the fields")
                    }
                    alertt.innerHTML = msg;
                    showNotification()
                }

            })
    })

}
//La alerta



let plus = document.querySelector('.img-plus');

function closeModal2() {
    modal_container.classList.remove('show');
}

plus.addEventListener('click', () => {
    modal_container.classList.add('show');
    let close = document.getElementById('close');
    close.addEventListener('click', () => {
        closeModal2();
    })

})

console.log('añaa')
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