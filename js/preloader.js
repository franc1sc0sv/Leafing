let bbody = document.querySelector('#boddy');

window.addEventListener('load', function fadeOutEffect() {
    var fadeTarget = document.getElementById("onload");
    var fadeEffect = setInterval(function () {
        if (!fadeTarget.style.opacity) {
            fadeTarget.style.opacity = 1;
            bbody.classList.remove('hidden');
            fadeTarget.style.display = 'none';
        }
        // if (fadeTarget.style.opacity > 0) {
        //     fadeTarget.style.opacity -= 0.1;
        // } 
        // else {
        //     clearInterval(fadeEffect);
        // }
    }, 300);

    // this.setTimeout(displayNone, 1300)
    // function displayNone(){
    //     fadeTarget.style.display = 'none';
    //     bbody.classList.remove('hidden');
    // }

})
