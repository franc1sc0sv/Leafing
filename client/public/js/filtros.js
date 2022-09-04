window.onload = function () {
    eventsData("SELECT events.id_events, events.img_event, events.name_event,events.description_event, place_events.place, events.date_event, state_events.state,categories_events.categories FROM `events` INNER JOIN place_events ON events.place_event = place_events.id_place INNER JOIN state_events ON events.id_state_events = state_events.id_state_events INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events WHERE events.id_state_events = 1")

}
function eventsData(sql) {
    console.log(sql)
    fetch(`/LEAFING/Crea-J-2022/client/api/consultas.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            //console.log(data);
            if (data == '') {
                let contenedor = document.getElementById('contenedor');
                let html = document.querySelector('html');
                if (html.lang == "es") {
                    contenedor.innerHTML = '<p class="aña">Ningún resultado coincide con su búsqueda</p>';
                } else {
                    contenedor.innerHTML = '<p class="aña">No results match your search </p>';
                }
            } else {
                dataEvents = cardsData(data);
                let contenedor = document.getElementById('contenedor');
                contenedor.innerHTML = dataEvents;
            }


        })
}

function filters(arrayOrderBy) {
    fetch("/LEAFING/Crea-J-2022/client/api/consultas.php?sql=SELECT * FROM `place_events`")
        .then(res => res.json())
        .then(data => {
            let option = `<option value="" class="optionColor">${arrayOrderBy[4]}</option>`;
            optionsCategoriesEvents = options(data, option);
            let Lugar = document.getElementById('Lugar');
            Lugar.innerHTML = optionsCategoriesEvents;
        })

    fetch("/LEAFING/Crea-J-2022/client/api/consultas.php?sql=SELECT * FROM `categories_events`")
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
    //console.log(dataEvents);
    function capitalizarPrimeraLetra(str) {
        return str.charAt(0).toUpperCase() + str.slice(1);
    }

    let element = '';
    for (let i = 0; i < dataEvents.length; i++) {
        let date = dataEvents[i][5].split(" ");

        let dateEvent = new Date(date[0])
        let month = dateEvent.toLocaleString("es-MX", { month: "long" });
        let day = dateEvent.getDate();
        let year = dateEvent.getFullYear()

        //console.log(capitalizarPrimeraLetra(month) + " " + day + ", " + year);

        element += `
    <div class="cards_new">
    <a href="./evento-especifico.php?estiben=${dataEvents[i][0]}" target="_blank">
        <div class="img_container_cards img_background" style="background-image: url(../assets/user_images/events_images/${dataEvents[i][1]});"></div>
    </a>


        <div class="content_cards">
            <a href="./evento-especifico.php?estiben=${dataEvents[i][0]}" class="title_cards" target="_blank">
                ${dataEvents[i][2]}
            </a>
            <div class="info_content_cards">
                <p class="category_event">${dataEvents[i][7]}</p>
                <div class="date_cards">
                    <img src="../assets/iconos/calendar.svg" alt="icon_date" class="icon_cards">
                    <p>${capitalizarPrimeraLetra(month) + " " + day + ", " + year}</p>
                </div>
            </div>
            <p class="description_event_cards">${dataEvents[i][3]}</p>
            <div class="icons">
                <div class="icons_div">
                    <img src="../assets/iconos/hourglass.svg" alt="icon" class="icon_cards">
                    <p>${dataEvents[i][6]}</p>
                </div>
                <div class="icons_div">
                    <img src="../assets/iconos/place.svg" alt="icon" class="icon_cards">
                    <p>${dataEvents[i][4]}</p>
                </div>
            </div>
        </div>
    </div>\n`
    }

    return element;
}

// function cardsData(dataEvents) {
//     //console.log(dataEvents);
//     let element = '';
//     for (let i = 0; i < dataEvents.length; i++) {
//         element += `

//         <div class="card">
//         <div class="event-img">
//             <a href="./evento-especifico.php?estiben=${dataEvents[i][0]}" target="_blank"><img src="../assets/user_images/events_images/${dataEvents[i][1]}" class="img"></a>
//         </div> 
//         <div class="cardtext">
//             <a href="./evento-especifico.php?estiben=${dataEvents[i][0]}" target="_blank" class="title">${dataEvents[i][2]}</a>
//             <div class="specificInfo">
//                 <div class="date">
//                     <img src="../assets/iconos/location.svg" class="location" alt="">
//                     ${dataEvents[i][5]}
//                 </div>
//                 <div class="place">
//                     <img src="../assets/iconos/location.svg" class="location" alt="">
//                     ${dataEvents[i][4]}
//                 </div>
//             </div>
//             <p>${dataEvents[i][3]}</p>

//         </div>
//         <span class="event-time">
//             <span class="day-time"></span>

//         </span>
//     </div> \n`
//     }

//     return element;
// }

const formFilter = document.getElementById('formFilter');


formFilter.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formFilter);

    fetch(`/LEAFING/Crea-J-2022/client/api/filter.php?busca=${data.get('busca')}&orden=${data.get('orden')}&lugar=${data.get('lugar')}&categorias=${data.get('categorias')}&date_filtro=${data.get('date_filtro')}`)
        .then(res => res.json())
        .then(data => {
            eventsData(data)
            //console.log(data);
        })
})




