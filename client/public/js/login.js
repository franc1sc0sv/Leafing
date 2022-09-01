import { warning, alertf, nice } from "./component/alerts.js";
const alertLogin = document.getElementById('alertLogin')
const formCredentials = document.getElementById('formCredentials')
const alert = document.getElementById('alert');
const eye = document.getElementById('eye')
const passwordInput = document.getElementById('password');
let html = document.querySelector("html");

formCredentials.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formCredentials);

    fetch('/LEAFING/Crea-J-2022/client/api/login.php', {
        method: 'post',
        body: data
    })

        .then(res => res.json())
        .then(data => {
            //console.log(data)
            if (data == "empty") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Llena todos los campos")
                } else {
                    msg = alertf("Fill in all the fields")
                }
                alertLogin.innerHTML = msg;
                showNotification()
            } else if (data == "ErrorData") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Correo electrónico o contraseña incorrectos")
                } else {
                    msg = alertf("Incorrect email or password")
                }
                alertLogin.innerHTML = msg;
                showNotification()
            } else if (data == "LogeadoADMIN") {
                let msg;
                if (html.lang == "es") {
                    msg = nice("BIENVENIDO ADMIN")
                } else {
                    msg = nice("WELCOME ADMIN")
                }
                alertLogin.innerHTML = msg;
                showNotification()
                setTimeout(function () {
                    window.location.href = "../../../admin/public/php/admin.php";
                }, 800);

            } else {
                let msg;
                if (html.lang == "es") {
                    msg = nice("Logeado")
                } else {
                    msg = nice("Loged")
                }
                alertLogin.innerHTML = msg;
                showNotification()
                setTimeout(function () {
                    window.location.href = "./index.php";
                }, 800);
            }
        })


})

eye.addEventListener('click', function () {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eye.style.filter = "opacity(1.0)"
    }
    else {
        passwordInput.type = "password";
        eye.style.filter = "opacity(0.4)"
    }
})