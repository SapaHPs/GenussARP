<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Aceite de Oliva</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/47/8d/01/478d01326a02065d1f4b5d052e299cf3.jpg" alt="Imagen de Aceite de Oliva">
            <p class="category">Categoría: Aceites</p>
            <p class="description">El aceite de oliva es un aceite vegetal obtenido de las aceitunas y es conocido por sus múltiples beneficios para la salud y su sabor característico.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El aceite de oliva es un ingrediente esencial en la cocina mediterránea y se utiliza tanto en crudo como para cocinar. Es rico en grasas saludables y antioxidantes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>884 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>100g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Calorías Altas:</strong> Aunque es saludable, el aceite de oliva es muy calórico, por lo que se debe consumir con moderación.</p>
            </div>
            <div class="description">
                <p><strong>Riesgo de Alergias:</strong> Algunas personas pueden ser alérgicas a los aceites vegetales.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Grasas Saludables:</strong> El aceite de oliva está compuesto principalmente de ácidos grasos monoinsaturados, que son beneficiosos para el corazón.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidante:</strong> Contiene antioxidantes que pueden ayudar a reducir la inflamación y proteger las células del daño.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartAceite"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartAceite"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartAceite"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartAceite"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Aceite de Oliva</h2>
            <p>Perfecto para aderezar ensaladas, cocinar verduras al horno y preparar salsas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El aceite de oliva ha sido utilizado durante miles de años, y se considera un símbolo de paz y sabiduría en la cultura mediterránea.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca aceite de oliva extra virgen de alta calidad para aprovechar al máximo sus beneficios.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina aceite de oliva con vinagre balsámico para un delicioso aderezo para ensaladas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>El aceite de aguacate y el aceite de coco son buenas alternativas al aceite de oliva en la cocina.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Elige aceite de oliva de productores sostenibles que utilicen prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Aceite = document.getElementById('macronutrientChartAceite').getContext('2d');
        const macronutrientChartAceite = new Chart(ctx1Aceite, {
            type: 'pie',
            data: {
                labels: ['Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [100],
                    backgroundColor: ['#ffcc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Aceite = document.getElementById('micronutrientChartAceite').getContext('2d');
        const micronutrientChartAceite = new Chart(ctx2Aceite, {
            type: 'radar',
            data: {
                labels: ['Grasas Monoinsaturadas', 'Vitamina E', 'Antioxidantes'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [73, 14, 4],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Aceite = document.getElementById('caloriesChartAceite').getContext('2d');
        const caloriesChartAceite = new Chart(ctx3Aceite, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [884, 880, 882, 885, 884],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Aceite = document.getElementById('comparisonChartAceite').getContext('2d');
        const comparisonChartAceite = new Chart(ctx4Aceite, {
            type: 'bar',
            data: {
                labels: ['Aceite de Oliva', 'Aceite de Girasol', 'Aceite de Coco'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [884, 884, 862],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ccff99'],
                }]
            },
        });
    </script>
</body>
</html>
