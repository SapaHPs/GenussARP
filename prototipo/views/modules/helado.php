<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Helado</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/helados-sabores-variados_23-2148669816.jpg" alt="Imagen de Helado">
            <p class="category">Categoría: Postre</p>
            <p class="description">El helado es un postre frío y cremoso que se elabora a partir de leche, crema y otros ingredientes saborizantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El helado es un dulce que se congela y se bate para obtener una textura suave y cremosa. Existen innumerables sabores y variedades, desde los clásicos como vainilla y chocolate hasta combinaciones innovadoras.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>207 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>3.5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>23g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>11g</td>
                </tr>
                <tr>
                    <td>Calcio</td>
                    <td>80mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Azúcar:</strong> Muchos helados contienen grandes cantidades de azúcar, lo que puede ser perjudicial para la salud si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Intolerancia a la Lactosa:</strong> Las personas con intolerancia a la lactosa pueden experimentar malestar al consumir helados tradicionales.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Feliz y Satisfactorio:</strong> Comer helado puede mejorar el estado de ánimo gracias a la liberación de endorfinas.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de Calcio:</strong> Contiene calcio que es importante para la salud ósea.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartHelado"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartHelado"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartHelado"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartHelado"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Helado</h2>
            <p>El helado se puede disfrutar solo o como parte de recetas como el batido de helado, sundae o en pasteles.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El helado se originó en China hace más de 2000 años, donde se mezclaba nieve con leche y arroz.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca helados que utilicen ingredientes naturales y bajos en azúcar para una opción más saludable.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina el helado con frutas frescas o nueces para un postre más equilibrado.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>El yogur helado o los sorbetes de frutas son excelentes alternativas más saludables al helado tradicional.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por helados producidos localmente y de manera sostenible puede ayudar a reducir el impacto ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Helado = document.getElementById('macronutrientChartHelado').getContext('2d');
        const macronutrientChartHelado = new Chart(ctx1Helado, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [11, 23, 3.5],
                    backgroundColor: ['#e74c3c', '#f39c12', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Helado = document.getElementById('micronutrientChartHelado').getContext('2d');
        const micronutrientChartHelado = new Chart(ctx2Helado, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Fósforo', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [80, 30, 130],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(46, 204, 113, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Helado = document.getElementById('caloriesChartHelado').getContext('2d');
        const caloriesChartHelado = new Chart(ctx3Helado, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [207, 210, 200, 205, 207],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Helado = document.getElementById('comparisonChartHelado').getContext('2d');
        const comparisonChartHelado = new Chart(ctx4Helado, {
            type: 'bar',
            data: {
                labels: ['Helado', 'Yogur', 'Leche'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [207, 59, 42],
                    backgroundColor: ['#34495e', '#8e44ad', '#f39c12'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
