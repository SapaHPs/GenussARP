<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Leche</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/69/6e/64/696e64b641143d4210ec5a07213170b2.jpg" alt="Imagen de Leche">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">La leche es un líquido nutritivo producido por las glándulas mamarias de los mamíferos, rica en nutrientes esenciales como proteínas, grasas, vitaminas y minerales.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La leche es un alimento básico en muchas culturas, utilizada tanto en su forma líquida como en productos derivados como quesos, yogures y helados.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>61 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>3.3g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>4.8g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>3.25g</td>
                </tr>
                <tr>
                    <td>Calcio</td>
                    <td>120mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Intolerancia a la Lactosa:</strong> Las personas con intolerancia a la lactosa pueden experimentar malestar gastrointestinal al consumir leche.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las proteínas de la leche.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Calcio:</strong> La leche es una excelente fuente de calcio, esencial para la salud ósea.</p>
            </div>
            <div class="description">
                <p><strong>Hidratación:</strong> Ayuda a mantener la hidratación, especialmente en climas cálidos.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartLeche"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartLeche"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartLeche"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartLeche"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Leche</h2>
            <p>La leche se puede usar en una variedad de recetas, como batidos, salsas, y productos de repostería.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La leche se consume en diversas formas alrededor del mundo, incluyendo leche cruda, pasteurizada y en polvo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Opta por leche fresca y, si es posible, orgánica para garantizar su calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina la leche con frutas para un batido nutritivo o con cereales para un desayuno equilibrado.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las leches vegetales, como la leche de almendra o la leche de avena, son buenas alternativas para quienes no consumen productos lácteos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Considera elegir leche de productores que sigan prácticas sostenibles y respetuosas con el medio ambiente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Leche = document.getElementById('macronutrientChartLeche').getContext('2d');
        const macronutrientChartLeche = new Chart(ctx1Leche, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [3.25, 4.8, 3.3],
                    backgroundColor: ['#e74c3c', '#f39c12', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Leche = document.getElementById('micronutrientChartLeche').getContext('2d');
        const micronutrientChartLeche = new Chart(ctx2Leche, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Fósforo', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [120, 95, 150],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(46, 204, 113, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Leche = document.getElementById('caloriesChartLeche').getContext('2d');
        const caloriesChartLeche = new Chart(ctx3Leche, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [61, 62, 60, 61, 63],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Leche = document.getElementById('comparisonChartLeche').getContext('2d');
        const comparisonChartLeche = new Chart(ctx4Leche, {
            type: 'bar',
            data: {
                labels: ['Leche', 'Yogur', 'Queso'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [61, 59, 402],
                    backgroundColor: ['#34495e', '#8e44ad', '#f39c12'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
