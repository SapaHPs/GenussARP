<?php
require_once "models/conexion.php";

class MvcModelUsuario extends Conexion
{
    public function consultarUsuario($usuario, $clave)
    {
        $stmt = Conexion::conectar()->prepare("CALL Ingreso(:usuario, :clave)");

        $stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
        $stmt->bindParam(':clave', $clave, PDO::PARAM_STR);

        $stmt->execute();
 		return $stmt->fetch();
		$stmt->close();
    }
}
?>