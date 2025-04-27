<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Tomate</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/c6/1d/73/c61d733d39de33bd3d0957bcbd11207b.jpg" alt="Imagen de Tomate">
            <p class="category">Categoría: Fruta</p>
            <p class="description">El tomate es una fruta roja brillante que se utiliza comúnmente en ensaladas, salsas y guisos. Es conocido por su sabor refrescante y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El tomate, originario de América, se ha convertido en un alimento básico en muchas culturas. Se caracteriza por su contenido de licopeno, un antioxidante que se ha asociado con diversos beneficios para la salud. Además, es rico en vitaminas y minerales esenciales.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>18 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.2g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Acidez:</strong> Los tomates pueden ser ácidos y, en algunas personas, pueden causar molestias digestivas o acidez estomacal si se consumen en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Aunque es raro, algunas personas pueden ser alérgicas a los tomates y experimentar reacciones alérgicas al consumirlos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Los tomates son ricos en licopeno, un antioxidante que puede ayudar a reducir el riesgo de enfermedades cardíacas y ciertos tipos de cáncer.</p>
            </div>
            <div class="description">
                <p><strong>Hidratación:</strong> Con un alto contenido de agua, los tomates ayudan a mantener la hidratación del cuerpo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartTomate"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartTomate"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartTomate"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartTomate"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Tomate</h2>
            <p>Los tomates son perfectos para ensaladas, salsas para pasta, y guisos. Se pueden asar, hacer puré o utilizar en sopas, ofreciendo versatilidad a los platillos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El tomate se considera una fruta, aunque a menudo se utiliza como un vegetal en la cocina. Se cultivó por primera vez en América Central y del Sur.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar tomates, busca aquellos que estén firmes y sin manchas. Los tomates de color rojo intenso suelen tener un mejor sabor.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los tomates combinan bien con hierbas frescas como albahaca, así como con queso, aceite de oliva y vinagre balsámico.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir tomates, considera alternativas como pimientos rojos, que ofrecen un sabor similar y también son ricos en antioxidantes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de tomates puede tener un impacto ambiental significativo, especialmente en términos de uso de agua. Elegir tomates orgánicos puede ser una opción más sostenible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Tomate = document.getElementById('macronutrientChartTomate').getContext('2d');
        const macronutrientChartTomate = new Chart(ctx1Tomate, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Proteínas', 'Carbohidratos'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.2, 0.9, 3.9],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Tomate = document.getElementById('micronutrientChartTomate').getContext('2d');
        const micronutrientChartTomate = new Chart(ctx2Tomate, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [13.7, 7.9, 237], // Valores aproximados de micronutrientes por 100g
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(52, 152, 219, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Tomate = document.getElementById('caloriesChartTomate').getContext('2d');
        const caloriesChartTomate = new Chart(ctx3Tomate, {
            type: 'line',
            data: {
                labels: ['1 Mes', '3 Meses', '6 Meses', '12 Meses'],
                datasets: [{
                    label: 'Calorías',
                    data: [18, 20, 22, 25], // Valores aproximados de calorías en el tiempo
                    backgroundColor: 'rgba(231, 76, 60, 0.2)', // Color de fondo
                    borderColor: 'rgba(231, 76, 60, 1)', // Color de borde
                    borderWidth: 2,
                    fill: false,
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Tomate = document.getElementById('comparisonChartTomate').getContext('2d');
        const comparisonChartTomate = new Chart(ctx4Tomate, {
            type: 'bar',
            data: {
                labels: ['Tomate', 'Pimiento', 'Pepino'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [18, 20, 16], // Valores de comparación
                    backgroundColor: 'rgba(46, 204, 113, 0.5)',
                }]
            },
        });
    </script>
</body>
</html>
