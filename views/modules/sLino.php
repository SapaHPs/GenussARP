<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Semillas de Lino</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/12/b2/ba/12b2ba7274dc596863718625d3a9ba96.jpg" alt="Imagen de Semillas de Lino">
            <p class="category">Categoría: Semilla</p>
            <p class="description">Las semillas de lino son un superalimento, ricas en ácidos grasos omega-3 y fibra, ideales para la salud digestiva y cardiovascular.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las semillas de lino son pequeñas y nutritivas, se pueden consumir enteras o molidas, y son una excelente fuente de nutrientes esenciales.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>534 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>18.3g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>28.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>42.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>27.3g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Digestión:</strong> El consumo excesivo puede causar malestar gastrointestinal debido a su alto contenido de fibra.</p>
            </div>
            <div class="description">
                <p><strong>Antinutrientes:</strong> Contienen compuestos que pueden interferir con la absorción de ciertos minerales si se consumen en grandes cantidades.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Omega-3:</strong> Son una fuente excelente de ácidos grasos omega-3, que son beneficiosos para la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Salud Digestiva:</strong> Ayudan a regular el tránsito intestinal y pueden prevenir el estreñimiento.</p>
            </div>
            <div class="description">
                <p><strong>Control de Peso:</strong> Su alto contenido de fibra puede ayudar a aumentar la saciedad y controlar el apetito.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartLino"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartLino"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartLino"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartLino"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Semillas de Lino</h2>
            <p>Las semillas de lino se pueden añadir a batidos, yogures, panes o ensaladas, y también se pueden utilizar como sustituto del huevo en recetas veganas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las semillas de lino han sido utilizadas durante miles de años por diversas culturas por sus propiedades nutritivas y medicinales.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar semillas de lino, busca aquellas que sean frescas y de color marrón o dorado. Las semillas molidas deben ser almacenadas en un lugar fresco para preservar sus aceites saludables.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las semillas de lino combinan bien con yogur, avena, batidos de frutas y pueden añadirse a la masa de panes y galletas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a las semillas de lino incluyen chía y semillas de cáñamo, que ofrecen beneficios similares para la salud.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Las semillas de lino tienen un impacto ambiental relativamente bajo, pero es importante optar por opciones orgánicas para asegurar prácticas agrícolas sostenibles.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Lino = document.getElementById('macronutrientChartLino').getContext('2d');
        const macronutrientChartLino = new Chart(ctx1Lino, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [28.9, 18.3, 42.2],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Lino = document.getElementById('micronutrientChartLino').getContext('2d');
        const micronutrientChartLino = new Chart(ctx2Lino, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [18.3, 255, 5.73],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Lino = document.getElementById('caloriesChartLino').getContext('2d');
        const caloriesChartLino = new Chart(ctx3Lino, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [534, 540, 530, 532, 534],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Lino = document.getElementById('comparisonChartLino').getContext('2d');
        const comparisonChartLino = new Chart(ctx4Lino, {
            type: 'bar',
            data: {
                labels: ['Semillas de Lino', 'Chía', 'Semillas de Cáñamo'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [534, 486, 553],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
