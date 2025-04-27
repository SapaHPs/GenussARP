<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/ARP.png" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    
    <script defer src="https://app.embed.im/show.js"></script>
    <title>Navegación</title>
</head>
<body>
<?php include "views/modules/preloader.php"; ?> 

    <header>
        <?php include "modules/header.php"; ?> 
    </header>    

    <main style="
    margin: 100px;">
        <?php
        if (isset($_GET['action'])) {
            $obj = new MvcController();
            $obj->enlacePaginasController();
        } else {
            include "modules/inicio.php";
        }
        ?> 
    </main>

    <footer>
        <?php include "modules/footer.php"; ?> 
    </footer>
</body>
</html>