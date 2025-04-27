<?php

class MvcControllerUsuario
{
    public function ingresar()
    {
        if (isset($_POST['nomUser'])) {
            $usuario = $_POST['nomUser'];
            $clave = $_POST['clave'];

            $ing = new MvcModelUsuario();

            if ($cons = $ing->consultarUsuario($usuario, $clave)) {
                $_SESSION['usuario'] = $cons["nombre"];
                $_SESSION['rol'] = $cons["rol"];
                $_SESSION["id_usuario"] = $cons["id_usuario"];
                $_SESSION["contraseña"] = $cons["contraseña"];
                $_SESSION["estado"] = $cons["estado"];
                echo '<script type="text/javascript">
                      window.location = "admin.php";
                     </script>';
            } else {
                echo "Nombre de usuario o contraseña incorrectos";
                session_destroy();
            }
        }
    }
}


?>
