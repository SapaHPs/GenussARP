<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
   
    
</head>
<body>
<br><br><br><br><br><br><br><br><br><br><br>
<form action="" method="post">
    <label for="nombre">Nombre:</label>
    <input type="email" name="nombre" required>

    <label for="contrasena">Contraseña:</label>
    <input type="password" name="contrasena" required>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nombre"];
    $con = $_POST["contrasena"];
    $id = $_GET['mivarialble'];

    $perfil = new MvcControllerAuxiliar();
    $perfil->editarALL($con, $nom, $id);
}
?>
<br><br><br><br><br><br><br><br>
</body>
</html>
