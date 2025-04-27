<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Chorizo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/chorizo-espanol_23-2147768898.jpg" alt="Imagen de Chorizo">
            <p class="category">Categoría: Carnes</p>
            <p class="description">El chorizo es un embutido español hecho de carne de cerdo picada, condimento de pimentón y otras especias, famoso por su sabor intenso y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El chorizo se elabora a partir de carne de cerdo y es muy utilizado en la gastronomía de varios países, especialmente en España. Se puede consumir crudo, cocido o asado, y es un ingrediente común en muchos platos, como guisos, tapas y pizzas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>455 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>25g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>39g</td>
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
                <p><strong>Alto en Grasas Saturadas:</strong> Su alto contenido en grasas puede contribuir a problemas cardiovasculares si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Alto en Sodio:</strong> El chorizo contiene niveles elevados de sodio, lo cual puede ser problemático para personas con hipertensión.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Proteínas:</strong> Proporciona una buena cantidad de proteínas, lo que puede ayudar en el desarrollo muscular.</p>
            </div>
            <div class="description">
                <p><strong>Vitaminas y Minerales:</strong> Contiene vitaminas del grupo B, que son esenciales para el metabolismo energético.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartChorizo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartChorizo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartChorizo"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartChorizo"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Chorizo</h2>
            <p>El chorizo es excelente en paellas, guisos, o simplemente asado en la parrilla. También se puede agregar a ensaladas o pastas para dar un sabor especial.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El chorizo tiene una larga tradición en la cocina española, y se dice que la receta se remonta a tiempos antiguos, siendo parte de la dieta mediterránea.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar chorizo, busca opciones con ingredientes naturales y evita los que contienen conservantes artificiales.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El chorizo combina bien con verduras asadas, legumbres, y también se puede utilizar en salsas para pastas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas opciones más saludables, puedes considerar chorizo de pavo o pollo, que suelen tener menos grasa.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Optar por chorizo de producción sostenible puede ayudar a reducir el impacto ambiental y promover prácticas de cría responsable.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Chorizo = document.getElementById('macronutrientChartChorizo').getContext('2d');
        const macronutrientChartChorizo = new Chart(ctx1Chorizo, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.5, 25, 39],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Chorizo = document.getElementById('micronutrientChartChorizo').getContext('2d');
        const micronutrientChartChorizo = new Chart(ctx2Chorizo, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Hierro', 'Zinc'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [25, 2.5, 2.0],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Chorizo = document.getElementById('caloriesChartChorizo').getContext('2d');
        const caloriesChartChorizo = new Chart(ctx3Chorizo, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [455, 450, 460, 453, 455],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Chorizo = document.getElementById('comparisonChartChorizo').getContext('2d');
        const comparisonChartChorizo = new Chart(ctx4Chorizo, {
            type: 'bar',
            data: {
                labels: ['Chorizo', 'Salchicha', 'Bacon'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [455, 300, 541],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ccff99'],
                }]
            },
        });
    </script>
</body>
</html>
