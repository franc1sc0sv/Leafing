let showMenu = document.getElementById('showMenu');
let showConfig = document.getElementById('showConfig');
let onlyMenu = document.getElementById('onlyMenu');
let onlyConfig = document.getElementById('onlyConfig');

showMenu.addEventListener('click', function () {
    onlyMenu.classList.add('mostrar');
    onlyMenu.classList.remove('no-mostrar');
    onlyConfig.classList.add('no-mostrar');
    onlyConfig.classList.remove('mostrar');
    // onlyMenu.classList.toggle('mostrar')
    // onlyConfig.classList.toggle('no-mostrar-2')
}); 

showConfig.addEventListener('click', function () {
    onlyMenu.classList.remove('mostrar');
    onlyMenu.classList.add('no-mostrar');
    onlyConfig.classList.remove('no-mostrar');
    onlyConfig.classList.add('mostrar');
    // onlyMenu.classList.toggle('no-mostrar')
    // onlyConfig.classList.toggle('no-mostrar')
});

console.log("aña")


