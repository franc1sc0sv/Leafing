const containerModal = document.getElementById('containerModal');
const XModal = document.getElementById('XModal');
const cantidad = document.getElementsByClassName('cantidad');
const porcentaje = document.getElementsByClassName('porcentaje')
const fechaPeriodo = document.getElementById('fechaPeriodo');
const tablaReports = document.getElementById('tablaReports');
const emptyReports = document.getElementById('emptyReports');
const containerMODAAL = document.getElementById('containerMODAAL');
const XModall = document.getElementById('XModall');

console.log(cantidad)
console.log(porcentaje)

XModall.addEventListener('click', function () {
    containerMODAAL.style.removeProperty('display');
})

XModal.addEventListener('click', function () {

    containerModal.style.removeProperty('display');
    for (let i = 0; i < cantidad.length; i++) {
        cantidad[i].innerHTML = "0";
    }

    for (let i = 0; i < cantidad.length; i++) {
        porcentaje[i].innerHTML = "0%";
    }
    fechaPeriodo.innerHTML = `nice try kido`
})

function arhiveEvents(data) {
    console.log(data.id)
}

function modalReportsResume(data) {
    console.log(data.id);
    fetch(`../php/API/reportes.php?id=${data.id}`)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            if (data == "Vacio") {
                containerMODAAL.style.display = "flex";
            } else {
                containerModal.style.display = "flex";
                for (let i = 0; i < cantidad.length; i++) {
                    cantidad[i].innerHTML = data[2][i];
                }

                for (let i = 0; i < cantidad.length; i++) {
                    porcentaje[i].innerHTML = `${data[3][i]}%`;
                }
                fechaPeriodo.innerHTML = ` ${data[0]} - ${data[1]} `
            }

        })
}