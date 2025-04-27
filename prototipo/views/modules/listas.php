<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Estudiantes</title>
    <style>
        :root {
            --bg-color: #1e1e1e;
            --text-color: #e0e0e0;
            --accent-color: #9b59b6;
            --secondary-bg: #2c2c2c;
            --highlight-color: #3498db;
            --gray: #a0a0a0;
            --border-color: #9b59b6;
        }
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-color);
        }
        h1 {
            text-align: center;
            color: var(--highlight-color);
            font-size: 2.5rem;
        }
        .info {
            text-align: center;
            margin-bottom: 1.5rem;
        }
        .student-list {
            background-color: var(--secondary-bg);
            border-radius: 0.5rem;
            padding: 1rem;
            max-width: 90%;
            margin: auto;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);

        }
        .course-info {
            text-align: center;
            margin: 1.5rem 0;
        }
        .student {
            padding: 0.5rem;
            border-bottom: 1px dashed var(--border-color);
        }
        .student:last-child {
            border-bottom: none;
        }
        .student:hover {
            background-color: var(--accent-color);
            color: var(--bg-color);
            transition: background-color 0.3s, color 0.3s;
        }
        @media (max-width: 600px) {
            h1 {
                font-size: 2rem;
            }
            .student-list {
                padding: 0.5rem;
            }
        }
        @media (min-width: 601px) and (max-width: 900px) {
            h1 {
                font-size: 2.2rem;
            }
        }
        @media (min-width: 901px) {
            h1 {
                font-size: 2.5rem;
            }
            .student-list {
                max-width: 600px;
            }
        }
    </style>
</head>
<body>
    <br><br><br>
    <form id="cursoForm" method="POST" action="">
        <select id="miSelect" name="miSelect">
            <option value="">Seleccione un curso</option>
            <?php
                $cons = new MvcControllerEstudiantes();
                $cons->ConsultarCursos();
            ?>
        </select>
    </form>
    <script>
        document.getElementById('miSelect').addEventListener('change', function() {
            document.getElementById('cursoForm').submit();
        });

        document.getElementById('cursoForm').addEventListener('submit', function() {
            showList(); // Llama a showList después de que se envía el formulario
        });

        function showList() {
            const selectedCourse = document.getElementById("miSelect").value;
            const lists = document.querySelectorAll(".student-list");
            const infos = document.querySelectorAll(".course-info");

            lists.forEach(list => {
                list.style.display = "none"; // Ocultar todas las listas
            });
            
            infos.forEach(info => {
                info.style.display = "none"; // Ocultar toda la info del curso
            });
            
            if (selectedCourse) {
                document.getElementById(`list-${selectedCourse}`).style.display = "block"; // Mostrar la lista seleccionada
                const selectedInfo = Array.from(infos).find(info => info.getAttribute("data-course") === selectedCourse);
                if (selectedInfo) {
                    selectedInfo.style.display = "block"; // Mostrar la info del curso seleccionada
                }
            }
        }

        // Inicializar la lista del curso 405 como visible si es necesario
        if (document.getElementById("miSelect").value === "405") {
            showList();
        }
    </script>

    <div id="student-lists">
        <div class="course-info" data-course="405">
            <?php
                if (isset($_POST['miSelect']) && $_POST['miSelect'] !== '') {
                    $id = $_POST['miSelect'];
                    $cons = new MvcControllerEstudiantes();
                    $cons->ConsultarTutor($id);
                }
            ?>
        </div>
        <div class="student-list" id="list-405">
            <?php
                if (isset($_POST['miSelect']) && $_POST['miSelect'] !== '') {
                    $id = $_POST['miSelect'];
                    $cons = new MvcControllerEstudiantes();
                    $cons->ConsultarEstudiantes($id);
                } else {
                    echo "No se encontraron estudiantes";
                }
            ?>
        </div>
        <div id="student-lists">
        <div class="course-info" data-course="405">
                <div class='student'>
                    <a></a>
                </div>
        </div>
    </div>
    <br><br><br><br>
</body>
</html>
