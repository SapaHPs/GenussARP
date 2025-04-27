<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Granola</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/92/28/10/9228106e7457f9c609650b620a0386e2.jpg" alt="Imagen de Granola">
            <p class="category">Categoría: Cereales</p>
            <p class="description">La granola es una mezcla de avena, frutos secos y miel, ideal para un desayuno nutritivo.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La granola es un alimento que combina avena, nueces, semillas, miel y otros ingredientes que pueden variar según la receta. Es popular por ser nutritiva y versátil, y se puede disfrutar sola, con leche o yogur.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>489 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>10g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>66g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>20g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Calorías:</strong> La granola puede ser alta en calorías, por lo que es importante controlar las porciones.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Nutrientes:</strong> Contiene vitaminas y minerales esenciales, como hierro y magnesio.</p>
            </div>
            <div class="description">
                <p><strong>Promueve la Saciedad:</strong> La fibra y las proteínas en la granola ayudan a mantener la sensación de saciedad.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> La fibra contribuye a la salud digestiva y regula el tránsito intestinal.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartGranola"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartGranola"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartGranola"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartGranola"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Granola</h2>
            <p>La granola se puede utilizar en yogures, batidos, ensaladas o simplemente como snack. Además, se puede añadir fruta fresca o miel para mejorar su sabor.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La granola se popularizó en los Estados Unidos en el siglo XIX como un alimento saludable para los sanatorios.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar granola, busca opciones con ingredientes naturales y poco azúcar añadido para obtener un producto más saludable.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La granola combina bien con yogur griego, frutas frescas y leche de almendras, creando un desayuno equilibrado.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la granola incluyen muesli, que no está horneado, y barras de cereales que son más convenientes para llevar.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Algunas marcas de granola utilizan ingredientes de cultivo sostenible, lo que ayuda a minimizar el impacto ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Granola = document.getElementById('macronutrientChartGranola').getContext('2d');
        const macronutrientChartGranola = new Chart(ctx1Granola, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [66, 10, 20],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Granola = document.getElementById('micronutrientChartGranola').getContext('2d');
        const micronutrientChartGranola = new Chart(ctx2Granola, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10, 30, 4.5],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Granola = document.getElementById('caloriesChartGranola').getContext('2d');
        const caloriesChartGranola = new Chart(ctx3Granola, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [489, 495, 485, 490, 489],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Granola = document.getElementById('comparisonChartGranola').getContext('2d');
        const comparisonChartGranola = new Chart(ctx4Granola, {
            type: 'bar',
            data: {
                labels: ['Granola', 'Muesli', 'Barras de Cereales'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [489, 371, 409],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
