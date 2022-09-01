import { warning, alertf, nice } from "../js/component/alerts.js";
const formCredentialsChangePassword = document.getElementById('formCredentialsChangePassword');
const alert = document.getElementById('alertXDD');
let html = document.querySelector("html");

formCredentialsChangePassword.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(formCredentialsChangePassword)
    let passsword = data.get('password')

    let URLsearch = window.location.search;
    if (passsword.length < 6 || passsword.length > 30) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Datos invalidos")
        } else {
            msg = alertf("Invalid data")
        }
        alert.innerHTML = msg;
        showNotification();
        } else {
        fetch(`/LEAFING/Crea-J-2022/client/api/password_change.php${URLsearch}`, {
            method: 'post',
            body: data
        })
            .then(res => res.json())
            .then(data => {
                console.log(data);
                if (data == "nice") {
                    let msg;
                    if (html.lang == "es") {
                        msg = nice("Contraseña cambiada con exito")
                    } else {
                        msg = nice("Password changed successfully")
                    }
                    alert.innerHTML = msg;
                    showNotification();

                    setTimeout(function () {
                        window.location.href = "formulario_inicio-sesion.php";
                    }, 1500);

                } else if (data == "invalid") {
                    let msg;
                    if (html.lang == "es") {
                        msg = alertf("Las contraseñas no coinciden")
                    } else {
                        msg = alertf("Passwords do not match")
                    }
                    alert.innerHTML = msg;
                    showNotification();
                } else if (data == "vacio") {
                    let msg;
                    if (html.lang == "es") {
                        msg = alertf("Llena todos los campos")
                    } else {
                        msg = alertf("Fill in all the fields")
                    }
                    //console.log(msg)
                    alert.innerHTML = msg;
                    showNotification();
                }
            })
    }
})