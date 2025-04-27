<?php

// Incluir el archivo de conexión a la base de datos
require_once 'models/conexion.php';

// Crear una instancia de la clase Conexion
$conec = new Conexion();
// Establecer la conexión
$conectar = $conec->conectar();

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['id_usuario'])) {
    die("Debe iniciar sesión para acceder a esta página.");
}

$id_usuario = $_SESSION['id_usuario'];

// Verificar si la conexión se estableció correctamente
if (!$conectar) {
    die("Error de conexión a la base de datos.");
}

// Procesar el formulario de calificación
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $alimento_nombre = $_POST['alimento_id']; // Nombre del alimento seleccionado
    $calificacion = $_POST['calificacion'];
    $comentario = $_POST['comentario'];

    // Insertar la calificación usando el nombre del alimento
    $sql = "INSERT INTO calificaciones (alimento_id, usuario_id, calificacion, comentario) VALUES (?, ?, ?, ?)";
    $stmt = $conectar->prepare($sql);
    $stmt->bindParam(1, $alimento_nombre, PDO::PARAM_STR);
    $stmt->bindParam(2, $id_usuario, PDO::PARAM_INT);
    $stmt->bindParam(3, $calificacion, PDO::PARAM_INT);
    $stmt->bindParam(4, $comentario, PDO::PARAM_STR);

    if ($stmt->execute()) {
        echo "<p>Calificación registrada exitosamente para " . htmlspecialchars($alimento_nombre) . ".</p>";
    } else {
        echo "<p>Error al registrar la calificación: " . $stmt->errorInfo()[2] . "</p>";
    }
}

// Obtener la lista de alimentos
$sql_alimentos = "SELECT nombre FROM alimentos ORDER BY nombre";
$stmt_alimentos = $conectar->query($sql_alimentos);

// Obtener los comentarios recientes
$sql_comentarios = "SELECT c.alimento_id, c.calificacion, c.comentario, c.fecha_creacion, u.nombre AS nombre_usuario 
                    FROM calificaciones c 
                    JOIN usuarios u ON c.usuario_id = u.id_usuario 
                    ORDER BY c.fecha_creacion DESC";
$stmt_comentarios = $conectar->query($sql_comentarios);

// Obtener el alimento_id de la URL si se proporciona
$alimento_nombre_seleccionado = isset($_GET['alimento_id']) ? $_GET['alimento_id'] : '';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Calificaciones de Alimentos</title>

    <style>
        .star-rating {
            unicode-bidi: bidi-override;
            direction: rtl;
        }
        .star-rating > input {
            display: none;
        }
        .star-rating > label:before {
            content: "\2605";
            margin: 5px;
            font-size: 1.5em;
        }
        .star-rating > input:checked ~ label:before,
        .star-rating > label:hover:before,
        .star-rating > label:hover ~ label:before {
            color: gold;
        }
        textarea {
        width: 100%;
        padding: 12px 15px;
        margin-top: 15px;
        border: 2px solid var(--input-border); /* Borde por defecto */
        border-radius: 10px; /* Bordes redondeados */
        background-color: var(--textarea-bg);
        color: var(--text-color);
        font-size: 1em;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2); /* Sombra sutil */
        resize: vertical; /* Permitir ajuste vertical */
        transition: background-color 0.3s ease, box-shadow 0.3s ease, border 0.3s ease; /* Añadir transición para el borde */
        outline: none; /* Eliminar el borde de enfoque */
        }

        textarea:focus {
        background-color: #333333; /* Fondo más claro al hacer foco */
        box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.25); /* Sombra más pronunciada */
        border: 2px solid #9b59b6; /* Borde morado brillante al hacer foco */
        }
    </style>
</head>
<body>
    <form method="POST">
        <label for="alimento_id">Seleccione un alimento:</label>
        <select name="alimento_id" required>
            <option value="">-- Seleccione un alimento --</option>
            <?php while ($row = $stmt_alimentos->fetch(PDO::FETCH_ASSOC)): ?>
                <option value="<?php echo htmlspecialchars($row['nombre']); ?>" <?php echo ($row['nombre'] === $alimento_nombre_seleccionado) ? 'selected' : ''; ?>>
                    <?php echo htmlspecialchars($row['nombre']); ?>
                </option>
            <?php endwhile; ?>
        </select>
        <br><br>
        
        <div class="star-rating">
            <input type="radio" id="star5" name="calificacion" value="5" required/>
            <label for="star5" title="5 estrellas"></label>
            <input type="radio" id="star4" name="calificacion" value="4"/>
            <label for="star4" title="4 estrellas"></label>
            <input type="radio" id="star3" name="calificacion" value="3"/>
            <label for="star3" title="3 estrellas"></label>
            <input type="radio" id="star2" name="calificacion" value="2"/>
            <label for="star2" title="2 estrellas"></label>
            <input type="radio" id="star1" name="calificacion" value="1"/>
            <label for="star1" title="1 estrella"></label>
        </div>
        <br><br>
        
        <label for="comentario">Comentario:</label><br>
        <textarea name="comentario" rows="4" cols="50" required></textarea>
        <br><br>
        
        <input type="submit" value="Enviar Calificación">
    </form>

    <h2>Comentarios Recientes</h2>
    <?php while ($comentario = $stmt_comentarios->fetch(PDO::FETCH_ASSOC)): ?>
        <div>
            <p><strong><?php echo htmlspecialchars($comentario['nombre_usuario']); ?></strong> calificó 
               <strong><?php echo htmlspecialchars($comentario['alimento_id']); ?></strong> con 
               <?php echo htmlspecialchars($comentario['calificacion']); ?> estrellas</p>
            <p>Comentario: <?php echo htmlspecialchars($comentario['comentario']); ?></p>
            <p>Fecha: <?php echo htmlspecialchars($comentario['fecha_creacion']); ?></p>
        </div>
        <hr>
    <?php endwhile; ?>
</body>
</html>