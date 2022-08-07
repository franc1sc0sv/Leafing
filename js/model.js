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
        changeInfo[0].innerHTML = "Desnudos";
        changeInfo[1].innerHTML = "Solo eliminamos el contenido que incumple nuestras Normas comunitarias. Estas son algunas cosas que no permitimos:";
        let array = ["Desnudo de adultos", "Contenido sexual", "Actividad sexual", "Explotacion sexual", "Contenido relacionado con un menor", "Se comparten imagenes privadas"]
        let liData = li(array);
        changeInfo[2].innerHTML = liData;
        idReport = 1;

    } else if (element.id == "violencia") {
        //console.log("info violencia")
        changeInfo[0].innerHTML = "Violencia";
        changeInfo[1].innerHTML = "Solo eliminamos el contenido que incumple nuestras Normas comunitarias. Estas son algunas cosas que no permitimos:";
        let array = ["Violencia grafica", "Muerte o lesion grave", "Amenaza violenta", "Maltrato animal", "Violencia sexual"]
        let liData = li(array);
        changeInfo[2].innerHTML = liData;
        idReport = 2;

    } else if (element.id == "acoso") {
        //console.log("info acoso")
        changeInfo[0].innerHTML = "Acoso";
        changeInfo[1].innerHTML = "Como comunidad mantenemos el derecho a la libertad y a la no violencia de manera que no permitimos que usuarios mantengan una postura no agradable respecto a los otros usuarios teniendo un reporte, llegando a un baneo el querer acosar a los demás usuarios de la aplicación web.";
        changeInfo[2].innerHTML = "";
        idReport = 3;

    } else if (element.id == "suicidio") {
        //console.log("info suicidio")
        changeInfo[0].innerHTML = "Suicidio";
        changeInfo[1].innerHTML = "La libertad y la vida son conceptos muy importantes para nosotros, velando por los mismos no permitimos eventos o comentarios que puedan poner en peligro o malas situaciones a nuestros usuarios y cualquier intento de ello tendrá consecuencias.";
        changeInfo[2].innerHTML = "";
        idReport = 4;

    } else if (element.id == "informacion_falsa") {
        //console.log("info informacion_falsa")
        changeInfo[0].innerHTML = "Informacion falsa";
        changeInfo[1].innerHTML = "Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.";
        let array = ["Salud", "Politica", "Tema social"]
        let liData = li(array);
        changeInfo[2].innerHTML = liData;
        idReport = 5;

    } else if (element.id == "spam") {
        //console.log("info spam")
        changeInfo[0].innerHTML = "Spam";
        changeInfo[1].innerHTML = "No se permite:";
        let array = ["Animar a las personas a interactuar con contenido con falsos pretextos", "Dirigir a las personas fuera de Leafing a través del uso engañoso de enlaces"]
        let liData = li(array);
        changeInfo[2].innerHTML = liData;
        idReport = 6;

    } else if (element.id == "lenguaje") {
        //console.log("info lenguaje")
        changeInfo[0].innerHTML = "Lenguaje que incita al odio";
        changeInfo[1].innerHTML = "Si alguien se encuentra en peligro inminente, busca ayuda antes de enviar un reporte a Leafing. No esperes.";
        let array = ["Raza o etnia", "Nacionalidad", "Creencias religiosas", "Casta social", "Orientacion sexual", "Sexo oidentidad de genero", "Discapacidad o enfermedad"]
        let liData = li(array);
        changeInfo[2].innerHTML = liData;
        idReport = 7;

    } else if (element.id == "terrorismo") {
        changeInfo[0].innerHTML = "Terrorismo";
        changeInfo[1].innerHTML = "Eliminamos el contenido sobre cualquier grupo o persona no gubernamentales que participen en actos de violencia organizados por motivos políticos, religiosos o ideológicos, o que los apoyen.";
        changeInfo[2].innerHTML = "";
        idReport = 8;
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



