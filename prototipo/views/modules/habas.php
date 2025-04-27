<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Habas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/habas-verdes-frescas-bandeja-plateada_23-2148512123.jpg" alt="Imagen de Habas">
            <p class="category">Categoría: Legumbres</p>
            <p class="description">Las habas son legumbres nutritivas y versátiles, ideales para diversas preparaciones culinarias.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las habas son semillas de plantas que pertenecen a la familia de las leguminosas. Su sabor es suave y ligeramente dulce, y son comúnmente utilizadas en ensaladas, guisos y purés. Son una fuente excelente de proteína vegetal y fibra.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>88 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>7.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>14.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>5.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Gases y Distensión Abdominal:</strong> El consumo excesivo de habas puede provocar gases en algunas personas debido a su alto contenido de fibra.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las habas y experimentar reacciones adversas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Proteínas:</strong> Son una excelente fuente de proteínas vegetales, ideales para dietas vegetarianas y veganas.</p>
            </div>
            <div class="description">
                <p><strong>Mejoran la Digestión:</strong> Su alto contenido de fibra ayuda a mantener una buena salud digestiva.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartHabas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartHabas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartHabas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartHabas"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Habas</h2>
            <p>Las habas se pueden utilizar en ensaladas, guisos, o incluso en purés. Su sabor combina bien con hierbas frescas y otros vegetales.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las habas han sido cultivadas desde la antigüedad y han sido un alimento básico en diversas culturas alrededor del mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige habas frescas y verdes, que sean firmes al tacto y sin manchas oscuras.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina habas con zanahorias y cebollas para un guiso nutritivo y sabroso.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las lentejas y los guisantes son excelentes alternativas a las habas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de habas tiene un bajo impacto ambiental y contribuye a mejorar la salud del suelo.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Habas = document.getElementById('macronutrientChartHabas').getContext('2d');
        const macronutrientChartHabas = new Chart(ctx1Habas, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.5, 14.3, 7.6],
                    backgroundColor: ['#66ff66', '#ffcc99', '#ff6699'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Habas = document.getElementById('micronutrientChartHabas').getContext('2d');
        const micronutrientChartHabas = new Chart(ctx2Habas, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [12, 25, 2.7],
                    backgroundColor: 'rgba(102, 255, 102, 0.2)',
                    borderColor: 'rgba(102, 255, 102, 1)',
                    pointBackgroundColor: 'rgba(102, 255, 102, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Habas = document.getElementById('caloriesChartHabas').getContext('2d');
        const caloriesChartHabas = new Chart(ctx3Habas, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [88, 90, 87, 86, 88],
                    backgroundColor: 'rgba(102, 255, 102, 0.2)',
                    borderColor: 'rgba(102, 255, 102, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Habas = document.getElementById('comparisonChartHabas').getContext('2d');
        const comparisonChartHabas = new Chart(ctx4Habas, {
            type: 'bar',
            data: {
                labels: ['Habas', 'Frijoles', 'Guisantes'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [88, 127, 81],
                    backgroundColor: ['#66ff66', '#ffcc99', '#ff6699'],
                }]
            },
        });
    </script>
</body>
</html>
