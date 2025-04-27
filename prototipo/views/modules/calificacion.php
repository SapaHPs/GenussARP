<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menús - Alimentación Escolar</title>
    <style>
        /* Estilos para el cuadro de menú y el efecto de desenfoque */
        .menu {
            width: 300px;
            height: 200px;
            margin: 20px;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease;
        }

        .menu img {
            width: 100%;
            height: 100%;
            transition: all 0.3s ease;
        }

        .menu:hover img {
            filter: blur(5px);
        }

        .menu-info {
            position: absolute;
            bottom: 0;
            background: rgba(0, 0, 0, 0.7);
            color: white;
            width: 100%;
            text-align: center;
            transition: all 0.3s ease;
        }

        .menu:hover .menu-info {
            height: 100%;
        }
    </style>
</head>
<body>
    <h1>Menús Disponibles</h1>
    <div class="menu-container">
            <div class="menu">
                <img src="images/<?php echo $menu['imagen']; ?>" alt="<?php echo $menu['nombre']; ?>">
                <div class="menu-info">
                    <h3><?php echo $menu['nombre']; ?></h3>
                    <p><?php echo $menu['descripcion']; ?></p>
                    <a href="index.php?action=showReviews&menuId=<?php echo $menu['id']; ?>">Calificar</a>
                </div>
            </div>
    </div>
</body>
</html>
