let body = document.querySelector("body");
let btnMode = document.getElementById("btnMode");
if (!localStorage.dark) {
    localStorage.setItem("dark", "no");
}

btnMode.addEventListener("click", function () {
    let val = body.classList.toggle("darkmode");
    let val1 = body.classList.toggle("font-mode");
    document.querySelector(".cambio").src = "../img/imagenes/dom.png";
    body.style.transition = '3s'; 
    
    console.log(val)

    if (val) {
        localStorage.dark = "si"//El primero es de asignacion, segundo comparacion y tercero comparacion de variables y tipos de datos//
    } else {
        localStorage.dark = "no"
    }
})

if (localStorage.dark == "si") {
    body.classList.add("darkmode");
    body.classList.add("font-mode");
    body.classList.add("../img/imagenes/luna.png");
} else {
    body.classList.remove("darkmode");
    body.classList.remove("font-mode");
    body.classList.remove("../img/imagenes/dom.png");

}