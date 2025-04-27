<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Cilantro</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/cilantro-fresco_144627-5657.jpg" alt="Imagen de Cilantro">
            <p class="category">Categoría: Hierbas Aromáticas</p>
            <p class="description">El cilantro es una hierba aromática muy utilizada en la cocina para dar sabor a diversos platillos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El cilantro, conocido también como coriandro, es una hierba de hoja verde brillante que se utiliza ampliamente en la cocina de muchas culturas. Su sabor es fresco y cítrico, lo que lo convierte en un ingrediente esencial en salsas, guisos y ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>23 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al cilantro, experimentando reacciones adversas al consumirlo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Antioxidantes:</strong> El cilantro es rico en antioxidantes, que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades Antiinflamatorias:</strong> Puede ayudar a reducir la inflamación en el cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Digestión Saludable:</strong> Se ha utilizado tradicionalmente para aliviar problemas digestivos.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCilantro"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCilantro"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCilantro"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCilantro"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Cilantro</h2>
            <p>El cilantro es ideal para hacer salsas como el guacamole, en tacos, o espolvoreado sobre ensaladas y sopas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El cilantro se ha utilizado desde la antigüedad no solo en la cocina, sino también en la medicina tradicional.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar cilantro, busca hojas frescas, verdes y brillantes, evitando aquellas que estén marchitas o amarillas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El cilantro combina bien con aguacate, limón, y chiles, aportando un sabor fresco a los platillos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al cilantro incluyen perejil, albahaca y eneldo, que ofrecen sabores diferentes pero también son frescos y aromáticos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cilantro es una planta que se cultiva con poca necesidad de agua y pesticidas, lo que lo convierte en una opción sostenible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Cilantro = document.getElementById('macronutrientChartCilantro').getContext('2d');
        const macronutrientChartCilantro = new Chart(ctx1Cilantro, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [3.7, 2.1, 0.5],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Cilantro = document.getElementById('micronutrientChartCilantro').getContext('2d');
        const micronutrientChartCilantro = new Chart(ctx2Cilantro, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.1, 67, 1.8],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Cilantro = document.getElementById('caloriesChartCilantro').getContext('2d');
        const caloriesChartCilantro = new Chart(ctx3Cilantro, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [23, 24, 22, 23, 24],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Cilantro = document.getElementById('comparisonChartCilantro').getContext('2d');
        const comparisonChartCilantro = new Chart(ctx4Cilantro, {
            type: 'bar',
            data: {
                labels: ['Cilantro', 'Perejil', 'Albahaca'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [23, 36, 23],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
