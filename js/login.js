const formCredentials = document.getElementById('formCredentials')
const alert = document.getElementById('alert');
const eye = document.getElementById('eye')
const passwordInput = document.getElementById('password');

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
                alert.innerHTML = `
                    <div class="alertDivEmpty">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <p>Llena todos los campos</p>
                    </div>`
            } else if (data == "ErrorData") {
                alert.innerHTML = `
                    <div class="alertDivEmpty">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <p>Email o contraseña incorrectos</p>
                    </div>`
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