<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Mora</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/una-foto-de-mora-negra_144627-1120.jpg" alt="Imagen de Mora">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La mora es una fruta pequeña y jugosa, conocida por su sabor dulce y ácido, rica en antioxidantes y vitaminas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las moras son un fruto pequeño que crece en racimos. Se pueden consumir frescas, en mermeladas, batidos o como complemento en postres.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>43 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.39g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>9.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.49g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>5.3g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Altas en Azúcar:</strong> Aunque son naturales, las moras contienen azúcar, lo que debe considerarse en dietas restrictivas.</p>
            </div>
            <div class="description">
                <p><strong>Posibles Alergias:</strong> Algunas personas pueden ser alérgicas a las moras, especialmente aquellos con alergias a otras frutas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Antioxidantes:</strong> Las moras son una excelente fuente de antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> Gracias a su alto contenido de fibra, ayudan a mejorar la digestión y el tránsito intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Contribuyen a la salud del corazón al reducir la inflamación y mejorar la circulación.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartMora"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartMora"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartMora"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartMora"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Mora</h2>
            <p>Las moras se pueden usar en ensaladas, batidos, tartas o simplemente disfrutarlas solas como un snack saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las moras han sido utilizadas desde la antigüedad por sus propiedades medicinales y su sabor delicioso.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca moras que sean firmes y de un color profundo. Evita aquellas que tengan manchas o se vean aplastadas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina moras con yogur para un desayuno saludable o úsalas como topping en avena o ensaladas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes moras, puedes usar arándanos o frambuesas como alternativa en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de moras puede ser sostenible si se aplican prácticas de cultivo responsables y se evita el uso excesivo de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Mora = document.getElementById('macronutrientChartMora').getContext('2d');
        const macronutrientChartMora = new Chart(ctx1Mora, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.39, 9.6, 0.49],
                    backgroundColor: ['#cc99ff', '#ffcc99', '#99ccff'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Mora = document.getElementById('micronutrientChartMora').getContext('2d');
        const micronutrientChartMora = new Chart(ctx2Mora, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [300, 30, 153],
                    backgroundColor: 'rgba(204, 153, 255, 0.2)',
                    borderColor: 'rgba(204, 153, 255, 1)',
                    pointBackgroundColor: 'rgba(204, 153, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Mora = document.getElementById('caloriesChartMora').getContext('2d');
        const caloriesChartMora = new Chart(ctx3Mora, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [43, 45, 44, 46, 43],
                    backgroundColor: 'rgba(204, 153, 255, 0.2)',
                    borderColor: 'rgba(204, 153, 255, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Mora = document.getElementById('comparisonChartMora').getContext('2d');
        const comparisonChartMora = new Chart(ctx4Mora, {
            type: 'bar',
            data: {
                labels: ['Mora', 'Frambuesa', 'Arándano'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [43, 52, 57],
                    backgroundColor: ['#cc99ff', '#99ccff', '#ff99cc'],
                }]
            },
        });
    </script>
</body>
</html>
