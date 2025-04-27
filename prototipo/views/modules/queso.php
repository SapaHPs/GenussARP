<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Queso</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/trozo-queso_144627-1356.jpg" alt="Imagen de Queso">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">El queso es un producto lácteo fermentado que se obtiene a partir de la coagulación de la leche. Existen cientos de variedades, cada una con su propio sabor y textura, lo que lo convierte en un alimento versátil en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El queso es un alimento elaborado a partir de la leche de vaca, cabra, oveja o búfala. Es rico en calcio y proteínas, y puede variar en sabor, textura y contenido de grasa. Se puede consumir solo, en platos, sándwiches o como parte de una variedad de recetas, desde ensaladas hasta pastas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>402 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>25g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>1.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>33g</td>
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
                <p><strong>Intolerancia a la lactosa:</strong> Algunas personas pueden experimentar problemas digestivos al consumir queso, especialmente aquellos con intolerancia a la lactosa.</p>
            </div>
            <div class="description">
                <p><strong>Alto contenido en grasas:</strong> Algunos quesos tienen un alto contenido en grasas saturadas, por lo que su consumo debe ser moderado, especialmente en personas con problemas de colesterol.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de calcio:</strong> El queso es una excelente fuente de calcio, esencial para la salud ósea y dental.</p>
            </div>
            <div class="description">
                <p><strong>Proteínas de alta calidad:</strong> Contiene proteínas que ayudan en el crecimiento y reparación de tejidos, lo que es beneficioso para todos, especialmente para deportistas y personas activas.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartQueso"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartQueso"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartQueso"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartQueso"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Queso</h2>
            <p>El queso se utiliza en una gran variedad de platos, desde pizzas, pastas, ensaladas hasta tablas de quesos. También es un excelente ingrediente para salsas y gratinados.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Se estima que hay más de 1,800 variedades de queso en todo el mundo, cada una con características únicas de sabor, textura y aroma.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar queso, opta por opciones frescas y revisa la fecha de caducidad. Los quesos más frescos suelen tener un mejor sabor y textura. Si es posible, prueba antes de comprar para asegurarte de que te guste.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El queso combina bien con frutas como uvas y peras, así como con nueces y verduras frescas. También se puede utilizar en sándwiches integrales y ensaladas para agregar sabor y nutrientes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si prefieres evitar los productos lácteos, considera alternativas como el queso a base de nueces, tofu o quesos veganos elaborados a partir de ingredientes vegetales.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de queso tiene un impacto ambiental significativo debido a la crianza de animales para la obtención de leche. Optar por quesos orgánicos y de productores sostenibles puede ayudar a reducir la huella ecológica.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Queso = document.getElementById('macronutrientChartQueso').getContext('2d');
        const macronutrientChartQueso = new Chart(ctx1Queso, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Proteínas', 'Carbohidratos'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [33, 25, 1.3],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Queso = document.getElementById('micronutrientChartQueso').getContext('2d');
        const micronutrientChartQueso = new Chart(ctx2Queso, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Fósforo', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [721, 500, 1.3], // Valores aproximados de micronutrientes por 100g
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(52, 152, 219, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Queso = document.getElementById('caloriesChartQueso').getContext('2d');
        const caloriesChartQueso = new Chart(ctx3Queso, {
            type: 'line',
            data: {
                labels: ['1 Mes', '3 Meses', '6 Meses', '12 Meses'],
                datasets: [{
                    label: 'Calorías',
                    data: [400, 402, 405, 410],
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                    borderWidth: 2
                }]
            },
        });

        // Gráfico comparativo con otros alimentos
        const ctx4Queso = document.getElementById('comparisonChartQueso').getContext('2d');
        const comparisonChartQueso = new Chart(ctx4Queso, {
            type: 'bar',
            data: {
                labels: ['Queso', 'Yogur', 'Leche', 'Requesón'],
                datasets: [{
                    label: 'Comparación de Calorías',
                    data: [402, 59, 42, 98], // Calorías de cada alimento
                    backgroundColor: ['#e74c3c', '#2980b9', '#27ae60', '#f39c12'],
                }]
            },
        });
    </script>
</body>
</html>
