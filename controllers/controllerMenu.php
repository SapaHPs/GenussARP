<?php
class MvcControllerMenus
{
    public function ConsultarMenus()
    {
        $cue = new MvcModelmenu();
        $cons = $cue->consultarMenus();

        if (isset($cons)) {
            foreach ($cons as $item) { 
                echo "<tr>";
                    echo "<td>" . $item['id'] . "</td>";
                    echo "<td>" . $item['Proteina'] . "</td>";
                    echo "<td>" . $item['Fibra'] . "</td>";
                    echo "<td>" . $item['Carbohidratos'] . "</td>";
                    echo "<td>" . $item['Almidones'] . "</td>";
                    echo "<td><img src=" . $item['img_menu'] . " style='width: 100px;'></img></td>";
                    echo "<td><a href='admin.php?action=EditarMenu&mivarialble=".$item['id']. "'>editar</a></td>";
                    echo "<td><a href='admin.php?action=EliminarMenu&mivarialble=".$item['id']. "'>eliminar</a></td>";
                echo "</tr>";
            }
        } else {
            echo "Error";
        }
    }
    public function EditarMenu($pro, $fib, $alm, $ima, $id, $car)
    {
        $cue = new MvcModelmenu();
        $cue->EditarMenu($pro, $fib, $alm, $ima, $id, $car);
    }
  
    public function ConsultarAlimento()
    {
        $cue = new MvcModelmenu();
        if ($clie=$cue->ConsultarAlimento()) {
           
            Foreach ($clie as $row => $item) {
                echo "<option value=".$item["nombre"].">".$item["nombre"]." </option>";
                        

     }
}
    }

    public function EliminarMenu($id)
    {
        $cue = new MvcModelmenu();
        $cue->EliminarMenu($id);
    }

    public function CrearMenu($pro, $fib, $alm, $ima, $car)
    {
        $cue = new MvcModelmenu();
        $cue->CrearMenu($pro, $fib, $alm, $ima, $car);
    }

    public function Consultamenus()
    {
        $cue = new MvcModelmenu();
        if ($clie=$cue->ConsultarMenus()) {
           
            Foreach ($clie as $row => $item) {
                echo "<option value=".$item["id"].">".$item["id"]." </option>";
                        

     }
}
    }

    
}    
?>