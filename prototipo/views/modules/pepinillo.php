<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pepinillo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/pepinillos_23-2147710325.jpg" alt="Imagen de Pepinillo">
            <p class="category">Categoría: Verdura</p>
            <p class="description">El pepinillo es una hortaliza crujiente, refrescante y de bajo contenido calórico, popular en ensaladas y como aperitivo.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los pepinillos se consumen frecuentemente en ensaladas, salsas o como acompañamiento en platos de carne y hamburguesas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>16 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Altos en Sodio:</strong> Los pepinillos en conserva pueden ser altos en sodio, lo que puede ser perjudicial para personas con hipertensión.</p>
            </div>
            <div class="description">
                <p><strong>Digestión:</strong> Algunas personas pueden experimentar problemas digestivos al consumir pepinillos en grandes cantidades.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Bajo en Calorías:</strong> Los pepinillos son una excelente opción para quienes buscan controlar su peso.</p>
            </div>
            <div class="description">
                <p><strong>Ricos en Antioxidantes:</strong> Contienen antioxidantes que pueden ayudar a reducir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> La fibra en los pepinillos ayuda a promover una digestión saludable.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPepinillo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPepinillo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPepinillo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPepinillo"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pepinillo</h2>
            <p>Los pepinillos son perfectos para hacer salsas, como el tzatziki, o para añadir en ensaladas y sándwiches.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los pepinillos tienen una larga historia, habiéndose cultivado desde hace más de 4000 años, y son populares en muchas culturas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pepinillos, busca aquellos que sean firmes y crujientes, evitando los que estén arrugados o blandos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los pepinillos combinan bien con quesos, carnes frías y se pueden usar para dar un toque refrescante a los tacos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir pepinillos, considera usar zanahorias o rábanos como alternativas crujientes y saludables.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de pepinillos puede ser sostenible si se realizan prácticas agrícolas responsables, contribuyendo a la biodiversidad.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pepinillo = document.getElementById('macronutrientChartPepinillo').getContext('2d');
        const macronutrientChartPepinillo = new Chart(ctx1Pepinillo, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.7, 3.7, 0.1],
                    backgroundColor: ['#99ffcc', '#ffcc99', '#ffeb99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pepinillo = document.getElementById('micronutrientChartPepinillo').getContext('2d');
        const micronutrientChartPepinillo = new Chart(ctx2Pepinillo, {
            type: 'radar',
            data: {
                labels: ['Vitamina K', 'Vitamina C', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [16.4, 24, 262],
                    backgroundColor: 'rgba(153, 255, 204, 0.2)',
                    borderColor: 'rgba(153, 255, 204, 1)',
                    pointBackgroundColor: 'rgba(153, 255, 204, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pepinillo = document.getElementById('caloriesChartPepinillo').getContext('2d');
        const caloriesChartPepinillo = new Chart(ctx3Pepinillo, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [16, 17, 15, 16, 16],
                    backgroundColor: 'rgba(153, 255, 204, 0.2)',
                    borderColor: 'rgba(153, 255, 204, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Pepinillo = document.getElementById('comparisonChartPepinillo').getContext('2d');
        const comparisonChartPepinillo = new Chart(ctx4Pepinillo, {
            type: 'bar',
            data: {
                labels: ['Pepinillo', 'Zanahoria', 'Apio'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [16, 41, 16],
                    backgroundColor: ['#99ffcc', '#ffcc99', '#ffeb99'],
                }]
            },
        });
    </script>
</body>
</html>
