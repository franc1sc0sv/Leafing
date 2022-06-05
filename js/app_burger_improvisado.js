(function () {
    const ListsItems = document.querySelectorAll('.item-menu-desplegable');
    const menuheader = document.querySelector('.menu-header-2');
    const burger = document.querySelector('.burger-2');

    const addClick = () => {
        ListsItems.forEach(Element => {
            Element.addEventListener('click', () => {

                let menu_desplegable = Element.children[1];
                let height = 0;
                Element.classList.toggle('sub_menu-activo');

                if (menu_desplegable.clientHeight === 0) {
                    height = menu_desplegable.scrollHeight;

                }

                menu_desplegable.style.height = `${height}px`
            }
            )
        })
    }

    const deletestyleheight = () => {
        ListsItems.forEach(Element => {

            if (Element.children[1].getAttribute('style')) {
                Element.children[1].removeAttribute('style');
                Element.classList.remove('.sub_menu-activo');
            }
        });
    }

    addClick();
    window.addEventListener('resize', () => {
        if (window.innerHeight > 800) {
            deletestyleheight();

            if (menuheader.classList.contains('menu-header_show'))
                menuheader.classList.remove('menu-header_show');

        } else {
            addClick();
        }

    });

    if (window.innerHeight <= 800) {
        addClick();
    }


    burger.addEventListener('click', () => menuheader.classList.toggle('menu-header_show'))
})();
