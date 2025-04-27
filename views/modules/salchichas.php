<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Salchichas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/fd/71/1f/fd711f4bae2108cd197e493504fe3b01.jpg" alt="Imagen de Salchichas">
            <p class="category">Categoría: Carnes</p>
            <p class="description">Las salchichas son un tipo de embutido que se elabora a partir de carne picada, grasa y especias. Son muy versátiles y se utilizan en una variedad de platos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las salchichas son productos cárnicos que pueden estar elaboradas con carne de cerdo, res, pollo u otras carnes. Son populares en muchas cocinas del mundo, ya sea a la parrilla, hervidas o como parte de un guiso.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>301 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>12g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>27g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Grasas Saturadas:</strong> El consumo excesivo de salchichas puede contribuir a problemas de salud debido a su alto contenido en grasas saturadas.</p>
            </div>
            <div class="description">
                <p><strong>Alto en Sodio:</strong> Pueden contener niveles elevados de sodio, lo que no es recomendable para personas con hipertensión.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Proteínas:</strong> Son una buena fuente de proteínas que contribuyen al desarrollo muscular.</p>
            </div>
            <div class="description">
                <p><strong>Fácil de Preparar:</strong> Las salchichas son muy versátiles y fáciles de cocinar, lo que las hace convenientes para comidas rápidas.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSalchichas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSalchichas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSalchichas"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSalchichas"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Salchichas</h2>
            <p>Las salchichas son ideales para hacer parrilladas, guisos, pastas, o simplemente acompañadas de pan y salsas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las salchichas tienen una historia que se remonta a siglos atrás, siendo un alimento popular en diversas culturas, desde Europa hasta América Latina.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir salchichas, busca opciones con ingredientes naturales y evita las que contienen conservantes artificiales o alto contenido en sodio.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina las salchichas con verduras a la parrilla, ensaladas frescas o cereales integrales para una comida balanceada.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Considera salchichas de pavo o pollo como alternativas más saludables, que suelen tener menos grasa.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por salchichas de producción sostenible puede ayudar a reducir el impacto ambiental y promover prácticas de cría responsable.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Salchichas = document.getElementById('macronutrientChartSalchichas').getContext('2d');
        const macronutrientChartSalchichas = new Chart(ctx1Salchichas, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.9, 12, 27],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Salchichas = document.getElementById('micronutrientChartSalchichas').getContext('2d');
        const micronutrientChartSalchichas = new Chart(ctx2Salchichas, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Hierro', 'Zinc'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [12, 2.0, 1.5],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Salchichas = document.getElementById('caloriesChartSalchichas').getContext('2d');
        const caloriesChartSalchichas = new Chart(ctx3Salchichas, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [301, 298, 305, 302, 301],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Salchichas = document.getElementById('comparisonChartSalchichas').getContext('2d');
        const comparisonChartSalchichas = new Chart(ctx4Salchichas, {
            type: 'bar',
            data: {
                labels: ['Salchichas', 'Chorizo', 'Bacon'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [301, 455, 541],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ccff99'],
                }]
            },
        });
    </script>
</body>
</html>
