const formCredentials = document.getElementById('formCredentials')
const alert = document.getElementById('alert');
const eye = document.getElementById('eye')
const passwordInput = document.getElementById('password');
let html = document.querySelector("html");

eye.addEventListener('click', function () {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eye.style.filter = "opacity(1.0)"
    }
    else {
        passwordInput.type = "password";
        eye.style.filter = "opacity(0.4)"
    }
})

if (html.lang == "es") {
    alertEmpty = `
    <div class="alertDivEmpty">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Llena todos los campos</p>
    </div>`;

    CorreNoValido = `
    <div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Correo electrónico o contraseña incorrectos</p>
    </div > `;
    Nice = `;
    <div class="alertDivNice" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Logeado</p>
    </div > `;



} else {
    alertEmpty = `
    <div class="alertDivEmpty">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Fill in all the fields</p>
    </div>`;

    CorreNoValido = `
    <div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Incorrect email or password</p>
    </div > `;
    Nice = `;
    <div class="alertDivNice" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Logged in</p>
    </div > `;
}

formCredentials.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formCredentials);

    let email = data.get('email')
    let passsword = data.get('password')

    fetch('login.php', {
        method: 'post',
        body: data
    })

        .then(res => res.json())
        .then(data => {
            if (data == "empty") {
                alert.innerHTML = alertEmpty;
            } else if (data == "ErrorData") {
                alert.innerHTML = CorreNoValido;
            } else if (data == "LogeadoUSER") {
                alert.innerHTML = `
                <div class="alertDivNice">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <p>Logeado</p>
                </div>`
                function redirec() {
                    window.location.href = "index.php";
                }
                setTimeout(redirec, 1000);

                //console.log(data);
            }
        })


})