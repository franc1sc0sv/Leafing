const arrorBack = document.getElementById('arrorBack');
const contentModel = document.getElementById('contentModel');
const changeInfo = document.querySelectorAll('.changeInfo');
const buttonReport = document.getElementById('buttonReport');
const alert = document.getElementById('alert');
const headerModal = document.getElementById('headerModal');
const buttonSalirReport = document.getElementById('buttonSalirReport');
const containerModal = document.getElementById('containerModal');
const ModalOpen = document.getElementById('ModalOpen');
const XModal = document.getElementById('XModal');
const contentModal = document.getElementById('contentModal');
let idReport;

function arrowFlex() {
    arrorBack.style.display = "flex";
}

function li(array) {
    let liElemnet = '';
    for (let index = 0; index < array.length; index++) {
        liElemnet += `<li class="li-report changeInfo">${array[index]}</li> \n`
    }
    return liElemnet;
}

function identifyReport(element) {

    contentModel.style.transform = "translateX(-33%)";

    // let transform = contentModel.style.transform;
    // console.log(transform);
    setTimeout(arrowFlex, 250);



    if (element.id == "desnudos") {
        //console.log("info desnudos")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Desnudos";
            changeInfo[1].innerHTML = "Solo eliminamos el contenido que incumple nuestras Normas comunitarias. Estas son algunas cosas que no permitimos:";
            let array = ["Desnudo de adultos", "Contenido sexual", "Actividad sexual", "Explotacion sexual", "Contenido relacionado con un menor", "Se comparten imagenes privadas"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;

        } else {
            changeInfo[0].innerHTML = "Nudity";
            changeInfo[1].innerHTML = "We only remove content that violates our Community Guidelines. Here are some things we don't allow:";
            let array = ["Adult nudity", "Sexual content", "Sexual activity", "Sexual exploitation", "Content related to a minor", "Private images are shared"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        }

        idReport = 1;

    } else if (element.id == "violencia") {
        //console.log("info violencia")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Violencia";
            changeInfo[1].innerHTML = "Solo eliminamos el contenido que incumple nuestras Normas comunitarias. Estas son algunas cosas que no permitimos:";
            let array = ["Violencia grafica", "Muerte o lesion grave", "Amenaza violenta", "Maltrato animal", "Violencia sexual"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        } else {
            changeInfo[0].innerHTML = "Violence";
            changeInfo[1].innerHTML = "We only remove content that violates our Community Guidelines. Here are some things we don't allow:";
            let array = ["Graphic violence", "Death or serious injury", "Violent threat", "Animal abuse", "Sexual violence"];
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        }
        idReport = 2;

    } else if (element.id == "acoso") {
        //console.log("info acoso")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Acoso";
            changeInfo[1].innerHTML = "Como comunidad mantenemos el derecho a la libertad y a la no violencia de manera que no permitimos que usuarios mantengan una postura no agradable respecto a los otros usuarios teniendo un reporte, llegando a un baneo el querer acosar a los demás usuarios de la aplicación web.";
            changeInfo[2].innerHTML = "";
        } else {
            changeInfo[0].innerHTML = "Harassment";
            changeInfo[1].innerHTML = "As a community we maintain the right to freedom and non-violence so we do not allow users to maintain an unpleasant posture towards other users by having a report, up to a ban for harassing other users of the web application.";
            changeInfo[2].innerHTML = "";
        }

        idReport = 3;

    } else if (element.id == "suicidio") {
        //console.log("info suicidio")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Suicide";
            changeInfo[1].innerHTML = "La libertad y la vida son conceptos muy importantes para nosotros, velando por los mismos no permitimos eventos o comentarios que puedan poner en peligro o malas situaciones a nuestros usuarios y cualquier intento de ello tendrá consecuencias.";
            changeInfo[2].innerHTML = "";
        } else {
            changeInfo[0].innerHTML = "Harassment";
            changeInfo[1].innerHTML = "Freedom and life are very important concepts for us, and in order to protect them we do not allow events or comments that may put our users in danger or bad situations, and any attempt to do so will have consequences.";
            changeInfo[2].innerHTML = "";
        }
        idReport = 4;

    } else if (element.id == "informacion_falsa") {
        //console.log("info informacion_falsa")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Informacion falsa";
            changeInfo[1].innerHTML = "Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.";
            let array = ["Salud", "Politica", "Tema social"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        } else {
            changeInfo[0].innerHTML = "False information";
            changeInfo[1].innerHTML = "If someone is in imminent danger, seek help before submitting a report to Leafing. Don't wait.";
            let array = ["Health", "Politics", "Social Issues"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        }

        idReport = 5;

    } else if (element.id == "spam") {
        //console.log("info spam")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Spam";
            changeInfo[1].innerHTML = "No se permite:";
            let array = ["Animar a las personas a interactuar con contenido con falsos pretextos", "Dirigir a las personas fuera de Leafing a través del uso engañoso de enlaces"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        } else {
            changeInfo[0].innerHTML = "Spam";
            changeInfo[1].innerHTML = "Not allowed:";
            let array = ["Encouraging people to interact with content under false pretenses", "Directing people away from Leafing through the misleading use of links"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        }

        idReport = 6;

    } else if (element.id == "lenguaje") {
        //console.log("info lenguaje")
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Lenguaje que incita al odio";
            changeInfo[1].innerHTML = "Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.";
            let array = ["Raza o etnia", "Nacionalidad", "Creencias religiosas", "Casta social", "Orientacion sexual", "Sexo oidentidad de genero", "Discapacidad o enfermedad"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        } else {
            changeInfo[0].innerHTML = "Hate speech";
            changeInfo[1].innerHTML = "If someone is in imminent danger, seek help before submitting a report to Leafing. Don't wait.";
            let array = ["Race or ethnicity", "Nationality", "Religious beliefs", "Social caste", "Sexual orientation", "Sex or gender identity", "Disability or disease"]
            let liData = li(array);
            changeInfo[2].innerHTML = liData;
        }

        idReport = 7;

    } else if (element.id == "terrorismo") {
        if (html.lang == "es") {
            changeInfo[0].innerHTML = "Terrorismo";
            changeInfo[1].innerHTML = "Eliminamos el contenido sobre cualquier grupo o persona no gubernamentales que participen en actos de violencia organizados por motivos políticos, religiosos o ideológicos, o que los apoyen.";
            changeInfo[2].innerHTML = "";
            idReport = 8;
        } else {
            changeInfo[0].innerHTML = "Terrorism";
            changeInfo[1].innerHTML = "We remove content about any non-governmental groups or individuals who engage in or support acts of violence organized for political, religious or ideological reasons.";
            changeInfo[2].innerHTML = "";
            idReport = 8;
        }

    } else {
        console.log("error");
    }

}

buttonReport.addEventListener("click", function () {
    let URLsearch = window.location.search;
    console.log(URLsearch);
    console.log("id: ", idReport)
    if (idReport == undefined) {
        alert.innerHTML =
            `<div class="alertDivEmpty">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p>Error :)</p>
        </div>`
    } else {
        fetch(`modelReports.php${URLsearch}&idReport=${idReport}`)
        contentModel.style.transform = "translateX(-66%)";
        headerModal.style.display = 'none'
        contentModal.style.paddingBottom = "0rem"
        idReport = undefined;
    }
})

buttonSalirReport.addEventListener('click', function () {
    containerModal.style.display = "none";
    contentModel.style.removeProperty('transform')
})


ModalOpen.addEventListener('click', function () {
    containerModal.style.display = "flex";
    contentModel.style.transform = "translateX(0%)";
    headerModal.style.display = 'flex'
    contentModal.style.paddingBottom = "1rem"
    arrorBack.style.display = "none";

})

XModal.addEventListener('click', function () {
    containerModal.style.display = "none";
    contentModel.style.removeProperty('transform');

})

arrorBack.addEventListener('click', function () {
    function arrowNone() {
        arrorBack.style.display = "none";
    }
    contentModel.style.transform = "translateX(-0%)";
    setTimeout(arrowNone, 200);

})



