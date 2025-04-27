<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Coliflor</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/f2/58/0a/f2580a14fb4d7f6b36b2081eab42359a.jpg" alt="Imagen de Coliflor">
            <p class="category">Categoría: Vegetales</p>
            <p class="description">La coliflor es una verdura crucífera muy versátil, baja en calorías y rica en nutrientes, utilizada en una variedad de platos saludables.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La coliflor es una verdura crucífera que pertenece a la misma familia que el brócoli, la col rizada y las coles de Bruselas. Es apreciada por su bajo contenido calórico y su alto aporte de fibra, vitaminas y antioxidantes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>25 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>5.0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Gas e Hinchazón:</strong> La coliflor puede causar gases y malestar estomacal en algunas personas debido a su contenido de fibra y compuestos de azufre.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Bajo en Calorías:</strong> Con solo 25 kcal por cada 100 gramos, la coliflor es una excelente opción para quienes buscan perder peso.</p>
            </div>
            <div class="description">
                <p><strong>Rica en Antioxidantes:</strong> La coliflor es una fuente rica en antioxidantes que ayudan a combatir el daño oxidativo en el cuerpo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCauliflower"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCauliflower"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCauliflower"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCauliflower"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Coliflor</h2>
            <p>La coliflor se utiliza en una gran variedad de recetas, desde pizzas con base de coliflor hasta ensaladas y platos al horno.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La coliflor puede ser de varios colores, incluyendo blanco, morado, verde y naranja, cada uno con distintos beneficios para la salud.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige coliflores que estén firmes, con las cabezas compactas y sin manchas. Las hojas verdes en la base indican frescura.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La coliflor combina bien con especias como el curry, cúrcuma y ajo, y se puede acompañar con proteínas magras como el pollo o el pescado.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Como alternativa a la coliflor, se puede utilizar el brócoli o la col rizada, ya que comparten muchos de los mismos beneficios nutricionales.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La coliflor tiene un impacto ambiental relativamente bajo, especialmente cuando se cultiva localmente. Es importante elegir variedades orgánicas para evitar pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Cauliflower = document.getElementById('macronutrientChartCauliflower').getContext('2d');
        const macronutrientChartCauliflower = new Chart(ctx1Cauliflower, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.2, 5.0, 2.0],
                    backgroundColor: ['#f39c12', '#27ae60', '#2980b9'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Cauliflower = document.getElementById('micronutrientChartCauliflower').getContext('2d');
        const micronutrientChartCauliflower = new Chart(ctx2Cauliflower, {
            type: 'radar',
            data: {
                labels: ['Fibra', 'Vitamina C', 'Vitamina K'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.0, 48.2, 15.5],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(46, 204, 113, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Cauliflower = document.getElementById('caloriesChartCauliflower').getContext('2d');
        const caloriesChartCauliflower = new Chart(ctx3Cauliflower, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [25, 23, 26, 24, 25],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Cauliflower = document.getElementById('comparisonChartCauliflower').getContext('2d');
        const comparisonChartCauliflower = new Chart(ctx4Cauliflower, {
            type: 'bar',
            data: {
                labels: ['Coliflor', 'Brócoli', 'Zanahoria'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [25, 35, 41],
                    backgroundColor: ['#f39c12', '#27ae60', '#e74c3c'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
