const alert = document.getElementById('alert');
const alertRepeat = document.getElementById('alertRepeat');
const alertNice = document.getElementById('alertNice');

function showNotification(alert) {
    alert.classList.add("show");
    alert.classList.remove("hide");
    alert.classList.add("showAlert");

    setTimeout(function () {
        alert.classList.remove("show");
        alert.classList.add("hide");
    }, 5000)
}

function hideNotification(alert) {
    alert.classList.remove("show");
    alert.classList.add("hide");
}
