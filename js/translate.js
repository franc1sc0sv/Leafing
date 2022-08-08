import { translateGeneralEN, translateGeneralES } from "./arrayTochoTranslate.js";

//Definicon de variables
//Todos los elementos a traducir individuales
//English = body cada pagina
const english = document.getElementsByClassName('translate');
//englishHeader = elementos del header
const englishHeader = document.getElementsByClassName('translateHeader');
//englishFooter = elementos del footer
const englishFooter = document.getElementsByClassName('translateFooter');

console.log(english);

const buttonSpanish = document.getElementById('buttonSpanish');
const buttonEnglish = document.getElementById('buttonEnglish');
const Datos_curiosos_container = document.getElementById('Datos_curiosos_container');
const TranslateSetAtribute = document.getElementById('translateEspecial');

let html = document.querySelector("html");

//FETCH PETICIONES Y RESPUESTAS
//Las API permiten que una aplicación extraiga archivos o datos preexistentes dentro de un software 
//y los use en otro programa o en uno de sus otros niveles.

// console.log(html)
// console.log(html.lang)

//Esto va a traducir la pagina dependiendo que valor tenga htmml.lang por defecto es ES
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
//Me va almacenar todos en una varaiable lo que haya que imprimir
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

//Me va a traducir los DATOS RANDOM LIVE
function dataRandom() {
    fetch(`datosRandomi.php`)
        .then(res => res.json())
        .then(data => {
            // console.log(data);
            let DatosRadom = Data(data)
            //console.log(DatosRadom)
            Datos_curiosos_container.innerHTML = DatosRadom;


        })
}
//me para saber en que pagina estamos
function getID(path) {
    let id;

    if (path == "index.php" || path == "") {
        id = 0;
    } else if (path == "about_us.php") {
        id = 1;
    } else if (path == "concientizate.php") {
        id = 2;
    } else if (path == "crear_evento.php") {
        id = 3;
    } else if (path == "cuenta.php") {
        id = 4;
    } else if (path == "formulario_inicio-sesion.php") {
        id = 5;
    } else if (path == "formulario_registro.php") {
        id = 6;
    } else if (path == "contrase%C3%B1a.php") {
        id = 9;
    } else if (path == "mis_eventos.php") {
        id = 10;
    } else if (path == "eventos_inscritos.php") {
        id = 11;

    } else if (path == "comunity.php") {
        id = 12;

    }

    return id;
}

//Esto es la funcion que me va acambiar los valores de ingles a español y viceversa
function forInnerHTM(translate) {
    let pathname = window.location.pathname;
    let arrayString = pathname.split("/");
    let id = getID(arrayString[4])
    // console.log(pathname);
    console.log(arrayString);
    // if (id == 12) {
    //     if (html.lang == "en") {
    //         TranslateSetAtribute.setAttribute()
    //     } else {

    //     }
    // }
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