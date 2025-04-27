<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Mandarina</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/a5/54/ab/a554ab873eeaa4ea49a05dd936348944.jpg" alt="Imagen de Mandarina">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La mandarina es una fruta cítrica, dulce y jugosa, rica en vitamina C y antioxidantes, perfecta para un snack saludable.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La mandarina es un cítrico popular por su sabor dulce y su facilidad para pelar. Es una excelente fuente de vitamina C, fibra y otros nutrientes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>53 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.81g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>13.34g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.31g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Acidez:</strong> En algunas personas, la mandarina puede causar acidez estomacal o reflujo.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los cítricos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Vitamina C:</strong> Ayuda a fortalecer el sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que protegen las células del daño.</p>
            </div>
            <div class="description">
                <p><strong>Promueve la Salud Digestiva:</strong> La fibra ayuda en la digestión y previene el estreñimiento.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartMandarin"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartMandarin"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartMandarin"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartMandarin"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Mandarina</h2>
            <p>La mandarina se puede utilizar en ensaladas, postres, y batidos. Prueba una ensalada de mandarina con espinacas y nueces.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La mandarina es originaria de Asia y es conocida por su fácil pelado y dulzura. Es un símbolo de buena fortuna en algunas culturas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca mandarinas firmes y sin manchas. Deben tener un color vibrante y una piel ligeramente arrugada.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina mandarinas con yogur y granola para un desayuno delicioso y nutritivo.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes mandarinas, puedes usar naranjas o clementinas como sustitutos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de mandarinas tiene un impacto moderado en el medio ambiente, pero las prácticas de agricultura sostenible pueden reducirlo.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Mandarin = document.getElementById('macronutrientChartMandarin').getContext('2d');
        const macronutrientChartMandarin = new Chart(ctx1Mandarin, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.81, 13.34, 0.31],
                    backgroundColor: ['#ff9800', '#ffcc00', '#4caf50'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Mandarin = document.getElementById('micronutrientChartMandarin').getContext('2d');
        const micronutrientChartMandarin = new Chart(ctx2Mandarin, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Calcio', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [30, 37, 181],
                    backgroundColor: 'rgba(255, 153, 0, 0.2)',
                    borderColor: 'rgba(255, 153, 0, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 0, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Mandarin = document.getElementById('caloriesChartMandarin').getContext('2d');
        const caloriesChartMandarin = new Chart(ctx3Mandarin, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [53, 55, 54, 52, 58],
                    backgroundColor: 'rgba(255, 153, 0, 0.2)',
                    borderColor: 'rgba(255, 153, 0, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Mandarin = document.getElementById('comparisonChartMandarin').getContext('2d');
        const comparisonChartMandarin = new Chart(ctx4Mandarin, {
            type: 'bar',
            data: {
                labels: ['Mandarina', 'Naranja', 'Limón'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [53, 47, 29],
                    backgroundColor: ['#ff9800', '#ffcc00', '#4caf50'],
                    borderColor: ['#ff9800', '#ffcc00', '#4caf50'],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
