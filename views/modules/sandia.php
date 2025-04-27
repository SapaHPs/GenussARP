<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Sandía</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/e4/a5/7e/e4a57eb16e32d3d6d39eeb34828bd210.jpg" alt="Imagen de Sandía">
            <p class="category">Categoría: Fruta</p>
            <p class="description">La sandía es una fruta refrescante y jugosa, rica en agua y nutrientes esenciales, perfecta para combatir el calor.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La sandía es una fruta tropical, dulce y refrescante, que se disfruta en verano. Su alto contenido de agua la convierte en una opción ideal para mantenerse hidratado.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>30 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>7.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
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
                <p><strong>Azúcares:</strong> Aunque es natural, su alto contenido de azúcares puede ser problemático para personas con diabetes si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Digestión:</strong> Puede causar malestar estomacal en algunas personas si se consume en grandes cantidades debido a su alto contenido de agua.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Hidratación:</strong> Gracias a su alto contenido de agua, es excelente para mantener el cuerpo hidratado.</p>
            </div>
            <div class="description">
                <p><strong>Vitaminas y Minerales:</strong> Contiene vitaminas A, C y varios minerales, que son esenciales para la salud general.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> La sandía es rica en licopeno, un antioxidante que puede ayudar a reducir el riesgo de ciertos tipos de cáncer.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSandia"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSandia"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSandia"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSandia"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Sandía</h2>
            <p>La sandía se puede disfrutar sola, en ensaladas o como batido refrescante. También se puede utilizar para hacer salsas o sorbetes.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La sandía es en realidad una fruta y no una verdura, y pertenece a la misma familia que los pepinos y las calabazas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar sandía, busca aquellas que sean pesadas para su tamaño y que tengan una cáscara firme y sin manchas. Un golpe suave debería sonar hueco.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La sandía combina bien con queso feta, menta fresca, y puede añadirse a ensaladas o platos de frutas mixtas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la sandía incluyen otras frutas refrescantes como el melón y la piña, que también son ricas en agua y sabor.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de sandía puede tener un impacto ambiental si no se gestiona adecuadamente, especialmente en el uso del agua y los pesticidas. Es importante optar por productos locales y orgánicos cuando sea posible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Sandia = document.getElementById('macronutrientChartSandia').getContext('2d');
        const macronutrientChartSandia = new Chart(ctx1Sandia, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [7.6, 0.6, 0.2],
                    backgroundColor: ['#ff9999', '#99cc99', '#ffcc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Sandia = document.getElementById('micronutrientChartSandia').getContext('2d');
        const micronutrientChartSandia = new Chart(ctx2Sandia, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.6, 11, 0.2],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Sandia = document.getElementById('caloriesChartSandia').getContext('2d');
        const caloriesChartSandia = new Chart(ctx3Sandia, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [30, 32, 28, 29, 30],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Sandia = document.getElementById('comparisonChartSandia').getContext('2d');
        const comparisonChartSandia = new Chart(ctx4Sandia, {
            type: 'bar',
            data: {
                labels: ['Sandía', 'Melón', 'Piña'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [30, 34, 50],
                    backgroundColor: ['#ff9999', '#99ccff', '#ffcc99'],
                }]
            },
        });
    </script>
</body>
</html>
