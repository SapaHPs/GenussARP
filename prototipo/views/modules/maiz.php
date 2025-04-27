<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Maíz</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/maiz_144627-1319.jpg" alt="Imagen de Maíz">
            <p class="category">Categoría: Cereales</p>
            <p class="description">El maíz es un alimento versátil y nutritivo, rico en carbohidratos y fibra, ideal para diversas preparaciones culinarias.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El maíz es uno de los cultivos más importantes a nivel mundial y se utiliza en una variedad de productos alimenticios, desde tortillas hasta cereales.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>86 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>3.2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>19g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto Índice Glucémico:</strong> Puede afectar los niveles de azúcar en sangre en personas diabéticas.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al maíz y sus derivados.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> Los carbohidratos en el maíz proporcionan energía rápida y sostenida.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Antioxidantes:</strong> Contiene antioxidantes que ayudan a proteger las células del daño.</p>
            </div>
            <div class="description">
                <p><strong>Promueve la Salud Digestiva:</strong> La fibra ayuda en la digestión y previene el estreñimiento.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCorn"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCorn"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCorn"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCorn"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Maíz</h2>
            <p>El maíz se puede usar en ensaladas, tortillas, sopas, y guisos. Prueba elote asado o una ensalada de maíz fresco.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El maíz es originario de América y ha sido cultivado por más de 9,000 años. Es un alimento básico en muchas culturas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca mazorcas firmes y amarillas con granos brillantes. Los granos deben estar bien pegados y no secos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina maíz con frijoles y aguacate para una comida nutritiva y deliciosa.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes maíz, puedes usar arroz o quinoa como fuente de carbohidratos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El maíz tiene un impacto ambiental moderado, pero su cultivo intensivo puede afectar el suelo y los ecosistemas si no se maneja adecuadamente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Corn = document.getElementById('macronutrientChartCorn').getContext('2d');
        const macronutrientChartCorn = new Chart(ctx1Corn, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [3.2, 19, 1.2],
                    backgroundColor: ['#f9d74d', '#ff9800', '#4caf50'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Corn = document.getElementById('micronutrientChartCorn').getContext('2d');
        const micronutrientChartCorn = new Chart(ctx2Corn, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Fósforo', 'Magnesio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [187, 89, 37],
                    backgroundColor: 'rgba(249, 215, 77, 0.2)',
                    borderColor: 'rgba(249, 215, 77, 1)',
                    pointBackgroundColor: 'rgba(249, 215, 77, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Corn = document.getElementById('caloriesChartCorn').getContext('2d');
        const caloriesChartCorn = new Chart(ctx3Corn, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [86, 90, 88, 87, 92],
                    backgroundColor: 'rgba(249, 215, 77, 0.2)',
                    borderColor: 'rgba(249, 215, 77, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Corn = document.getElementById('comparisonChartCorn').getContext('2d');
        const comparisonChartCorn = new Chart(ctx4Corn, {
            type: 'bar',
            data: {
                labels: ['Maíz', 'Arroz', 'Quinoa'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [86, 130, 120],
                    backgroundColor: ['#f9d74d', '#ff9800', '#4caf50'],
                    borderColor: ['#f9d74d', '#ff9800', '#4caf50'],
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
