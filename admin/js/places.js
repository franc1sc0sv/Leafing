const keepPlace = document.getElementById('keepPlace');
const keepPlaceEdit = document.getElementById('keepPlaceEdit');
const containerModalPlacesEdit = document.getElementById('containerModalPlacesEdit');
let idPlaces;
function getIdPlace(id) {
    idPlaces = id
}
if (pathname == "/LEAFING/Crea-J-2022/admin/php/places.php") {
    consultas("SELECT * FROM `place_events`", 3)
}

keepPlace.addEventListener('click', function () {
    let inputPlace = document.getElementById('inputPlace');

    fetch(`../php/API/places.php?place=${inputPlace.value}`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "nice") {
                containerModal.style.removeProperty('display');
                inputPlace.value = ""

                setTimeout(showNotification(alertNice), 1000)
                consultas("SELECT * FROM `place_events`", 3)
            } else if (data == "allReadyExist") {
                showNotification(alertRepeat);
            } else if (data == "empty") {
                showNotification(alert);
            }
        })

})

function showModalUpdatePlaces(id) {
    containerModalPlacesEdit.style.display = "flex";
    sql = "SELECT * FROM `place_events` WHERE id_place  = " + id;
    fetch(`../php/API/consultas.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            getIdPlace(id)
            let inputPlaceEdit = document.getElementById('inputPlaceEdit')
            inputPlaceEdit.value = data[0][1];
        })
}


keepPlaceEdit.addEventListener('click', function () {
    let inputPlaceEdit = document.getElementById('inputPlaceEdit')

    fetch(`../php/API/placesEdit.php?place=${inputPlaceEdit.value}&id=${idPlaces}`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "nice") {
                containerModalPlacesEdit.style.removeProperty('display');
                inputPlaceEdit.value = ""
                setTimeout(showNotification(alertNice), 1000)
                consultas("SELECT * FROM `place_events`", 3)
            } else if (data == "allReadyExist") {
                showNotification(alertRepeat);
            } else if (data == "empty") {
                showNotification(alert);
            }
        })

})

function deletePlaces(id) {
    sql = "DELETE FROM `place_events` WHERE `place_events`.`id_place` = " + id;
    //console.log(sql)
    fetch(`../php/API/ejecutar.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            //console.log(data)
            if (data == "nice") {
                setTimeout(showNotification(alertNice), 1000)
                consultas("SELECT events.id_events, events.name_event, user_data.user_name, categories_events.categories, place_events.place, state_events.state FROM `events` INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events INNER JOIN user_data ON events.id_user_data = user_data.id_user_data INNER JOIN state_events ON events.id_state_events = state_events.id_state_events INNER JOIN place_events ON events.place_event = place_events.id_place;", 1);
            } else {
                setTimeout(showNotification(error), 1000)
            }

        })
}

function hideModalEditPlaces() {
    containerModalPlacesEdit.style.removeProperty('display');
}