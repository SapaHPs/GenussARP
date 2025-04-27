<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Avellanas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/avellanas-tostadas-pieza-frontal-madera_23-2148777204.jpg" alt="Imagen de Avellanas">
            <p class="category">Categoría: Frutos Secos</p>
            <p class="description">Las avellanas son frutos secos ricos en grasas saludables, antioxidantes y nutrientes esenciales. Son conocidas por su sabor y su uso en repostería y como snack.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las avellanas son semillas comestibles que provienen del avellano. Se pueden consumir solas o usar en diversas recetas, desde pasteles hasta cremas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>628 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>14.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>16.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>60.8g</td>
                </tr>
                <tr>
                    <td>Calcio</td>
                    <td>114mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Calorías:</strong> Debido a su alto contenido calórico, es importante consumirlas con moderación.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los frutos secos, incluidas las avellanas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Nutrientes:</strong> Las avellanas son una excelente fuente de vitamina E, fibra y antioxidantes.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> El consumo regular de avellanas puede contribuir a la salud del corazón.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartAvellanas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartAvellanas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartAvellanas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartAvellanas"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Avellanas</h2>
            <p>Las avellanas se pueden utilizar en la preparación de cremas, tartas y como topping para ensaladas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las avellanas son uno de los principales ingredientes de la famosa crema de chocolate y avellanas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca avellanas frescas y, si es posible, sin sal para aprovechar al máximo sus beneficios.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina avellanas con frutas secas o úsalas en batidos para aumentar el valor nutricional.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si eres alérgico a los frutos secos, puedes optar por semillas como las de girasol o calabaza como alternativa.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Elige avellanas cultivadas de manera sostenible para contribuir a la protección del medio ambiente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Avellanas = document.getElementById('macronutrientChartAvellanas').getContext('2d');
        const macronutrientChartAvellanas = new Chart(ctx1Avellanas, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [60.8, 16.7, 14.1],
                    backgroundColor: ['#2ecc71', '#e74c3c', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Avellanas = document.getElementById('micronutrientChartAvellanas').getContext('2d');
        const micronutrientChartAvellanas = new Chart(ctx2Avellanas, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Magnesio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [114, 163, 90],
                    backgroundColor: 'rgba(155, 89, 182, 0.2)', // Color de fondo
                    borderColor: 'rgba(155, 89, 182, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(155, 89, 182, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Avellanas = document.getElementById('caloriesChartAvellanas').getContext('2d');
        const caloriesChartAvellanas = new Chart(ctx3Avellanas, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [628, 630, 625, 627, 631],
                    backgroundColor: 'rgba(241, 196, 15, 0.2)', // Color de fondo
                    borderColor: 'rgba(241, 196, 15, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Avellanas = document.getElementById('comparisonChartAvellanas').getContext('2d');
        const comparisonChartAvellanas = new Chart(ctx4Avellanas, {
            type: 'bar',
            data: {
                labels: ['Avellanas', 'Almendras', 'Nueces'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [628, 576, 654],
                    backgroundColor: ['#e67e22', '#2980b9', '#c0392b'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
