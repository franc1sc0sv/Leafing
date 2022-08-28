import { warning, alertf, nice } from "../js/alerts.js";
const alertLogin = document.getElementById('alertLogin')
const formC = document.getElementById('formC')
let html = document.querySelector("html");

const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
const modal_container = document.getElementById('modal_container');

function closeModal() {
    modal_container.classList.remove('show');
    setTimeout(function () {
        window.location.href = "../php/crear_evento.php";
    }, 800);
}

formC.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formC);

    fetch('createEvents.php', {
        method: 'post',
        body: data
    })

        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "EmptyFields") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Llena todos los campos")
                } else {
                    msg = alertf("Fill in all the fields")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            } else if (data == "TitleNotMatched") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Título no válido")
                } else {
                    msg = alertf("Invalid title")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            } else if (data == "DescriptionNotMatched") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Descripción no válida")
                } else {
                    msg = alertf("Invalid description")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            } else if (data == "AddressNotMatched") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Dirección no válida")
                } else {
                    msg = alertf("Invalid address")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            } else if (data == "DateStartNotMatched") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Fecha de inicio no válida")
                } else {
                    msg = alertf("Invalid start date")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            } else if (data == "DateEndNotMatched") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Fecha de fin no válida")
                } else {
                    msg = alertf("Invalid end date")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            } else if (data == "FilesNotMatched") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Formato de imagen no válido")
                } else {
                    msg = alertf("Invalid image format")
                }
                alertLogin.innerHTML = msg;
                showNotification()

            }
            else if (data == "Nice") {
                modal_container.classList.add('show');
                let contenidoModalInscripcionES = `
                <h1>Tu evento ha sido creado con éxito</h1>
                <div class=""container_imgCreated><img src="../img/iconos/comprobado.png" class="imgCreated"></div>
                <div class="BotonesRegistroInicio">
                        <a href="../php/comunity.php" class="question">Ir a los eventos</a>
                </div>
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

