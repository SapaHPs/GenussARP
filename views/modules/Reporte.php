<br><br><br><br><br><br>

<h2>Crear un nuevo reporte</h2>
    <form action="" method="POST">
        <!-- Campo para el nombre del reporte -->
        <label for="nombre">Inserte el curso al cual se le va a generar el reporte:</label>
        <br><br>
        <select id="curso" name="curso" required>
        <option value="">Seleccione una opción</option>
        <?php
        $ing = new  MvcControllerEstudiantes();
        $ing->consultarCursos();
        ?>
    </select>
        <br><br>

        <!-- Campo para la descripción del reporte -->
        <label for="descripcion">Inserte el id del menu:</label>
        <br><br>
        <select id="idm" name="idm" required>
        <option value="">Seleccione una opción</option>
        <?php
        $ing = new  MvcControllerMenus();
        $ing->Consultamenus();
        ?>
        </select>
        <br><br>

        <!-- Botón para enviar el formulario -->
        <input type="submit" value="Crear Reporte">
    </form>

    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $cur = $_POST["curso"];
    $idm = $_POST["idm"];
    $id = $_SESSION["id_usuario"];
    

    $perfil = new MvcControllerReportes();
    $perfil->Añadirreporte($cur, $idm, $id);
}
?>
<br><br>