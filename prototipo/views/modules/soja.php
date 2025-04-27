<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Soja</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/granos-soja-aislados-fondo-blanco_1205-2342.jpg" alt="Imagen de Soja">
            <p class="category">Categoría: Legumbres</p>
            <p class="description">La soja es una legumbre rica en proteínas y una excelente fuente de nutrientes esenciales.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La soja es una planta leguminosa originaria de Asia, que se ha convertido en un alimento básico en muchas culturas. Es utilizada para producir tofu, leche de soja, y diversos productos alimenticios ricos en proteínas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>446 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>36g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>30g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>20g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>9g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas Digestivos:</strong> Algunas personas pueden experimentar gases o hinchazón al consumir soja.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Proteínas:</strong> La soja es una de las pocas fuentes vegetales que proporciona proteínas completas.</p>
            </div>
            <div class="description">
                <p><strong>Corazón Saludable:</strong> Contiene grasas saludables que pueden contribuir a la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> La soja es rica en antioxidantes que pueden ayudar a combatir el daño celular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSoja"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSoja"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSoja"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSoja"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Soja</h2>
            <p>La soja se puede usar en sopas, ensaladas, y como base para hamburguesas vegetarianas. También es un ingrediente popular en la cocina asiática.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La soja es considerada un superalimento debido a su alto contenido en proteínas y su versatilidad en la cocina.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar soja, busca granos de soja orgánicos y sin procesar para maximizar sus beneficios nutricionales.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La soja combina bien con verduras, granos enteros y especias, creando platos nutritivos y sabrosos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la soja incluyen legumbres como los garbanzos y las lentejas, que también son ricas en proteínas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de soja puede tener un impacto ambiental significativo, por lo que es importante elegir soja de fuentes sostenibles.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Soja = document.getElementById('macronutrientChartSoja').getContext('2d');
        const macronutrientChartSoja = new Chart(ctx1Soja, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [30, 36, 20],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Soja = document.getElementById('micronutrientChartSoja').getContext('2d');
        const micronutrientChartSoja = new Chart(ctx2Soja, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [36, 277, 15.7],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Soja = document.getElementById('caloriesChartSoja').getContext('2d');
        const caloriesChartSoja = new Chart(ctx3Soja, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [446, 448, 450, 445, 447],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Soja = document.getElementById('comparisonChartSoja').getContext('2d');
        const comparisonChartSoja = new Chart(ctx4Soja, {
            type: 'bar',
            data: {
                labels: ['Soja', 'Lentejas', 'Garbanzos'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [446, 116, 164],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
