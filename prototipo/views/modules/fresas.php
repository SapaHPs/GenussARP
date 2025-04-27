<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Fresa</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/fresas_144627-1767.jpg" alt="Imagen de Fresa">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La fresa es una fruta dulce y jugosa, muy apreciada por su sabor refrescante y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las fresas son ricas en antioxidantes, vitaminas y minerales. Se pueden consumir frescas, en mermeladas, postres o batidos, y son un ingrediente popular en ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>32 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>7.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las fresas o a las frutas de la misma familia.</p>
            </div>
            <div class="description">
                <p><strong>Consumo Excesivo:</strong> En algunas personas, el consumo excesivo puede causar malestar estomacal debido a su contenido de fibra.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Antioxidantes:</strong> Las fresas son una excelente fuente de antioxidantes, que ayudan a proteger el cuerpo del daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Mejoran la Salud Cardiovascular:</strong> Su consumo regular puede contribuir a una mejor salud del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Control de Peso:</strong> Son bajas en calorías y ricas en agua y fibra, lo que ayuda a mantener la saciedad.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartStrawberry"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartStrawberry"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartStrawberry"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartStrawberry"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Fresa</h2>
            <p>Las fresas son perfectas para hacer batidos, ensaladas, postres y salsas. También se pueden usar en yogur o helados para dar un toque dulce y fresco.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las fresas no son realmente frutas, sino que son un "acceso" a una fruta. Además, contienen más vitamina C que las naranjas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir fresas, busca aquellas que sean firmes, de color rojo brillante y sin manchas. Consume lo más pronto posible para disfrutar de su frescura.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las fresas combinan bien con yogur, avena, chocolate, y frutos secos, creando deliciosos y nutritivos platos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes fresas, puedes sustituirlas por frambuesas o arándanos en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Las fresas son a menudo cultivadas de forma convencional, pero también se pueden encontrar opciones orgánicas que son más sostenibles.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Strawberry = document.getElementById('macronutrientChartStrawberry').getContext('2d');
        const macronutrientChartStrawberry = new Chart(ctx1Strawberry, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.7, 7.7, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Strawberry = document.getElementById('micronutrientChartStrawberry').getContext('2d');
        const micronutrientChartStrawberry = new Chart(ctx2Strawberry, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [58.8, 2.2, 24],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Strawberry = document.getElementById('caloriesChartStrawberry').getContext('2d');
        const caloriesChartStrawberry = new Chart(ctx3Strawberry, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [32, 33, 31, 32, 34],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Strawberry = document.getElementById('comparisonChartStrawberry').getContext('2d');
        const comparisonChartStrawberry = new Chart(ctx4Strawberry, {
            type: 'bar',
            data: {
                labels: ['Fresa', 'Frambuesa', 'Mora'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [32, 52, 43],
                    backgroundColor: ['rgba(255, 99, 132, 0.2)', 'rgba(54, 162, 235, 0.2)', 'rgba(255, 206, 86, 0.2)'],
                    borderColor: ['rgba(255, 99, 132, 1)', 'rgba(54, 162, 235, 1)', 'rgba(255, 206, 86, 1)'],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
