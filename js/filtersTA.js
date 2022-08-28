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
    let html = document.querySelector("html");
    let tituloInput = document.getElementById('tituloInput');
    let descriptionInput = document.getElementById('descriptionInput');
    if (html.lang == "es") {
        tituloInput.setAttribute('placeholder', 'eg. Recolección de basura')
        descriptionInput.setAttribute('placeholder', 'eg. Recolección de basura')
    } else {
        tituloInput.setAttribute('placeholder', 'eg. Reunión para realizar una recolección con la ayuda de la comunidad')
        descriptionInput.setAttribute('placeholder', 'eg. Meeting to carry out a collection with the help of the community.')
    }

}
