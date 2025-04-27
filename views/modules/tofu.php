<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Tofu</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/e1/cc/1b/e1cc1bfe6b66962fa0add1076204aabe.jpg" alt="Imagen de Tofu">
            <p class="category">Categoría: Proteína Vegetal</p>
            <p class="description">El tofu es un alimento vegetal, rico en proteínas y bajo en grasas, ideal para dietas vegetarianas y veganas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El tofu, también conocido como queso de soya, es un alimento que se obtiene de la coagulación de la leche de soya y su posterior prensado. Es una excelente fuente de proteínas para dietas veganas y vegetarianas, además de ser versátil en la cocina.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>76 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>8.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>1.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>4.8g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0.3g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Digestión:</strong> El consumo excesivo de tofu puede causar malestar estomacal en algunas personas debido a su contenido de compuestos de soya.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> El tofu es un derivado de la soya, por lo que debe ser evitado por personas con alergia a este alimento.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Proteínas:</strong> El tofu es una excelente fuente de proteínas de alta calidad, ideal para dietas vegetarianas y veganas.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Su bajo contenido en grasas saturadas y colesterol lo hacen ideal para la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Calcio:</strong> El tofu fortificado contiene altos niveles de calcio, esencial para la salud ósea.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartTofu"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartTofu"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartTofu"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartTofu"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Tofu</h2>
            <p>El tofu es muy versátil y se puede usar en ensaladas, sopas, salteados, e incluso en postres. Se puede marinar, asar, hornear o freír para darle diferentes texturas y sabores.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El tofu se originó en China hace más de 2,000 años y ha sido un alimento básico en muchas culturas asiáticas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar tofu, busca aquellos que sean orgánicos y sin aditivos. El tofu firme es ideal para asar o saltear, mientras que el tofu suave se usa mejor en sopas o postres.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El tofu combina bien con verduras como brócoli, espárragos y zanahorias. También se puede añadir a curries, pastas o incluso utilizar como base para salsas y dips.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al tofu incluyen el tempeh, el seitán y las proteínas de soya texturizada, que también son ricas en proteínas y muy versátiles.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El tofu tiene un impacto ambiental relativamente bajo en comparación con las proteínas animales, pero se recomienda optar por tofu orgánico y de comercio justo para asegurar prácticas sostenibles y éticas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Tofu = document.getElementById('macronutrientChartTofu').getContext('2d');
        const macronutrientChartTofu = new Chart(ctx1Tofu, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.9, 8.1, 4.8],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Tofu = document.getElementById('micronutrientChartTofu').getContext('2d');
        const micronutrientChartTofu = new Chart(ctx2Tofu, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Hierro', 'Magnesio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [350, 5.4, 30],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Tofu = document.getElementById('caloriesChartTofu').getContext('2d');
        const caloriesChartTofu = new Chart(ctx3Tofu, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [76, 80, 75, 78, 76],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Tofu = document.getElementById('comparisonChartTofu').getContext('2d');
        const comparisonChartTofu = new Chart(ctx4Tofu, {
            type: 'bar',
            data: {
                labels: ['Tofu', 'Tempeh', 'Seitán'],
                datasets: [{
                    label: 'Proteínas (g)',
                    data: [8.1, 19, 21],
                    backgroundColor: ['#99cc99', '#ffcc99', '#ccccff'],
                }]
            },
        });
    </script>
</body>
</html>
