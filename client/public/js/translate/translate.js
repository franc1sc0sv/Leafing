import { translateGeneralEN, translateGeneralES } from "./arrayTochoTranslate.js";

//Definicon de variables
//Todos los elementos a traducir individuales
//English = body cada pagina
const english = document.getElementsByClassName('translate');
//englishHeader = elementos del header
const englishHeader = document.getElementsByClassName('translateHeader');
//englishFooter = elementos del footer
const englishFooter = document.getElementsByClassName('translateFooter');

//console.log(english);
const Datos_curiosos_container = document.getElementById('Datos_curiosos_container');

const buttonChange = document.getElementById('buttonChange');
let html = document.querySelector("html");

//FETCH PETICIONES Y RESPUESTAS
//Las API permiten que una aplicación extraiga archivos o datos preexistentes dentro de un software 
//y los use en otro programa o en uno de sus otros niveles.

// console.log(html)
// console.log(html.lang)

//Esto va a traducir la pagina dependiendo que valor tenga htmml.lang por defecto es ES
window.addEventListener("load", () => {
    fetch(`/LEAFING/Crea-J-2022/client/api/sessions.php?peticion=1`)
        .then(res => res.json())
        .then(data => {

            if (data != 'ERROR') {
                translateGeneralEN[7][6] = "My profile";
                translateGeneralEN[7][7] = "Close session";

                translateGeneralES[7][6] = " Mi perfil";
                translateGeneralES[7][7] = "Cerrar sesión";

                translateGeneralEN[13] = ["Home", "Events", "Event Details", "Report", "Start Date", "End Date", "Category", "Location", "Address", "Organizer", "Leave a Comment", "Leave a Comment", "Comments", "Report", "Select a Problem", "If someone is in imminent danger, seek help before submitting a report to Leafing. Do not wait", "Nudity", "Violence", "Harassment", "Suicide", "False information", "Spam", "Hate speech", "Terrorism", "Submit", "Thank you. We have received your report", "Report received", "Your report helps us improve our processes and helps Leafing remain a safe environment for everyone", "Awaiting review", "Our review teams will review content to remove content that does not meet our standards as soon as possible", "Accept"];
                // translateGeneralES[13] = ["Inicio", "Eventos", "Detalles del evento", "Reportar", "Fecha de inicio", "Fecha de finalización", "Categoria", "Lugar", "Direccion", "Organizador", "Deja un comentario", "Deja un comentario", "Comentarios", "Report", "Select a problem", "If someone is in imminent danger, seek help before submitting a report to Leafing. Don't wait!", "Nudity", "Violence", "Harassment", "Suicide", "False information", "Spam", "Hate speech", "Terrorism", "Send", "Thank you. We received your report", "Report received", "Your report helps us improve our processes and contributes to Leafing remaining a safe environment for everyone", "Awaiting review", "Our review teams will review the content to remove content that does not meet our standards as quickly as possible", "Accept"]
                translateGeneralES[13] = ["Inicio", "Eventos", "Detalles del evento", "Reportar", "Fecha de inicio", "Fecha de finalización", "Categoría", "Lugar", "Dirección", "Organizador", "Deja un comentario", "Deja un comentario", "Comentarios", "Reportar", "Selecciona un problema", "Si alguien está en peligro inminente, busca ayuda antes de enviar una denuncia a Leafing. No espere", "Desnudez", "Violencia", "Acoso", "Suicidio", "Información falsa", "Spam", "Discurso de odio", "Terrorismo", "Enviar", "Gracias. Hemos recibido su informe", "Informe recibido", "Su informe nos ayuda a mejorar nuestros procesos y contribuye a que Leafing siga siendo un entorno seguro para todos", "En espera de revisión", "Nuestros equipos de revisión revisarán el contenido para eliminar el que no cumpla nuestras normas lo antes posible", "Aceptar"];

            }

            if (html.lang == "en") {
                forInnerHTM(translateGeneralEN);
                dataRandom()
                let pathname = window.location.pathname;
                if (pathname == "/LEAFING/Crea-J-2022/client/public/php/specific_test.php") {
                    inscriptionButton()
                }
                buttonChange.style.backgroundImage = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/Bandera_de_Españapng.png)")
                let arrayOrder = ["Order by", "Categories ACS", "Name ASC", "Place ACS", "Place", "Categories", "2"]
                filters(arrayOrder)
            } else {
                forInnerHTM(translateGeneralES);
                dataRandom()
                let pathname = window.location.pathname;
                if (pathname == "/LEAFING/Crea-J-2022/client/public/php/specific_test.php") {
                    inscriptionButton()
                } buttonChange.style.backgroundImage = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/Bandera-del-Reino-Unid.png)")
                let arrayOrder = ["Ordenar por", "Categorias ACS", "Nombre ASC", "Lugar ACS", "Lugar", "Categorias", "1"]
                filters(arrayOrder)
            }
        })

})

function forInnerHTM(translate) {
    let pathname = window.location.pathname;
    let arrayString = pathname.split("/");
    let id = getID(arrayString[6], arrayString[7])

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
        fetch(`/LEAFING/Crea-J-2022/client/api/sessions.php?peticion=4&lang=es`);
        let pathname = window.location.pathname;
        if (pathname == "/LEAFING/Crea-J-2022/client/public/php/specific_test.php") {
            inscriptionButton()
        }
        dataRandom();
        forInnerHTM(translateGeneralES);
        html.setAttribute("lang", "es");
        buttonChange.style.backgroundImage = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/Bandera-del-Reino-Unid.png)");
        let arrayOrder = ["Ordenar por", "Categorias ACS", "Nombre ASC", "Lugar ACS", "Lugar", "Categorias", "1"];
        filters(arrayOrder)


    }
}

function TraducirIngles() {

    if (html.lang == "es") {
        fetch(`/LEAFING/Crea-J-2022/client/api/sessions.php?peticion=4&lang=en`);
        let pathname = window.location.pathname;
        if (pathname == "/LEAFING/Crea-J-2022/client/public/php/specific_test.php") {
            inscriptionButton()
        }
        dataRandom();
        forInnerHTM(translateGeneralEN);
        html.setAttribute("lang", "en")
        buttonChange.style.backgroundImage = ("url(/LEAFING/Crea-J-2022/client/public/assets/imagenes/Bandera_de_Españapng.png)");
        let arrayOrder = ["Order by", "Categories ACS", "Name ASC", "Place ACS", "Place", "Categories", "2"];
        filters(arrayOrder);


    }
}

//Me va almacenar todos en una varaiable lo que haya que imprimir
function Data(array) {
    let liElemnet = '';
    for (let index = 0; index < array.length; index++) {
        liElemnet += `
        
        <div class="Datos_cards">
            <div>
                <h1> ${array[index][1]} </h1>
                <img src="../assets/imagenes/icono_2-datos.png" alt="icon_datos">
            </div>
            <p> ${array[index][3]}</p>
         </div>
        \n`
    }

    return liElemnet;
}

//Me va a traducir los DATOS RANDOM LIVE
function dataRandom() {
    let pathname = window.location.pathname;
    if (pathname == "/LEAFING/Crea-J-2022/client/public/php/index.php" || pathname == "/LEAFING/Crea-J-2022/client/public/php/") {
        fetch(`/LEAFING/Crea-J-2022/client/api/random_data.php?lang=${html.lang}`)
            .then(res => res.json())
            .then(data => {
                console.log(data);
                let DatosRadom = Data(data)
                Datos_curiosos_container.innerHTML = DatosRadom;


            })
    }
}
//me para saber en que pagina estamos
function getID(path, path2) {
    let id;

    if (path == "index.php" || path == "") {
        id = 0;
    } else if (path == "about_us.php") {
        id = 1;
    } else if (path == "concientizate.php") {
        id = 2;
    } else if (path == "crear_evento.php") {
        id = 3;
    } else if (path2 == "cuenta.php") {
        id = 4;
    } else if (path == "formulario_inicio-sesion.php") {
        id = 5;
    } else if (path == "formulario_registro.php") {
        id = 6;
    } else if (path2 == "contrase%C3%B1a.php") {
        id = 9;
    } else if (path2 == "mis_eventos.php") {
        id = 10;
    } else if (path2 == "eventos_inscritos.php") {
        id = 11;
    } else if (path == "comunity.php") {
        id = 12;
    } else if (path == "specific_test.php") {
        id = 13;
    }

    return id;
}

buttonChange.addEventListener('click', function () {

    if (html.lang == "en") {
        TraduccionEspañol()
    } else {
        TraducirIngles()
    }
})