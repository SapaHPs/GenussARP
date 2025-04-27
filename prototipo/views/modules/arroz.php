<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Arroz</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/arroz-blanco-taza-madera_1220-5982.jpg" alt="Imagen de Arroz">
            <p class="category">Categoría: Cereales</p>
            <p class="description">El arroz es un alimento básico en muchas culturas, conocido por ser una excelente fuente de energía.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El arroz es un cereal que se cultiva principalmente en climas cálidos y se consume en todo el mundo. Existen diversas variedades, como el arroz blanco, integral y basmati, cada una con características y beneficios únicos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>130 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>28g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Índice Glucémico Alto:</strong> El arroz blanco tiene un índice glucémico alto, lo que puede afectar los niveles de azúcar en sangre.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> El arroz es una excelente fuente de carbohidratos que proporciona energía rápida.</p>
            </div>
            <div class="description">
                <p><strong>Versatilidad:</strong> Se puede utilizar en una variedad de platillos, desde guisos hasta postres.</p>
            </div>
            <div class="description">
                <p><strong>Libre de Gluten:</strong> Es una buena opción para personas con enfermedad celíaca o sensibilidad al gluten.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartArroz"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartArroz"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartArroz"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartArroz"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Arroz</h2>
            <p>El arroz se puede utilizar en numerosos platillos, como risotto, paella y ensaladas. También es una base ideal para platos de curry.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El arroz es uno de los cultivos más importantes del mundo, siendo un alimento básico para más de la mitad de la población mundial.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar arroz, elige variedades integrales para obtener más nutrientes y considera su origen para asegurarte de que sea de calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El arroz combina bien con verduras, legumbres y proteínas magras, creando platos balanceados y nutritivos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al arroz incluyen quinoa, cuscús y arroz de coliflor, que ofrecen perfiles nutricionales distintos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de arroz requiere grandes cantidades de agua, por lo que se están desarrollando prácticas más sostenibles para reducir su huella hídrica.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Arroz = document.getElementById('macronutrientChartArroz').getContext('2d');
        const macronutrientChartArroz = new Chart(ctx1Arroz, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [28, 2.7, 0.3],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Arroz = document.getElementById('micronutrientChartArroz').getContext('2d');
        const micronutrientChartArroz = new Chart(ctx2Arroz, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.7, 10, 0.2],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Arroz = document.getElementById('caloriesChartArroz').getContext('2d');
        const caloriesChartArroz = new Chart(ctx3Arroz, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [130, 132, 128, 130, 131],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Arroz = document.getElementById('comparisonChartArroz').getContext('2d');
        const comparisonChartArroz = new Chart(ctx4Arroz, {
            type: 'bar',
            data: {
                labels: ['Arroz', 'Quinoa', 'Cuscús'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [130, 120, 150],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
