<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Frambuesa</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/frambuesas-cerca_144627-2706.jpg" alt="Imagen de Frambuesa">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La frambuesa es una fruta pequeña y jugosa, conocida por su sabor dulce y ligeramente ácido, además de ser rica en nutrientes y antioxidantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las frambuesas son ricas en vitaminas, minerales y antioxidantes. Se pueden consumir frescas, en mermeladas, postres, o incluso en batidos, y son un excelente complemento para ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>52 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>11.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>6.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las frambuesas o a las frutas del mismo grupo.</p>
            </div>
            <div class="description">
                <p><strong>Consumo Excesivo:</strong> Un alto consumo puede causar problemas digestivos en algunas personas, debido a su contenido de fibra.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Antioxidantes:</strong> Las frambuesas contienen antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Su consumo regular puede ayudar a mejorar la salud del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Control de Peso:</strong> Son bajas en calorías y ricas en fibra, lo que ayuda a mantener la saciedad.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRaspberry"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRaspberry"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRaspberry"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRaspberry"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Frambuesa</h2>
            <p>Las frambuesas son ideales para hacer mermeladas, postres, o simplemente añadir a yogur o ensaladas. También son un gran ingrediente para batidos y smoothies.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las frambuesas pueden ser rojas, negras o amarillas, y su sabor puede variar según el tipo. Son conocidas por ser una de las frutas más ricas en antioxidantes.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar frambuesas, busca aquellas que sean firmes, con un color vibrante y sin manchas. Deben ser consumidas rápidamente, ya que son muy perecederas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las frambuesas combinan bien con yogur, avena, chocolate oscuro, y otros frutos secos, creando platos nutritivos y deliciosos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes frambuesas, puedes sustituirlas por fresas o moras en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Las frambuesas son cultivadas comúnmente en la agricultura convencional, pero también se pueden encontrar opciones orgánicas que respetan el medio ambiente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Raspberry = document.getElementById('macronutrientChartRaspberry').getContext('2d');
        const macronutrientChartRaspberry = new Chart(ctx1Raspberry, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.2, 11.9, 0.7],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Raspberry = document.getElementById('micronutrientChartRaspberry').getContext('2d');
        const micronutrientChartRaspberry = new Chart(ctx2Raspberry, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [26.2, 7.8, 32],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Raspberry = document.getElementById('caloriesChartRaspberry').getContext('2d');
        const caloriesChartRaspberry = new Chart(ctx3Raspberry, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [52, 53, 51, 52, 54],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Raspberry = document.getElementById('comparisonChartRaspberry').getContext('2d');
        const comparisonChartRaspberry = new Chart(ctx4Raspberry, {
            type: 'bar',
            data: {
                labels: ['Frambuesa', 'Fresa', 'Mora'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [52, 33, 43],
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
