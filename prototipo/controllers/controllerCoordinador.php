<?php
class MvcControllerCoordinador
{
    public function ConsultarCuentasCoordinador()
    {
        $cue = new MvcModelCoordinador();
        $cons = $cue->consultarUsuario();

        if ($cons) {
            foreach ($cons as $item) { 
                echo "<tr>";
                    echo "<td>" . $item['id_usuario'] . "</td>";
                    echo "<td>" . $item['nombre'] . "</td>";
                    echo "<td>" . $item['rol'] . "</td>";
                    echo "<td>" . $item['estado'] . "</td>";
                    echo "<td><a href='admin.php?action=Editar&mivarialble=".$item['id_usuario']. "'>editar</a></td>";
                    echo "<td><a href='admin.php?action=Eliminar&mivarialble=".$item['id_usuario']. "'>eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Error";
        }
    }

    public function Perfil()
    {
        $id=$_SESSION["id_usuario"];    
        $cue = new MvcModelAuxiliar($id);
        $cons = $cue->consultarPerfil($id);

        if ($cons) {
            foreach ($cons as $item) { 
                echo "<tr>";
                    echo "<td>" . $item['id_usuario'] . "</td>";
                    echo "<td>" . $item['nombre'] . "</td>";
                    echo "<td>" . $item['rol'] . "</td>";
                    echo "<td>" . $item['contraseña'] . "</td>";
                    echo "<td>" . $item['estado'] . "</td>";
                    echo "<td><a href='admin.php?action=Editar&mivarialble=".$item['id_usuario']. "'>editar</a></td>";
                    echo "</tr>";
            }
        } else {
            echo "Error";
        }
    }

    public function editarALL($con, $nom, $id)
    {


        $cue = new MvcModelAuxiliar();
        $cons = $cue->MeditarALL($con, $nom, $id);
                
    }
    public function ConsultarCursos()
    {
        $cue = new MvcModelAuxiliar();
        $cons = $cue->ConsultarCursos();

        if ($cons) {
            foreach ($cons as $item) { 
                echo "<tr>";
                    echo "<td>" . $item['id'] . "</td>";
                    echo "<td>" . $item['nombre'] . "</td>";
                    echo "<td>" . $item['jornada'] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "Error";
        }
    }

    public function Crearuser($con, $nom, $rol)
    {


        $cue = new MvcModelCoordinador();
        $cons = $cue->Crearuser($con, $nom, $rol);
                
    }

    public function elim($id)
    {


        $cue = new MvcModelCoordinador();
        $cons = $cue->elim($id);
                
    }
}
?>