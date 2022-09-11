import { warning, alertf, nice } from "../js/component/alerts.js";
const alertRegister = document.getElementById('alertRegister')
const code = document.getElementById('containerinfo1');
const formEmail = document.getElementById('formEmail');
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
var codigoCorrecto;
let html = document.querySelector("html");

function invalidData() {
    let msg;
    if (html.lang == "es") {
        msg = alertf("Datos invalidos")
    } else {
        msg = alertf("Invalid data")
    }
    //console.log(msg)
    alertRegister.innerHTML = msg;
    showNotification();
}
//Es el primer slider del formulario - correo y contraseña
formEmail.addEventListener('submit', function (e) {
    e.preventDefault();//Evite que se ejecute lo que viene por defecto en el navegador que es procesar el formualrio
    let data = new FormData(formEmail);//Informacion del formulario de quien - form email
    let email = data.get('email')
    let passsword = data.get('password')
    let expRegEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    let expPassword = /^[a-zA-Z0-9_.-]{8,24}$/;
    console.log(passsword);
    if (!expRegEmail.test(email)) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Correo invalido")
        } else {
            msg = alertf("Invalid email")
        }
        //console.log(msg)
        alertRegister.innerHTML = msg;
        showNotification();
    } else if (!expPassword.test(passsword)) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Contraseña Invalida")
        } else {
            msg = alertf("Invalid Passoword")
        }
        //console.log(msg)
        alertRegister.innerHTML = msg;
        showNotification();
    } else {
        fetch('/LEAFING/Crea-J-2022/client/api/register.php?estatus=stage1', {
            method: 'post',
            body: data
        })
            .then(res => res.json())
            .then(data => {
                // console.log(data)
                if (data == 'repetido') {
                    let msg;
                    if (html.lang == "es") {
                        msg = alertf("Correo repetido")
                    } else {
                        msg = alertf("Repeated mail")
                    }
                    alertRegister.innerHTML = msg;
                    showNotification();
                } else {
                    // getCode(data)
                    getEmail(email, passsword)
                    correoEnviado.innerHTML = email;
                    containerinfo1.style.transform = "translateX(-33%)"
                }
            })
    }
})

//funciones para obtener datos privados de un addeventlisener - voy a sacar codigo de verificacion, email y correo
function getEmail(email, password) {
    Dataemail = email;
    Datapassword = password;
}

//Funcion del codigo
formCode.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(formCode);
    let codeEmail = data.get('codeEmail');

    if (codeEmail != '') {

        if (codeEmail.length !== 4) {
            let msg;
            if (html.lang == "es") {
                msg = alertf("Numero de digitos invalidos")
            } else {
                msg = alertf("Number of invalid digits")
            }
            alertRegister.innerHTML = msg;
            showNotification();
        } else {
            fetch(`/LEAFING/Crea-J-2022/client/api/register.php?estatus=stage3&code=${codeEmail}`, {
                method: 'post',
                body: data
            })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    if (data == 'incorrect') {
                        let msg;
                        if (html.lang == "es") {
                            msg = alertf("Codigo Incorrecto")
                        } else {
                            msg = alertf("Incorrect code")
                        }
                        alertRegister.innerHTML = msg;
                        showNotification();
                    } else if (data == 'correct') {
                        console.log("Codigo correcto");
                        containerinfo1.style.transform = "translateX(-66%)"
                        codigoCorrecto = true;
                        let completeInfo = document.getElementById('completeInfo')
                        completeInfo.style.marginBottom = '2rem'
                        completeInfo.style.marginTop = '0rem'
                    }
                })
        }
    } else {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Llena todos los campos")
        } else {
            msg = alertf("Fill all the blanks")
        }
        alertRegister.innerHTML = msg;
        showNotification();
    }
})

//Funcion de los datos del usuario
formData.addEventListener('submit', function (e) {
    e.preventDefault();
    let data = new FormData(formData);
    let name = data.get('name');
    let lastname = data.get('lastname');
    let borndate = data.get('borndate');
    let gender = data.get('gender');
    let user = data.get('user');
    // console.log(borndate)

    let date = new Date(borndate)
    // console.log(date)
    let datePast = new Date();
    datePast.setFullYear(datePast.getFullYear() - 18);

    // let expRegUser = /^[a-zA-Z0-9\_\-]{4,16}$/;
    let expRegName = /^[a-zA-ZÀ-ÿ\s]{3,40}$/;
    let userRegex = /^[a-zA-Z0-9_.+-]{4,24}$/;

    if (Datapassword == undefined || Dataemail == undefined || codigoCorrecto == undefined) {
        let msg;
        msg = alertf("jajajajajajaja")
        alertRegister.innerHTML = msg;
        showNotification();
    } else if (Dataemail == "" || Datapassword == "" || name == " " || lastname == "" || borndate == "" || gender == "" || user == "") {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Llena todos los campos")
        } else {
            msg = alertf("Fill in all the fields")
        }
        alertRegister.innerHTML = msg;
        showNotification();
    } else if (!expRegName.test(name)) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Nombre invalido")
        } else {
            msg = alertf("Invalid name")
        }
        alertRegister.innerHTML = msg;
        showNotification();
    } else if (!expRegName.test(lastname)) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Apellido invalido")
        } else {
            msg = alertf("Invalid lastname")
        }
        alertRegister.innerHTML = msg;
        showNotification();
    } else if (!userRegex.test(user)) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Nombre de usuario invalido")
        } else {
            msg = alertf("Invalid user name")
        }
        alertRegister.innerHTML = msg;
        showNotification();

    } else if (!expRegName.test(gender)) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Genero invalido")
        } else {
            msg = alertf("Invalid gender")
        }
        alertRegister.innerHTML = msg;
        showNotification();
    } else if (date >= datePast) {
        let msg;
        if (html.lang == "es") {
            msg = alertf("Debes ser mayor de 18 años")
        } else {
            msg = alertf("You must be at least 18 years old")
        }
        alertRegister.innerHTML = msg;
        showNotification();
    } else {
        //console.log("nice");
        fetch(`/LEAFING/Crea-J-2022/client/api/register.php?estatus=stage2&name=${name}&lastname=${lastname}&borndate=${borndate}&gender=${gender}&user=${user}&Dataemail=${Dataemail}&Datapassword=${Datapassword}&codeVerification=${codeVerification}`)
        let msg;
        if (html.lang == "es") {
            msg = nice("Tu cuenta ha sido creada")
        } else {
            msg = nice("Your account has been created")
        }
        alertRegister.innerHTML = msg;
        showNotification();

        setTimeout(function () {
            window.location.href = "index.php";
        }, 1500);
    }
})

//Ojito de del password
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


// let datePast = new Date();
// datePast.setFullYear(datePast.getFullYear() - 18);

// let past = datePast.toLocaleDateString();