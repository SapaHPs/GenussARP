<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Frijol Negro</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/frijoles-negros_144627-1450.jpg" alt="Imagen de Frijol Negro">
            <p class="category">Categoría: Legumbres</p>
            <p class="description">El frijol negro es una legumbre rica en nutrientes y ampliamente utilizada en la cocina de muchas culturas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El frijol negro es conocido por su alto contenido en proteínas, fibra y antioxidantes. Es un ingrediente clave en platos como los burritos, ensaladas y guisos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>339 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>21.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>62.4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.9g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>16.6g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden tener alergia a las legumbres, incluidos los frijoles negros.</p>
            </div>
            <div class="description">
                <p><strong>Flatulencias:</strong> El consumo de frijoles puede causar gases en algunas personas debido a su contenido de fibra y oligosacáridos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricos en Nutrientes:</strong> Los frijoles negros son una excelente fuente de proteínas, fibra, hierro y antioxidantes.</p>
            </div>
            <div class="description">
                <p><strong>Control de Azúcar en Sangre:</strong> Su alto contenido en fibra puede ayudar a estabilizar los niveles de azúcar en sangre.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> La fibra en los frijoles negros promueve una buena salud digestiva.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartBlackBean"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartBlackBean"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartBlackBean"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartBlackBean"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Frijol Negro</h2>
            <p>Los frijoles negros son perfectos para preparar ensaladas, guisos, sopas y hamburguesas vegetarianas. También se pueden utilizar como acompañamiento o en burritos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los frijoles negros son un alimento básico en muchas culturas latinoamericanas y son conocidos por su valor nutritivo y versatilidad en la cocina.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir frijoles negros, busca aquellos que sean firmes y de color negro brillante. Prefiere los frijoles enlatados sin conservantes o los secos de buena calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los frijoles negros combinan bien con arroz, aguacate, pimientos, y especias como el comino y el cilantro.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes frijoles negros, puedes usar frijoles pintos o garbanzos en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de frijoles negros puede ser sostenible, especialmente cuando se cultivan de forma orgánica. Sin embargo, es importante considerar las prácticas agrícolas utilizadas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1BlackBean = document.getElementById('macronutrientChartBlackBean').getContext('2d');
        const macronutrientChartBlackBean = new Chart(ctx1BlackBean, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [21.6, 62.4, 0.9],
                    backgroundColor: ['#4caf50', '#2196f3', '#ff9800'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2BlackBean = document.getElementById('micronutrientChartBlackBean').getContext('2d');
        const micronutrientChartBlackBean = new Chart(ctx2BlackBean, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Magnesio', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.1, 70, 130],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3BlackBean = document.getElementById('caloriesChartBlackBean').getContext('2d');
        const caloriesChartBlackBean = new Chart(ctx3BlackBean, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [339, 340, 338, 340, 341],
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4BlackBean = document.getElementById('comparisonChartBlackBean').getContext('2d');
        const comparisonChartBlackBean = new Chart(ctx4BlackBean, {
            type: 'bar',
            data: {
                labels: ['Frijol Negro', 'Frijol Pinto', 'Lenteja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [339, 347, 116],
                    backgroundColor: ['#9c27b0', '#3f51b5', '#ff5722'],
                    borderColor: ['#9c27b0', '#3f51b5', '#ff5722'],
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
