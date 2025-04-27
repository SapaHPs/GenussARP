<?php

class MvcControllerComentarios {
    private $modelo;

    public function __construct() {
        $this->modelo = new ComentariosModel();
    }

    public function insertarComentario() {
        if (isset($_POST['comentar']) && !empty($_POST['comentario'])) {
            $usuario = $_SESSION['id_usuario'] ?? 0;
            return $this->modelo->insertarComentario($_POST['comentario'], $usuario);
        }
        return null;
    }

    public function insertarRespuesta() {
        if (isset($_POST['reply']) && !empty($_POST['comentario'])) {
            $usuario = $_SESSION['id_usuario'] ?? 0;
            return $this->modelo->insertarRespuesta($_POST['comentario'], $usuario, $_POST['reply_id']);
        }
        return null;
    }

    public function eliminarComentario() {
        if (isset($_POST['eliminar']) && isset($_POST['comentario_id'])) {
            $usuario = $_SESSION['id_usuario'] ?? 0;
            return $this->modelo->eliminarComentario($_POST['comentario_id'], $usuario);
        }
        return null;
    }

    public function consultarComentarios() {
        return $this->modelo->obtenerComentarios();
    }

    public function consultarRespuestas($reply_id) {
        return $this->modelo->obtenerRespuestas($reply_id);
    }

    public function editarComentario() {
        if (isset($_GET['edit_id'])) {
            $comentario = $this->modelo->obtenerComentario($_GET['edit_id']);
            
            // Verificar que el usuario sea el propietario del comentario
            if ($comentario) {
                $usuarioComentario = $comentario['usuario'];
                if ($usuarioComentario !== $_SESSION['id_usuario']) {
                    die("No tienes permiso para editar este comentario.");
                }
                return $comentario;
            }
        }
        return null;
    }

    public function actualizarComentario() {
        if (isset($_POST['editar']) && !empty($_POST['comentario']) && isset($_POST['comentario_id'])) {
            $usuario = $_SESSION['id_usuario'] ?? 0;
            return $this->modelo->editarComentario($_POST['comentario_id'], $_POST['comentario'], $usuario);
        }
        return null;
    }
}
?>
