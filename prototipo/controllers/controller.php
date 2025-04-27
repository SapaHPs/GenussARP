<?php 

class MvcController
{
    // Método para incluir la plantilla principal
    public function plantilla()
    {
        include "views/template.php";
    }

    // Método para incluir la plantilla del administrador
    public function plantillaAdmin()
    {
        include "views/templateAdmin.php";
    }
    
    // Método para manejar los enlaces de las páginas
    public function enlacePaginasController()
    {
        if (isset($_GET['action'])) {
            $enlacesController = $_GET['action'];
            include "views/modules/" . $enlacesController . ".php";
        }
    }
}

?>