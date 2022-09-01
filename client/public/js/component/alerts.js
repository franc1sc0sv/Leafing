export function warning(msg) {
    return `
<div class="alert hide warning" id="alert">
    <div class="containerNotification">
        <span class="msg">${msg}</span>
        <div class="close-btn" id="close" onclick="hideNotification()">
            <img src="../img/iconos/close.svg" alt="">
        </div>
    </div>
</div>`
}

export function alertf(msg) {
    return `
<div class="alert hide" id="alert">
    <div class="containerNotification">
        <span class="msg">${msg}</span>
        <div class="close-btn" id="close" onclick="hideNotification()">
            <img src="../img/iconos/close.svg" alt="">
        </div>
    </div>
</div>`
}


export function nice(msg) {
    return `
<div class="alert hide nice" id="alert">
    <div class="containerNotification">
        <span class="msg">${msg}</span>
        <div class="close-btn" id="close" onclick="hideNotification()">
            <img src="../img/iconos/close.svg" alt="">
        </div>
    </div>
</div>`
}