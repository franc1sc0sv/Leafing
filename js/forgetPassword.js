const passordForget = document.getElementById('passordForget');
const containerinfo1 = document.getElementById('containerinfo1');
const formEmail = document.getElementById('formEmail');
const regresar = document.getElementById('regresar');

regresar.addEventListener('click', function () {
    containerinfo1.style.transform = "translateX(-0%)";

})


passordForget.addEventListener('click', function () {
    containerinfo1.style.transform = "translateX(-33%)";
})


formEmail.addEventListener('submit', function (e) {
    e.preventDefault();
    let dataForm = new FormData(formEmail);
    email = dataForm.get('email')
    fetch(`sendCode.php?email=${email}`)
    containerinfo1.style.transform = "translateX(-66%)";

})

