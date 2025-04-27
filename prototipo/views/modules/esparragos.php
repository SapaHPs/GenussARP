<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Espárragos</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/espárragos_1194-1043.jpg" alt="Imagen de Espárragos">
            <p class="category">Categoría: Vegetales</p>
            <p class="description">Los espárragos son un vegetal de temporada que se destacan por su sabor delicado y su versatilidad en la cocina, siendo una excelente fuente de nutrientes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los espárragos son conocidos por su alto contenido de vitaminas, minerales y antioxidantes. Se pueden disfrutar al vapor, asados, a la parrilla o en ensaladas, lo que los convierte en un alimento versátil y saludable.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>20 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas Digestivos:</strong> Algunas personas pueden experimentar gases o malestar estomacal debido a la alta cantidad de fibra en los espárragos.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Los espárragos son ricos en vitamina K, lo que puede interferir con medicamentos anticoagulantes.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricos en Nutrientes:</strong> Los espárragos son una excelente fuente de vitaminas A, C, E y K, además de ser ricos en antioxidantes.</p>
            </div>
            <div class="description">
                <p><strong>Salud Digestiva:</strong> Su contenido en fibra ayuda a mantener la salud digestiva y a prevenir el estreñimiento.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades Diuréticas:</strong> Los espárragos ayudan a eliminar toxinas del cuerpo gracias a su efecto diurético natural.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartAsparagus"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartAsparagus"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartAsparagus"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartAsparagus"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Espárragos</h2>
            <p>Los espárragos son ideales para asar, añadir a ensaladas, hacer purés o acompañar platos de carne y pescado.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los espárragos han sido cultivados durante más de 2,000 años y se dice que son un símbolo de lujo y sofisticación.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al seleccionar espárragos, elige aquellos que sean firmes, rectos y de color verde brillante, evitando los que estén blandos o arrugados.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los espárragos combinan bien con limón, ajo, aceite de oliva y quesos como el parmesano, realzando su sabor y aportando nutrientes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes espárragos, puedes sustituirlos por judías verdes o brócoli en las recetas que requieren vegetales verdes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de espárragos puede ser sostenible si se utilizan prácticas agrícolas responsables, como la rotación de cultivos y el uso eficiente del agua.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Asparagus = document.getElementById('macronutrientChartAsparagus').getContext('2d');
        const macronutrientChartAsparagus = new Chart(ctx1Asparagus, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [2.2, 3.7, 0.2],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Asparagus = document.getElementById('micronutrientChartAsparagus').getContext('2d');
        const micronutrientChartAsparagus = new Chart(ctx2Asparagus, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Vitamina K', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [756, 130, 41, 52],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Asparagus = document.getElementById('caloriesChartAsparagus').getContext('2d');
        const caloriesChartAsparagus = new Chart(ctx3Asparagus, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [20, 21, 19, 20, 22],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Asparagus = document.getElementById('comparisonChartAsparagus').getContext('2d');
        const comparisonChartAsparagus = new Chart(ctx4Asparagus, {
            type: 'bar',
            data: {
                labels: ['Espárragos', 'Brócoli', 'Judías Verdes'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [20, 34, 31],
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                }]
            },
        });
    </script>
</body>
</html>
