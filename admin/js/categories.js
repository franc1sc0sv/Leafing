const keep = document.getElementById('kepp');
const containerModelNotification = document.getElementById('containerModelNotification')
const XModalEditPlaces = document.getElementById('XModalEditPlaces');
const containerModalEdit = document.getElementById('containerModalEdit');
const keppCategorieEdit = document.getElementById('keppCategorieEdit');
let idCategory;

function getID(id) {
    idCategory = id
}
if (pathname == "/LEAFING/Crea-J-2022/admin/php/categories.php") {
    consultas("SELECT * FROM `categories_events`", 2);
}

keep.addEventListener('click', function () {
    let inputCategoryES = document.getElementById('inputCategoryES');
    let inputCategoryEN = document.getElementById('inputCategoryEN');

    fetch(`../php/API/categories.php?inputCategoryES=${inputCategoryES.value}&inputCategoryEN=${inputCategoryEN.value}&stage=1`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "nice") {
                containerModal.style.removeProperty('display');
                inputCategoryES.value = ""
                inputCategoryEN.value = ""

                setTimeout(showNotification(alertNice), 1000)
                consultas("SELECT * FROM `categories_events`", 2);
            } else if (data == "allReadyExist") {
                showNotification(alertRepeat);
            } else if (data == "empty") {
                showNotification(alert);
            }
        })

})


function deleteCategories(id) {
    sql = "DELETE FROM `categories_events` WHERE `categories_events`.`id_categories_events` = " + id;
    //console.log(sql)
    fetch(`../php/API/ejecutar.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            //console.log(data)
            if (data == "nice") {
                setTimeout(showNotification(alertNice), 1000)
                consultas("SELECT * FROM `categories_events`", 2);
            } else {
                setTimeout(showNotification(error), 1000)
            }

        })
}

function showModalUpdate(id) {
    containerModalEdit.style.display = "flex";
    sql = "SELECT * FROM `categories_events` WHERE id_categories_events = " + id;
    fetch(`../php/API/consultas.php?sql=${sql}`)
        .then(res => res.json())
        .then(data => {
            getID(id)
            let inputCategoryEsEdit = document.getElementById('inputCategoryEsEdit')
            let inputCategoryEnEdit = document.getElementById('inputCategoryEnEdit')
            inputCategoryEsEdit.value = data[0][1];
            inputCategoryEnEdit.value = data[0][2];
        })
}

function hideModal() {
    containerModalEdit.style.removeProperty('display');
}

keppCategorieEdit.addEventListener('click', function () {
    let inputCategoryEsEdit = document.getElementById('inputCategoryEsEdit');
    let inputCategoryEnEdit = document.getElementById('inputCategoryEnEdit');

    fetch(`../php/API/categoriesEdit.php?inputCategoryES=${inputCategoryEsEdit.value}&inputCategoryEN=${inputCategoryEnEdit.value}&id=${idCategory}`)
        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "nice") {
                containerModalEdit.style.removeProperty('display');
                inputCategoryEsEdit.value = ""
                inputCategoryEnEdit.value = ""

                setTimeout(showNotification(alertNice), 1000)
                consultas("SELECT * FROM `categories_events`", 2);
            } else if (data == "allReadyExist") {
                showNotification(alertRepeat);
            } else if (data == "empty") {
                showNotification(alert);
            }
        })

})