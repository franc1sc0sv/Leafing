let slider1 = document.querySelector(".Btn1");
let slider2 = document.querySelector(".Btn2");
let slider3 = document.querySelector(".Btn3");
let slider4 = document.querySelector(".Btn4");
let slider5 = document.querySelector(".Btn5");
let puntosmalnacidos = document.querySelectorAll(".slider-punto")
//Declaracion para el timmer automatizado//
let i = 0;

let imagenesSlider = document.querySelector(".container-slider");
//Arreglo para validacion de errores//
let arreglo = ["", slider1, slider2, slider3, slider4, slider5];
//Inicio del cambio de imagen//

function click(imagenes, elemento) {
    elemento.children[0].classList.add("active")
    puntosmalnacidos.forEach(e => {
        if (e.dataset.estres != elemento.children[0].dataset.estres) {
            e.classList.remove("active")

        }
    })
    if (imagenes == 1) {
        imagenesSlider.style.transform = "translateX(-0%)"
        i = 1

    } else if (imagenes == 2) {
        imagenesSlider.style.transform = "translateX(-20%)"
        i = 2

    } else if (imagenes == 3) {
        imagenesSlider.style.transform = "translateX(-40%)"
        i = 3

    } else if (imagenes == 4) {
        imagenesSlider.style.transform = "translateX(-60%)"
        i = 4

    } else if (imagenes == 5) {
        imagenesSlider.style.transform = "translateX(-80%)"
        i = 5

    }
}

//Adjudicacion de evento a la variable//
slider1.addEventListener("click", () => {
    click(1, slider1);
})
slider2.addEventListener("click", () => {
    click(2, slider2);
})
slider3.addEventListener("click", () => {
    click(3, slider3);
})
slider4.addEventListener("click", () => {
    click(4, slider4);
})
slider5.addEventListener("click", () => {
    click(5, slider5);
})

//Creacion de timer//
//(La variable es i) lee arriba//

setInterval(() => {
    click(i, arreglo[i])
    i++
    if (i > 5)
        i = 1
}, 3000);//Uno es asignacion, comparar, comparar dato y valor. Eso es para los iguales//