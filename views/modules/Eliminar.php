<?php
    $id = $_GET['mivarialble'];

    $perfil = new MvcControllerCoordinador();
    $perfil->elim($id);