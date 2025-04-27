<?php
require_once "models/conexion.php";

class ReporteModel extends Conexion {
    

    public function Añadirreporte($cur, $idm, $id)
	{
		$stmt=Conexion::conectar()->prepare("INSERT INTO `reportes`(`id`, `fechaEntrega`, `cursoId`, `Id_usuario`, `id_menu`) 
        VALUES (null,NOW(),:cur,:id,:idm)");

        $stmt->bindParam(':cur', $cur, PDO::PARAM_INT);
        $stmt->bindParam(':idm', $idm, PDO::PARAM_INT);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);


			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}  
}
?>
