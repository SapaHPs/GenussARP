<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Arándanos</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/fondo-arandanos-frescos-vista-superior_144627-18284.jpg" alt="Imagen de Arándanos">
            <p class="category">Categoría: Fruta</p>
            <p class="description">Los arándanos son pequeñas frutas de color azul oscuro conocidas por su alto contenido en antioxidantes y su sabor dulce con un toque ácido. Son populares en ensaladas, postres y como snack saludable.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los arándanos (Vaccinium corymbosum) son frutos del bosque ampliamente conocidos por sus beneficios para la salud. Son ricos en antioxidantes, vitamina C y fibra, lo que los convierte en un superalimento que ayuda a combatir el envejecimiento celular y promueve la salud cardiovascular. Su sabor dulce y jugoso, combinado con un ligero toque ácido, los hace ideales para consumir frescos o en recetas como batidos, tartas y mermeladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>57 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>14.5g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.4g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina C, Vitamina K, Manganeso, Antioxidantes</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Aunque las alergias a los arándanos son raras, algunas personas pueden experimentar reacciones alérgicas al consumir esta fruta.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con medicamentos:</strong> El consumo de arándanos en grandes cantidades puede interferir con ciertos medicamentos anticoagulantes debido a su contenido de vitamina K.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto contenido de antioxidantes:</strong> Los arándanos son ricos en antioxidantes como las antocianinas, que ayudan a proteger las células del daño oxidativo y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la salud cardiovascular:</strong> Su consumo regular puede ayudar a reducir la presión arterial y el colesterol, mejorando la salud del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Apoya la salud cerebral:</strong> Los compuestos bioactivos de los arándanos pueden mejorar la función cognitiva y la memoria en adultos mayores.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChart"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Arándanos</h2>
            <p>Los arándanos se pueden disfrutar frescos o añadirse a batidos, yogur, ensaladas, o en postres como tartas y muffins. También son populares en mermeladas y como acompañamiento para el desayuno.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los arándanos se cultivan principalmente en América del Norte y su cosecha ocurre entre mayo y agosto. Se dice que los nativos americanos ya los usaban como medicina natural mucho antes de la llegada de los colonos europeos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige arándanos firmes y de color azul uniforme. Evita los que estén arrugados o blandos. Se recomienda comprarlos frescos en temporada o congelados para disfrutar todo el año.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los arándanos combinan bien con avena, yogur, miel y nueces. También se pueden mezclar en ensaladas de frutas o usarse para hacer salsas y aderezos para carnes blancas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes arándanos, puedes usar moras, fresas o frambuesas en tus recetas. Estos frutos también son ricos en antioxidantes y aportan beneficios similares para la salud.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de arándanos puede requerir grandes cantidades de agua y pesticidas. Opta por arándanos orgánicos y de productores locales para reducir el impacto ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1 = document.getElementById('macronutrientChart').getContext('2d');
        const macronutrientChart = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.7, 14.5, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Manganeso', 'Antioxidantes'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [16, 24, 0.34, 50],
                    backgroundColor: 'rgba(100, 100, 250, 0.2)',
                    borderColor: 'rgba(100, 100, 250, 1)',
                    pointBackgroundColor: 'rgba(100, 100, 250, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3 = document.getElementById('caloriesChart').getContext('2d');
        const caloriesChart = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [50, 45, 60, 55, 70],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Arándanos', 'Fresas', 'Moras'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [57, 32, 43],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
