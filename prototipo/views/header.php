
	<?php
if (isset($_SESSION['rol'])) {
	
	


		if ($_SESSION['rol']=="Administrador") {
			include "views/modules/navegacionAdmin.php";
		}elseif ($_SESSION['rol']=="Cliente") {
			include "views/modules/navegacionClie.php";
		}
       
}else {

	include "views/modules/navegacion.php";
}   
    ?> 


