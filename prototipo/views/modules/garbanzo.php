<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Garbanzos</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/garbanzos_144627-1341.jpg" alt="Imagen de Garbanzos">
            <p class="category">Categoría: Legumbres</p>
            <p class="description">Los garbanzos son una legumbre rica en nutrientes, muy versátiles en la cocina y populares en muchas culturas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los garbanzos son conocidos por su alto contenido en proteínas, fibra y minerales. Se utilizan en platos como el hummus, ensaladas y guisos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>164 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>8.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>27.4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>2.6g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>7.6g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los garbanzos.</p>
            </div>
            <div class="description">
                <p><strong>Flatulencias:</strong> Su alto contenido en fibra puede causar gases en algunas personas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricos en Nutrientes:</strong> Los garbanzos son una excelente fuente de proteínas, fibra y vitaminas del grupo B.</p>
            </div>
            <div class="description">
                <p><strong>Control de Azúcar en Sangre:</strong> Su contenido de fibra puede ayudar a regular el azúcar en sangre.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> La fibra en los garbanzos promueve la salud digestiva.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartChickpea"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartChickpea"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartChickpea"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartChickpea"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Garbanzos</h2>
            <p>Los garbanzos son ideales para preparar hummus, ensaladas, guisos y hamburguesas vegetarianas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los garbanzos son una de las legumbres más antiguas cultivadas, con una historia que se remonta a miles de años.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir garbanzos, busca aquellos que sean firmes y de color uniforme. Puedes optar por garbanzos secos o enlatados sin conservantes.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los garbanzos combinan bien con verduras, especias como el comino y ingredientes como el yogur o el tahini.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes garbanzos, puedes usar frijoles o lentejas en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de garbanzos puede ser sostenible, especialmente cuando se cultivan de forma orgánica. Es importante considerar las prácticas agrícolas utilizadas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Chickpea = document.getElementById('macronutrientChartChickpea').getContext('2d');
        const macronutrientChartChickpea = new Chart(ctx1Chickpea, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [8.9, 27.4, 2.6],
                    backgroundColor: ['#4caf50', '#ffeb3b', '#f44336'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Chickpea = document.getElementById('micronutrientChartChickpea').getContext('2d');
        const micronutrientChartChickpea = new Chart(ctx2Chickpea, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Magnesio', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.9, 48, 557],
                    backgroundColor: 'rgba(255, 193, 7, 0.2)',
                    borderColor: 'rgba(255, 193, 7, 1)',
                    pointBackgroundColor: 'rgba(255, 193, 7, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Chickpea = document.getElementById('caloriesChartChickpea').getContext('2d');
        const caloriesChartChickpea = new Chart(ctx3Chickpea, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [164, 165, 163, 166, 167],
                    backgroundColor: 'rgba(76, 175, 80, 0.2)',
                    borderColor: 'rgba(76, 175, 80, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Chickpea = document.getElementById('comparisonChartChickpea').getContext('2d');
        const comparisonChartChickpea = new Chart(ctx4Chickpea, {
            type: 'bar',
            data: {
                labels: ['Garbanzos', 'Frijol Rojo', 'Lenteja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [164, 337, 116],
                    backgroundColor: ['#ffeb3b', '#f44336', '#2196f3'],
                    borderColor: ['#ffeb3b', '#f44336', '#2196f3'],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
