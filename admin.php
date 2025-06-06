<?php
session_start();

// Requiere los controladores
require_once "controllers/controller.php";
require_once "controllers/controllerUser.php";
require_once "controllers/ControllerAuxiliar.php";
require_once "controllers/ControllerMenu.php";
require_once "controllers/ControllerCoordinador.php";
require_once "controllers/ControllerComentarios.php";
require_once "controllers/ControllerEstudiantes.php";
require_once "controllers/ControllerReporte.php";

// Requiere los modelos
require_once "models/modelUser.php";
require_once "models/ModelAuxiliar.php";
require_once "models/Modelmenus.php";
require_once "models/ModelCoordinador.php";
require_once "models/ModelComentarios.php";
require_once "models/ModelEstudiantes.php";
require_once "models/ModelReporte.php";

if ($_SESSION['usuario']==null || $_SESSION['usuario']=='' ) {
    session_destroy();
    header('location:index.php?action=ingresar');
} else {
    $obj = new MvcController();
    $obj->plantillaAdmin();
}
?>
