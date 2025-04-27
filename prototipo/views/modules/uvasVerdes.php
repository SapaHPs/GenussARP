<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Uvas Verdes</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/fotos-premium/racimo-uvas-verdes-aislado-sobre-fondo-blanco_559132-11807.jpg" alt="Imagen de Uvas Verdes">
            <p class="category">Categoría: Fruta</p>
            <p class="description">Las uvas verdes son una variedad de uvas con un sabor más ácido en comparación con las uvas rojas o negras. Son ricas en vitamina C y antioxidantes, ideales para consumir frescas, en jugos, ensaladas o postres.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las uvas verdes son frutas pequeñas, redondas y jugosas, con un sabor refrescante y ligeramente ácido. Son una excelente fuente de vitaminas C y K, además de antioxidantes que ayudan a combatir el envejecimiento celular. Las uvas verdes se pueden consumir frescas, en ensaladas, como pasas o en jugos. Aportan un toque dulce y ácido a las recetas y son muy utilizadas en la cocina mediterránea.</p><br><br>
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
                <p><strong>Problemas Digestivos:</strong> El consumo excesivo de uvas verdes puede causar malestar estomacal, diarrea o hinchazón en algunas personas debido a su contenido de azúcares naturales.</p>
            </div>
            <div class="description">
                <p><strong>Reacciones Alérgicas:</strong> Algunas personas pueden tener alergia a las uvas, presentando síntomas como urticaria o picazón.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Cardioprotector:</strong> El resveratrol presente en las uvas verdes ayuda a reducir el riesgo de enfermedades cardíacas al mejorar la salud de los vasos sanguíneos y reducir la presión arterial.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidante:</strong> Protege las células del daño oxidativo y contribuye a la prevención de enfermedades degenerativas.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Digestión:</strong> La fibra presente en las uvas verdes ayuda a regular el tránsito intestinal y a prevenir el estreñimiento.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartGreenGrapes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartGreenGrapes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartGreenGrapes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartGreenGrapes"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Uvas Verdes</h2>
            <p>Las uvas verdes se pueden usar en una gran variedad de recetas, como ensaladas de frutas, postres, o para hacer jugos refrescantes. También se pueden combinar con quesos y frutos secos para un aperitivo saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las uvas verdes tienen un menor contenido de antioxidantes que las uvas negras o rojas, pero aún así proporcionan grandes beneficios para la salud, como la protección de las células y la mejora de la memoria.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar uvas verdes, elige aquellas con una piel firme y sin manchas. Asegúrate de que los racimos estén bien adheridos y sean de un color verde brillante. Evita las uvas que estén arrugadas o con moho.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las uvas verdes combinan muy bien con quesos como el queso feta o brie, así como con frutos secos y yogur para crear aperitivos saludables y equilibrados.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes uvas verdes, puedes usar otras frutas como manzanas verdes o peras en las recetas. También las pasas son una buena opción si buscas algo más dulce.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de uvas verdes puede tener un alto impacto ambiental si no se realiza de manera sostenible. Al optar por uvas orgánicas y de cultivo local, se ayuda a reducir el uso de pesticidas y el impacto en el suelo.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1GreenGrapes = document.getElementById('macronutrientChartGreenGrapes').getContext('2d');
        const macronutrientChartGreenGrapes = new Chart(ctx1GreenGrapes, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [18, 0.7, 0.2],
                    backgroundColor: ['#99ff99', '#66cc66', '#339933'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2GreenGrapes = document.getElementById('micronutrientChartGreenGrapes').getContext('2d');
        const micronutrientChartGreenGrapes = new Chart(ctx2GreenGrapes, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10.8, 14.6, 191],
                    backgroundColor: 'rgba(102, 255, 102, 0.2)',
                    borderColor: 'rgba(102, 255, 102, 1)',
                    pointBackgroundColor: 'rgba(102, 255, 102, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3GreenGrapes = document.getElementById('caloriesChartGreenGrapes').getContext('2d');
        const caloriesChartGreenGrapes = new Chart(ctx3GreenGrapes, {
            type: 'line',
            data: {
                labels: ['Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes'],
                datasets: [{
                    label: 'Calorías',
                    data: [65, 68, 70, 67, 69],
                    backgroundColor: 'rgba(153, 255, 153, 0.2)',
                    borderColor: 'rgba(153, 255, 153, 1)',
                    fill: true
                }]
            },
        });

        // Gráfico comparativo de calorías entre frutas
        const ctx4GreenGrapes = document.getElementById('comparisonChartGreenGrapes').getContext('2d');
        const comparisonChartGreenGrapes = new Chart(ctx4GreenGrapes, {
            type: 'bar',
            data: {
                labels: ['Manzanas', 'Bananas', 'Uvas Verdes', 'Naranjas', 'Fresas'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [52, 96, 69, 47, 32],
                    backgroundColor: ['#99ff99', '#66cc66', '#339933', '#ccffcc', '#99cc99'],
                }]
            },
        });
    </script>
</body>
</html>
