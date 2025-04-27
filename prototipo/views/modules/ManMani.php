<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Mantequilla de Maní</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/taza-mantequilla-mani-sobre-madera_144627-355.jpg" alt="Imagen de Mantequilla de Maní">
            <p class="category">Categoría: Grasas Saludables</p>
            <p class="description">La mantequilla de maní es un untable delicioso y nutritivo, rico en grasas saludables y proteínas, ideal para meriendas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La mantequilla de maní es un producto hecho de maní triturado. Es muy versátil y se puede usar en sándwiches, batidos o como ingrediente en diversas recetas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>588 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>25.09g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>20.03g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>50.39g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>6.0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Calorías:</strong> Su consumo excesivo puede contribuir al aumento de peso.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Puede causar reacciones alérgicas en personas con sensibilidad al maní.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> Aporta proteínas, grasas saludables y fibra que son esenciales para una buena salud.</p>
            </div>
            <div class="description">
                <p><strong>Control del Apetito:</strong> Su alto contenido de grasa y proteína puede ayudar a mantener la saciedad.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Las grasas monoinsaturadas son beneficiosas para la salud del corazón.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartMantequillaDeMani"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartMantequillaDeMani"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartMantequillaDeMani"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartMantequillaDeMani"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Mantequilla de Maní</h2>
            <p>La mantequilla de maní se puede usar en sándwiches, batidos, o como ingrediente en galletas y postres. Prueba untarla sobre tostadas con rodajas de plátano.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La mantequilla de maní se hizo popular en Estados Unidos en el siglo XIX y se ha convertido en un alimento básico en muchos hogares.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Opta por mantequilla de maní natural que contenga solo maní y sal, evitando aquellos con azúcares añadidos y aceites hidrogenados.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Prueba la mantequilla de maní con rodajas de manzana, apio o como parte de un batido de plátano y espinacas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes mantequilla de maní, puedes probar con mantequilla de almendra o mantequilla de anacardo como alternativas saludables.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de maní puede tener un impacto ambiental moderado, pero las prácticas de cultivo sostenible ayudan a reducir este efecto.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1MantequillaDeMani = document.getElementById('macronutrientChartMantequillaDeMani').getContext('2d');
        const macronutrientChartMantequillaDeMani = new Chart(ctx1MantequillaDeMani, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [25.09, 20.03, 50.39],
                    backgroundColor: ['#ffcc80', '#ff5722', '#8d6e63'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2MantequillaDeMani = document.getElementById('micronutrientChartMantequillaDeMani').getContext('2d');
        const micronutrientChartMantequillaDeMani = new Chart(ctx2MantequillaDeMani, {
            type: 'radar',
            data: {
                labels: ['Vitamina E', 'Magnesio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [4.93, 168, 376],
                    backgroundColor: 'rgba(255, 204, 128, 0.2)',
                    borderColor: 'rgba(255, 204, 128, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 128, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3MantequillaDeMani = document.getElementById('caloriesChartMantequillaDeMani').getContext('2d');
        const caloriesChartMantequillaDeMani = new Chart(ctx3MantequillaDeMani, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [588, 590, 586, 592, 588],
                    backgroundColor: 'rgba(255, 204, 128, 0.2)',
                    borderColor: 'rgba(255, 204, 128, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4MantequillaDeMani = document.getElementById('comparisonChartMantequillaDeMani').getContext('2d');
        const comparisonChartMantequillaDeMani = new Chart(ctx4MantequillaDeMani, {
            type: 'bar',
            data: {
                labels: ['Mantequilla de Maní', 'Almendra', 'Avellana'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [588, 575, 629],
                    backgroundColor: ['#ffcc80', '#ff5722', '#8d6e63'],
                }]
            },
        });
    </script>
</body>
</html>
