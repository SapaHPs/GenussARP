<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Granada</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/granada-fruta_1203-1165.jpg" alt="Imagen de Granada">
            <p class="category">Categoría: Fruta</p>
            <p class="description">La granada es una fruta rica en antioxidantes, conocida por su sabor dulce y ácido, y su impresionante contenido nutricional.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La granada es una fuente excelente de vitamina C, potasio y fibra. Se utiliza en ensaladas, jugos y como guarnición.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>83 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>18.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>4.0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a la granada.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones:</strong> Puede interferir con algunos medicamentos, especialmente los que se metabolizan en el hígado.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Antioxidantes:</strong> La granada es rica en antioxidantes que pueden ayudar a reducir la inflamación.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Puede mejorar la salud del corazón al reducir la presión arterial.</p>
            </div>
            <div class="description">
                <p><strong>Digestión:</strong> Su contenido en fibra favorece la salud digestiva.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPomegranate"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPomegranate"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPomegranate"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPomegranate"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Granada</h2>
            <p>La granada es deliciosa en ensaladas, como aderezo en platos principales o en jugos naturales.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La granada ha sido un símbolo de fertilidad y abundancia en muchas culturas a lo largo de la historia.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca granadas que sean pesadas y firmes al tacto. Evita aquellas que tengan manchas o estén muy blandas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La granada combina bien con yogur, ensaladas, quesos y frutos secos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes granada, puedes usar arándanos o fresas como alternativas en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de granadas puede ser sostenible si se cultivan de manera responsable y orgánica, minimizando el uso de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pomegranate = document.getElementById('macronutrientChartPomegranate').getContext('2d');
        const macronutrientChartPomegranate = new Chart(ctx1Pomegranate, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.7, 18.7, 1.2],
                    backgroundColor: ['#e91e63', '#ff9800', '#2196f3'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pomegranate = document.getElementById('micronutrientChartPomegranate').getContext('2d');
        const micronutrientChartPomegranate = new Chart(ctx2Pomegranate, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Potasio', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10.2, 236, 38],
                    backgroundColor: 'rgba(233, 30, 99, 0.2)',
                    borderColor: 'rgba(233, 30, 99, 1)',
                    pointBackgroundColor: 'rgba(233, 30, 99, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pomegranate = document.getElementById('caloriesChartPomegranate').getContext('2d');
        const caloriesChartPomegranate = new Chart(ctx3Pomegranate, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [83, 84, 82, 85, 86],
                    backgroundColor: 'rgba(233, 30, 99, 0.2)',
                    borderColor: 'rgba(233, 30, 99, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Pomegranate = document.getElementById('comparisonChartPomegranate').getContext('2d');
        const comparisonChartPomegranate = new Chart(ctx4Pomegranate, {
            type: 'bar',
            data: {
                labels: ['Granada', 'Fruta Tropical', 'Manzana'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [83, 50, 52],
                    backgroundColor: ['#e91e63', '#ff9800', '#4caf50'],
                    borderColor: ['#e91e63', '#ff9800', '#4caf50'],
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
