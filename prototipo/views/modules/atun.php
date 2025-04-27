<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Atún</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/pescado-atun-lomos-asados_144627-19302.jpg" alt="Imagen de Atún">
            <p class="category">Categoría: Pescados</p>
            <p class="description">El atún es un pescado nutritivo y versátil, ideal para diversas preparaciones culinarias.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El atún es una excelente fuente de proteínas, ácidos grasos omega-3 y otros nutrientes esenciales, lo que lo convierte en una opción saludable para incluir en tu dieta.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>132 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>28.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>1.0mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al pescado, incluyendo el atún.</p>
                <p><strong>Mercurio:</strong> El atún puede contener niveles de mercurio que pueden ser perjudiciales en grandes cantidades.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Omega-3:</strong> El atún es una gran fuente de ácidos grasos omega-3, que son beneficiosos para la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Beneficioso para la Piel:</strong> Los ácidos grasos omega-3 también contribuyen a la salud de la piel.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartTuna"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartTuna"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartTuna"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartTuna"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Atún</h2>
            <p>El atún se puede utilizar en una variedad de recetas, desde ensaladas y sándwiches hasta sushi y platos calientes.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El atún es uno de los pescados más consumidos en el mundo y es popular en la cocina japonesa.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca atún fresco o enlatado de buena calidad, asegurándote de que tenga un color brillante y un olor fresco.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El atún combina bien con verduras frescas, legumbres y granos integrales.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes optar por otros pescados como el salmón o la trucha, que también son ricos en omega-3.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Opta por atún de fuentes sostenibles y responsables para minimizar el impacto ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Tuna = document.getElementById('macronutrientChartTuna').getContext('2d');
        const macronutrientChartTuna = new Chart(ctx1Tuna, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.7, 0, 28.0],
                    backgroundColor: ['#2ecc71', '#f39c12', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Tuna = document.getElementById('micronutrientChartTuna').getContext('2d');
        const micronutrientChartTuna = new Chart(ctx2Tuna, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Tiamina', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.0, 0.9, 2.2],
                    backgroundColor: 'rgba(155, 89, 182, 0.2)', // Color de fondo
                    borderColor: 'rgba(155, 89, 182, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(155, 89, 182, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Tuna = document.getElementById('caloriesChartTuna').getContext('2d');
        const caloriesChartTuna = new Chart(ctx3Tuna, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [132, 136, 130, 138, 135],
                    backgroundColor: 'rgba(241, 196, 15, 0.2)', // Color de fondo
                    borderColor: 'rgba(241, 196, 15, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Tuna = document.getElementById('comparisonChartTuna').getContext('2d');
        const comparisonChartTuna = new Chart(ctx4Tuna, {
            type: 'bar',
            data: {
                labels: ['Atún', 'Salmón', 'Trucha'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [132, 206, 148],
                    backgroundColor: ['#e74c3c', '#3498db', '#9b59b6'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
