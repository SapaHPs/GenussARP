<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pomelo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/pomelos-sobre-fondo-blanco_144627-129.jpg" alt="Imagen de Pomelo">
            <p class="category">Categoría: Fruta</p>
            <p class="description">El pomelo es una fruta cítrica refrescante y jugosa, rica en vitamina C y antioxidantes, que se disfruta sola o en ensaladas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El pomelo, conocido por su sabor agridulce, es una fruta cítrica que pertenece a la familia de las rutáceas. Es popular por sus propiedades refrescantes y se consume en muchas partes del mundo. Se puede disfrutar solo, en jugos, o en ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>42 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.8g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>10.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Interacciones Medicamentosas:</strong> El pomelo puede interactuar con ciertos medicamentos, especialmente aquellos relacionados con la presión arterial y el colesterol.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Vitamina C:</strong> El pomelo es una excelente fuente de vitamina C, lo que ayuda a fortalecer el sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el daño celular y pueden reducir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Ayuda en la Pérdida de Peso:</strong> Su bajo contenido calórico y alto contenido en agua lo convierte en un excelente snack para quienes buscan perder peso.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPomelo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPomelo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPomelo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPomelo"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pomelo</h2>
            <p>El pomelo se puede utilizar en ensaladas, como acompañante de mariscos, o en jugos y smoothies. También es un excelente complemento en postres frescos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El pomelo es un híbrido natural entre la naranja y el pomelo, y se cultiva en muchos climas cálidos de todo el mundo. Se dice que su nombre proviene de la palabra "grapefruit", que hace referencia a la forma en que crece en racimos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pomelos, busca aquellos que sean pesados para su tamaño, con una piel firme y sin manchas. Los pomelos más grandes suelen ser más dulces.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El pomelo combina bien con otras frutas, espinacas, o en aderezos para ensaladas. Puedes mezclarlo con aguacate y pescado para un plato delicioso y nutritivo.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes encontrar pomelo, considera usar naranjas o mandarinas como alternativas, ya que ofrecen sabores y nutrientes similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Es importante elegir pomelos cultivados de manera sostenible, preferiblemente orgánicos, para reducir el impacto ambiental y el uso de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pomelo = document.getElementById('macronutrientChartPomelo').getContext('2d');
        const macronutrientChartPomelo = new Chart(ctx1Pomelo, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.8, 10.7, 0.1],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pomelo = document.getElementById('micronutrientChartPomelo').getContext('2d');
        const micronutrientChartPomelo = new Chart(ctx2Pomelo, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Potasio', 'Fibra'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [31, 240, 1.4],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pomelo = document.getElementById('caloriesChartPomelo').getContext('2d');
        const caloriesChartPomelo = new Chart(ctx3Pomelo, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [42, 45, 40, 44, 42],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Pomelo = document.getElementById('comparisonChartPomelo').getContext('2d');
        const comparisonChartPomelo = new Chart(ctx4Pomelo, {
            type: 'bar',
            data: {
                labels: ['Pomelo', 'Naranja', 'Limón'],
                datasets: [{
                    label: 'Comparación de Nutrientes (Calorías por 100g)',
                    data: [42, 47, 29],
                    backgroundColor: 'rgba(255, 204, 153, 0.5)',
                }]
            },
        });
    </script>
</body>
</html>
