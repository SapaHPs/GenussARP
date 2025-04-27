<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pimiento Rojo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/pimiento-rojo_1203-1361.jpg" alt="Imagen de Pimiento Rojo">
            <p class="category">Categoría: Verdura</p>
            <p class="description">El pimiento rojo es una verdura rica en vitaminas, especialmente vitamina C, ideal para ensaladas y platos asados.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los pimientos rojos son una excelente fuente de antioxidantes y vitaminas, lo que los convierte en un complemento ideal para una dieta saludable. Se pueden consumir crudos, asados o en salsas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>31 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Digestión:</strong> Algunas personas pueden experimentar acidez estomacal o malestar gastrointestinal si consumen pimientos en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Es posible que algunas personas sean alérgicas a los pimientos. Si experimentas reacciones alérgicas, consulta a un médico.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en Vitamina C:</strong> Ayuda a fortalecer el sistema inmunológico y mejora la salud de la piel.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contribuye a combatir el estrés oxidativo en el cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Salud Ocular:</strong> Contiene compuestos que pueden ayudar a proteger la salud ocular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPimientoRojo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPimientoRojo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPimientoRojo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPimientoRojo"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pimiento Rojo</h2>
            <p>Los pimientos rojos son ideales para ensaladas, salteados, o como ingrediente principal en salsas y guisos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El pimiento rojo es una variedad de pimiento que se deja madurar más tiempo en la planta, lo que le da su color brillante y un sabor más dulce.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pimientos rojos, elige aquellos que sean firmes, con una piel brillante y sin manchas. Evita los que tengan arrugas o golpes.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El pimiento rojo combina bien con tomates, cebollas, y puede ser usado en ensaladas o como base para salsas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir pimientos rojos, considera usar pimientos amarillos o verdes como alternativa.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de pimientos rojos puede ser sostenible si se realizan prácticas agrícolas responsables y respetuosas con el medio ambiente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1PimientoRojo = document.getElementById('macronutrientChartPimientoRojo').getContext('2d');
        const macronutrientChartPimientoRojo = new Chart(ctx1PimientoRojo, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1, 6, 0.3],
                    backgroundColor: ['#ff9999', '#ffcc99', '#ffeb99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2PimientoRojo = document.getElementById('micronutrientChartPimientoRojo').getContext('2d');
        const micronutrientChartPimientoRojo = new Chart(ctx2PimientoRojo, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina A', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [127.7, 157, 211],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3PimientoRojo = document.getElementById('caloriesChartPimientoRojo').getContext('2d');
        const caloriesChartPimientoRojo = new Chart(ctx3PimientoRojo, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [31, 32, 30, 31, 31],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4PimientoRojo = document.getElementById('comparisonChartPimientoRojo').getContext('2d');
        const comparisonChartPimientoRojo = new Chart(ctx4PimientoRojo, {
            type: 'bar',
            data: {
                labels: ['Pimiento Rojo', 'Pepino', 'Tomate'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [31, 16, 18],
                    backgroundColor: ['#ff9999', '#99ffcc', '#ffcc99'],
                }]
            },
        });
    </script>
</body>
</html>
