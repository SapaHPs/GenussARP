<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Melón</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/una-foto-de-corte-de-melon-fresco-sobre-fondo-blanco_23-2148356974.jpg" alt="Imagen de Melón">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El melón es una fruta refrescante y jugosa, conocida por su sabor dulce y su alto contenido de agua.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El melón es una fruta de verano muy popular. Es refrescante, nutritivo y se puede disfrutar solo o en ensaladas y batidos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>34 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.84g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>8.16g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.19g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0.9g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Altas en Azúcar:</strong> Aunque es natural, el melón puede tener un alto contenido de azúcar, lo que puede no ser ideal para personas con diabetes.</p>
            </div>
            <div class="description">
                <p><strong>Posibles Alergias:</strong> Algunas personas pueden experimentar alergias al consumir melón, especialmente aquellos alérgicos a otras frutas de la familia de las cucurbitáceas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Hidratación:</strong> Su alto contenido de agua ayuda a mantener una buena hidratación, especialmente en climas cálidos.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Vitaminas:</strong> Es una buena fuente de vitamina A y vitamina C, que son esenciales para la salud de la piel y el sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Bajo en Calorías:</strong> Ideal para aquellos que buscan un snack saludable y bajo en calorías.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartMelon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartMelon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartMelon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartMelon"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Melón</h2>
            <p>El melón se puede utilizar en ensaladas, batidos, o simplemente disfrutarlo en trozos. También se puede hacer un sorbete refrescante.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El melón pertenece a la familia de las cucurbitáceas y su origen se remonta a África y Asia, donde se cultivaba desde hace miles de años.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca melones que sean firmes y tengan un aroma dulce. El color debe ser uniforme y su cáscara debe estar libre de imperfecciones.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina el melón con menta para una ensalada refrescante, o mézclalo en un batido con yogur y otros frutos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes melón, puedes sustituirlo por sandía o piña en ensaladas y bebidas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de melones puede ser sostenible si se aplican prácticas agrícolas responsables que minimicen el uso de pesticidas y agua.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Melon = document.getElementById('macronutrientChartMelon').getContext('2d');
        const macronutrientChartMelon = new Chart(ctx1Melon, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.84, 8.16, 0.19],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Melon = document.getElementById('micronutrientChartMelon').getContext('2d');
        const micronutrientChartMelon = new Chart(ctx2Melon, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [338, 8.4, 267],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Melon = document.getElementById('caloriesChartMelon').getContext('2d');
        const caloriesChartMelon = new Chart(ctx3Melon, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [34, 36, 35, 37, 34],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Melon = document.getElementById('comparisonChartMelon').getContext('2d');
        const comparisonChartMelon = new Chart(ctx4Melon, {
            type: 'bar',
            data: {
                labels: ['Melón', 'Sandía', 'Piña'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [34, 30, 50],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
