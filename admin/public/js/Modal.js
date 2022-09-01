const containerModal = document.getElementById('containerModal');
const newB = document.getElementById('new');
const cancel = document.getElementById('cancel');
const XModal = document.getElementById('XModal');

newB.addEventListener('click', function () {
    containerModal.style.display = "flex";
})

cancel.addEventListener('click', function () {
    containerModal.style.removeProperty('display');
})

XModal.addEventListener('click', function () {
    containerModal.style.removeProperty('display');
})
