<br><br><br><br><br><br><br><br><br>
<form method="post">
    <fieldset>
        <legend>Ingresar al sistema</legend>
        <input type="email" name="nomUser" placeholder="Ingrese su correo" required>
        <input type="password" name="clave" placeholder="Password" required><br>  
        <input type="submit" value="Enviar"><br><br>
    </fieldset><br>
    <?php
$ing = new MvcControllerUsuario();
$ing->ingresar();
?>
</form>
<br><br><br><br><br><br><br><br>
