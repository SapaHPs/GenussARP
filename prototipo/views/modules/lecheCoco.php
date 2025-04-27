<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Leche de Coco</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/leche-coco-aislada_144627-26074.jpg" alt="Imagen de Leche de Coco">
            <p class="category">Categoría: Bebida Vegetal</p>
            <p class="description">La leche de coco es un líquido cremoso extraído de la pulpa del coco maduro, muy utilizado en la cocina asiática y en diversas preparaciones culinarias.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La leche de coco es un ingrediente popular en muchos platillos, como curries, sopas y postres, gracias a su textura rica y sabor característico. Es una excelente opción para aquellos que buscan alternativas lácteas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>230 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.3g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>6.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>24g</td>
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
                <p><strong>Calorías Altas:</strong> La leche de coco es alta en calorías y grasas saturadas, por lo que se recomienda moderar su consumo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Nutrientes:</strong> Contiene vitaminas y minerales como el manganeso y el hierro.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades Antiinflamatorias:</strong> Los ácidos grasos presentes pueden ayudar a reducir la inflamación.</p>
            </div>
            <div class="description">
                <p><strong>Alternativa Láctea:</strong> Es una excelente opción para personas con intolerancia a la lactosa o veganos.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartLecheCoco"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartLecheCoco"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartLecheCoco"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartLecheCoco"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Leche de Coco</h2>
            <p>La leche de coco se utiliza en curries, sopas de coco, batidos, y postres como el flan de coco y los helados.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La leche de coco no es realmente leche, sino el líquido extraído de la pulpa del coco maduro. Su uso se remonta a miles de años en las culturas tropicales.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar leche de coco, opta por productos sin aditivos ni conservantes, y verifica la lista de ingredientes para asegurar su pureza.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La leche de coco combina bien con curry, arroz, frutas tropicales y granola, añadiendo un sabor exótico a los platillos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la leche de coco incluyen leches vegetales como la de almendra, soja o avena, que ofrecen diferentes sabores y beneficios nutricionales.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de leche de coco puede tener un impacto ambiental significativo; elegir productos de fuentes sostenibles ayuda a mitigar este efecto.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1LecheCoco = document.getElementById('macronutrientChartLecheCoco').getContext('2d');
        const macronutrientChartLecheCoco = new Chart(ctx1LecheCoco, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [6.6, 2.3, 24],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2LecheCoco = document.getElementById('micronutrientChartLecheCoco').getContext('2d');
        const micronutrientChartLecheCoco = new Chart(ctx2LecheCoco, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.3, 24, 0.5],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3LecheCoco = document.getElementById('caloriesChartLecheCoco').getContext('2d');
        const caloriesChartLecheCoco = new Chart(ctx3LecheCoco, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [230, 228, 235, 231, 230],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4LecheCoco = document.getElementById('comparisonChartLecheCoco').getContext('2d');
        const comparisonChartLecheCoco = new Chart(ctx4LecheCoco, {
            type: 'bar',
            data: {
                labels: ['Leche de Coco', 'Leche de Almendra', 'Leche de Soja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [230, 13, 54],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ccff99'],
                }]
            },
        });
    </script>
</body>
</html>
