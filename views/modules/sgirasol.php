<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Semillas de Girasol</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/4b/c0/8a/4bc08a57cbc5f92b071cd549db3d1603.jpg" alt="Imagen de Semillas de Girasol">
            <p class="category">Categoría: Semillas</p>
            <p class="description">Las semillas de girasol son nutritivas y versátiles, perfectas para snacks o como complemento en ensaladas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las semillas de girasol son las semillas de la planta Helianthus annuus, y son una fuente rica en nutrientes y antioxidantes. Se pueden consumir solas, en mezclas de frutos secos, o como ingrediente en diversas preparaciones culinarias.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>584 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>20.8g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>20g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>51.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>8.6g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Calorías Altas:</strong> Debido a su alto contenido calórico, es recomendable consumirlas con moderación.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las semillas de girasol y experimentar reacciones adversas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Nutrientes:</strong> Las semillas de girasol son una excelente fuente de vitamina E y minerales como magnesio y selenio.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contienen compuestos antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSemillasGirasol"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSemillasGirasol"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSemillasGirasol"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSemillasGirasol"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Semillas de Girasol</h2>
            <p>Las semillas de girasol son perfectas para agregar a ensaladas, batidos, o incluso como topping en yogur.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las semillas de girasol son el snack favorito en muchas culturas y se utilizan en la fabricación de aceites y mantequillas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige semillas de girasol que estén frescas y sin cáscara. Opta por opciones sin sal o tostadas para mantener los beneficios nutricionales.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina semillas de girasol con frutos secos, frutas deshidratadas y yogur para un snack saludable.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las nueces y almendras son excelentes alternativas a las semillas de girasol, proporcionando nutrientes similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de girasoles para semillas tiene un impacto ambiental relativamente bajo y es una buena opción para la agricultura sostenible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1SemillasGirasol = document.getElementById('macronutrientChartSemillasGirasol').getContext('2d');
        const macronutrientChartSemillasGirasol = new Chart(ctx1SemillasGirasol, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [51.5, 20, 20.8],
                    backgroundColor: ['#ffcc99', '#ff6699', '#66ff66'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2SemillasGirasol = document.getElementById('micronutrientChartSemillasGirasol').getContext('2d');
        const micronutrientChartSemillasGirasol = new Chart(ctx2SemillasGirasol, {
            type: 'radar',
            data: {
                labels: ['Vitamina E', 'Magnesio', 'Selenio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [35.17, 325, 53],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3SemillasGirasol = document.getElementById('caloriesChartSemillasGirasol').getContext('2d');
        const caloriesChartSemillasGirasol = new Chart(ctx3SemillasGirasol, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [584, 590, 580, 585, 584],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4SemillasGirasol = document.getElementById('comparisonChartSemillasGirasol').getContext('2d');
        const comparisonChartSemillasGirasol = new Chart(ctx4SemillasGirasol, {
            type: 'bar',
            data: {
                labels: ['Semillas de Girasol', 'Almendras', 'Nueces'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [584, 576, 654],
                    backgroundColor: ['#ffcc99', '#ff6699', '#66ff66'],
                }]
            },
        });
    </script>
