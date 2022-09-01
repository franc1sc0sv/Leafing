let body = document.querySelector("body");
let btnMode = document.getElementById("btnMode");
if (!localStorage.dark) {
    localStorage.setItem("dark", "no");
}

btnMode.addEventListener("click", function () {
    let val = body.classList.toggle("darkmode");
    let val1 = body.classList.toggle("font-mode");
    body.style.transition = '3s';

    console.log(val)

    if (val) {
        localStorage.dark = "si"
        document.querySelector(".cambio").style.backgroundImage  = ("url(../img/imagenes/dom.png)")
    } else {
        localStorage.dark = "no"
        document.querySelector(".cambio").style.backgroundImage  = ("url(../img/imagenes/luna.png)")
    }
})

if (localStorage.dark == "si") {
    body.classList.add("darkmode");
    body.classList.add("font-mode");
    document.querySelector(".cambio").style.backgroundImage  = ("url(../img/imagenes/dom.png)")


} else {
    body.classList.remove("darkmode");
    body.classList.remove("font-mode");
    document.querySelector(".cambio").style.backgroundImage  = ("url(../img/imagenes/luna.png)")
}