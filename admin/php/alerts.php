<?php //XD 
?>

<div class="alert hide" id="alert">
    <div class="containerNotification">
        <span class="msg">Llena todos los campos</span>
        <div class="close-btn" id="close" onclick="hideNotification(alert)">
            <img src="../assets/icons/close.svg" alt="">
        </div>
    </div>
</div>

<div class="alert hide repeat" id="alertRepeat">
    <div class="containerNotification">
        <span class="msg">Registros repetidos</span>
        <div class="close-btn" id="close" onclick="hideNotification(alertRepeat)">
            <img src="../assets/icons/close.svg" alt="">
        </div>
    </div>
</div>

<div class="alert hide nice" id="alertNice">
    <div class="containerNotification">
        <span class="msg">Proceso completado</span>
        <div class="close-btn" id="close" onclick="hideNotification(alertNice)">
            <img src="../assets/icons/close.svg" alt="">
        </div>
    </div>
</div>