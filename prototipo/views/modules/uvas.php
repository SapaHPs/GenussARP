<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Uvas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/grupo-uvas-frescas-color-mesa-blanca_114579-17566.jpg" alt="Imagen de Uvas">
            <p class="category">Categoría: Fruta</p>
            <p class="description">Las uvas son frutas pequeñas y jugosas, ricas en antioxidantes y con múltiples beneficios para la salud. Pueden ser consumidas frescas, secas como pasas, o utilizadas para hacer jugos y vinos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las uvas son pequeñas frutas que crecen en racimos y pertenecen a la familia de las vitáceas. Se caracterizan por su alto contenido de antioxidantes como el resveratrol, que tiene propiedades antiinflamatorias y cardioprotectoras. Existen diferentes variedades de uvas, como las verdes, rojas y negras, que se pueden consumir frescas o en forma de productos como pasas o vino.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>69 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>18g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0.9g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas Digestivos:</strong> El consumo excesivo de uvas puede causar malestar estomacal, diarrea o hinchazón en algunas personas debido a su contenido de azúcares naturales.</p>
            </div>
            <div class="description">
                <p><strong>Reacciones Alérgicas:</strong> Aunque es raro, algunas personas pueden tener alergia a las uvas, presentando síntomas como urticaria o picazón.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Cardioprotector:</strong> El resveratrol presente en las uvas ayuda a reducir el riesgo de enfermedades cardíacas al mejorar la salud de los vasos sanguíneos y reducir la presión arterial.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidante:</strong> Protege las células del daño oxidativo y contribuye a la prevención de enfermedades degenerativas.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Memoria:</strong> Los polifenoles de las uvas tienen efectos neuroprotectores y pueden mejorar la función cognitiva.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartGrapes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartGrapes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartGrapes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartGrapes"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Uvas</h2>
            <p>Las uvas se pueden utilizar en una gran variedad de recetas, como ensaladas de frutas, postres, y en salsas para acompañar platos principales. Además, se usan para hacer jugos, vinos y otros productos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las uvas han sido cultivadas por miles de años y se utilizan principalmente para hacer vino. El 71% de la producción mundial de uvas se destina a la vinificación.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar uvas frescas, elige aquellas con una piel firme y sin manchas. Las uvas deben estar bien adheridas al tallo y ser de color uniforme. Evita las uvas que estén arrugadas o con moho en el racimo.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las uvas combinan muy bien con quesos, frutos secos y yogur para crear aperitivos saludables y equilibrados. También se pueden usar en ensaladas frescas o como acompañamiento de carnes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las pasas son una excelente alternativa a las uvas frescas, ya que conservan la mayoría de sus nutrientes. También se pueden utilizar frutas como manzanas o peras en las recetas que incluyan uvas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de uvas puede tener un alto impacto ambiental si no se realiza de manera sostenible. Al optar por uvas orgánicas y de cultivo local, se ayuda a reducir el uso de pesticidas y el impacto en el suelo.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Grapes = document.getElementById('macronutrientChartGrapes').getContext('2d');
        const macronutrientChartGrapes = new Chart(ctx1Grapes, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [18, 0.7, 0.2],
                    backgroundColor: ['#ff9999', '#66b3ff', '#99ff99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Grapes = document.getElementById('micronutrientChartGrapes').getContext('2d');
        const micronutrientChartGrapes = new Chart(ctx2Grapes, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10.8, 14.6, 191],
                    backgroundColor: 'rgba(255, 206, 86, 0.2)',
                    borderColor: 'rgba(255, 206, 86, 1)',
                    pointBackgroundColor: 'rgba(255, 206, 86, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Grapes = document.getElementById('caloriesChartGrapes').getContext('2d');
        const caloriesChartGrapes = new Chart(ctx3Grapes, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías',
                    data: [65, 68, 70, 67, 69],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: true
                }]
            },
        });

        // Gráfico comparativo de calorías entre frutas
        const ctx4Grapes = document.getElementById('comparisonChartGrapes').getContext('2d');
        const comparisonChartGrapes = new Chart(ctx4Grapes, {
            type: 'bar',
            data: {
                labels: ['Manzanas', 'Bananas', 'Uvas', 'Naranjas', 'Fresas'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [52, 96, 69, 47, 32],
                    backgroundColor: ['#ff6384', '#36a2eb', '#cc65fe', '#ffce56', '#66bb6a'],
                }]
            },
        });
    </script>
</body>
</html>
