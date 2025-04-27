<?php
require_once "models/conexion.php";


class MvcModelmenu extends Conexion
{
    public function consTodosModelmenu()
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM menu");

			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}

	public function consultarMenus()
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM menu");

			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}

	public function crearmenu($nom,$des,$img)
	{
		$stmt=Conexion::conectar()->prepare("INSERT INTO `menu`(`nombre`, `descripcion`, `img_menu`) VALUES ('$nom','$des','$img')");

			$stmt->execute();
 			return $stmt->fetch();
			$stmt->close();
	}
}
?>