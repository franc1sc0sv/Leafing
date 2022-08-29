let namee = document.getElementById('name');
let lastname = document.getElementById('lastname');
let user = document.getElementById('usuario');
let email = document.getElementById('email');
let boutme = document.getElementById('sobre-mi');
let container = document.getElementById('cont');



//Detectar los cambios

namee.addEventListener('change', () => {
    container.classList.remove('hide');
})

lastname.addEventListener('change', () => {
    container.classList.remove('hide');
})

user.addEventListener('change', () => {
    container.classList.remove('hide');
})

//La alerta

const formCC = document.getElementById('formCC')
const contenidoModalInscripcion = document.getElementById('contenidoModalInscripcion');
const modal_container = document.getElementById('modal_container');

function closeModal() {
    modal_container.classList.remove('show');
    setTimeout(function () {
        window.location.href = "../php/cuenta.php";
    }, 600);
}

formCC.addEventListener('submit', function (e) {
    e.preventDefault()
    let data = new FormData(formCC);

    fetch('accountUp.php', {
        method: 'post',
        body: data
    })

        .then(res => res.json())
        .then(data => {
            console.log(data)
            if (data == "updated") {
                modal_container.classList.add('show');
                let contenidoModalInscripcionES = `
                <h1>Tus datos han sido actualizados</h1>
                <div class=""container_imgCreated><img src="../img/iconos/comprobado.png" class="imgCreated"></div>
                <button id="close" class="buttonxd">Cerrar</button>
                `
                contenidoModalInscripcion.innerHTML = contenidoModalInscripcionES;

                let close = document.getElementById('close');
                close.addEventListener('click', () => {
                    closeModal();
                })

            }

        })
})

//Change image



//

let plus = document.querySelector('.img-plus');

function closeModal2() {
    modal_container.classList.remove('show');
}

plus.addEventListener('click', () => {
    modal_container.classList.add('show');
    // let contenidoModalInscripcionES = `
    // <div class="dragfile_container">
    //     <img src="../img/iconos/cloud-computing.png" alt="" class="dragfile_icon">
    //     <p class="translate">Arrastra o suelta tu imagen</p>
    //     <p>O</p>
    //     <label for="image" class="translate">Elige un archivo</label>
    //     <input type="file" name="image" id="imagee">
    //     <img alt="" id="img-result" class="dragfile_img">
    // </div>
    // <button name="submit" type="submit" class="buttonxd"><span class="translate">Guardar</span></button>
    // <button id="close" class="buttonxd">Cerrar</button>
    // `
    // contenidoModalInscripcion.innerHTML = contenidoModalInscripcionES;
    let close = document.getElementById('close');
    close.addEventListener('click', () => {
        closeModal2();
    })

})

// let input = document.getElementById('imagee');
// let space = document.querySelector('.dragfile_container');
// let img = document.getElementById('img-result');


// // input.addEventListener('change', ()=> {
// //     document.querySelector('.nameee').innerText = input.files[0].name;
// // });


// space.addEventListener('click', ()=> input.click())

// space.addEventListener('dragover', (e) => {
//     e.preventDefault();
//     space.classList.add('dragfile_container-active');
// });

// space.addEventListener('dragleave', (e) => {
//     e.preventDefault();
//     space.classList.remove('dragfile_container-active');
// });

// let subirImg = (file) =>{
//     let fileReader = new FileReader();
//     fileReader.readAsDataURL(file);

//     fileReader.addEventListener('load', (e) =>{
//         img.setAttribute('src', e.target.result);
//     });
// }

// space.addEventListener('drop', (e) => {
//     e.preventDefault();

//     input.files = e.dataTransfer.files;
//     let file = input.files[0];

//     subirImg(file);
// });

// input.addEventListener('change', (e) => {
//     let file = e.target.files[0];
//     subirImg(file);
// })

//
