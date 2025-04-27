<?php
require_once "models/conexion.php";


class MvcModelmenu extends Conexion
{

	public function consultarMenus()
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM menu");

			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}

	public function EditarMenu($pro, $fib, $alm, $ima, $id, $car)
{
    $stmt = Conexion::conectar()->prepare("
        UPDATE `menu` 
        SET `Proteina` = :pro,
            `Fibra` = :fib,
            `Almidones` = :alm,
            `Carbohidratos` = :car,
            `img_menu` = :ima
        WHERE `id` = :id    
    ");
    $stmt->bindParam(':pro', $pro, PDO::PARAM_STR);
    $stmt->bindParam(':fib', $fib, PDO::PARAM_STR);
    $stmt->bindParam(':alm', $alm, PDO::PARAM_STR);
    $stmt->bindParam(':car', $car, PDO::PARAM_STR);
    $stmt->bindParam(':ima', $ima, PDO::PARAM_STR);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();

    // Obtener el número de filas afectadas
    $rows = $stmt->rowCount();

    $stmt = null;

    // Retornar el número de filas afectadas
    return $rows;
}

public function ConsultarAlimento()
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM alimentos");

			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}

	public function EliminarMenu($id)
	{
		$stmt=Conexion::conectar()->prepare("DELETE FROM `menu` WHERE `id`=:id");

		$stmt->bindParam(':id', $id, PDO::PARAM_INT);


			$stmt->execute();
 			return $stmt->fetch();
			$stmt->close();
	}

	public function CrearMenu($pro, $fib, $alm, $ima, $car)
{
    // Preparar la consulta SQL para insertar datos en la tabla `menu`
    $stmt = Conexion::conectar()->prepare("
        INSERT INTO `menu`(`img_menu`, `Proteina`, `Fibra`, `Carbohidratos`, `Almidones`) 
        VALUES (:ima, :pro, :fib, :car, :alm)
    ");

    // Asignar los valores a los parámetros
    $stmt->bindParam(':pro', $pro, PDO::PARAM_STR);
    $stmt->bindParam(':fib', $fib, PDO::PARAM_STR);
    $stmt->bindParam(':alm', $alm, PDO::PARAM_STR);
    $stmt->bindParam(':car', $car, PDO::PARAM_STR);
    $stmt->bindParam(':ima', $ima, PDO::PARAM_STR);

    $stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
}


}
?>