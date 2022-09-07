import { warning, alertf, nice } from "../component/alerts.js";
const forgetPassword = document.getElementById('forgetPassword');
let alertNotification = document.getElementById('alertNotification');

forgetPassword.addEventListener('click', function () {
    fetch('/LEAFING/Crea-J-2022/client/api/account/send_email_password_account.php');
    let msg;
    if (html.lang == "es") {
        msg = nice("Revisa tu email para ver las instrucciones")
    } else {
        msg = nice("Check your email for the instructions.")
    }
    alertNotification.innerHTML = msg;
    showNotification()
})