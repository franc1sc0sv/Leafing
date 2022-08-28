import { warning, alertf, nice } from "../js/alerts.js";
const forgetPassword = document.getElementById('forgetPassword');
let alertNotification = document.getElementById('alertNotification');

forgetPassword.addEventListener('click', function () {
    fetch('sendCodeAccount.php');
    let msg;
    if (html.lang == "es") {
        msg = nice("Revisa tu email para ver las instrucciones")
    } else {
        msg = nice("Check your email for the instructions.")
    }
    alertNotification.innerHTML = msg;
    showNotification()
})