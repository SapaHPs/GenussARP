<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/tabla.css">
    <title>Tabla de Usuarios</title>
</head>
<body>

<div  class="student-list">
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Rol</th>
                <th>Contraseña</th>
                <th>Estado</th>
                <th>Editar</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $cons = new MvcControllerAuxiliar();
            $cons->Perfil();
            ?>
        </tbody>
    </table>
</div>

</body>
</html>
