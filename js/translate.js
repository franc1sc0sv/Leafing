import { translateGeneral } from "./arrayTochoTranslate.js";

const english = document.getElementsByClassName('translate');
const englishHeader = document.getElementsByClassName('translateHeader');
const englishFooter = document.getElementsByClassName('translateFooter');
const buttonChange = document.getElementById("buttonChange");
const html = document.querySelector("html");

buttonChange.addEventListener("click", function () {
    console.log("xD")
    let pathname = window.location.pathname;
    let arrayString = pathname.split("/");

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


    let id = getID(arrayString[4])
    console.log(id);

    for (let i = 0; i < english.length; i++) {
        english[i].innerHTML = translateGeneral[id][i];
    }

    for (let i = 0; i < englishHeader.length; i++) {
        englishHeader[i].innerHTML = translateGeneral[7][i];
    }

    for (let i = 0; i < englishFooter.length; i++) {
        englishFooter[i].innerHTML = translateGeneral[8][i];

    }
})