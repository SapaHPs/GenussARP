<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Rambután</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/rambutan-sobre-fondo-blanco_144627-3442.jpg" alt="Imagen de Rambután">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El rambután es una fruta tropical de piel espinosa y pulpa jugosa, conocida por su sabor dulce y refrescante.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El rambután es una fruta originaria del sudeste asiático, famosa por su apariencia única y su dulce sabor. Su pulpa blanca y jugosa es una delicia, y se consume fresca o se utiliza en ensaladas y postres.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>68 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>16.5g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
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
                <p><strong>Alergias:</strong> Algunas personas pueden experimentar reacciones alérgicas al consumir rambután, aunque es raro.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Antioxidantes:</strong> Contiene compuestos que ayudan a combatir el daño celular y el envejecimiento prematuro.</p>
            </div>
            <div class="description">
                <p><strong>Hidratación:</strong> Su alto contenido de agua contribuye a la hidratación del cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de Vitaminas:</strong> Aporta vitaminas como la C, que es esencial para el sistema inmunológico.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRambutan"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRambutan"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRambutan"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRambutan"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Rambután</h2>
            <p>El rambután se puede disfrutar fresco, en ensaladas de frutas, o como ingrediente en batidos tropicales.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El rambután es conocido como "fruta del cabello" debido a sus espinas que se asemejan a cabellos enredados.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir rambutanes, busca aquellos que tengan piel brillante y firme. Evita los que estén arrugados o con manchas oscuras.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El rambután combina bien con otras frutas tropicales como mango y piña, así como con yogur.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al rambután incluyen lychee y longan, que tienen texturas y sabores similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de rambután puede ser sostenible si se implementan prácticas agrícolas responsables, evitando el uso excesivo de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Rambutan = document.getElementById('macronutrientChartRambutan').getContext('2d');
        const macronutrientChartRambutan = new Chart(ctx1Rambutan, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [16.5, 0.9, 0.2],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Rambutan = document.getElementById('micronutrientChartRambutan').getContext('2d');
        const micronutrientChartRambutan = new Chart(ctx2Rambutan, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.9, 22, 0.1],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Rambutan = document.getElementById('caloriesChartRambutan').getContext('2d');
        const caloriesChartRambutan = new Chart(ctx3Rambutan, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [68, 66, 69, 68, 67],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Rambutan = document.getElementById('comparisonChartRambutan').getContext('2d');
        const comparisonChartRambutan = new Chart(ctx4Rambutan, {
            type: 'bar',
            data: {
                labels: ['Rambután', 'Lychee', 'Longan'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [68, 66, 60],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
