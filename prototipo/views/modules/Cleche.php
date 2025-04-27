<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Crema de Leche</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/crema-leche_23-2148703586.jpg" alt="Imagen de Crema de Leche">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">La crema de leche es un producto lácteo obtenido a partir de la nata de la leche, utilizado en diversas recetas y como base para salsas y postres.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La crema de leche es rica y espesa, ideal para dar cremosidad a platos tanto dulces como salados. Puede ser utilizada en salsas, postres o como un complemento en diversas recetas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>340 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>2.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>35g</td>
                </tr>
                <tr>
                    <td>Calcio</td>
                    <td>80mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Grasas:</strong> Contiene un alto porcentaje de grasas saturadas, lo que puede ser perjudicial si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Intolerancia a la Lactosa:</strong> Las personas con intolerancia a la lactosa pueden experimentar malestar al consumir crema de leche.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> Proporciona una gran cantidad de energía debido a su contenido calórico.</p>
            </div>
            <div class="description">
                <p><strong>Versatilidad Culinaria:</strong> Puede ser utilizada en una amplia variedad de platos, tanto dulces como salados.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCremaLeche"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCremaLeche"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCremaLeche"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCremaLeche"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Crema de Leche</h2>
            <p>La crema de leche se puede utilizar en salsas, postres, y como base para helados caseros.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La crema de leche tiene su origen en el proceso de separación de la nata de la leche, que se ha utilizado durante siglos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca crema de leche sin aditivos o conservantes para una opción más saludable.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina la crema de leche con hierbas frescas para salsas sabrosas y saludables.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>La leche evaporada o el yogur griego pueden ser excelentes alternativas más ligeras a la crema de leche.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por productos lácteos de granjas sostenibles puede ayudar a reducir el impacto ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1CremaLeche = document.getElementById('macronutrientChartCremaLeche').getContext('2d');
        const macronutrientChartCremaLeche = new Chart(ctx1CremaLeche, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [35, 2.9, 2.9],
                    backgroundColor: ['#e74c3c', '#f39c12', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2CremaLeche = document.getElementById('micronutrientChartCremaLeche').getContext('2d');
        const micronutrientChartCremaLeche = new Chart(ctx2CremaLeche, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Fósforo', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [80, 30, 130],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(46, 204, 113, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3CremaLeche = document.getElementById('caloriesChartCremaLeche').getContext('2d');
        const caloriesChartCremaLeche = new Chart(ctx3CremaLeche, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [340, 345, 335, 340, 342],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4CremaLeche = document.getElementById('comparisonChartCremaLeche').getContext('2d');
        const comparisonChartCremaLeche = new Chart(ctx4CremaLeche, {
            type: 'bar',
            data: {
                labels: ['Crema de Leche', 'Mantequilla', 'Yogur'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [340, 717, 59],
                    backgroundColor: ['#34495e', '#8e44ad', '#f39c12'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
