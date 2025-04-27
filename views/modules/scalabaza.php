<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Semillas de Calabaza</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/51/90/d8/5190d87239945b38d567278306b9825f.jpg" alt="Imagen de Semillas de Calabaza">
            <p class="category">Categoría: Semilla</p>
            <p class="description">Las semillas de calabaza, también conocidas como pepitas, son ricas en nutrientes y se pueden consumir solas o añadirse a diversas preparaciones culinarias. Son una excelente fuente de grasas saludables, proteínas y minerales.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las semillas de calabaza son las semillas comestibles de la calabaza y se pueden encontrar en muchas variedades. Son un snack saludable y versátil que se puede incorporar en ensaladas, yogures, o como un ingrediente en productos horneados. Además, son ricas en antioxidantes y tienen propiedades antiinflamatorias.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>559 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>30g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>11g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>49g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>6g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto contenido calórico:</strong> A pesar de sus beneficios, el alto contenido calórico de las semillas de calabaza puede contribuir al aumento de peso si se consumen en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Posibles alérgenos:</strong> Algunas personas pueden ser alérgicas a las semillas de calabaza. Es importante tener precaución si se introducen por primera vez en la dieta.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en antioxidantes:</strong> Las semillas de calabaza son ricas en antioxidantes que ayudan a combatir el daño celular y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de minerales:</strong> Son una buena fuente de magnesio, hierro y zinc, que son esenciales para diversas funciones corporales, incluyendo el sistema inmunológico.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSemillasCalabaza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSemillasCalabaza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSemillasCalabaza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSemillasCalabaza"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Semillas de Calabaza</h2>
            <p>Las semillas de calabaza se pueden añadir a ensaladas, mezclas de frutos secos, o usarse como topping en sopas y yogures. También se pueden tostar para intensificar su sabor y hacer un delicioso snack.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las semillas de calabaza han sido consumidas durante miles de años y son un alimento básico en muchas culturas, especialmente en México.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar semillas de calabaza, elige las que sean frescas y crujientes. Las semillas pueden encontrarse peladas o sin pelar; las peladas son más convenientes para comer, mientras que las sin pelar ofrecen más fibra.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las semillas de calabaza combinan bien con frutos secos, frutas deshidratadas y yogur. También se pueden mezclar con granola o utilizar en batidos para añadir textura y nutrientes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no te gustan las semillas de calabaza, considera alternativas como las semillas de girasol, chía o sésamo, que también son nutritivas y se pueden usar en muchas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de semillas de calabaza tiene un impacto ambiental relativamente bajo en comparación con otros cultivos. Sin embargo, optar por productos orgánicos puede ayudar a reducir el uso de pesticidas y promover la sostenibilidad.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1SemillasCalabaza = document.getElementById('macronutrientChartSemillasCalabaza').getContext('2d');
        const macronutrientChartSemillasCalabaza = new Chart(ctx1SemillasCalabaza, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Proteínas', 'Carbohidratos'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [49, 30, 11],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2SemillasCalabaza = document.getElementById('micronutrientChartSemillasCalabaza').getContext('2d');
        const micronutrientChartSemillasCalabaza = new Chart(ctx2SemillasCalabaza, {
            type: 'radar',
            data: {
                labels: ['Magnesio', 'Hierro', 'Zinc'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [592, 4.2, 7.81], // Valores aproximados de micronutrientes por 100g
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(52, 152, 219, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3SemillasCalabaza = document.getElementById('caloriesChartSemillasCalabaza').getContext('2d');
        const caloriesChartSemillasCalabaza = new Chart(ctx3SemillasCalabaza, {
            type: 'line',
            data: {
                labels: ['1 Mes', '3 Meses', '6 Meses', '12 Meses'],
                datasets: [{
                    label: 'Calorías',
                    data: [550, 560, 570, 580], // Ejemplo de datos de calorías
                    backgroundColor: 'rgba(46, 204, 113, 0.2)',
                    borderColor: 'rgba(46, 204, 113, 1)',
                    fill: true,
                }]
            },
        });

        // Gráfico comparativo de calorías
        const ctx4SemillasCalabaza = document.getElementById('comparisonChartSemillasCalabaza').getContext('2d');
        const comparisonChartSemillasCalabaza = new Chart(ctx4SemillasCalabaza, {
            type: 'bar',
            data: {
                labels: ['Semillas de Calabaza', 'Nueces', 'Almendras', 'Pistachos'],
                datasets: [{
                    label: 'Comparación de Calorías',
                    data: [559, 654, 579, 562], // Calorías de cada alimento
                    backgroundColor: ['#e74c3c', '#2980b9', '#27ae60', '#f39c12'],
                }]
            },
        });
    </script>
</body>
</html>
