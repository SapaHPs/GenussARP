<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Perejil</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/78/0f/20/780f2051c66cec86639ea3d4dfb2f606.jpg" alt="Imagen de Perejil">
            <p class="category">Categoría: Hierbas Aromáticas</p>
            <p class="description">El perejil es una hierba aromática popular que se utiliza para dar sabor y decorar platos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El perejil es una hierba de hoja verde brillante que se utiliza en una amplia variedad de platos, desde ensaladas hasta guisos. Su sabor fresco y ligeramente picante lo convierte en un ingrediente versátil en la cocina.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>36 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>3.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>6.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.8g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3.3g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al perejil, presentando reacciones adversas al consumirlo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> El perejil es una excelente fuente de vitamina K, vitamina C, y antioxidantes.</p>
            </div>
            <div class="description">
                <p><strong>Ayuda a la Digestión:</strong> Se ha utilizado tradicionalmente para aliviar problemas digestivos.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades Antiinflamatorias:</strong> Puede ayudar a reducir la inflamación en el cuerpo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPerejil"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPerejil"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPerejil"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPerejil"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Perejil</h2>
            <p>El perejil es ideal para añadir frescura a ensaladas, salsas, y como guarnición en diversos platos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El perejil ha sido utilizado desde la antigüedad tanto en la cocina como en la medicina tradicional por sus propiedades curativas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar perejil, busca hojas frescas, verdes y brillantes, evitando aquellas que estén marchitas o amarillas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El perejil combina bien con ajo, limón, y aceite de oliva, añadiendo un sabor refrescante a los platos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al perejil incluyen cilantro, albahaca y eneldo, que ofrecen sabores diferentes pero también son frescos y aromáticos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El perejil es una planta que se cultiva con poca necesidad de agua y pesticidas, lo que lo convierte en una opción sostenible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Perejil = document.getElementById('macronutrientChartPerejil').getContext('2d');
        const macronutrientChartPerejil = new Chart(ctx1Perejil, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [6.3, 3.0, 0.8],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Perejil = document.getElementById('micronutrientChartPerejil').getContext('2d');
        const micronutrientChartPerejil = new Chart(ctx2Perejil, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [3.0, 138, 1.2],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Perejil = document.getElementById('caloriesChartPerejil').getContext('2d');
        const caloriesChartPerejil = new Chart(ctx3Perejil, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [36, 35, 37, 36, 34],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Perejil = document.getElementById('comparisonChartPerejil').getContext('2d');
        const comparisonChartPerejil = new Chart(ctx4Perejil, {
            type: 'bar',
            data: {
                labels: ['Perejil', 'Cilantro', 'Albahaca'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [36, 23, 23],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
