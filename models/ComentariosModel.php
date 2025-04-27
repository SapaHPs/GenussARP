<?php
require_once 'Conexion.php';

class ComentariosModel extends Conexion {
    
    public function obtenerComentarios($respuesta_a = null) {
        $sql = "SELECT * FROM comentarios WHERE respuesta_a " . ($respuesta_a ? "= $respuesta_a" : "IS NULL") . " AND estado = 'Publicado' ORDER BY fecha_publicacion DESC";
    }

    public function crearComentario($id_usuario, $texto, $respuesta_a = null) {
        $sql = "INSERT INTO comentarios (id_usuario, texto, respuesta_a) VALUES (?, ?, ?)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("isi", $id_usuario, $texto, $respuesta_a);
        return $stmt->execute();
    }

    public function editarComentario($id_comentario, $texto) {
        $sql = "UPDATE comentarios SET texto = ? WHERE id_comentario = ? AND TIMESTAMPDIFF(MINUTE, fecha_publicacion, NOW()) <= 10";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("si", $texto, $id_comentario);
        return $stmt->execute();
    }

    public function eliminarComentario($id_comentario) {
        $sql = "UPDATE comentarios SET estado = 'Eliminado' WHERE id_comentario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id_comentario);
        return $stmt->execute();
    }

    public function darLike($id_comentario) {
        $sql = "UPDATE comentarios SET likes = likes + 1 WHERE id_comentario = ?";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bind_param("i", $id_comentario);
        return $stmt->execute();
    }
}
?>
