let pathname = window.location.pathname;

function consultas(sql, id) {
    fetch(`/LEAFING/Crea-J-2022/admin/api/consultas.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            console.log(id)
            console.log(sql)
            if (id == 1) {
                dashboradData(data)
            } else if (id == 2) {
                catagories(data);
            } else if (id == 3) {
                places(data);
            }

        })

}

function dashboradData(data) {
    console.log(data);
    let element = '';
    for (let i = 0; i < data.length; i++) {
        element += `
        <tr>				
            <td>${data[i]['id_events']}</td>
            <td>${data[i]['name_event']}</td>
            <td>${data[i]['user_name']}</td>
            <td>${data[i]['categories']}</td>
            <td>${data[i]['place']}</td>
            <td>${data[i]['state']}</td>
            <td id="${data[i]['id_events']}" onclick="modalReportsResume(this)"> <span class="resumen"> Resumen </span></td>
            <td>
                <img src="../assets/icons/archive.svg" alt="archive" class="iconOption" id="${data[i]['id_events']}" onclick="arhiveEvents(this.id)">
                <img src="../assets/icons/unarchive.svg" alt="active" class="iconOption" id="${data[i]['id_events']}" onclick="unArhiveEvents(this.id)">
            </td>    
        </tr>
        \n`
    }

    let DataEvents = document.getElementById('DataEvents');
    DataEvents.innerHTML = element;
}

function catagories(data) {
    let element = '';
    for (let i = 0; i < data.length; i++) {
        element += `
        <tr>
        <td>${data[i]['id_categories_events']}</td>
        <td>${data[i]['categories']}</td>
        <td>${data[i]['categories_en']}</td>
        <td>
            <img src="../assets/icons/edit.svg" alt="edit" class="iconOption edit" id="${data[i]['id_categories_events']}" onclick="showModalUpdate(this.id)">
            <img src="../assets/icons/delete.svg" alt="delete" class="iconOption delete" id="${data[i]['id_categories_events']}" onclick="deleteCategories(this.id)">
        </td>
    </tr>
        \n`
    }
    let dataCategories = document.getElementById('dataCategories');
    dataCategories.innerHTML = element;
}

function places(data) {
    let element = '';
    for (let i = 0; i < data.length; i++) {
        element += `
        <tr>
        <td>${data[i]['id_place']}</td>
        <td>${data[i]['place']}</td>
        <td>
            <img src="../assets/icons/edit.svg" alt="edit" class="iconOption edit" id="${data[i]['id_place']}" onclick="showModalUpdatePlaces(this.id)">
            <img src="../assets/icons/delete.svg" alt="delete" class="iconOption delete" id="${data[i]['id_place']}" onclick="deletePlaces(this.id)">
        </td>
    </tr>
        \n`
    }
    let dataPlaces = document.getElementById('dataPlaces');
    dataPlaces.innerHTML = element;
}