<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Yogur Griego</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/6d/11/42/6d11428bc4ee265b753136d3297cbeda.jpg" alt="Imagen de Yogur Griego">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">El yogur griego es un tipo de yogur que se caracteriza por su textura espesa y cremosa, rica en proteínas y baja en carbohidratos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El yogur griego se elabora mediante un proceso de colado que elimina el suero, lo que lo hace más concentrado en nutrientes y con un sabor más fuerte. Es un excelente ingrediente para batidos, salsas, y como snack saludable.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>59 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>10g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Contiene Lactosa:</strong> Puede no ser adecuado para personas con intolerancia a la lactosa, aunque algunos lo toleran mejor que otros yogures.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en Proteínas:</strong> Ayuda a mantener la saciedad y promueve el desarrollo muscular.</p>
            </div>
            <div class="description">
                <p><strong>Probióticos:</strong> Contiene cultivos vivos que favorecen la salud digestiva.</p>
            </div>
            <div class="description">
                <p><strong>Versatilidad:</strong> Se puede utilizar en una variedad de recetas, desde desayunos hasta postres.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartYogurGriego"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartYogurGriego"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartYogurGriego"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartYogurGriego"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Yogur Griego</h2>
            <p>El yogur griego es perfecto para smoothies, aderezos para ensaladas, y como base para parfaits de frutas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El yogur griego ha sido parte de la dieta mediterránea durante siglos y se ha vuelto popular en todo el mundo por sus beneficios para la salud.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar yogur griego, busca opciones con probióticos añadidos y sin azúcares añadidos para obtener el máximo beneficio nutricional.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El yogur griego combina bien con frutas, nueces, miel y granola, creando un desayuno delicioso y nutritivo.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes considerar yogur normal, yogur de soja o yogur de almendra, aunque sus perfiles nutricionales varían.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Es importante elegir marcas que utilicen prácticas de producción sostenibles y que prioricen el bienestar animal.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1YogurGriego = document.getElementById('macronutrientChartYogurGriego').getContext('2d');
        const macronutrientChartYogurGriego = new Chart(ctx1YogurGriego, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [3.6, 10, 0.4],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2YogurGriego = document.getElementById('micronutrientChartYogurGriego').getContext('2d');
        const micronutrientChartYogurGriego = new Chart(ctx2YogurGriego, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10, 120, 96],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3YogurGriego = document.getElementById('caloriesChartYogurGriego').getContext('2d');
        const caloriesChartYogurGriego = new Chart(ctx3YogurGriego, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [59, 58, 60, 57, 59],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4YogurGriego = document.getElementById('comparisonChartYogurGriego').getContext('2d');
        const comparisonChartYogurGriego = new Chart(ctx4YogurGriego, {
            type: 'bar',
            data: {
                labels: ['Yogur Griego', 'Yogur Natural', 'Yogur de Soja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [59, 61, 50],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ccff99'],
                }]
            },
        });
    </script>
</body>
</html>
