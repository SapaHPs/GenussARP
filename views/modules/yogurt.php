<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Yogurt</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/a3/95/a2/a395a234ddcd6925f8f6f4c90a2a58fe.jpg" alt="Imagen de Yogur">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">El yogurt es un producto lácteo cremoso, lleno de probióticos que son beneficiosos para la salud digestiva. Se puede disfrutar solo o como base para smoothies y aderezos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El yogurt se produce mediante la fermentación de la leche con cultivos bacterianos. Es una fuente rica de proteínas, calcio y vitaminas, y puede contribuir a la salud intestinal. Existen varias variedades, como yogur natural, griego y con sabor.</p><br><br>
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
                    <td>4.7g</td>
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
                <p><strong>Lactosa:</strong> Algunas personas son intolerantes a la lactosa y pueden experimentar malestar digestivo al consumir yogur.</p>
            </div>
            <div class="description">
                <p><strong>Azúcares Añadidos:</strong> Muchos yogures saborizados contienen azúcares añadidos, lo que puede aumentar las calorías y afectar la salud.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Probióticos:</strong> El Yogurt contiene cultivos vivos que ayudan a mantener un equilibrio saludable de bacterias en el intestino.</p>
            </div>
            <div class="description">
                <p><strong>Fortalecimiento Óseo:</strong> Es una excelente fuente de calcio, que es esencial para la salud ósea.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartYogur"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartYogur"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartYogur"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartYogur"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Yogur</h2>
            <p>El yogur es perfecto para smoothies, aderezos, marinadas, y como base para parfaits de frutas. Se puede mezclar con avena para un desayuno saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El yogur ha sido consumido durante miles de años y se cree que se originó en el Medio Oriente. Es conocido por su textura cremosa y sabor ácido.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar yogur, elige variedades con cultivos vivos y evita aquellos con azúcares añadidos. El yogur griego es una opción más rica en proteínas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El yogur combina bien con frutas frescas, nueces, miel y canela, creando un desayuno nutritivo y delicioso.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir yogur lácteo, considera alternativas a base de plantas como el yogur de almendra o coco.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de lácteos puede tener un impacto ambiental significativo. Elegir productos lácteos orgánicos y locales puede ayudar a mitigar este impacto.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Yogur = document.getElementById('macronutrientChartYogur').getContext('2d');
        const macronutrientChartYogur = new Chart(ctx1Yogur, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Proteínas', 'Carbohidratos'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.4, 10, 4.7],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Yogur = document.getElementById('micronutrientChartYogur').getContext('2d');
        const micronutrientChartYogur = new Chart(ctx2Yogur, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Vitamina B12', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [110, 0.5, 95], // Valores aproximados de micronutrientes por 100g
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(52, 152, 219, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Yogur = document.getElementById('caloriesChartYogur').getContext('2d');
        const caloriesChartYogur = new Chart(ctx3Yogur, {
            type: 'line',
            data: {
                labels: ['1 Mes', '3 Meses', '6 Meses', '12 Meses'],
                datasets: [{
                    label: 'Calorías',
                    data: [59, 62, 65, 68], // Valores aproximados de calorías en el tiempo
                    backgroundColor: 'rgba(231, 76, 60, 0.2)', // Color de fondo
                    borderColor: 'rgba(231, 76, 60, 1)', // Color de borde
                    borderWidth: 2,
                    fill: false,
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Yogur = document.getElementById('comparisonChartYogur').getContext('2d');
        const comparisonChartYogur = new Chart(ctx4Yogur, {
            type: 'bar',
            data: {
                labels: ['Yogurt', 'Leche', 'Queso'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [59, 42, 402], // Valores de comparación
                    backgroundColor: 'rgba(46, 204, 113, 0.5)',
                }]
            },
        });
    </script>
</body>
</html>
