<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pollo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/pollo-asado_144627-1282.jpg" alt="Imagen de Pollo">
            <p class="category">Categoría: Carne</p>
            <p class="description">El pollo es una fuente de proteína magra muy versátil y popular en diversas cocinas alrededor del mundo. Se puede preparar de múltiples formas, incluyendo asado, a la parrilla, frito o guisado, y es una opción ideal para dietas equilibradas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El pollo es una carne blanca que se obtiene de las aves de corral y es ampliamente consumido en todo el mundo debido a su sabor, textura y valor nutricional. Es una buena fuente de proteínas, vitaminas del grupo B y minerales, lo que lo convierte en un alimento clave en muchas dietas. Además, es bajo en grasas saturadas, especialmente si se consume sin piel.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>165 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>31g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>3.6g</td>
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
                <p><strong>Contaminación cruzada:</strong> El pollo crudo puede llevar bacterias como Salmonella o Campylobacter, por lo que es esencial manipularlo con cuidado y cocinarlo adecuadamente.</p>
            </div>
            <div class="description">
                <p><strong>Consumo excesivo:</strong> Un consumo excesivo de carne roja y aves puede estar relacionado con ciertos problemas de salud, como enfermedades cardiovasculares si no se consume de manera equilibrada.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alta en proteínas:</strong> El pollo es una de las fuentes de proteínas más completas y fácilmente digeribles, ideal para la construcción muscular y la recuperación.</p>
            </div>
            <div class="description">
                <p><strong>Bajo en grasas:</strong> Especialmente cuando se consume sin piel, el pollo es bajo en grasas saturadas, lo que lo hace una opción saludable para mantener un peso equilibrado.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPollo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPollo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPollo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPollo"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pollo</h2>
            <p>El pollo se puede cocinar de muchas maneras, desde pollo asado, pechugas a la parrilla, pollo al curry, hasta sopas y guisos. También se puede usar en ensaladas y wraps para una comida ligera.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El pollo es uno de los alimentos más consumidos en el mundo. Su producción ha aumentado enormemente en las últimas décadas, convirtiéndose en una de las principales fuentes de proteína animal a nivel global.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pollo, busca carne de color rosado pálido y evita cualquier parte con manchas oscuras. Elige pollo de granja cuando sea posible, ya que generalmente tiene un mejor perfil nutricional y es más sostenible.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El pollo combina perfectamente con verduras al vapor, granos integrales como quinoa o arroz integral, y legumbres para una comida completa y equilibrada. También se puede marinar con hierbas y especias para añadir sabor sin calorías adicionales.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si prefieres evitar el pollo, considera alternativas como el pavo, el pescado o las legumbres, que también son excelentes fuentes de proteínas y ofrecen beneficios nutricionales similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de pollo tiene un impacto ambiental menor en comparación con la carne roja, pero aún así, es importante elegir opciones de pollo criadas de manera sostenible y responsable para reducir la huella ecológica.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pollo = document.getElementById('macronutrientChartPollo').getContext('2d');
        const macronutrientChartPollo = new Chart(ctx1Pollo, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Proteínas', 'Carbohidratos'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [3.6, 31, 0],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pollo = document.getElementById('micronutrientChartPollo').getContext('2d');
        const micronutrientChartPollo = new Chart(ctx2Pollo, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Zinc', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1, 0.9, 0.3], // Valores aproximados de micronutrientes por 100g
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(52, 152, 219, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pollo = document.getElementById('caloriesChartPollo').getContext('2d');
        const caloriesChartPollo = new Chart(ctx3Pollo, {
            type: 'line',
            data: {
                labels: ['1 Mes', '3 Meses', '6 Meses', '12 Meses'],
                datasets: [{
                    label: 'Calorías',
                    data: [160, 165, 170, 175],
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                    borderWidth: 2
                }]
            },
        });

        // Gráfico comparativo con otros alimentos
        const ctx4Pollo = document.getElementById('comparisonChartPollo').getContext('2d');
        const comparisonChartPollo = new Chart(ctx4Pollo, {
            type: 'bar',
            data: {
                labels: ['Pollo', 'Carne de Res', 'Pescado', 'Cerdo'],
                datasets: [{
                    label: 'Comparación de Calorías',
                    data: [165, 250, 206, 242], // Calorías de cada alimento
                    backgroundColor: ['#e74c3c', '#2980b9', '#27ae60', '#f39c12'],
                }]
            },
        });
    </script>
</body>
</html>
