import { warning, alertf, nice } from "../component/alerts.js";
const formConfiguracionPassword = document.getElementById('formConfiguracionPassword');
let alertNotification = document.getElementById('alertNotification');
let html = document.querySelector("html");

formConfiguracionPassword.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(formConfiguracionPassword);

    fetch(`/LEAFING/Crea-J-2022/client/api/account/changePasswordAccount.php`, {
        method: 'post',
        body: data
    })
        .then(res => res.json())
        .then(data => {
            console.log(data);
            if (data == "empty") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Llena todos los campos")
                } else {
                    msg = alertf("Fill all the fields")
                }
                alertNotification.innerHTML = msg;
                showNotification()
            } else if (data == "invalidPassword") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Contraseña no valida")
                } else {
                    msg = alertf("Invalid password")
                }
                alertNotification.innerHTML = msg;
                showNotification()
            } else if (data == "wrongPassword") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Contraseña incorrecta")
                } else {
                    msg = alertf("Incorrect password")
                }
                alertNotification.innerHTML = msg;
                showNotification()
            } else if (data == "dontMacth") {
                let msg;
                if (html.lang == "es") {
                    msg = alertf("Las contraseñas no coinciden")
                } else {
                    msg = alertf("Passwords do not match")
                }
                alertNotification.innerHTML = msg;
                showNotification()
            } else if (data == "nice") {
                console.log("xd")
                let msg;
                if (html.lang == "es") {
                    msg = nice("Proceso completado")
                } else {
                    msg = nice("Process completed")
                }
                alertNotification.innerHTML = msg;
                showNotification()
                setTimeout(() => {
                    location.reload()
                }, 1500);
            } else {
                console.log(data)
            }
        })

})