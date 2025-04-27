    <title>cuentas</title>
    <link rel="stylesheet" href="css/tabla.css">


    
    <div class="info">
Lista de coordinadores
    </div>
    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cons = new MvcControllerCoordinador();
                $cons->ConsultarCuentasCoordinador();
                ?>
            </tbody>
        </table>
    </div>
    
    <div class="info">
        <br>
        <a href="admin.php?action=crearUsua">Crear nuevo coordinadores</a>
    </div>
    <br>
    <br>
    <br>
    <div class="info">
Lista de Auxiliares
    </div>
    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cons = new MvcControllerCoordinador();
                $cons->ConsultarCuentasCoordinador();
                ?>
            </tbody>
        </table>
    </div>
   
    <div class="info">
        <br>
        <a href="admin.php?action=crearUsua">Crear nuevo Auxiliares</a>
    </div>
    <br>
    <br>
    <br>
    <div class="info">
Lista de Cursos
    </div>
    <div class="student-list">
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Rol</th>
                    <th>Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $cons = new MvcControllerCoordinador();
                $cons->ConsultarCuentasCoordinador();
                ?>
            </tbody>
        </table>
    </div>
    <div class="info">
        <br>
        <a href="admin.php?action=crearUsua">Crear nuevo Cursos</a>
    </div>
