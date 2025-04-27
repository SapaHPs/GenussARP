<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Suero Costeño</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/ec/10/2c/ec102c5c3f3a37ab73767ef5ff64814f.jpg" alt="Imagen de Suero Costeño">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">El suero costeño es un producto lácteo típico de la región caribeña de Colombia, ideal para acompañar diversos platos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El suero costeño es un lácteo líquido que se obtiene de la fermentación de la leche, conocido por su sabor ácido y su textura cremosa. Es un acompañante tradicional en platos típicos de la costa caribe colombiana, como el arequipe y la arepa.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>97 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>6.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>4.5g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>6g</td>
                </tr>
                <tr>
                    <td>Calcio</td>
                    <td>111mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Intolerancia a la Lactosa:</strong> No es adecuado para personas con intolerancia a la lactosa, ya que puede causar malestar digestivo.</p>
            </div>
            <div class="description">
                <p><strong>Alto en Grasa:</strong> Contiene grasas saturadas, por lo que se debe consumir con moderación.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Calcio:</strong> Contribuye a la salud ósea y dental gracias a su alto contenido de calcio.</p>
            </div>
            <div class="description">
                <p><strong>Probioticos:</strong> Al ser un producto fermentado, contiene probióticos que favorecen la salud intestinal.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSuero"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSuero"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSuero"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSuero"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Suero Costeño</h2>
            <p>El suero costeño se puede usar en sopas, arepas o como aderezo en ensaladas y platos de carne.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>En la región caribe colombiana, es común servir el suero costeño en un tazón junto a la carne asada y el arroz.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca suero costeño fresco y asegúrate de que esté refrigerado para garantizar su calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina el suero costeño con verduras frescas o frijoles para un plato nutritivo.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>El yogur griego o el suero de leche son buenas alternativas si no tienes acceso al suero costeño.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El consumo responsable de productos lácteos, incluido el suero costeño, es importante para la sostenibilidad ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Suero = document.getElementById('macronutrientChartSuero').getContext('2d');
        const macronutrientChartSuero = new Chart(ctx1Suero, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [6, 4.5, 6.4],
                    backgroundColor: ['#f39c12', '#27ae60', '#2980b9'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Suero = document.getElementById('micronutrientChartSuero').getContext('2d');
        const micronutrientChartSuero = new Chart(ctx2Suero, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Fósforo', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [111, 50, 115],
                    backgroundColor: 'rgba(211, 84, 0, 0.2)', // Color de fondo
                    borderColor: 'rgba(211, 84, 0, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(211, 84, 0, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Suero = document.getElementById('caloriesChartSuero').getContext('2d');
        const caloriesChartSuero = new Chart(ctx3Suero, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [97, 100, 95, 98, 97],
                    backgroundColor: 'rgba(255, 159, 64, 0.2)', // Color de fondo
                    borderColor: 'rgba(255, 159, 64, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Suero = document.getElementById('comparisonChartSuero').getContext('2d');
        const comparisonChartSuero = new Chart(ctx4Suero, {
            type: 'bar',
            data: {
                labels: ['Suero Costeño', 'Yogur', 'Leche'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [97, 59, 42],
                    backgroundColor: ['#8e44ad', '#2c3e50', '#e74c3c'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
