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
var codigoCorrecto;
let html = document.querySelector("html");

///DEFINICION DE LOS MENSAJES DE ERROR DEPENDIENDO DEL IDIOMA
if (html.lang == "es") {
    alertEmpty =
        `<div class="alertDivEmpty">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Llena todos los campos</p>
    </div>`;

    alertRepietido =
        ` < div class="alertDivRepetido" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Ya existe un correo con esta cuenta</p>
    </div >`;
    CorreNoValido = `
    < div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Datos Invalidos</p>
    </div > `;
    passswordNot = `
    < div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>La contraseña debe tener más de 6 caracteres y menos de 15</p>
    </div > `;
    DatosIncorrectos = `
    < div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Datos Incorrecots</p>
    </div > `;
    fourDigits = `
    < div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>El codigo debe tener 4 dígitos</p>
    </div > `;

    NameNoValido = `
    < div class="alertDivRepetido" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Nombre no válido</p>
    </div > `
    Nice = `;
    < div class="alertDivNice" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Tu cuenta ha sido creada</p>
    </div > `;



} else {
    alertEmpty = `
    <div class="alertDivEmpty">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Fill in all the fields</p>
    </div>`;

    alertRepietido = ` 
    <div class="alertDivRepetido" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>There is already an email with this account</p>
    </div >`;
    CorreNoValido = `
    <div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Invalid data</p>
    </div > `;
    passswordNot = `
    <div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>The password must be longer than 6 characters and less than 15 characters.</p>
    </div > `;
    DatosIncorrectos = `
    <div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Incorrect Data</p>
    </div > `;
    fourDigits = `
    <div class="alertDivEmpty" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>The code must have 4 digits</p>
    </div > `;

    NameNoValido = `
    <div class="alertDivRepetido" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Invalid name</p>
    </div > `
    Nice = `;
    <div class="alertDivNice" >
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <p>Your account has been created</p>
    </div > `;
}

//Es el primer slider del formulario - correo y contraseña
formEmail.addEventListener('submit', function (e) {
    e.preventDefault();//Evite que se ejecute lo que viene por defecto en el navegador que es procesar el formualrio
    let data = new FormData(formEmail);//Informacion del formulario de quien - form email
    let email = data.get('email')
    let passsword = data.get('password')
    let expRegEmail = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
    //console.log(data)
    // console.log(email)
    // console.log(passsword)

    // console.log(expRegEmail.test(email))

    //Fecth trabaja por defecto con get

    //Enviando por medio de fecth y post los elementos del form

    if (!expRegEmail.test(email)) {
        alert.innerHTML = CorreNoValido;
    } else if (passsword.length < 6 || passsword.length > 15) {
        alert.innerHTML = passswordNot;
    } else {
        fetch('register.php?estatus=stage1', {
            method: 'post',
            body: data //El cuerpo del mensaje que se va enviar
        })
            //Promesas
            .then(res => res.json())
            .then(data => {
                if (data == 'repetido') {
                    alert.innerHTML = alertRepietido;
                } else {
                    getCode(data)
                    getEmail(email, passsword)
                    correoEnviado.innerHTML = email;
                    containerinfo1.style.transform = "translateX(-33%)"
                }
            })
    }
})

//funciones para obtener datos privados de un addeventlisener - voy a sacar codigo de verificacion, email y correo
function getCode(code) {
    codeVerification = code;
}
function getEmail(email, password) {
    Dataemail = email;
    Datapassword = password;
}

//Funcion del codigo
formCode.addEventListener('submit', function (e) {
    e.preventDefault();

    let data = new FormData(formCode);
    ///Codigop ingresado por el usuario
    let codeEmail = data.get('codeEmail');

    if (codeEmail != '') {

        if (codeEmail == codeVerification) {
            console.log("Codigo correcto");
            containerinfo1.style.transform = "translateX(-66%)"
            codigoCorrecto = true;
        }
        else if (codeEmail.length !== 4) {
            alertCode.innerHTML = fourDigits;
        }
        else {
            alertCode.innerHTML = DatosIncorrectos;
        }

    } else {
        alertCode.innerHTML = alertEmpty;
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

    // let expRegUser = /^[a-zA-Z0-9\_\-]{4,16}$/;
    let expRegName = /^[a-zA-ZÀ-ÿ\s]{1,40}$/;

    if (Datapassword == undefined || Dataemail == undefined || codigoCorrecto == undefined) {
        alertData.innerHTML = alertEmpty;
    } else if (Dataemail == "" || Datapassword == "" || name == " " || lastname == "" || borndate == "" || gender == "" || user == "") {
        alertData.innerHTML = alertEmpty;
    } else if (!expRegName.test(name)) {
        alertData.innerHTML = NameNoValido;
    } else {
        //console.log("nice");
        fetch(`register.php?estatus=stage2&name=${name}&lastname=${lastname}&borndate=${borndate}& gender=${gender}& user=${user}& Dataemail=${Dataemail}& Datapassword=${Datapassword}`)
        alertData.innerHTML = Nice;
        function redirec() {
            window.location.href = "index.php";
        }

        setTimeout(redirec, 1500);
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
