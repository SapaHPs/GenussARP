<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Crema Agria</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/crema-agria-aislada-blanco_144627-20467.jpg" alt="Imagen de Crema Agria">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">La crema agria es un producto lácteo cremoso y ácido, elaborado a partir de la fermentación de la crema de leche, utilizado comúnmente en diversas recetas y como aderezo.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La crema agria es un ingrediente versátil que se utiliza en salsas, guisos, y como aderezo para tacos, papas y otros platillos. Su textura cremosa y su sabor ácido la hacen ideal para equilibrar platos ricos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>198 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>20g</td>
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
                <p><strong>Alergias:</strong> Las personas alérgicas a los lácteos deben evitar la crema agria, ya que contiene lácteos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Probióticos:</strong> La crema agria puede contener probióticos que son beneficiosos para la salud digestiva.</p>
            </div>
            <div class="description">
                <p><strong>Rica en Calcio:</strong> Aporta calcio, esencial para la salud ósea.</p>
            </div>
            <div class="description">
                <p><strong>Versatilidad:</strong> Puede usarse en una variedad de platillos, mejorando el sabor y la textura.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCremaAgria"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCremaAgria"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCremaAgria"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCremaAgria"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Crema Agria</h2>
            <p>La crema agria se utiliza en salsas para tacos, como complemento en papas al horno, y en dips como el famoso dip de cebolla.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La crema agria se originó en Europa del Este y ha sido utilizada en la cocina durante siglos como un medio para preservar la crema de leche.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar crema agria, busca productos frescos y verifica la fecha de caducidad. Opta por opciones que no contengan aditivos innecesarios.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La crema agria combina bien con guacamole, frijoles, y ensaladas, añadiendo un toque cremoso y ácido.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la crema agria incluyen yogur griego o crema de anacardo, que pueden ser utilizados en recetas similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Elegir productos de crema agria de fuentes sostenibles puede ayudar a reducir el impacto ambiental de la producción láctea.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1CremaAgria = document.getElementById('macronutrientChartCremaAgria').getContext('2d');
        const macronutrientChartCremaAgria = new Chart(ctx1CremaAgria, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [4, 2, 20],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2CremaAgria = document.getElementById('micronutrientChartCremaAgria').getContext('2d');
        const micronutrientChartCremaAgria = new Chart(ctx2CremaAgria, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2, 120, 0.1],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3CremaAgria = document.getElementById('caloriesChartCremaAgria').getContext('2d');
        const caloriesChartCremaAgria = new Chart(ctx3CremaAgria, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [198, 197, 200, 199, 198],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4CremaAgria = document.getElementById('comparisonChartCremaAgria').getContext('2d');
        const comparisonChartCremaAgria = new Chart(ctx4CremaAgria, {
            type: 'bar',
            data: {
                labels: ['Crema Agria', 'Yogur Griego', 'Crema de Anacardo'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [198, 59, 200],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
