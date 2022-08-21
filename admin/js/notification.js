const alert = document.getElementById('alert');
const xD = document.getElementById('xD');
const closebt = document.getElementById('close');

xD.addEventListener('click', function () {
    showNotification();
})

closebt.addEventListener('click', function () {
    hideNotification();
})

function showNotification() {
    alert.classList.add("show");
    alert.classList.remove("hide");
    alert.classList.add("showAlert");
}

function hideNotification() {
    alert.classList.remove("show");
    alert.classList.add("hide");
}
