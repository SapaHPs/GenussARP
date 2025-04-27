<?php
    class MvcControllerMenus{
        public function consTodosmenu()
        {
        $cons = new MvcModelmenu();
            if ($clie=$cons->consTodosModelmenu()) {
                
            
            $i=1;
            Foreach ($clie as $row => $item) {
                echo "<div class='item' onclick='cargar(this)'>
                        <div class='contenedor-foto'>
                            <img src=".$item["img_menu"]." alt=".$item['descripcion'].">
                            <p  class='descripcion'>".$item["nombre"]."</p>
                            
                        </div>
                    </div>";
                    
                    if ($i%3==0) {
                        echo '</div><div class="fila" >';

                    }
                    $i++;
            }

            }
        }
        public function consTodosTmenu()
    {
          
        $cue = new MvcModelmenu();
        $cons = $cue->consultarMenus();

        if ($cons) {
            foreach ($cons as $item) { 
                echo "<tr>";
                    echo "<td>" . $item['id'] . "</td>";
                    echo "<td>" . $item['nombre'] . "</td>";
                    echo "<td>" . $item['descripcion'] . "</td>";
                    echo "<td>" . $item['img_menu'] . "</td>";
                    echo "<td><a href='admin.php?action=editproducto&prod_codigo=".$item["prod_codigo"]."'>editar</td>";
                    echo "<td><a href='admin.php?action=elimproducto&prod_codigo=".$item["prod_codigo"]."'>Del</a></td>";
    
                    echo "</tr>";
            }
        } else {
            echo "Error";
        }
    }

    public function crearmenu($nom,$des,$img)
{
        if(isset($nom))	
        {
         // Crear una nueva instancia de tu modelo
		$modelo = new MvcModelmenu();
	
		// Llamar a la función creprod() para insertar los datos en la base de datos
		$resultado = $modelo->crearmenu($nom,$des,$img);
	
		// Comprobar el resultado
		if ($resultado == "success") {
			echo "Producto creado con éxito.";
		} else {
			echo "Hubo un error al crear el producto.";
		}   
        }

		
	}
}



        
?>    