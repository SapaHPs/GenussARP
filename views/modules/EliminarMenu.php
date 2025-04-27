<?php
    $id = $_GET['mivarialble'];

    $perfil = new MvcControllerMenus();
    $perfil->EliminarMenu($id);
    ?>