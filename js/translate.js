import { translateGeneralEN, translateGeneralES } from "./arrayTochoTranslate.js";

const english = document.getElementsByClassName('translate');
const englishHeader = document.getElementsByClassName('translateHeader');
const englishFooter = document.getElementsByClassName('translateFooter');
const buttonSpanish = document.getElementById('buttonSpanish');
const buttonEnglish = document.getElementById('buttonEnglish');
console.log(english);
fetch(`APISessions.php?peticion=1`)
    .then(res => res.json())
    .then(data => {

        if (data == 'ERROR') {
            translateGeneralEN[7][7] = "Log in";
            translateGeneralEN[7][8] = "Sing in";

            translateGeneralES[7][7] = "Registrarse";
            translateGeneralES[7][8] = "Inicio de sesion";
        }
    })


fetch(`APISessions.php?peticion=3`)
    .then(res => res.json())
    .then(data => {
        console.log(data);
        if (data == "en") {
            forInnerHTM(translateGeneralEN);
        } else {
            forInnerHTM(translateGeneralES);
        }

    })


function getID(path) {
    let id;

    if (path == "index.php" || path == "") {
        id = 0;
    } else if (path == "about_us.php") {
        id = 1;
    }
    else if (path == "concientizate.php") {
        id = 2;
    }
    else if (path == "crear_evento.php") {
        id = 3;
    }
    else if (path == "cuenta.php") {
        id = 4;
    }
    else if (path == "formulario_inicio-sesion.php") {
        id = 5;
    }
    else if (path == "formulario_registro.php") {
        id = 6;
    }

    return id;
}

function forInnerHTM(translate) {
    let pathname = window.location.pathname;
    let arrayString = pathname.split("/");
    let id = getID(arrayString[4])

    for (let i = 0; i < english.length; i++) {
        english[i].innerHTML = translate[id][i];
    }

    for (let i = 0; i < englishHeader.length; i++) {
        englishHeader[i].innerHTML = translate[7][i];
    }

    for (let i = 0; i < englishFooter.length; i++) {
        englishFooter[i].innerHTML = translate[8][i];

    }
}

function TraduccionEspañol() {
    fetch(`APISessions.php?peticion=3`)
        .then(res => res.json())
        .then(data => {
            if (data == "en") {
                fetch(`APISessions.php?peticion=4&lang=es`);
                forInnerHTM(translateGeneralES);
                //console.log("Traduciendo a español")
            } else {
                console.log("Estas en español")
            }
        })
}



function TraducirIngles() {
    fetch(`APISessions.php?peticion=3`)
        .then(res => res.json())
        .then(data => {
            if (data == "es") {
                fetch(`APISessions.php?peticion=4&lang=en`);
                forInnerHTM(translateGeneralEN);
                //console.log("Traduciendo a ingles")
            } else {
                console.log("Estas en ingles")
            }
        })
}

buttonSpanish.addEventListener('click', function () {
    TraduccionEspañol()
})

buttonEnglish.addEventListener('click', function () {
    TraducirIngles()
})