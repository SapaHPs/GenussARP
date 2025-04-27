<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Lentejas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/d5/3b/a4/d53ba4eccbe8f5b29b9a018a79aebb77.jpg" alt="Imagen de Lentejas">
            <p class="category">Categoría: Legumbres</p>
            <p class="description">Las lentejas son una excelente fuente de proteínas y nutrientes, ideales para una dieta equilibrada.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las lentejas son legumbres ricas en fibra y proteínas, bajas en grasa, y se pueden cocinar de diversas formas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>116 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>20g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Gasificación:</strong> Pueden causar gases en algunas personas.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Su alto contenido de fibra puede interferir con la absorción de ciertos medicamentos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Control de Peso:</strong> Ayudan a mantener la saciedad, lo que puede ayudar a controlar el peso.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Su consumo regular se asocia con la reducción del riesgo de enfermedades cardíacas.</p>
            </div>
            <div class="description">
                <p><strong>Ricas en Nutrientes:</strong> Son una buena fuente de hierro, folato y otros micronutrientes esenciales.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartLentils"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartLentils"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartLentils"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartLentils"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Lentejas</h2>
            <p>Las lentejas se pueden utilizar en sopas, guisos y ensaladas. Son versátiles y deliciosas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las lentejas son una de las legumbres más antiguas que se conocen, cultivadas desde hace más de 9,000 años.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Opta por lentejas secas o enlatadas, asegurándote de que estén bien conservadas y sin humedad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina las lentejas con arroz integral o quinoa para una comida completa y nutritiva.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no te gustan las lentejas, prueba con garbanzos o frijoles negros como fuente de proteína.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Las lentejas requieren menos agua que muchas otras fuentes de proteína, lo que las convierte en una opción sostenible.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Lentils = document.getElementById('macronutrientChartLentils').getContext('2d');
        const macronutrientChartLentils = new Chart(ctx1Lentils, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [9, 20, 0.4],
                    backgroundColor: ['#6b8e23', '#ffa500', '#dc143c'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Lentils = document.getElementById('micronutrientChartLentils').getContext('2d');
        const micronutrientChartLentils = new Chart(ctx2Lentils, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Folate', 'Magnesio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [3.3, 181, 36],
                    backgroundColor: 'rgba(107, 142, 35, 0.2)',
                    borderColor: 'rgba(107, 142, 35, 1)',
                    pointBackgroundColor: 'rgba(107, 142, 35, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Lentils = document.getElementById('caloriesChartLentils').getContext('2d');
        const caloriesChartLentils = new Chart(ctx3Lentils, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [116, 120, 115, 118, 122],
                    backgroundColor: 'rgba(107, 142, 35, 0.2)',
                    borderColor: 'rgba(107, 142, 35, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Lentils = document.getElementById('comparisonChartLentils').getContext('2d');
        const comparisonChartLentils = new Chart(ctx4Lentils, {
            type: 'bar',
            data: {
                labels: ['Lentejas', 'Garbanzos', 'Frijoles Negros'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [116, 164, 132],
                    backgroundColor: ['#6b8e23', '#ffa500', '#dc143c'],
                    borderColor: ['#6b8e23', '#ffa500', '#dc143c'],
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
