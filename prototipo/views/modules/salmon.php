<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Salmón</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/salmon-crudo-fresco_23-2149046019.jpg" alt="Imagen de Salmón">
            <p class="category">Categoría: Pescado</p>
            <p class="description">El salmón es un pescado graso muy valorado por su sabor y sus beneficios para la salud, rico en ácidos grasos omega-3, proteínas y vitaminas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El salmón se puede cocinar de diversas maneras, como a la parrilla, al horno o ahumado. Su sabor es delicado y su textura es suave, lo que lo convierte en un alimento versátil y delicioso.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>206 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>22g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>13g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Contaminantes:</strong> Algunos tipos de salmón pueden contener niveles altos de contaminantes como el mercurio.</p>
            </div>
            <div class="description">
                <p><strong>Alérgias:</strong> Las personas alérgicas a los mariscos deben tener cuidado al consumir salmón.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ácidos Grasos Omega-3:</strong> Ayudan a reducir la inflamación y son buenos para la salud del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Vitaminas:</strong> El salmón es una excelente fuente de vitaminas del grupo B, esenciales para el metabolismo.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cerebral:</strong> Los ácidos grasos omega-3 pueden contribuir a la salud cognitiva y a la función cerebral.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSalmon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSalmon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSalmon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSalmon"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Salmón</h2>
            <p>El salmón se puede disfrutar en ensaladas, sushi, o simplemente asado con limón y hierbas. Es un plato delicioso y saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El salmón puede cambiar de color dependiendo de su dieta. En la naturaleza, obtienen su color rosado de los carotenoides presentes en los crustáceos que comen.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar salmón, busca filetes frescos que tengan un color uniforme y una textura firme. Evita aquellos que tengan manchas o un olor fuerte.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El salmón combina bien con vegetales al vapor, arroz integral y salsas a base de limón o mostaza.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al salmón incluyen otros pescados grasos como la trucha y el atún, que también son ricos en omega-3.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El salmón puede tener un impacto ambiental significativo debido a la sobrepesca y la acuicultura. Es importante elegir salmón sostenible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Salmon = document.getElementById('macronutrientChartSalmon').getContext('2d');
        const macronutrientChartSalmon = new Chart(ctx1Salmon, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [22, 13],
                    backgroundColor: ['#ffcc99', '#99cc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Salmon = document.getElementById('micronutrientChartSalmon').getContext('2d');
        const micronutrientChartSalmon = new Chart(ctx2Salmon, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [22, 11, 0.8],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Salmon = document.getElementById('caloriesChartSalmon').getContext('2d');
        const caloriesChartSalmon = new Chart(ctx3Salmon, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [206, 210, 205, 208, 206],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Salmon = document.getElementById('comparisonChartSalmon').getContext('2d');
        const comparisonChartSalmon = new Chart(ctx4Salmon, {
            type: 'bar',
            data: {
                labels: ['Salmón', 'Trucha', 'Atún'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [206, 190, 132],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
