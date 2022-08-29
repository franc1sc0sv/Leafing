let namee = document.getElementById('name');
let lastname = document.getElementById('lastname');
let user = document.getElementById('usuario');
let email = document.getElementById('email');
let boutme = document.getElementById('sobre-mi');
let container = document.getElementById('cont');

namee.addEventListener('change', () => {
    container.classList.remove('hide');
})

lastname.addEventListener('change', () => {
    container.classList.remove('hide');
})

user.addEventListener('change', () => {
    container.classList.remove('hide');
})

//La alerta

const formCC = document.getElementById('formCC')
const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
const modal_container = document.getElementById('modal_container');

function closeModal() {
    modal_container.classList.remove('show');
    setTimeout(function () {
        window.location.href = "../php/cuenta.php";
    }, 600);
}

formCC.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formCC);

    fetch('accountUp.php', {
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
                <div class=""container_imgCreated><img src="../img/iconos/comprobado.png" class="imgCreated"></div>
                <button id="close" class="buttonxd">Cerrar</button>
                `
                contenidoModalInscripcion.innerHTML = contenidoModalInscripcionES;

                let close = document.getElementById('close');
                close.addEventListener('click', () => {
                    closeModal();
                })

            }

        })
})