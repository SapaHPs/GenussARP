
    <title>Editar Menu</title>

    <br><br><br><br><br>
<form action="" method="post">
<label for="Proteina">Proteína:</label>
    <select id="Proteina" name="Proteina" required>
        <option value="">Seleccione una opción</option>
        <?php
        $ing = new MvcControllerMenus();
        $ing->ConsultarAlimento();
        ?>
    </select>

    <label for="Fibra">Fibra:</label>
    <select id="Fibra" name="Fibra" required>
        <option value="">Seleccione una opción</option>
        <?php
        $ing = new MvcControllerMenus();
        $ing->ConsultarAlimento();
        ?>
    </select>

    <label for="Carbohidratos">Carbohidratos:</label>
    <select id="Carbohidratos" name="Carbohidratos" required>
        <option value="">Seleccione una opción</option>
        <?php
        $ing = new MvcControllerMenus();
        $ing->ConsultarAlimento();
        ?>
    </select>

    <label for="Almidones">Almidones:</label>
    <select id="Almidones" name="Almidones" required>
        <option value="">Seleccione una opción</option>
        <?php
        $ing = new MvcControllerMenus();
        $ing->ConsultarAlimento();
        ?>
    </select>

    <label for="Imagendelmenu">Imagen del menú:</label>
    <input type="text" id="Imagendelmenu" name="Imagendelmenu" required>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $pro = $_POST["Proteina"];
    $fib = $_POST["Fibra"];
    $alm = $_POST["Almidones"];
    $car = $_POST["Carbohidratos"];
    $ima = $_POST["Imagendelmenu"];
    $id = $_GET['mivarialble'];

    $perfil = new MvcControllerMenus();
    $perfil->EditarMenu($pro, $fib, $alm, $ima, $id, $car);
}
?>
<br>
</body>
</html>
