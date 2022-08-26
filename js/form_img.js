let input = document.getElementById('imagee');
let space = document.querySelector('.dragfile_container');
let img = document.getElementById('img-result');


input.addEventListener('change', ()=> {
    document.querySelector('.namee').innerText = input.files[0].name;
});


space.addEventListener('click', ()=> input.click())

space.addEventListener('dragover', (e) => {
    e.preventDefault();
    space.classList.add('dragfile_container-active');
});

space.addEventListener('dragleave', (e) => {
    e.preventDefault();
    space.classList.remove('dragfile_container-active');
});

let subirImg = (file) =>{
    let fileReader = new FileReader();
    fileReader.readAsDataURL(file);

    fileReader.addEventListener('load', (e) =>{
        img.setAttribute('src', e.target.result);
    });
}

space.addEventListener('drop', (e) => {
    e.preventDefault();

    input.files = e.dataTransfer.files;
    let file = input.files[0];

    subirImg(file);
});

input.addEventListener('change', (e) => {
    let file = e.target.files[0];
    subirImg(file);
})



