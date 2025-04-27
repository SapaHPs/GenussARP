<?php

require_once 'controllers/ComentariosController.php';
$controller = new ComentariosController();
$comentarios = $controller->obtenerComentarios();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Foro de Comentarios</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <h1>Foro de Comentarios</h1>

    <form method="POST" action="index.php?action=crearComentario">
        <textarea name="texto" required></textarea>
        <button type="submit">Publicar</button>
    </form>

    <div id="comentarios">
        <?php while ($row = $comentarios->fetch_assoc()): ?>
            <div class="comentario">
                <p><strong><?php echo $row['texto']; ?></strong></p>
                <p>Publicado el <?php echo $row['fecha_publicacion']; ?> - Likes: <?php echo $row['likes']; ?></p>
                <form method="POST" action="index.php?action=darlike">
                    <input type="hidden" name="id_comentario" value="<?php echo $row['id_comentario']; ?>">
                    <button type="submit">Dar Like</button>
                </form>
                <form method="POST" action="index.php?action=eliminarComentario">
                    <input type="hidden" name="id_comentario" value="<?php echo $row['id_comentario']; ?>">
                    <button type="submit">Eliminar</button>
                </form>
                <form method="POST" action="index.php?action=editarComentario">
                    <input type="hidden" name="id_comentario" value="<?php echo $row['id_comentario']; ?>">
                    <textarea name="texto" required></textarea>
                    <button type="submit">Editar</button>
                </form>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>
