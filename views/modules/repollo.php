<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Repollo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/45/fd/f7/45fdf76310e9931c2617c9c302969633.jpg" alt="Imagen de Repollo">
            <p class="category">Categoría: Verduras</p>
            <p class="description">El repollo es una verdura crucífera, rica en nutrientes y muy versátil en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El repollo, también conocido como col, es un vegetal de hojas verdes que puede ser consumido crudo en ensaladas o cocido en diversas preparaciones. Es conocido por su bajo contenido calórico y su alto valor nutricional.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>25 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.3g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>5.8g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Gases y Distensión Abdominal:</strong> Puede causar gases en algunas personas, especialmente si se consume en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Puede interferir con ciertos medicamentos anticoagulantes debido a su contenido de vitamina K.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Antioxidantes:</strong> Contiene compuestos antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Apoya la Digestión:</strong> Su alto contenido de fibra ayuda a mantener un sistema digestivo saludable.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRepollo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRepollo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRepollo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRepollo"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Repollo</h2>
            <p>Ideal para preparar ensaladas frescas, guisos o incluso como un relleno para tacos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El repollo se ha cultivado desde hace miles de años y es un alimento básico en muchas culturas alrededor del mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca repollos firmes y pesados, con hojas crujientes y sin manchas marrones.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina repollo con zanahorias y manzanas para una ensalada nutritiva y deliciosa.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las hojas de col rizada y el brócoli son excelentes alternativas al repollo.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de repollo tiene un bajo impacto ambiental, pero es importante elegir productos locales y de temporada.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Repollo = document.getElementById('macronutrientChartRepollo').getContext('2d');
        const macronutrientChartRepollo = new Chart(ctx1Repollo, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.1, 5.8, 1.3],
                    backgroundColor: ['#66ff66', '#ffcc99', '#ff6699'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Repollo = document.getElementById('micronutrientChartRepollo').getContext('2d');
        const micronutrientChartRepollo = new Chart(ctx2Repollo, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Folato'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [80, 90, 61],
                    backgroundColor: 'rgba(102, 255, 102, 0.2)',
                    borderColor: 'rgba(102, 255, 102, 1)',
                    pointBackgroundColor: 'rgba(102, 255, 102, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Repollo = document.getElementById('caloriesChartRepollo').getContext('2d');
        const caloriesChartRepollo = new Chart(ctx3Repollo, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [25, 24, 26, 27, 25],
                    backgroundColor: 'rgba(102, 255, 102, 0.2)',
                    borderColor: 'rgba(102, 255, 102, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Repollo = document.getElementById('comparisonChartRepollo').getContext('2d');
        const comparisonChartRepollo = new Chart(ctx4Repollo, {
            type: 'bar',
            data: {
                labels: ['Repollo', 'Lechuga', 'Espinaca'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [25, 15, 23],
                    backgroundColor: ['#66ff66', '#ffcc99', '#ff6699'],
                }]
            },
        });
    </script>
</body>
</html>
