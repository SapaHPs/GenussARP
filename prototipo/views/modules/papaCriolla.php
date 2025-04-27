<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Papa Criolla</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/papa-criolla-amarilla_23-2147710289.jpg" alt="Imagen de Papa Criolla">
            <p class="category">Categoría: Vegetales</p>
            <p class="description">La papa criolla es un tubérculo pequeño y amarillento, muy apreciado por su sabor y textura únicos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La papa criolla es un ingrediente fundamental en la gastronomía colombiana, utilizada en una variedad de platos típicos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>90 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>21g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.2g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto Contenido de Carbohidratos:</strong> Puede no ser recomendable para dietas bajas en carbohidratos.</p>
            </div>
            <div class="description">
                <p><strong>Riesgo de Intolerancia:</strong> Algunas personas pueden experimentar intolerancia a los tubérculos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> Proporciona energía rápida gracias a su contenido de carbohidratos.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> Contiene vitaminas y minerales esenciales como vitamina C y potasio.</p>
            </div>
            <div class="description">
                <p><strong>Versatilidad Culinaria:</strong> Se puede usar en diversas preparaciones, desde sopas hasta guisos.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPapaCriolla"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPapaCriolla"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPapaCriolla"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPapaCriolla"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Papa Criolla</h2>
            <p>La papa criolla es ideal para preparar platos típicos como el ajiaco o como acompañamiento en diversos guisos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La papa criolla es originaria de los Andes y es una de las variedades de papa más antiguas cultivadas por las comunidades indígenas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar papa criolla, busca tubérculos firmes y sin manchas, ya que estos indican frescura.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina la papa criolla con verduras asadas y proteínas magras para una comida equilibrada.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir papa criolla, considera alternativas como la papa amarilla o la yuca.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de papa criolla puede ser sostenible si se realiza en tierras adecuadas y se utilizan prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1PapaCriolla = document.getElementById('macronutrientChartPapaCriolla').getContext('2d');
        const macronutrientChartPapaCriolla = new Chart(ctx1PapaCriolla, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [2, 21, 0.1],
                    backgroundColor: ['#ffcc99', '#ffeb99', '#99ffcc'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2PapaCriolla = document.getElementById('micronutrientChartPapaCriolla').getContext('2d');
        const micronutrientChartPapaCriolla = new Chart(ctx2PapaCriolla, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Potasio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [13, 429, 57],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3PapaCriolla = document.getElementById('caloriesChartPapaCriolla').getContext('2d');
        const caloriesChartPapaCriolla = new Chart(ctx3PapaCriolla, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [90, 92, 89, 91, 90],
                    backgroundColor: 'rgba(255, 204, 153, 0.2)',
                    borderColor: 'rgba(255, 204, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4PapaCriolla = document.getElementById('comparisonChartPapaCriolla').getContext('2d');
        const comparisonChartPapaCriolla = new Chart(ctx4PapaCriolla, {
            type: 'bar',
            data: {
                labels: ['Papa Criolla', 'Papa Blanca', 'Yuca'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [90, 77, 160],
                    backgroundColor: ['#ffcc99', '#ffeb99', '#99ffcc'],
                }]
            },
        });
    </script>
</body>
</html>
