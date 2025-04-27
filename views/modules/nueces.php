<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Nueces</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/d6/38/7e/d6387e0a41fc24d7cb1b514dca9aac14.jpg" alt="Imagen de Nueces">
            <p class="category">Categoría: Frutos Secos</p>
            <p class="description">Las nueces son un tipo de fruto seco altamente nutritivo, conocido por su sabor característico y beneficios para la salud, especialmente en la salud del corazón.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las nueces son las semillas comestibles de los nogales, muy ricas en grasas saludables y nutrientes esenciales. Se pueden consumir solas, en ensaladas o como parte de diversos platillos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>654 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>15.2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>13.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>65.2g</td>
                </tr>
                <tr>
                    <td>Calcio</td>
                    <td>98mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Calorías:</strong> Su alto contenido calórico requiere un consumo moderado, especialmente para quienes controlan su ingesta calórica.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Las nueces pueden causar reacciones alérgicas en algunas personas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Consumir nueces regularmente puede ayudar a reducir el riesgo de enfermedades del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Ricas en Antioxidantes:</strong> Las nueces contienen antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartNueces"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartNueces"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartNueces"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartNueces"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Nueces</h2>
            <p>Las nueces son ideales en ensaladas, mezclas de frutos secos y como ingrediente en panes y postres.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las nueces son a menudo conocidas como "el cerebro" debido a su forma y su asociación con la salud cerebral.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige nueces que sean frescas y de un color uniforme, evitando aquellas con manchas o que se sientan blandas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina nueces con yogur, frutas frescas o úsalas para decorar tus platos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si eres alérgico a las nueces, puedes probar semillas como las de sésamo o chía como alternativas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Prefiere nueces de fuentes sostenibles que respeten las prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Nueces = document.getElementById('macronutrientChartNueces').getContext('2d');
        const macronutrientChartNueces = new Chart(ctx1Nueces, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [65.2, 13.7, 15.2],
                    backgroundColor: ['#8e44ad', '#e67e22', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Nueces = document.getElementById('micronutrientChartNueces').getContext('2d');
        const micronutrientChartNueces = new Chart(ctx2Nueces, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Magnesio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [98, 158, 346],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(46, 204, 113, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Nueces = document.getElementById('caloriesChartNueces').getContext('2d');
        const caloriesChartNueces = new Chart(ctx3Nueces, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [654, 655, 650, 652, 658],
                    backgroundColor: 'rgba(231, 76, 60, 0.2)', // Color de fondo
                    borderColor: 'rgba(231, 76, 60, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Nueces = document.getElementById('comparisonChartNueces').getContext('2d');
        const comparisonChartNueces = new Chart(ctx4Nueces, {
            type: 'bar',
            data: {
                labels: ['Nueces', 'Avellanas', 'Almendras'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [654, 628, 576],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
