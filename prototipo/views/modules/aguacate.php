<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Aguacate</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/aguacates-frescos-rebanados_144627-20387.jpg" alt="Imagen de Aguacate">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El aguacate es una fruta rica en grasas saludables, utilizada ampliamente en la cocina por su sabor cremoso y suave.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El aguacate es famoso por ser una excelente fuente de grasas saludables, principalmente grasas monoinsaturadas, así como una buena fuente de fibra, vitaminas y minerales.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>160 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>9.0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>15.0g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>7.0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Calorías:</strong> El aguacate es denso en calorías, lo que puede ser contraproducente en dietas muy estrictas en cuanto a ingesta calórica.</p>
                <p><strong>Alergias:</strong> Aunque es raro, algunas personas pueden ser alérgicas al aguacate.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Grasas Saludables:</strong> Contiene grasas monoinsaturadas que son beneficiosas para la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de Fibra:</strong> El aguacate es alto en fibra, lo que mejora la digestión y promueve la saciedad.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartAvocado"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartAvocado"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartAvocado"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartAvocado"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Aguacate</h2>
            <p>El aguacate es muy versátil y se puede utilizar en recetas como guacamole, ensaladas, batidos, y sándwiches.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El aguacate se considera una fruta y no un vegetal, a pesar de su uso en preparaciones saladas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige aguacates que estén ligeramente blandos al tacto pero sin manchas, lo que indica que están maduros y listos para consumir.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El aguacate combina bien con huevos, pan integral, salmón y vegetales frescos para crear comidas balanceadas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Como alternativa al aguacate, puedes probar con otros alimentos ricos en grasas saludables, como el aceite de oliva o las nueces.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de aguacate tiene un alto impacto ambiental debido al consumo de agua y la deforestación. Se recomienda consumir aguacates de fuentes sostenibles.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Avocado = document.getElementById('macronutrientChartAvocado').getContext('2d');
        const macronutrientChartAvocado = new Chart(ctx1Avocado, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [15.0, 9.0, 2.0],
                    backgroundColor: ['#27ae60', '#f39c12', '#2980b9'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Avocado = document.getElementById('micronutrientChartAvocado').getContext('2d');
        const micronutrientChartAvocado = new Chart(ctx2Avocado, {
            type: 'radar',
            data: {
                labels: ['Fibra', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [7.0, 26.0, 485.0],
                    backgroundColor: 'rgba(39, 174, 96, 0.2)', // Color de fondo
                    borderColor: 'rgba(39, 174, 96, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(39, 174, 96, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Avocado = document.getElementById('caloriesChartAvocado').getContext('2d');
        const caloriesChartAvocado = new Chart(ctx3Avocado, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [160, 155, 165, 170, 158],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Avocado = document.getElementById('comparisonChartAvocado').getContext('2d');
        const comparisonChartAvocado = new Chart(ctx4Avocado, {
            type: 'bar',
            data: {
                labels: ['Aguacate', 'Aceitunas', 'Almendras'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [160, 115, 576],
                    backgroundColor: ['#27ae60', '#f39c12', '#c0392b'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
