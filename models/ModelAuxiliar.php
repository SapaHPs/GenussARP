<?php
require_once "models/conexion.php";


class MvcModelAuxiliar extends Conexion
{
    public function consultarUsuario()
    {
        // Preparar la consulta SQL con una sentencia preparada
        $stmt = Conexion::conectar()->prepare("
            SELECT *
            FROM `usuarios`
            WHERE `Estado` = 'activo'
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

    public function consultarPerfil($id)
    {
        // Preparar la consulta SQL con una sentencia preparada
        $stmt = Conexion::conectar()->prepare("
            SELECT *
            FROM `usuarios`
            WHERE `id_usuario` = $id
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

    public function MeditarALL($con, $nom, $id)
    {
        $stmt = Conexion::conectar()->prepare("
            UPDATE `usuarios` 
            SET `nombre`= :nom,
                `contraseña`= :con
            WHERE `id_usuario`= :id    
        ");
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':con', $con, PDO::PARAM_STR);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    
        // Obtener el número de filas afectadas
        $rows = $stmt->rowCount();
    
        $stmt = null;
    
        // Retornar el número de filas afectadas
        return $rows;
    }

    public function consultarCursos()
    {
        // Preparar la consulta SQL con una sentencia preparada
        $stmt = Conexion::conectar()->prepare("
            SELECT *
            FROM `cursos`
            
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