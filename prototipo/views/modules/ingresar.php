<form method="post">
    <fieldset>
        <legend>Ingresar al sistema</legend>
        <input type="email" name="nomUser" placeholder="Ingrese su correo" required>
        <input type="password" name="clave" placeholder="Password" required><br>  
        <input type="submit" value="Enviar"><br><br>
        <a href="index.php?action=regCliente">Registrarse</a><br><br>
        <a href="index.php?action=olvidosuClave">Olvidaste tu contraseña</a>
    </fieldset><br>
    <?php
$ing = new MvcControllerUsuario();
$ing->ingresar();
?>
</form>

