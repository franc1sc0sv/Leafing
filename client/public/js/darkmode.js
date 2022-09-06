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
        btnMode.style.backgroundImage  = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/dom.png)")
    } else {
        localStorage.dark = "no"
        btnMode.style.backgroundImage  = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/luna.png)")
    }
})

if (localStorage.dark == "si") {
    body.classList.add("darkmode");
    body.classList.add("font-mode");
    btnMode.style.backgroundImage  = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/dom.png)")


} else {
    body.classList.remove("darkmode");
    body.classList.remove("font-mode");
    btnMode.style.backgroundImage  = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/luna.png)")
}