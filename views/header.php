
	<?php
if (isset($_SESSION['rol'])) {
	
	


		if ($_SESSION['rol']=="Coordinador") {
			include "views/modules/navegacionCoordinador.php";
		}elseif ($_SESSION['rol']=="Auxiliar") {
			include "views/modules/navegacionAuxiliar.php";
		}
       
}else {

	include "views/modules/navegacion.php";
}   
    ?> 


