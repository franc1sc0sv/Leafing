import { warning, alertf, nice } from "../js/component/alerts.js";

const formComents = document.getElementById('formComents');
let alertcoments = document.getElementById('alertcoments');

formComents.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(formComents);
    let URLsearch = window.location.search;
    fetch(`/LEAFING/Crea-J-2022/client/api/coments.php${URLsearch}`, {
        method: 'post',
        body: data
    })
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "empty") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Llena todos los campos")
                } else {
                    msg = alertf("Fill in all the fields")
                }
                alertcoments.innerHTML = msg;
                showNotification()
            } else if (data == "invalid") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Comentario invalido")
                } else {
                    msg = alertf("Invalid coment")
                }
                alertcoments.innerHTML = msg;
                showNotification()
            } else if (data == "nice") {
                let msg;
                if (html.lang == "es") {
                    msg = nice("Su comentario se envio con exito")
                } else {
                    msg = nice("Your comment was sent successfully")
                }
                alertcoments.innerHTML = msg;
                showNotification()
                setTimeout(() => {
                   location.reload();
                }, 1500);
            }

        })
})
