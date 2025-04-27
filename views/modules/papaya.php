<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Papaya</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/enabled/564x/f1/95/9a/f1959ab5bd7597786840e9b0856a0d98.jpg" alt="Imagen de Papaya">
            <p class="category">Categoría: Fruta</p>
            <p class="description">La papaya es una fruta tropical dulce y jugosa, conocida por su alto contenido de vitaminas y antioxidantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La papaya es una fruta popular en todo el mundo, utilizada en ensaladas, batidos y postres, además de ser muy nutritiva.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>43 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>11g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.7g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Posibles Alergias:</strong> Algunas personas pueden ser alérgicas a la papaya o a la enzima papaína.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones Medicamentosas:</strong> La papaya puede interactuar con ciertos medicamentos, como anticoagulantes.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Antioxidantes:</strong> Contiene vitamina C y otros antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Digestión Saludable:</strong> La papaya contiene enzimas que ayudan en la digestión y promueven la salud intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Apoyo al Sistema Inmunológico:</strong> Gracias a su contenido de vitamina C, la papaya fortalece el sistema inmunológico.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPapaya"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPapaya"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPapaya"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPapaya"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Papaya</h2>
            <p>La papaya se puede utilizar en ensaladas de frutas, batidos tropicales, o incluso en salsas para dar un toque dulce a platos salados.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La papaya es originaria de América Central y se cultiva en muchas regiones tropicales del mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar papayas, busca aquellas que sean firmes y con un color amarillo en su piel, evitando las que tengan manchas oscuras.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina la papaya con yogur y granola para un desayuno nutritivo o agrégala a ensaladas para un sabor tropical.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir papaya, considera alternativas como el melón o la piña, que ofrecen sabores dulces similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo sostenible de papaya puede contribuir a la economía local y promover prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Papaya = document.getElementById('macronutrientChartPapaya').getContext('2d');
        const macronutrientChartPapaya = new Chart(ctx1Papaya, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.5, 11, 0.1],
                    backgroundColor: ['#ffcc99', '#ffeb99', '#99ffcc'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Papaya = document.getElementById('micronutrientChartPapaya').getContext('2d');
        const micronutrientChartPapaya = new Chart(ctx2Papaya, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina A', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [60, 182, 182],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Papaya = document.getElementById('caloriesChartPapaya').getContext('2d');
        const caloriesChartPapaya = new Chart(ctx3Papaya, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [43, 45, 42, 44, 43],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Papaya = document.getElementById('comparisonChartPapaya').getContext('2d');
        const comparisonChartPapaya = new Chart(ctx4Papaya, {
            type: 'bar',
            data: {
                labels: ['Papaya', 'Mango', 'Piña'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [43, 60, 50],
                    backgroundColor: ['#ffcc99', '#ffeb99', '#99ffcc'],
                }]
            },
        });
    </script>
</body>
</html>
