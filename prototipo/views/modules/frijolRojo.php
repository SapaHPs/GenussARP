<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Frijol Rojo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/frijoles-rojos_144627-1202.jpg" alt="Imagen de Frijol Rojo">
            <p class="category">Categoría: Legumbres</p>
            <p class="description">El frijol rojo es una legumbre rica en nutrientes y versátil en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El frijol rojo es conocido por su alto contenido en proteínas, fibra y antioxidantes. Se utiliza en diversas recetas, desde sopas hasta guisos y ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>337 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>23.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>60.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.8g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>25.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las legumbres, incluidos los frijoles rojos.</p>
            </div>
            <div class="description">
                <p><strong>Flatulencias:</strong> El consumo de frijoles puede causar gases en algunas personas debido a su contenido de fibra y oligosacáridos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricos en Nutrientes:</strong> Los frijoles rojos son una excelente fuente de proteínas, fibra, hierro y antioxidantes.</p>
            </div>
            <div class="description">
                <p><strong>Control de Azúcar en Sangre:</strong> Su alto contenido en fibra puede ayudar a estabilizar los niveles de azúcar en sangre.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> La fibra en los frijoles rojos promueve una buena salud digestiva.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRedBean"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRedBean"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRedBean"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRedBean"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Frijol Rojo</h2>
            <p>Los frijoles rojos son ideales para preparar chili, guisos, ensaladas y platos de arroz. También se pueden utilizar en hamburguesas vegetarianas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los frijoles rojos son un alimento básico en muchas culturas latinoamericanas y son conocidos por su valor nutritivo y versatilidad en la cocina.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir frijoles rojos, busca aquellos que sean firmes y de color rojo brillante. Prefiere los frijoles enlatados sin conservantes o los secos de buena calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los frijoles rojos combinan bien con arroz, aguacate, maíz y especias como el comino y el cilantro.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes frijoles rojos, puedes usar frijoles negros o frijoles pintos en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de frijoles rojos puede ser sostenible, especialmente cuando se cultivan de forma orgánica. Es importante considerar las prácticas agrícolas utilizadas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1RedBean = document.getElementById('macronutrientChartRedBean').getContext('2d');
        const macronutrientChartRedBean = new Chart(ctx1RedBean, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [23.4, 60.3, 0.8],
                    backgroundColor: ['#ff5722', '#ff9800', '#4caf50'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2RedBean = document.getElementById('micronutrientChartRedBean').getContext('2d');
        const micronutrientChartRedBean = new Chart(ctx2RedBean, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Magnesio', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.9, 70, 130],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    pointBackgroundColor: 'rgba(54, 162, 235, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3RedBean = document.getElementById('caloriesChartRedBean').getContext('2d');
        const caloriesChartRedBean = new Chart(ctx3RedBean, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [337, 338, 336, 339, 340],
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4RedBean = document.getElementById('comparisonChartRedBean').getContext('2d');
        const comparisonChartRedBean = new Chart(ctx4RedBean, {
            type: 'bar',
            data: {
                labels: ['Frijol Rojo', 'Frijol Negro', 'Lenteja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [337, 339, 116],
                    backgroundColor: ['#f44336', '#9c27b0', '#ff5722'],
                    borderColor: ['#f44336', '#9c27b0', '#ff5722'],
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
