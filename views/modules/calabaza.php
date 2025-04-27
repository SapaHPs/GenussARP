<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Calabaza</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/b2/6f/fe/b26ffe92e5318c02c2d423e6356a701e.jpg" alt="Imagen de Calabaza">
            <p class="category">Categoría: Vegetal</p>
            <p class="description">La calabaza es un alimento versátil y nutritivo, utilizado en una variedad de platillos y reconocido por sus beneficios para la salud.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La calabaza es un vegetal de forma redonda u ovalada, con una cáscara dura y pulpa anaranjada o amarilla. Es popular en diversas cocinas del mundo, especialmente en sopas y purés.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>26 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Digestión:</strong> En algunas personas, el consumo excesivo de calabaza puede causar gases o malestar estomacal.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Antioxidantes:</strong> La calabaza es una fuente de betacarotenos, que ayudan a proteger el cuerpo del daño celular y promueven la salud ocular.</p>
            </div>
            <div class="description">
                <p><strong>Salud Digestiva:</strong> Gracias a su contenido de fibra, favorece el tránsito intestinal y la salud digestiva.</p>
            </div>
            <div class="description">
                <p><strong>Control del Peso:</strong> Es baja en calorías, lo que la convierte en una excelente opción para dietas de control de peso.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCalabaza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCalabaza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCalabaza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCalabaza"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Calabaza</h2>
            <p>La calabaza es ideal para preparar sopas, purés, risottos y se puede asar o incluir en ensaladas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La calabaza tiene su origen en América y se ha cultivado durante miles de años, siendo un alimento básico para muchas culturas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir calabaza, busca ejemplares que sean firmes, pesados y con una cáscara lisa y sin manchas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La calabaza combina bien con especias como el jengibre y el orégano, además de otras verduras en guisos y sopas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la calabaza incluyen otras variedades de calabaza, batatas y zanahorias, que ofrecen beneficios nutricionales similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de calabaza puede tener un impacto ambiental bajo, especialmente si se cultiva de manera sostenible y orgánica.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Calabaza = document.getElementById('macronutrientChartCalabaza').getContext('2d');
        const macronutrientChartCalabaza = new Chart(ctx1Calabaza, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [7, 1, 0.1],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Calabaza = document.getElementById('micronutrientChartCalabaza').getContext('2d');
        const micronutrientChartCalabaza = new Chart(ctx2Calabaza, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1, 21, 0.8],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Calabaza = document.getElementById('caloriesChartCalabaza').getContext('2d');
        const caloriesChartCalabaza = new Chart(ctx3Calabaza, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [26, 28, 25, 27, 26],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Calabaza = document.getElementById('comparisonChartCalabaza').getContext('2d');
        const comparisonChartCalabaza = new Chart(ctx4Calabaza, {
            type: 'bar',
            data: {
                labels: ['Calabaza', 'Ahuyama', 'Zanahoria'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [26, 26, 41],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
