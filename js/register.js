const code = document.getElementById('containerinfo1');
const formEmail = document.getElementById('formEmail');
const alert = document.getElementById('alert');
const eye = document.getElementById('eye')
const passwordInput = document.getElementById('password');
const eyeOpacity = document.getElementById('eye');
const correoEnviado = document.getElementById('correoEnviado');
const formCode = document.getElementById('formCode');
const alertCode = document.getElementById('alertCode');
const containerinfo1 = document.querySelector(".containerinfo1");
const formData = document.getElementById('formData');
const alertData = document.getElementById('alertData');
let codeVerification;
var Dataemail;
var Datapassword;
formEmail.addEventListener('submit', function (e) {
    e.preventDefault();//Evite que se ejecute lo que viene por defecto en el navegador que es procesar el formualrio
    let data = new FormData(formEmail);//Informacion del formulario de quien - form email
    let email = data.get('email')
    let passsword = data.get('password')
    let expRegEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;


    console.log(expRegEmail.test(email))

    //Fecth trabaja por defecto con get

    //Enviando por medio de fecth y post los elementos del form
    fetch('register.php?estatus=stage1', {
        method: 'post',
        body: data //El cuerpo del mensaje que se va enviar
    })
        //Promesas
        .then(res => res.json())
        .then(data => {
            if (data == 'empty') {
                alert.innerHTML = `
            <div class="alertDivEmpty">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <p>Llena todos los campos</p>
            </div>`
            } else if (data == 'repetido') {
                alert.innerHTML = `
            <div class="alertDivRepetido">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <p>Ya existe un correo con esta cuenta</p>
            </div>`
            } 
            else if (!expRegEmail.test(email)) {
                alert.innerHTML = `
                <div class="alertDivEmpty">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <p>Correo electrónico no válido</p>
                </div>`
            }
            else if (passsword.length < 6 || passsword.length > 15) {
                alert.innerHTML = `
                <div class="alertDivEmpty">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <p>La contraseña debe tener más de 6 caracteres y menos de 15</p>
                </div>`
            }
            else {
                codeEmail = getCode(data)
                data = getEmail(email, passsword)
                correoEnviado.innerHTML = email;
                containerinfo1.style.transform = "translateX(-33%)"
            }
        })
})

function getCode(code) {
    codeVerification = code;
}
function getEmail(email, password) {
    Dataemail = email;
    Datapassword = password;
}

formCode.addEventListener('submit', function (e) {
    e.preventDefault();

    let data = new FormData(formCode);
    let codeEmail = data.get('codeEmail');

    if (codeEmail != '') {

        if (codeEmail == codeVerification) {
            console.log("Codigo correcto");
            containerinfo1.style.transform = "translateX(-66%)"
        } 
        else if (codeEmail.length !== 4) {
            alertCode.innerHTML = `
            <div class="alertDivEmpty">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <p>El codigo debe tener 4 dígitos</p>
            </div>`
        }
        else {
            alertCode.innerHTML = `
            <div class="alertDivEmpty">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <p>El codigo es incorrecto </p>
            </div>`
        }

    } else {
        alertCode.innerHTML = `
        <div class="alertDivEmpty">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p>Llena todos los campos</p>    
        </div>`
    }
})

formData.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(formData);
    let name = data.get('name');
    let lastname = data.get('lastname');
    let borndate = data.get('borndate');
    let gender = data.get('gender');
    let user = data.get('user');

    let expRegUser = /^[a-zA-Z0-9\_\-]{4,16}$/;
    let expRegName = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;

    // console.log(Dataemail)
    // console.log(Datapassword)
    // console.log(name)
    // console.log(lastname)
    // console.log(borndate)
    // console.log(gender)
    // console.log(user)

    if (Datapassword == undefined || Dataemail == undefined) {
        alertData.innerHTML = `
        <div class="alertDivEmpty">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
            <p>Llena todos los campos</p>
        </div>`
    } else {
        fetch(`register.php?estatus=stage2&name=${name}&lastname=${lastname}&borndate=${borndate}&gender=${gender}&user=${user}&Dataemail=${Dataemail}&Datapassword=${Datapassword}`)
            .then(res => res.json())
            .then(data => {
                console.log(data)

                if (data == "empty") {
                    alertData.innerHTML = `
                    <div class="alertDivEmpty">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <p>Llena todos los campos</p>
                    </div>`
                } 
                else if (!expRegName.test(name)) {
                    alertData.innerHTML = `
                    <div class="alertDivNice">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <p>Nombre no válido</p>
                    </div>`
                }
                
                else if (data == "niceYourAreLogin") {
                    alertData.innerHTML = `
                    <div class="alertDivNice">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <p>Tu cuenta ha sido creada</p>
                    </div>`
                    function redirec() {
                        window.location.href = "index.php";
                    }

                    setTimeout(redirec, 3000);



                }
            })

    }

})


eye.addEventListener('click', function () {
    if (passwordInput.type === "password") {
        passwordInput.type = "text";
        eyeOpacity.style.filter = "opacity(1.0)"
    }
    else {
        passwordInput.type = "password";
        eyeOpacity.style.filter = "opacity(0.4)"
    }
})
