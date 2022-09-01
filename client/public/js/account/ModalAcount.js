const containerModal = document.getElementById('containerModal');
let htmls = document.querySelector("html");

function openModal(id) {
    if (htmls.lang == "es") {
        containerModal.innerHTML = modalData("Inscripciones", "Numero total de inscripciones", "50", "Generar reporte");
    } else {
        containerModal.innerHTML = modalData("Enrollments", "Total number of enrollments", "50", "Generate report");
    }
    containerModal.style.display = "flex";
    console.log(id)
}

function closeModalIn() {
    containerModal.style.removeProperty('display');
}

function modalData(dato, dato2, dato3, dato4) {
    return `
<div class="content-modal" id="contentModal">    
    <div class="headerModal" id="headerModal">
        <h1>${dato}</h1>
        <img src="../img/iconos/close.svg" alt="xD" id="XModal" class="XModal" onclick="closeModalIn()">
    </div>
    <div class="contentModel" id="contentModel">
        <div class="emptyReports showModel" id="emptyReports">
            <p>${dato2}: ${dato3}</p> 
            <br>
            <a href="#" class="linkxd"><button class="buttonNew" id="new"><span class="translate"><span class="translate"></span>${dato4}</span></button><a>
            </table>
        </div>
    </div>
</div>
    `
}