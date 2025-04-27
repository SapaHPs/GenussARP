<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Usuario</title>

       
</head>
<body>


<form method="post">
    <label for="nombre">Correo:</label>
    <input type="email" id="nombre" name="nombre" required>

    <label for="contraseña">Contraseña:</label>
    <input type="password" id="contraseña" name="contraseña" required>

    <label for="rol">Rol:</label>
    <select name="rol" required>
        <option value="">Seleccione Rol</option>
        <option value="Coordinador">Coordinador</option>
        <option value="Auxiliar">Auxiliar</option>
    </select>

    <input type="submit" value="Registrar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nombre"];
    $con = $_POST["contraseña"];
    $rol = $_POST["rol"];

    $perfil = new MvcControllerCoordinador();
    $perfil->Crearuser($con, $nom, $rol);
}
?>

</body>
</html>
