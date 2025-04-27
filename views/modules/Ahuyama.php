<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Ahuyama</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/0f/a6/ef/0fa6ef0209136fa5278982cbf5018d6b.jpg" alt="Imagen de Ahuyama">
            <p class="category">Categoría: Verduras</p>
            <p class="description">La ahuyama, también conocida como calabaza, es una hortaliza rica en vitaminas y minerales, que se puede consumir cocida, asada o en sopas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La ahuyama es una hortaliza de pulpa dulce y nutritiva, perteneciente a la familia de las cucurbitáceas. Es muy versátil en la cocina y se puede utilizar en una variedad de recetas, desde sopas hasta postres. Además, es baja en calorías y rica en fibra, lo que la convierte en una excelente opción para una dieta equilibrada.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>26 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Posible Alergia:</strong> Algunas personas pueden ser alérgicas a la ahuyama o a otras cucurbitáceas, por lo que deben tener cuidado al consumirla.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Antioxidantes:</strong> La ahuyama contiene antioxidantes que ayudan a combatir el daño celular y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Buena para la Digestión:</strong> Su alto contenido de fibra favorece la salud digestiva y puede ayudar a prevenir el estreñimiento.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios para la Vista:</strong> La ahuyama es rica en betacaroteno, que se convierte en vitamina A en el organismo, contribuyendo a una buena salud ocular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartAhuyama"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartAhuyama"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartAhuyama"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartAhuyama"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Ahuyama</h2>
            <p>La ahuyama se puede utilizar en sopas, purés, guisos, o incluso en postres como el flan de ahuyama. También es deliciosa asada o al vapor.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>En algunas culturas, la ahuyama se utiliza en la medicina tradicional para tratar problemas digestivos y de la piel.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar ahuyama, busca aquellas que tengan una cáscara dura y firme, sin manchas ni golpes.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La ahuyama combina bien con especias como el comino, el jengibre y el cilantro, así como con otros vegetales y legumbres.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las calabazas y las zanahorias son buenas alternativas a la ahuyama en diversas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de ahuyama puede ser sostenible si se realizan prácticas agrícolas responsables. Optar por ahuyama orgánica contribuye a la sostenibilidad.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Ahuyama = document.getElementById('macronutrientChartAhuyama').getContext('2d');
        const macronutrientChartAhuyama = new Chart(ctx1Ahuyama, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [7, 1, 0.1],
                    backgroundColor: ['#f7c6c7', '#b8e6d8', '#ffecb3'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Ahuyama = document.getElementById('micronutrientChartAhuyama').getContext('2d');
        const micronutrientChartAhuyama = new Chart(ctx2Ahuyama, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Potasio', 'Fibra'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [850, 340, 1],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Ahuyama = document.getElementById('caloriesChartAhuyama').getContext('2d');
        const caloriesChartAhuyama = new Chart(ctx3Ahuyama, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
                datasets: [{
                    label: 'Calorías consumidas en Ahuyama',
                    data: [100, 120, 150, 130],
                    backgroundColor: '#ff7f50',
                }]
            },
        });

        // Gráfico comparativo horizontal (de 'horizontalBar' a 'bar' con configuración horizontal)
        const ctx4Ahuyama = document.getElementById('comparisonChartAhuyama').getContext('2d');
        const comparisonChartAhuyama = new Chart(ctx4Ahuyama, {
            type: 'bar',
            data: {
                labels: ['Ahuyama', 'Calabaza', 'Zanahoria'],
                datasets: [{
                    label: 'Comparativa de Azúcares (g)',
                    data: [2.5, 1.4, 4.7],
                    backgroundColor: ['#f7c6c7', '#ffa07a', '#add8e6'],
                }]
            },
        });
    </script>
</body>
</html>
