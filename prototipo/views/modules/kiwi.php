<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Kiwi</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/kiwi-sobre-fondo-madera_1232-1780.jpg" alt="Imagen de Kiwi">
            <p class="category">Categoría: Fruta</p>
            <p class="description">El kiwi es una fruta rica en vitamina C y fibra, conocida por su sabor único y su color verde vibrante.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El kiwi es un superalimento que proporciona una gran cantidad de nutrientes, incluyendo antioxidantes y vitaminas. Su sabor agridulce lo hace perfecto para ensaladas y batidos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>61 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>14.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al kiwi.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones:</strong> Puede interactuar con ciertos medicamentos anticoagulantes.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Vitamina C:</strong> Alto contenido en vitamina C, que fortalece el sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Fibra:</strong> Contribuye a la salud digestiva y puede ayudar a regular el azúcar en sangre.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Rico en antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartKiwi"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartKiwi"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartKiwi"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartKiwi"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Kiwi</h2>
            <p>El kiwi es excelente en ensaladas, batidos o como un delicioso postre.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El kiwi se cultivó originalmente en China y se llamaba "grosella espinosa china".</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca kiwis que estén firmes al tacto y sin manchas. Evita los que estén demasiado duros o blandos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El kiwi combina bien con yogur, frutas cítricas y ensaladas verdes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir kiwi, prueba con fresas o mango, que ofrecen sabores igualmente deliciosos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por kiwis orgánicos puede contribuir a una agricultura más sostenible y menos uso de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Kiwi = document.getElementById('macronutrientChartKiwi').getContext('2d');
        const macronutrientChartKiwi = new Chart(ctx1Kiwi, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.6, 14.7, 0.5],
                    backgroundColor: ['#ffb74d', '#81c784', '#64b5f6'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Kiwi = document.getElementById('micronutrientChartKiwi').getContext('2d');
        const micronutrientChartKiwi = new Chart(ctx2Kiwi, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [93, 40, 312],
                    backgroundColor: 'rgba(255, 183, 77, 0.2)',
                    borderColor: 'rgba(255, 183, 77, 1)',
                    pointBackgroundColor: 'rgba(255, 183, 77, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Kiwi = document.getElementById('caloriesChartKiwi').getContext('2d');
        const caloriesChartKiwi = new Chart(ctx3Kiwi, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [61, 63, 60, 62, 64],
                    backgroundColor: 'rgba(255, 183, 77, 0.2)',
                    borderColor: 'rgba(255, 183, 77, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Kiwi = document.getElementById('comparisonChartKiwi').getContext('2d');
        const comparisonChartKiwi = new Chart(ctx4Kiwi, {
            type: 'bar',
            data: {
                labels: ['Kiwi', 'Manzana', 'Pera'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [61, 52, 57],
                    backgroundColor: ['#ffb74d', '#81c784', '#64b5f6'],
                    borderColor: ['#ffb74d', '#81c784', '#64b5f6'],
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
