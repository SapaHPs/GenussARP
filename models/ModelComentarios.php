<?php
require_once 'models/Conexion.php';

class ComentariosModel {
    private $db;

    public function __construct() {
        $this->db = new Conexion();
    }

    public function insertarComentario($comentario, $usuario) {
        try {
            $stmt = $this->db->conectar()->prepare("INSERT INTO comentarios (comentario, usuario, fecha, reply) VALUES (:comentario, :usuario, NOW(), 0)");
            $stmt->execute([':comentario' => $comentario, ':usuario' => $usuario]);
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function insertarRespuesta($comentario, $usuario, $reply_id) {
        try {
            $stmt = $this->db->conectar()->prepare("INSERT INTO comentarios (comentario, usuario, fecha, reply) VALUES (:comentario, :usuario, NOW(), :reply)");
            $stmt->execute([':comentario' => $comentario, ':usuario' => $usuario, ':reply' => $reply_id]);
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function obtenerComentarios() {
        try {
            $stmt = $this->db->conectar()->query("SELECT c.*, u.nombre AS usuario_nombre FROM comentarios c 
                                                   INNER JOIN usuarios u ON c.usuario = u.id_usuario 
                                                   WHERE reply = 0 ORDER BY c.id DESC");
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function obtenerRespuestas($reply_id) {
        try {
            $stmt = $this->db->conectar()->prepare("SELECT c.*, u.nombre AS usuario_nombre FROM comentarios c 
                                                      INNER JOIN usuarios u ON c.usuario = u.id_usuario 
                                                      WHERE reply = :reply ORDER BY c.id DESC");
            $stmt->execute([':reply' => $reply_id]);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function eliminarComentario($id, $usuario) {
        try {
            // Solo se elimina si el usuario es el propietario del comentario
            $stmt = $this->db->conectar()->prepare("DELETE FROM comentarios WHERE id = :id AND usuario = :usuario");
            $stmt->execute([':id' => $id, ':usuario' => $usuario]);
            return $stmt->rowCount() > 0; // Retorna verdadero si se eliminó
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function obtenerComentario($id) {
        try {
            $stmt = $this->db->conectar()->prepare("SELECT comentario, usuario FROM comentarios WHERE id = :id");
            $stmt->execute([':id' => $id]);
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }

    public function editarComentario($id, $comentario, $usuario) {
        try {
            $stmt = $this->db->conectar()->prepare("UPDATE comentarios SET comentario = :comentario WHERE id = :id AND usuario = :usuario");
            $stmt->execute([':comentario' => $comentario, ':id' => $id, ':usuario' => $usuario]);
            return true;
        } catch (PDOException $e) {
            return "Error: " . $e->getMessage();
        }
    }
}
?>
