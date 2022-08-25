window.onload = function () {
    eventsData("SELECT events.id_events, events.name_event,events.description_event, place_events.place, events.date_event FROM `events` INNER JOIN place_events ON events.place_event = place_events.id_place WHERE id_state_events = 1;")

}
function eventsData(sql) {
    fetch(`../php/consultas.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            console.log(data);
            if (data == '') {
                let contenedor = document.getElementById('contenedor');
                contenedor.innerHTML = '<p class="aña">Ningún resultado coincide con su búsqueda</p>';
            } else {
                dataEvents = cardsData(data);
                let contenedor = document.getElementById('contenedor');
                contenedor.innerHTML = dataEvents;
            }


        })
}

function filters(arrayOrderBy) {
    fetch("../php/consultas.php?sql=SELECT * FROM `place_events`")
        .then(res => res.json())
        .then(data => {
            let option = `<option value="" class="optionColor">${arrayOrderBy[4]}</option>`;
            optionsCategoriesEvents = options(data, option);
            let Lugar = document.getElementById('Lugar');
            Lugar.innerHTML = optionsCategoriesEvents;
        })

    fetch("../php/consultas.php?sql=SELECT * FROM `categories_events`")
        .then(res => res.json())
        .then(data => {
            //console.log(data)
            //console.log(data[0][1])
            let option = `<option value="" class=" optionColor">${arrayOrderBy[5]}</option>`;
            optionsCategoriesEvents = optionsCategories(data, option, arrayOrderBy[6]);
            let categoriasFilters = document.getElementById('categoriasFilters');
            categoriasFilters.innerHTML = optionsCategoriesEvents;
        })

    let ordenFilters = document.getElementById('orden');
    //console.log(orden);
    dataOrden = orderBy(arrayOrderBy[0], arrayOrderBy[1], arrayOrderBy[2], arrayOrderBy[3]);
    ordenFilters.innerHTML = dataOrden
}

function orderBy(orderby, categories, name, place) {
    let option = `
        <option value="" class="optionColor">${orderby}</option>
        <option value="1" class="optionColor">${categories}</option>
        <option value="2" class="optionColor">${name}</option>
        <option value="3" class="optionColor ">${place}</option>`
    return option;
}

function optionsCategories(dataCategories, option, id) {
    for (let i = 0; i < dataCategories.length; i++) {
        option += `<option value="${dataCategories[i][0]}"> ${dataCategories[i][id]}</option> \n`
    }
    //console.log(option)
    return option;
}

function options(dataCategories, option) {
    for (let i = 0; i < dataCategories.length; i++) {
        option += `<option value="${dataCategories[i][0]}"> ${dataCategories[i][1]}</option> \n`
    }
    //console.log(option)
    return option;
}


function cardsData(dataEvents) {
    let element = '';
    for (let i = 0; i < dataEvents.length; i++) {
        element += `
        
        <div class="card">
        <div class="event-img">
            <a href="./evento-especifico.php?estiben=${dataEvents[i][0]}" target="_blank"><img src="images/<?php echo $image; ?> class="img"></a>
        </div> 
        <div class="cardtext">
            <a href="./evento-especifico.php?estiben=${dataEvents[i][0]}" target="_blank" class="title">${dataEvents[i][1]}</a>
            <div class="specificInfo">
                <div class="date">
                    <img src="../img/iconos/location.svg" class="location" alt="">
                    ${dataEvents[i][4]}
                </div>
                <div class="place">
                    <img src="../img/iconos/location.svg" class="location" alt="">
                    ${dataEvents[i][3]}
                </div>
            </div>
            <p>${dataEvents[i][2]}</p>

        </div>
        <span class="event-time">
            <span class="day-time">27</span>
            Feb
        </span>
    </div> \n`
    }

    return element;
}

const formFilter = document.getElementById('formFilter');


formFilter.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formFilter);

    fetch(`../php/filter.php?busca=${data.get('busca')}&orden=${data.get('orden')}&lugar=${data.get('lugar')}&categorias=${data.get('categorias')}&date_filtro=${data.get('date_filtro')}`)
        .then(res => res.json())
        .then(data => {
            eventsData(data)
            //console.log(data);
        })
})




