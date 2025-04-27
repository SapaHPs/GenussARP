<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Piña</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/5d/bc/e0/5dbce0b49c812302d2c9e736b0dec09d.jpg" alt="Imagen de Piña">
            <p class="category">Categoría: Fruta</p>
            <p class="description">La piña es una fruta tropical jugosa y dulce, rica en vitamina C y bromelina, perfecta para consumir fresca o en batidos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La piña es conocida por su sabor tropical y su contenido nutricional, incluyendo enzimas que ayudan en la digestión. Es deliciosa tanto sola como en ensaladas y postres.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>50 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>13g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Acidez:</strong> Algunas personas pueden experimentar acidez estomacal o malestar digestivo tras consumir piña, especialmente en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Aunque raras, las alergias a la piña pueden ocurrir. Si experimentas reacciones alérgicas, consulta a un médico.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Digestión:</strong> La bromelina en la piña ayuda a descomponer las proteínas y mejora la digestión.</p>
            </div>
            <div class="description">
                <p><strong>Antiinflamatoria:</strong> La piña tiene propiedades antiinflamatorias que pueden ayudar a reducir la inflamación en el cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Fortalecimiento del Sistema Inmunológico:</strong> Su alto contenido de vitamina C ayuda a fortalecer el sistema inmunológico.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPina"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPina"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPina"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPina"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Piña</h2>
            <p>La piña se puede usar en ensaladas, batidos, o como ingrediente principal en platos dulces y salados.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La piña es una planta perenne que puede crecer hasta 1.5 metros de altura y puede tardar de 18 a 24 meses en dar fruto.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar piñas, busca aquellas que sean firmes y tengan un color dorado, con hojas verdes y frescas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La piña combina bien con el coco, el yogur, y otros frutos tropicales como el mango y la papaya.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir piña, considera usar mango o papaya como alternativas en recetas tropicales.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de piñas debe ser sostenible, utilizando prácticas agrícolas que respeten el medio ambiente y la biodiversidad.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pina = document.getElementById('macronutrientChartPina').getContext('2d');
        const macronutrientChartPina = new Chart(ctx1Pina, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.5, 13, 0.1],
                    backgroundColor: ['#ff9999', '#ffcc99', '#ffeb99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pina = document.getElementById('micronutrientChartPina').getContext('2d');
        const micronutrientChartPina = new Chart(ctx2Pina, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina A', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [47.8, 3, 109],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pina = document.getElementById('caloriesChartPina').getContext('2d');
        const caloriesChartPina = new Chart(ctx3Pina, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [50, 52, 49, 50, 50],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Pina = document.getElementById('comparisonChartPina').getContext('2d');
        const comparisonChartPina = new Chart(ctx4Pina, {
            type: 'bar',
            data: {
                labels: ['Piña', 'Fresa', 'Kiwi'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [50, 32, 61],
                    backgroundColor: ['#ff9999', '#99ffcc', '#ffcc99'],
                }]
            },
        });
    </script>
</body>
</html>
