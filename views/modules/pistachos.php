<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pistachos</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/d2/4f/fa/d24ffa28baf48e8ee312675d9431e671.jpg" alt="Imagen de Pistachos">
            <p class="category">Categoría: Frutos Secos</p>
            <p class="description">Los pistachos son uno de los frutos secos más apreciados por su delicioso sabor y su alto contenido en nutrientes. Son una excelente fuente de grasas saludables, proteínas y vitaminas, y se utilizan en una amplia variedad de recetas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El pistacho es una semilla comestible del árbol Pistacia vera. Se caracteriza por su cáscara dura y su interior verde pálido, que tiene un sabor suave y mantecoso. Es popular como snack y como ingrediente en postres, ensaladas y platos salados.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>562 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>20.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>28g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>45g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>10g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Altas en Calorías:</strong> Los pistachos son densos en calorías, por lo que es importante moderar su consumo, especialmente si se busca controlar el peso.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los frutos secos, incluidos los pistachos, lo que puede provocar reacciones graves.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricos en Antioxidantes:</strong> Los pistachos contienen antioxidantes como luteína y zeaxantina, que son beneficiosos para la salud ocular.</p>
            </div>
            <div class="description">
                <p><strong>Buena Fuente de Proteínas y Grasas Saludables:</strong> Los pistachos son ricos en proteínas y grasas monoinsaturadas, lo que puede ayudar a mejorar la salud cardiovascular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPistachos"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPistachos"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPistachos"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPistachos"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pistachos</h2>
            <p>Los pistachos son un excelente ingrediente para ensaladas, helados, postres como baklava, y también se utilizan para hacer mantequillas y salsas. Su textura crujiente y sabor único los hacen perfectos para una variedad de platos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los pistachos son uno de los frutos secos más antiguos del mundo, y se cree que se han consumido durante más de 9.000 años. También son uno de los pocos frutos secos que cambian de color durante la maduración.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pistachos, es mejor optar por aquellos que vienen en su cáscara, ya que tienden a ser más frescos y conservar mejor sus nutrientes. También asegúrate de revisar la fecha de caducidad para garantizar su frescura.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los pistachos combinan muy bien con frutas frescas como arándanos, yogur griego, o en ensaladas verdes con aderezo de limón. También son un excelente complemento para avena o granola casera.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Otros frutos secos como almendras, nueces y anacardos pueden ser alternativas a los pistachos en diversas recetas. Para quienes buscan un sabor diferente, las semillas de calabaza o girasol también pueden ser una opción.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de pistachos requiere menos agua que otros frutos secos, lo que los convierte en una opción más sostenible. Además, los árboles de pistacho son muy duraderos y pueden producir frutos durante varios años.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pistachos = document.getElementById('macronutrientChartPistachos').getContext('2d');
        const macronutrientChartPistachos = new Chart(ctx1Pistachos, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [45, 28, 20.6],
                    backgroundColor: ['#f39c12', '#27ae60', '#2980b9'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pistachos = document.getElementById('micronutrientChartPistachos').getContext('2d');
        const micronutrientChartPistachos = new Chart(ctx2Pistachos, {
            type: 'radar',
            data: {
                labels: ['Fibra', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10, 105, 3.9],
                    backgroundColor: 'rgba(243, 156, 18, 0.2)', // Color de fondo
                    borderColor: 'rgba(243, 156, 18, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(243, 156, 18, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pistachos = document.getElementById('caloriesChartPistachos').getContext('2d');
        const caloriesChartPistachos = new Chart(ctx3Pistachos, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [562, 560, 565, 558, 562],
                    backgroundColor: 'rgba(243, 156, 18, 0.2)', // Color de fondo
                    borderColor: 'rgba(243, 156, 18, 1)', // Color de línea
                    borderWidth: 2
                }]
            },
        });

        // Gráfico comparativo con otros alimentos
        const ctx4Pistachos = document.getElementById('comparisonChartPistachos').getContext('2d');
        const comparisonChartPistachos = new Chart(ctx4Pistachos, {
            type: 'bar',
            data: {
                labels: ['Pistachos', 'Nueces', 'Almendras', 'Anacardos'],
                datasets: [{
                    label: 'Comparación de Macronutrientes',
                    data: [562, 654, 575, 553],
                    backgroundColor: ['#f39c12', '#e74c3c', '#27ae60', '#2980b9'],
                }]
            },
        });
    </script>
</body>
</html>
