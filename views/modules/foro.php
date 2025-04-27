<?php
ini_set('error_reporting', 0);

$controller = new MvcControllerComentarios();
$controller->insertarComentario();
$controller->insertarRespuesta();
$controller->eliminarComentario();
$controller->actualizarComentario();

$comentarios = $controller->consultarComentarios();
$comentarioEditado = $controller->editarComentario();
?>

<!doctype html>
<html lang="es-ES">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foro</title>
    <link rel="stylesheet" type="text/css" href="css/foro.css">
    <script>
        function validarFormulario() {
            var comentario = document.forms["form1"]["comentario"].value;
            if (comentario.trim() === "") {
                alert("No se pueden dejar espacios vacíos en el comentario.");
                return false;
            }
            return true;
        }
    </script>
</head>
<body>
<br><br><br><br>
<div id="L">
    <form name="form1" method="post" action="" onsubmit="return validarFormulario()">
        <center>
            <p>
                <textarea name="comentario" id="textarea"><?php echo htmlspecialchars($comentarioEditado['comentario'] ?? ''); ?></textarea>
            </p>
            <input type="hidden" name="comentario_id" value="<?php echo isset($_GET['edit_id']) ? htmlspecialchars($_GET['edit_id']) : ''; ?>">
            <input type="hidden" name="reply_id" value="<?php echo isset($_GET['id']) ? htmlspecialchars($_GET['id']) : ''; ?>">
            <p>
                <input type="submit" name="<?php echo isset($_GET['edit_id']) ? 'editar' : (isset($_GET['id']) ? 'reply' : 'comentar'); ?>" class="submit-button" value="<?php echo isset($_GET['edit_id']) ? 'Actualizar' : 'Comentar'; ?>">
            </p>
        </center>
    </form>

    <br>
    <div id="container">
        <ul id="comments">
            <?php foreach ($comentarios as $row): ?>
                <li class="cmmnt">
                    <div class="cmmnt-content">
                        <header>
                            <a href="#" class="userlink"><?php echo htmlspecialchars($row['usuario_nombre']); ?></a> - <span class="pubdate"><?php echo htmlspecialchars($row['fecha']); ?></span>
                        </header>
                        <p><?php echo htmlspecialchars($row['comentario']); ?></p>
                        <span>
                            <a href="admin.php?action=foro&user=<?php echo urlencode($row['usuario_nombre']); ?>&id=<?php echo $row['id']; ?>">Responder</a><br>
                            <?php if ($row['usuario'] == $_SESSION['id_usuario']): ?>
                                <a href="admin.php?action=foro&edit_id=<?php echo $row['id']; ?>">Editar</a><br><br>
                                <!-- Botón de Eliminar -->
                                <form method="post" style="border: none; margin: 0; padding: 0; background: none;">
                                    <input type="hidden" name="comentario_id" value="<?php echo $row['id']; ?>">
                                    <input type="submit" name="eliminar" class="btn-delete" value="Eliminar">
                                </form>
                            <?php endif; ?>
                        </span>
                    </div>

                    <ul class='replies'>
                        <?php
                        $respuestas = $controller->consultarRespuestas($row['id']);
                        foreach ($respuestas as $rep): ?>
                            <li class="cmmnt">
                                <div class="cmmnt-content">
                                    <header>
                                        <a href="#" class="userlink"><?php echo htmlspecialchars($rep['usuario_nombre']); ?></a> - <span class="pubdate"><?php echo htmlspecialchars($rep['fecha']); ?></span>
                                    </header>
                                    <p><?php echo htmlspecialchars($rep['comentario']); ?></p>
                                </div>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
</body>
</html>
