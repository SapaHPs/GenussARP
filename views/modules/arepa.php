<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Arepa</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/enabled/564x/25/0d/62/250d62ed3ce2ecf9eb09eed30823a437.jpg" alt="Imagen de Arepas">
            <p class="category">Categoría: Grano</p>
            <p class="description">La arepa es un alimento tradicional de la cocina latinoamericana, especialmente de Venezuela y Colombia. Hecha de masa de maíz, se puede rellenar con una variedad de ingredientes y se consume en cualquier momento del día.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La arepa es un pan plano elaborado principalmente de maíz. Su preparación varía en diferentes regiones, y puede ser asada, frita o hervida. Se pueden encontrar arepas con diversos rellenos, como carne, pollo, queso, o vegetales, lo que las convierte en un alimento versátil y nutritivo. Es un plato básico en muchos hogares y se disfruta tanto en el desayuno como en el almuerzo y la cena.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>250 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>49g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Hierro, Magnesio, Vitamina B6</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en carbohidratos:</strong> Las arepas son ricas en carbohidratos, por lo que las personas con diabetes o que siguen dietas bajas en carbohidratos deben moderar su consumo.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Aunque las alergias son poco comunes, algunas personas pueden ser sensibles al maíz y deben evitar las arepas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de energía:</strong> Las arepas son una excelente fuente de carbohidratos complejos, proporcionando energía sostenida para las actividades diarias.</p>
            </div>
            <div class="description">
                <p><strong>Ricas en fibra:</strong> La fibra en las arepas ayuda a la digestión y puede contribuir a la salud intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Versatilidad en la dieta:</strong> Las arepas pueden ser adaptadas para incluir una variedad de ingredientes saludables, desde vegetales hasta proteínas magras.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChart"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Arepa</h2>
            <p>Las arepas pueden rellenarse con diferentes ingredientes, como queso, carne desmechada, pollo a la plancha, o guacamole. Son ideales para acompañar con ensaladas o salsas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las arepas son consideradas un símbolo de la gastronomía venezolana y colombiana, y se dice que su origen se remonta a las culturas indígenas que habitaban esas regiones.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar harina de maíz para arepas, busca marcas que ofrezcan harina precocida de calidad. También puedes encontrar arepas ya hechas en algunas tiendas de alimentos latinoamericanos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las arepas combinan bien con aguacate, frijoles, ensaladas frescas y proteínas como pollo, pescado o queso fresco. Son perfectas para crear un plato balanceado.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir arepas, puedes optar por tortillas de maíz o pan de pita, que ofrecen una textura y sabor similar, aunque con diferentes perfiles nutricionales.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de maíz puede tener un impacto ambiental significativo, especialmente en términos de uso de agua y pesticidas. Optar por maíz orgánico y local puede ayudar a mitigar estos efectos.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1 = document.getElementById('macronutrientChart').getContext('2d');
        const macronutrientChart = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [7, 49, 1],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Magnesio', 'Vitamina B6'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.4, 23, 0.1],
                    backgroundColor: 'rgba(100, 100, 250, 0.2)',
                    borderColor: 'rgba(100, 100, 250, 1)',
                    pointBackgroundColor: 'rgba(100, 100, 250, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3 = document.getElementById('caloriesChart').getContext('2d');
        const caloriesChart = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [250, 240, 260, 255, 270],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Arepa', 'Tortilla', 'Pita'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [250, 218, 275],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
