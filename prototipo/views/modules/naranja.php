<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Naranja</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/naranja_23-2147710287.jpg" alt="Imagen de Naranja">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La naranja es una fruta cítrica conocida por su sabor dulce y ácido, rica en vitamina C y antioxidantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las naranjas son frutas redondas con una piel anaranjada y pulpa jugosa. Son ideales para comer frescas, en jugos o como parte de ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>47 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.94g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>11.75g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.12g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Ácido:</strong> El alto contenido de ácido puede causar malestar en personas con sensibilidad digestiva.</p>
            </div>
            <div class="description">
                <p><strong>Posibles Alergias:</strong> Algunas personas pueden ser alérgicas a los cítricos, incluyendo las naranjas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Vitamina C:</strong> Fortalecen el sistema inmunológico y ayudan en la absorción de hierro.</p>
            </div>
            <div class="description">
                <p><strong>Hidratación:</strong> Con un alto contenido de agua, ayudan a mantener la hidratación del cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Pueden contribuir a la salud del corazón al reducir la presión arterial y el colesterol.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartNaranja"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartNaranja"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartNaranja"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartNaranja"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Naranja</h2>
            <p>Las naranjas son perfectas para jugos, ensaladas, salsas o simplemente como snack saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las naranjas son originarias de Asia y son una de las frutas más cultivadas en el mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige naranjas firmes y sin manchas. La piel debe ser brillante y de un color uniforme.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina naranjas con espinacas en una ensalada o agrégalas a un batido de frutas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes naranjas, puedes usar pomelos o mandarinas como alternativa en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de naranjas puede ser sostenible si se utilizan prácticas agrícolas responsables y se minimiza el uso de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Naranja = document.getElementById('macronutrientChartNaranja').getContext('2d');
        const macronutrientChartNaranja = new Chart(ctx1Naranja, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.94, 11.75, 0.12],
                    backgroundColor: ['#ffcc99', '#99ffcc', '#cc99ff'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Naranja = document.getElementById('micronutrientChartNaranja').getContext('2d');
        const micronutrientChartNaranja = new Chart(ctx2Naranja, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [225, 53.2, 181],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Naranja = document.getElementById('caloriesChartNaranja').getContext('2d');
        const caloriesChartNaranja = new Chart(ctx3Naranja, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [47, 48, 46, 49, 47],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Naranja = document.getElementById('comparisonChartNaranja').getContext('2d');
        const comparisonChartNaranja = new Chart(ctx4Naranja, {
            type: 'bar',
            data: {
                labels: ['Naranja', 'Pomelo', 'Mandarina'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [47, 42, 53],
                    backgroundColor: ['#ffcc99', '#99ccff', '#cc99ff'],
                }]
            },
        });
    </script>
</body>
</html>
