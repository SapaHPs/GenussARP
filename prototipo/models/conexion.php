<?php  
class Conexion{

	public function conectar(){
		$link = new PDO("mysql:host=localhost;dbname=proyectoalmuerzos","root","");
		return $link;
	}
}

$conec = new Conexion();
$conec->conectar();


?>