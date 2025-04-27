<?php
require_once "models/conexion.php";


class MvcModelCoordinador extends Conexion
{
    public function Crearuser($con, $nom, $rol)
	{
		$stmt=Conexion::conectar()->prepare("INSERT INTO `usuarios`(`nombre`, `contraseña`, `rol`, `estado`) VALUES ('$nom','$con','$rol','Activo')");

			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}



	public function elim($id)
{
    $stmt = Conexion::conectar()->prepare("UPDATE `usuarios` SET `estado`='Inactivo' WHERE id_usuario = :id");

    $stmt->bindParam(':id', $id);
    $stmt->execute();

    return $stmt->fetch();

    $stmt->close();
}



public function consultarUsuario()
{
	// Preparar la consulta SQL con una sentencia preparada
	$stmt = Conexion::conectar()->prepare("
		SELECT *
		FROM `usuarios`
		WHERE `Estado` = 'activo'
		AND rol = 'Coordinador'
	");

	// Ejecutar la consulta
	$stmt->execute();

	// Obtener el resultado
	$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

	// Cerrar la consulta y liberar los recursos
	$stmt = null;

	// Retornar el resultado
	return $rows;
}

}
?>