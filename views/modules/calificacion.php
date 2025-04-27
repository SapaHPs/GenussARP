<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alimentos</title>
    <style>
        :root {
            --bg-color: #1e1e1e;
            --text-color: #e0e0e0;
            --accent-color: #9b59b6;
            --secondary-bg: #2c2c2c;
            --highlight-color: #9b59b6;
            --gray: #a0a0a0;
        }

        body {
            background-color: var(--bg-color);
            color: var(--text-color);
            font-family: Arial, sans-serif;
        }

        .products {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            padding: 20px;
        }

        .product {
            background-color: var(--secondary-bg);
            border-radius: 10px;
            padding: 15px;
            position: relative;
            color: var(--text-color);
        }

        .product img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 5px;
            margin-bottom: 10px;
        }

        .product h3 {
            margin: 0 0 5px 0;
            font-size: 16px;
        }

        .product p {
            margin: 0;
            color: var(--gray);
            font-size: 14px;
        }

        .product .price {
            font-weight: bold;
            color: var(--accent-color);
            margin-top: 5px;
        }

        .add-to-cart {
            background-color: var(--accent-color);
            color: var(--text-color);
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
        }

        .add-to-cart:hover {
            background-color: #8e44ad;
        }

        .rating {
            color: #ffc107;
            font-size: 18px;
            margin-top: 5px;
        }

        .rate-btn {
            background-color: var(--accent-color);
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            margin-top: 10px;
            text-decoration: none;
            display: inline-block;
        }

        .rate-btn:hover {
            background-color: #8e44ad;
        }
    </style>
</head>
<body>
<br><br><br><br>
    <div class="products">
        <?php
        // Incluimos el archivo donde se encuentra la clase de conexión
        require_once 'models/Conexion.php';

        // Creamos la conexión usando el modelo
        $conec = new Conexion();
        $conexion = $conec->conectar();

        try {
            // Consulta corregida de alimentos y sus calificaciones promedio
            $query = "SELECT a.id, a.nombre, a.descripcion, a.imagen, 
                             COALESCE(AVG(c.calificacion), 0) as promedio 
                      FROM alimentos a 
                      LEFT JOIN calificaciones c ON a.nombre = c.alimento_id 
                      GROUP BY a.id, a.nombre, a.descripcion, a.imagen";

            // Preparamos y ejecutamos la consulta
            $stmt = $conexion->prepare($query);
            $stmt->execute();

            // Obtenemos los resultados
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Iteramos sobre los resultados para mostrar los productos
            foreach ($result as $row) {
                $promedio = number_format($row['promedio'], 1);
                echo "<div class='product'>";
                echo "<img src='{$row['imagen']}' alt='{$row['nombre']}'>";
                echo "<h3>{$row['nombre']}</h3>";
                echo "<p>{$row['descripcion']}</p>";
                echo "<div class='rating'>★ {$promedio}</div>";
                echo "<a href='admin.php?action=calificar&alimento_id=" . urlencode($row['nombre']) . "' class='rate-btn'>Calificar</a>";
                echo "</div>";
            }
            
        } catch (PDOException $e) {
            // En caso de error, mostramos el mensaje
            echo "Error en la consulta: " . $e->getMessage();
        }
        ?>
    </div>
</body>
</html>