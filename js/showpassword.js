let eye = document.querySelector('.eye');

eye.addEventListener('click', function(){
    if (this.nextElementSibling.type === "password") {
        this.nextElementSibling.type = "text";
    }
    else {
        this.nextElementSibling.type = "password";
    }
})