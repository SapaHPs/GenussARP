<title>cuentas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <br><br><br><br><br><br>

    
    <div class="info">
Menus
    </div>
    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Proteina</th>
                    <th>Fibra</th>
                    <th>Carbohidratos</th>
                    <th>Almidones</th>
                    <th>Imagen del menu</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cons = new MvcControllerMenus();
                $cons->ConsultarMenus();
                ?>
            </tbody>
        </table>
    </div>
    <div class="info">
    <button><a href="admin.php?action=CreaMenu">Crear menus</a></button> 
    </div>
