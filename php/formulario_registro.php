<?php include_once("./header.php") ?>

<div class="formulario_container-2">
    <form action="./" method="post" class="formulario_registro">
        <h1>Crea una cuenta</h1>

        <input type="text" placeholder="Nombre completo" name="name"> <br>
        <input type="email" placeholder="Correo electrónico" name="name"> <br>
        <input type="text" placeholder="Contraseña" name="name"> <br>
        <input type="text" placeholder="Confirmar contraseña" name="name"> <br>
        <div>
            <input type="checkbox" name="terms-conditions">
            <label for="terms-conditions">Estoy de acuerdo con los <a href="#"> Terminos de
                    privacidad</a></label> <br>
        </div>
        <input type="submit" name="submit" value="Registrarse" id="submit-registrer">

        <p>Ya tienes una cuenta? <a href="./formulario_inicio-sesion.php">Inicia sesión</a></p>
    </form>

</div>
</div>
</div>

<?php include_once("./footer.php") ?>