<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pera de Agua</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/dd/64/94/dd6494c13c41bee38deb3ebc446076a6.jpg" alt="Imagen de Pera de Agua">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La pera de agua es una fruta jugosa y dulce, conocida por su textura crujiente y su sabor refrescante.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La pera de agua es una fruta popular en climas cálidos. Se caracteriza por su piel suave y jugosa, siendo un excelente refrigerio y fuente de hidratación en días calurosos. Su sabor dulce la hace ideal para consumir sola o en ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>58 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>15.2g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las peras, experimentando malestar gastrointestinal o reacciones cutáneas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Hidratación:</strong> Su alto contenido de agua ayuda a mantener la hidratación del cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Fibra:</strong> Contribuye a la salud digestiva y puede ayudar a mantener un peso saludable.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el daño celular y el envejecimiento prematuro.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPeraAgua"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPeraAgua"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPeraAgua"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPeraAgua"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pera de Agua</h2>
            <p>La pera de agua es ideal para ensaladas, batidos y como complemento en platos de pollo o cerdo.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La pera de agua es conocida por su capacidad para mantenerse fresca y jugosa durante largos períodos, lo que la hace popular en el mercado.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar peras de agua, busca aquellas que sean firmes al tacto y que tengan un aroma dulce. Evita las que tengan manchas o golpes visibles.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las peras de agua combinan bien con quesos, nueces y otros frutos secos, creando un aperitivo delicioso y saludable.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la pera de agua incluyen manzanas, duraznos y ciruelas, que ofrecen sabores y texturas diferentes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de peras de agua puede ser sostenible si se implementan prácticas agrícolas responsables, como el uso eficiente del agua y la gestión de plagas orgánicas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1PeraAgua = document.getElementById('macronutrientChartPeraAgua').getContext('2d');
        const macronutrientChartPeraAgua = new Chart(ctx1PeraAgua, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [15.2, 0.4, 0.1],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2PeraAgua = document.getElementById('micronutrientChartPeraAgua').getContext('2d');
        const micronutrientChartPeraAgua = new Chart(ctx2PeraAgua, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.4, 18, 0.1],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3PeraAgua = document.getElementById('caloriesChartPeraAgua').getContext('2d');
        const caloriesChartPeraAgua = new Chart(ctx3PeraAgua, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [58, 56, 59, 58, 57],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4PeraAgua = document.getElementById('comparisonChartPeraAgua').getContext('2d');
        const comparisonChartPeraAgua = new Chart(ctx4PeraAgua, {
            type: 'bar',
            data: {
                labels: ['Pera de Agua', 'Manzana', 'Durazno'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [58, 52, 39],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
