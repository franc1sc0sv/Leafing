// let li  = document.querySelector(".home");``
// let button = document.querySelector(".btn");``  


// li.addEventListener("click", ()=>{
//     document.querySelector(".configuracion-cuenta-container").classList.remove("mostrar-2") //Toggle

//     document.querySelector(".user-menu-container").classList.add("mostrar") //Toggle

// })

// button.addEventListener("click", ()=>{
//     document.querySelector(".user-menu-container").classList.add("mostrar") //Toggle
    
//         document.querySelector(".configuracion-cuenta-container").classList.remove("mostrar-2") //Toggle````
// })

const $showMenu = document.getElementById('showMenu');
const $showConfig = document.getElementById('showConfig');
const $onlyMenu = document.getElementById('onlyMenu');
const $onlyConfig = document.getElementById('onlyConfig');

$showMenu.addEventListener('click', function () {
    $onlyMenu.classList.toggle('mostrar')
    $onlyConfig.classList.toggle('no-mostrar-2')
}); 

$showConfig.addEventListener('click', function () {
    $onlyMenu.classList.toggle('mostrar')
    $onlyConfig.classList.toggle('no-mostrar-2')
});


