// const 
// const alertRepeat = document.getElementById('alertRepeat');
// const alertNice = document.getElementById('alertNice');
// const error = document.getElementById('error');

function showNotification() {
    let alert = document.getElementById('alert');
    console.log(alert);
    alert.classList.add("show");
    alert.classList.remove("hide");
    alert.classList.add("showAlert");

    setTimeout(function () {
        alert.classList.remove("show");
        alert.classList.add("hide");
    }, 2000)
}

function hideNotification() {
    let alert = document.getElementById('alert');
    alert.classList.remove("show");
    alert.classList.add("hide");
}
