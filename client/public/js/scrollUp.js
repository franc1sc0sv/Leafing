const flechaUp = document.getElementById('flechaUp');

window.onscroll = function (e) {
    if (document.documentElement.scrollTop > 100) {
        flechaUp.style.display = "block"
    } else {
        flechaUp.style.display = "none"
    }
}

flechaUp.addEventListener('click', function () {
    xD = setInterval(setxD, 500)
})


function setxD() {
    if (document.documentElement.scrollTop != 0) {
        document.querySelector('html').scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    } else {
        clearInterval(xD);
    }
}

