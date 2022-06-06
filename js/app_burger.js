(function () { //Funcion que se ejecuta asi misma - generando scope
    const ListsItems = document.querySelectorAll('.item-menu-desplegable');// obtiene los li con submenus
    //querySelectorAll - va a obtener a todos los elementos
    const menuheader = document.querySelector('.menu-header');
    //querySelector -  Solo obtendremos un solo elemento
    const burger = document.querySelector('.burger');

    // Funcion flecha
    const addClick = () => {
        ListsItems.forEach(Element => {
            Element.addEventListener('click', () => { //cuando de click al elemento queiro que se ejecute esto

                let menu_desplegable = Element.children[1]; //obtiene al primer hijo(oesa al ul con el submenu)
                let height = 0; //inicialzar la variable altura
                Element.classList.toggle('sub_menu-activo');//agregarle o quiatrle un clase

                if (menu_desplegable.clientHeight === 0) { //clientHeight nos devuelve la altura del elemento
                    //si el submenu tiene una altura que es 0 entonces
                    height = menu_desplegable.scrollHeight;// = quiero que la altura sea igual a la altura minima del submenu(altura minima para exista el elemento)

                }

                menu_desplegable.style.height = `${height}px` // el submenu agrege a su estilo la altura de la variable height
                //agreagr la altura


                //Esto quire decir que si clicleamos y la altura es 0 eso queire decir que lo vamos a abrir
                // y si lo clicleamos y la altura != a 0 entonces esta abierto y lo vamos a cerrar
            }
            )
        })
    }

    //

    const deletestyleheight = () => {
        ListsItems.forEach(Element => { //itere a todos los elementos

                //si ele elemento hijo 1 tiene el atributo style 
            if (Element.children[1].getAttribute('style')) {
                Element.children[1].removeAttribute('style'); // remueveme el atributo 
                Element.classList.remove('sub_menu-activo');
            }
        });
    }

    addClick();

    //addEventListener escuchador a las acciones del usuario
    //Cada que la ventana subra un cambio en el viewport quiero llamar a una funcion
    window.addEventListener('resize', () => {
        if (window.innerWidth > 800) {
            deletestyleheight();

            if (menuheader.classList.contains('menu-header_show'));
                menuheader.classList.remove('menu-header_show');

        } else {
            addClick();
        }

    });

    if (window.innerWidth <= 800) {
        addClick();
    }

    //cuando le de click al burger y le agregare ana clase dependiendo se la tiene o no la tiene
    burger.addEventListener('click', () => menuheader.classList.toggle('menu-header_show'))
})();


