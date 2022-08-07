import { translateGeneralEN, translateGeneralES } from "./arrayTochoTranslate.js";

const english = document.getElementsByClassName('translate');
const englishHeader = document.getElementsByClassName('translateHeader');
const englishFooter = document.getElementsByClassName('translateFooter');
const buttonSpanish = document.getElementById('buttonSpanish');
const buttonEnglish = document.getElementById('buttonEnglish');
const Datos_curiosos_container = document.getElementById('Datos_curiosos_container');
let html = document.querySelector("html");

window.addEventListener("load", () => {
    fetch(`APISessions.php?peticion=1`)
        .then(res => res.json())
        .then(data => {
            if (data != 'ERROR') {
                translateGeneralEN[7][7] = "My profile";
                translateGeneralEN[7][8] = "Close session";

                translateGeneralES[7][7] = " Mi perfil";
                translateGeneralES[7][8] = "Cerrar sesión";
            }

            if (html.lang == "en") {
                forInnerHTM(translateGeneralEN);
                dataRandom()

            } else {
                forInnerHTM(translateGeneralES);
                dataRandom()

            }
        })

})

function Data(array) {
    let liElemnet = '';
    for (let index = 0; index < array.length; index++) {
        liElemnet += `
        
        <div class="Datos_cards">
            <div>
                <h1> ${array[index][1]} </h1>
                <img src="../img/imagenes/icono_2-datos.png" alt="icon_datos">
            </div>
            <p> ${array[index][3]}</p>
         </div>
        
        
        \n`
    }

    return liElemnet;
}

function dataRandom() {
    fetch(`datosRandomi.php`)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            let DatosRadom = Data(data)
            console.log(DatosRadom)
            Datos_curiosos_container.innerHTML = DatosRadom;
            

        })
}

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
    // console.log(pathname);
    // console.log(arrayString);

    //Cambiar valores del body
    for (let i = 0; i < english.length; i++) {
        english[i].innerHTML = translate[id][i];
    }
    //Cambiar valores del header
    for (let i = 0; i < englishHeader.length; i++) {
        englishHeader[i].innerHTML = translate[7][i];
    }
    //Cambiar valores del footer
    for (let i = 0; i < englishFooter.length; i++) {
        englishFooter[i].innerHTML = translate[8][i];
    }
}


function TraduccionEspañol() {

    if (html.lang == "en") {
        fetch(`APISessions.php?peticion=4&lang=es`);
        forInnerHTM(translateGeneralES);
        html.setAttribute("lang", "es")

    }
}
function TraducirIngles() {

    if (html.lang == "es") {
        fetch(`APISessions.php?peticion=4&lang=en`);
        forInnerHTM(translateGeneralEN);
        html.setAttribute("lang", "en")

    }
}

buttonSpanish.addEventListener('click', function () {
    TraduccionEspañol()
    dataRandom()
})

buttonEnglish.addEventListener('click', function () {
    TraducirIngles()
    dataRandom()
})