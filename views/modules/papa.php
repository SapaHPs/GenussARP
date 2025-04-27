<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Papa</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/enabled/564x/47/20/dd/4720ddc8b21b7c05f92fe8f80566ed08.jpg" alt="Imagen de Papa">
            <p class="category">Categoría: Vegetal</p>
            <p class="description">La papa es un tubérculo muy versátil, usado en una gran variedad de platillos y rica en nutrientes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La papa es un tubérculo de forma irregular, de piel marrón o amarilla y pulpa blanca o amarilla. Es un alimento básico en muchas culturas y puede prepararse de diversas maneras, incluyendo hervida, frita o al horno.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>77 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>17g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.2g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Índice Glucémico:</strong> Las papas tienen un índice glucémico relativamente alto, lo que puede afectar el control del azúcar en sangre en algunas personas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> Las papas son ricas en carbohidratos complejos, proporcionando una fuente rápida de energía.</p>
            </div>
            <div class="description">
                <p><strong>Ricas en Nutrientes:</strong> Contienen vitamina C, vitamina B6, potasio y fibra, que son importantes para la salud general.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> La fibra en las papas ayuda a promover la salud digestiva y a regular el tránsito intestinal.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPapa"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPapa"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPapa"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPapa"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Papa</h2>
            <p>La papa es perfecta para hacer purés, frituras, ensaladas y guisos. También se puede utilizar como acompañamiento en diversas comidas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La papa es originaria de los Andes y fue domesticada por las civilizaciones precolombinas hace más de 7,000 años.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir papas, busca ejemplares firmes, sin manchas ni brotes, y con piel lisa.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las papas se pueden combinar con hierbas frescas como el romero y el perejil, además de verduras asadas y proteínas magras.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la papa incluyen batatas, yuca y otros tubérculos que ofrecen beneficios nutricionales variados.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de papa puede ser sostenible si se cultiva en sistemas agrícolas responsables, evitando el uso excesivo de pesticidas y fertilizantes.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Papa = document.getElementById('macronutrientChartPapa').getContext('2d');
        const macronutrientChartPapa = new Chart(ctx1Papa, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [17, 2, 0.1],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Papa = document.getElementById('micronutrientChartPapa').getContext('2d');
        const micronutrientChartPapa = new Chart(ctx2Papa, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2, 12, 0.8],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Papa = document.getElementById('caloriesChartPapa').getContext('2d');
        const caloriesChartPapa = new Chart(ctx3Papa, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [77, 79, 75, 76, 77],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Papa = document.getElementById('comparisonChartPapa').getContext('2d');
        const comparisonChartPapa = new Chart(ctx4Papa, {
            type: 'bar',
            data: {
                labels: ['Papa', 'Batata', 'Zanahoria'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [77, 86, 41],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
