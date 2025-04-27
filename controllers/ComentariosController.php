<?php
require_once 'models/ComentariosModel.php';

class ComentariosController {
    private $modelo;

    public function __construct() {
        $this->modelo = new ComentariosModel();
    }

    public function obtenerComentarios() {
        return $this->modelo->obtenerComentarios();
    }

    public function crearComentario() {
        if (isset($_POST['texto'])) {
            $id_usuario = $_SESSION['id_usuario']; // Asegúrate de que el ID del usuario esté en la sesión
            $texto = $_POST['texto'];
            $respuesta_a = isset($_POST['respuesta_a']) ? $_POST['respuesta_a'] : null;
            $this->modelo->crearComentario($id_usuario, $texto, $respuesta_a);
            header('Location: index.php'); // Redirigir después de crear el comentario
        }
    }

    public function editarComentario() {
        if (isset($_POST['id_comentario']) && isset($_POST['texto'])) {
            $id_comentario = $_POST['id_comentario'];
            $texto = $_POST['texto'];
            $this->modelo->editarComentario($id_comentario, $texto);
            header('Location: index.php'); // Redirigir después de editar
        }
    }

    public function eliminarComentario() {
        if (isset($_POST['id_comentario'])) {
            $id_comentario = $_POST['id_comentario'];
            $this->modelo->eliminarComentario($id_comentario);
            header('Location: index.php'); // Redirigir después de eliminar
        }
    }

    public function darLike() {
        if (isset($_POST['id_comentario'])) {
            $id_comentario = $_POST['id_comentario'];
            $this->modelo->darLike($id_comentario);
            header('Location: index.php'); // Redirigir después de dar like
        }
    }
}
?>
