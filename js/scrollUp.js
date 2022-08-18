const flechaUp = document.getElementById('flechaUp');

window.onscroll = function () {
    if (document.documentElement.scrollTop > 100) {
        flechaUp.style.display = "block"
    } else {
        flechaUp.style.display = "none"
    }
}

flechaUp.addEventListener('click', function () {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
})