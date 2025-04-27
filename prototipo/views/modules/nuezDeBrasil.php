<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Nuez de Brasil</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/nuez-brasil_23-2147710286.jpg" alt="Imagen de Nuez de Brasil">
            <p class="category">Categoría: Frutos Secos</p>
            <p class="description">La nuez de Brasil es un fruto seco rico en selenio y grasas saludables, ideal para el corazón.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las nueces de Brasil son grandes, con una cáscara dura y una carne blanca muy nutritiva. Se pueden comer solas, en ensaladas o como parte de mezclas de frutos secos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>656 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>14.32g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>12.27g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>66.43g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>7.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Calorías:</strong> Debido a su alto contenido calórico, se deben consumir con moderación.</p>
            </div>
            <div class="description">
                <p><strong>Posibles Alergias:</strong> Algunas personas pueden ser alérgicas a los frutos secos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Selenio:</strong> Contribuye a la salud celular y a la función inmunológica.</p>
            </div>
            <div class="description">
                <p><strong>Ácidos Grasos Saludables:</strong> Promueven la salud del corazón y reducen la inflamación.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Ayudan a combatir el estrés oxidativo y proteger el cuerpo de enfermedades.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartNuezDeBrasil"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartNuezDeBrasil"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartNuezDeBrasil"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartNuezDeBrasil"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Nuez de Brasil</h2>
            <p>Las nueces de Brasil son perfectas para añadir a ensaladas, batidos o como snack saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las nueces de Brasil provienen de un árbol nativo de la Amazonía y son un importante recurso para la economía local.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca nueces de Brasil frescas, con una cáscara intacta y sin manchas. Evita las que tienen un olor rancio.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina nueces de Brasil con frutas secas o agrégalas a tus batidos para un extra de nutrición.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes nueces de Brasil, puedes usar nueces, almendras o avellanas como alternativa en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de nueces de Brasil puede ser sostenible si se lleva a cabo de manera responsable, promoviendo la reforestación y el comercio justo.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1NuezDeBrasil = document.getElementById('macronutrientChartNuezDeBrasil').getContext('2d');
        const macronutrientChartNuezDeBrasil = new Chart(ctx1NuezDeBrasil, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [14.32, 12.27, 66.43],
                    backgroundColor: ['#f2b5e4', '#e6f6f9', '#ffe699'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2NuezDeBrasil = document.getElementById('micronutrientChartNuezDeBrasil').getContext('2d');
        const micronutrientChartNuezDeBrasil = new Chart(ctx2NuezDeBrasil, {
            type: 'radar',
            data: {
                labels: ['Vitamina E', 'Selenio', 'Magnesio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.6, 1917, 376],
                    backgroundColor: 'rgba(242, 181, 228, 0.2)',
                    borderColor: 'rgba(242, 181, 228, 1)',
                    pointBackgroundColor: 'rgba(242, 181, 228, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3NuezDeBrasil = document.getElementById('caloriesChartNuezDeBrasil').getContext('2d');
        const caloriesChartNuezDeBrasil = new Chart(ctx3NuezDeBrasil, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [656, 660, 650, 659, 655],
                    backgroundColor: 'rgba(242, 181, 228, 0.2)',
                    borderColor: 'rgba(242, 181, 228, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4NuezDeBrasil = document.getElementById('comparisonChartNuezDeBrasil').getContext('2d');
        const comparisonChartNuezDeBrasil = new Chart(ctx4NuezDeBrasil, {
            type: 'bar',
            data: {
                labels: ['Nuez de Brasil', 'Almendra', 'Nuez'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [656, 579, 654],
                    backgroundColor: ['#f2b5e4', '#e6f6f9', '#ffe699'],
                }]
            },
        });
    </script>
</body>
</html>
