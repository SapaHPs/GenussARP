<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Mango</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/81/f5/46/81f546df72facf77cb87d6fce9f48121.jpg" alt="Imagen de Mango">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El mango es una fruta tropical dulce y jugosa, conocida como el "rey de las frutas", rica en vitaminas y antioxidantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El mango es originario de Asia y se cultiva en muchas partes del mundo. Su sabor dulce y su textura jugosa lo hacen popular en diversas preparaciones culinarias.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>60 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.82g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>14.98g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.38g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.6g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Azúcares:</strong> Puede ser problemático para personas con diabetes si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los mangos, especialmente si tienen alergias a otros frutos secos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Vitamina A:</strong> Contribuye a la salud ocular y al sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Los compuestos antioxidantes del mango ayudan a proteger las células del daño.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Digestión:</strong> La fibra y los enzimas en el mango ayudan a la digestión saludable.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartMango"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartMango"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartMango"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartMango"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Mango</h2>
            <p>El mango es ideal para hacer batidos, ensaladas tropicales y postres como mousse o tartas. Prueba un batido de mango y yogur para un desayuno refrescante.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El mango es considerado el "rey de las frutas" en muchas culturas y se utiliza en ceremonias y festivales en Asia.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca mangos que estén ligeramente firmes al tacto, con un color vibrante y sin manchas oscuras. Deben ceder un poco a la presión cuando están maduros.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina mango con aguacate en una ensalada o mézclalo con arroz y frijoles para un plato delicioso y nutritivo.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes mango, puedes usar papaya o melocotón como sustitutos en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de mango puede tener un impacto moderado en el medio ambiente, pero las prácticas agrícolas sostenibles son cada vez más comunes.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Mango = document.getElementById('macronutrientChartMango').getContext('2d');
        const macronutrientChartMango = new Chart(ctx1Mango, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.82, 14.98, 0.38],
                    backgroundColor: ['#ff5722', '#ffeb3b', '#4caf50'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Mango = document.getElementById('micronutrientChartMango').getContext('2d');
        const micronutrientChartMango = new Chart(ctx2Mango, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1084, 36.4, 168],
                    backgroundColor: 'rgba(255, 87, 34, 0.2)',
                    borderColor: 'rgba(255, 87, 34, 1)',
                    pointBackgroundColor: 'rgba(255, 87, 34, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Mango = document.getElementById('caloriesChartMango').getContext('2d');
        const caloriesChartMango = new Chart(ctx3Mango, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [60, 62, 61, 59, 63],
                    backgroundColor: 'rgba(255, 87, 34, 0.2)',
                    borderColor: 'rgba(255, 87, 34, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Mango = document.getElementById('comparisonChartMango').getContext('2d');
        const comparisonChartMango = new Chart(ctx4Mango, {
            type: 'bar',
            data: {
                labels: ['Mango', 'Papaya', 'Melocotón'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [60, 43, 39],
                    backgroundColor: ['#ff5722', '#ffcc80', '#ff7043'],
                    borderColor: ['#ff5722', '#ffcc80', '#ff7043'],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    </script>
</body>
</html>
