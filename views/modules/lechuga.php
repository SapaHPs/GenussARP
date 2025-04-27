<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Lechuga</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/98/be/ff/98beff402c08df67d979075a7fd92b78.jpg" alt="Imagen de Lechuga">
            <p class="category">Categoría: Vegetal</p>
            <p class="description">La lechuga es un vegetal de hojas verdes que se utiliza comúnmente en ensaladas y como acompañamiento.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La lechuga es rica en agua y baja en calorías, lo que la convierte en un alimento ideal para dietas. Es una fuente de fibra, vitaminas A, C y K.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>15 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>2.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
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
                <p><strong>Riesgo de Contaminación:</strong> Puede estar contaminada con bacterias si no se lava adecuadamente.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Puede interactuar con anticoagulantes debido a su contenido de vitamina K.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Hidratación:</strong> Contiene un alto porcentaje de agua que ayuda a la hidratación.</p>
            </div>
            <div class="description">
                <p><strong>Salud Digestiva:</strong> Rica en fibra, lo que favorece el tránsito intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartLettuce"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartLettuce"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartLettuce"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartLettuce"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Lechuga</h2>
            <p>La lechuga es ideal para ensaladas, wraps y como base para varios platos saludables.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La lechuga se cultivó por primera vez en Egipto hace más de 2000 años.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Selecciona lechuga fresca, con hojas crujientes y de color verde brillante.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina la lechuga con tomates, aguacate y aderezos bajos en grasa para ensaladas deliciosas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no te gusta la lechuga, prueba con espinacas o kale como base para ensaladas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por lechuga orgánica ayuda a reducir el uso de pesticidas en la agricultura.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Lettuce = document.getElementById('macronutrientChartLettuce').getContext('2d');
        const macronutrientChartLettuce = new Chart(ctx1Lettuce, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.4, 2.9, 0.2],
                    backgroundColor: ['#4caf50', '#2196f3', '#ff5722'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Lettuce = document.getElementById('micronutrientChartLettuce').getContext('2d');
        const micronutrientChartLettuce = new Chart(ctx2Lettuce, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Vitamina K'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [900, 50, 126],
                    backgroundColor: 'rgba(76, 175, 80, 0.2)',
                    borderColor: 'rgba(76, 175, 80, 1)',
                    pointBackgroundColor: 'rgba(76, 175, 80, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Lettuce = document.getElementById('caloriesChartLettuce').getContext('2d');
        const caloriesChartLettuce = new Chart(ctx3Lettuce, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [15, 16, 14, 15, 17],
                    backgroundColor: 'rgba(76, 175, 80, 0.2)',
                    borderColor: 'rgba(76, 175, 80, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Lettuce = document.getElementById('comparisonChartLettuce').getContext('2d');
        const comparisonChartLettuce = new Chart(ctx4Lettuce, {
            type: 'bar',
            data: {
                labels: ['Lechuga', 'Espinaca', 'Col Rizada'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [15, 23, 35],
                    backgroundColor: ['#4caf50', '#2196f3', '#ff5722'],
                    borderColor: ['#4caf50', '#2196f3', '#ff5722'],
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
