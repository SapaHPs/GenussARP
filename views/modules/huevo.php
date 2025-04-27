<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Huevo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/enabled/564x/ac/b1/54/acb1544ff9d67b719eb91bbeac7aac9f.jpg" alt="Imagen de Huevo">
            <p class="category">Categoría: Proteína</p>
            <p class="description">El huevo es un alimento nutritivo y versátil, considerado una fuente completa de proteínas y nutrientes esenciales.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El huevo es conocido por su alto contenido en proteínas de alta calidad, vitaminas y minerales. Es muy utilizado en diversas preparaciones culinarias.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>155 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>12.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>1.1g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>10.6g</td>
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
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las proteínas del huevo.</p>
            </div>
            <div class="description">
                <p><strong>Colesterol:</strong> El huevo contiene colesterol, y su consumo debe ser moderado en personas con problemas cardiovasculares.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Proteínas:</strong> Proporciona proteínas de alta calidad que son esenciales para la construcción y reparación de tejidos.</p>
            </div>
            <div class="description">
                <p><strong>Vitaminas:</strong> Rico en vitaminas B12 y D, necesarias para la salud del sistema nervioso y la absorción de calcio.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes como la luteína y la zeaxantina, que ayudan a la salud ocular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartEgg"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartEgg"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartEgg"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartEgg"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Huevo</h2>
            <p>Los huevos son ideales para hacer tortillas, revueltos, o como ingrediente en pasteles y otros platillos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los huevos han sido un símbolo de fertilidad y renovación en muchas culturas a lo largo de la historia.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Compra huevos que sean frescos y que tengan la cáscara limpia y sin grietas. Los huevos orgánicos suelen ser de mejor calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los huevos combinan bien con verduras, aguacate, y pan integral.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no consumes huevos, puedes optar por tofu o sustitutos de huevo a base de plantas en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por huevos de producción sostenible y orgánica puede reducir el impacto ambiental de la producción avícola.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Egg = document.getElementById('macronutrientChartEgg').getContext('2d');
        const macronutrientChartEgg = new Chart(ctx1Egg, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [12.6, 1.1, 10.6],
                    backgroundColor: ['#ffeb3b', '#03a9f4', '#f44336'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Egg = document.getElementById('micronutrientChartEgg').getContext('2d');
        const micronutrientChartEgg = new Chart(ctx2Egg, {
            type: 'radar',
            data: {
                labels: ['Vitamina B12', 'Vitamina D', 'Selenio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.0, 37, 22],
                    backgroundColor: 'rgba(255, 235, 59, 0.2)',
                    borderColor: 'rgba(255, 235, 59, 1)',
                    pointBackgroundColor: 'rgba(255, 235, 59, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Egg = document.getElementById('caloriesChartEgg').getContext('2d');
        const caloriesChartEgg = new Chart(ctx3Egg, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [155, 157, 154, 158, 160],
                    backgroundColor: 'rgba(255, 235, 59, 0.2)',
                    borderColor: 'rgba(255, 235, 59, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Egg = document.getElementById('comparisonChartEgg').getContext('2d');
        const comparisonChartEgg = new Chart(ctx4Egg, {
            type: 'bar',
            data: {
                labels: ['Huevo', 'Pechuga de Pollo', 'Tofu'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [155, 165, 76],
                    backgroundColor: ['#ffeb3b', '#03a9f4', '#8bc34a'],
                    borderColor: ['#ffeb3b', '#03a9f4', '#8bc34a'],
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
