<?php
require_once "models/conexion.php";


class MvcModelEstudiantes extends Conexion
{
    public function consultarCursos()
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM Cursos");

			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}

    public function consultarCursosExp($id)
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM cursos WHERE id =:id");

        $stmt->bindParam(':id', $id);
			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}

    public function ConsultarEstudiantes($id)
	{
		$stmt=Conexion::conectar()->prepare("SELECT * FROM estudiantes WHERE curso_id =:id");

        $stmt->bindParam(':id', $id);
			$stmt->execute();
 			return $stmt->fetchAll();
			$stmt->close();
	}
}