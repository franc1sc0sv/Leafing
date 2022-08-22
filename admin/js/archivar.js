var arrayDataEvents;

function getData(data) {
    arrayDataEvents = data;
}

function arrayActualizado() {
    sql = "SELECT events.name_event, state_events.state FROM `events` INNER JOIN state_events ON events.id_state_events = state_events.id_state_events;"
    fetch(`../php/API/consultas.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            getData(data);
        })

}
arrayActualizado()

function arhiveEvents(data) {
    console.log(arrayDataEvents[data - 1][0], arrayDataEvents[data - 1][1])
    if (arrayDataEvents[data - 1][1] == "Activo") {
        sql = "UPDATE `events` SET `id_state_events` = 2 WHERE `events`.`id_events` = " + data;
        fetch(`../php/API/ejecutar.php?sql=${sql}`)
            .then(res => res.json())
            .then(data => {
                if (data == "nice") {
                    arrayActualizado()
                    setTimeout(showNotification(alertNice), 1000)
                    consultas("SELECT events.id_events, events.name_event, user_data.user_name, categories_events.categories, place_events.place, state_events.state FROM `events` INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events INNER JOIN user_data ON events.id_user_data = user_data.id_user_data INNER JOIN state_events ON events.id_state_events = state_events.id_state_events INNER JOIN place_events ON events.place_event = place_events.id_place;", 1);
                } else {
                    setTimeout(showNotification(error), 1000)
                }

            })
    } else {
        setTimeout(showNotification(error), 1000)
    }
}

function unArhiveEvents(data) {
    console.log(arrayDataEvents[data - 1][0], arrayDataEvents[data - 1][1])
    if (arrayDataEvents[data - 1][1] == "Archivado") {
        sql = "UPDATE `events` SET `id_state_events` = 1 WHERE `events`.`id_events` = " + data;
        fetch(`../php/API/ejecutar.php?sql=${sql}`)
            .then(res => res.json())
            .then(data => {
                if (data == "nice") {
                    arrayActualizado()
                    setTimeout(showNotification(alertNice), 1000)
                    consultas("SELECT events.id_events, events.name_event, user_data.user_name, categories_events.categories, place_events.place, state_events.state FROM `events` INNER JOIN categories_events ON events.id_categories_events = categories_events.id_categories_events INNER JOIN user_data ON events.id_user_data = user_data.id_user_data INNER JOIN state_events ON events.id_state_events = state_events.id_state_events INNER JOIN place_events ON events.place_event = place_events.id_place;", 1);
                } else {
                    setTimeout(showNotification(error), 1000)
                }

            })
    } else {
        setTimeout(showNotification(error), 1000)
    }
}