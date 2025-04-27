<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Queso Ricotta</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/queso-ricotta-aislado-blanco_144627-20468.jpg" alt="Imagen de Queso Ricotta">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">El queso ricotta es un queso italiano suave y cremoso, elaborado a partir del suero de leche, con un sabor ligeramente dulce y una textura grumosa.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El queso ricotta es versátil y se utiliza en una variedad de recetas, desde lasañas hasta postres como cannoli. Su textura suave lo hace ideal para untar o mezclar.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>174 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>11g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>13g</td>
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
                <p><strong>Alergias:</strong> Las personas alérgicas a la leche deben evitar el queso ricotta, ya que contiene lácteos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Calcio:</strong> El queso ricotta es rico en calcio, esencial para la salud ósea.</p>
            </div>
            <div class="description">
                <p><strong>Bajo en Sodio:</strong> Generalmente, es más bajo en sodio en comparación con otros quesos, lo que lo hace una opción más saludable.</p>
            </div>
            <div class="description">
                <p><strong>Proteínas:</strong> Ofrece una buena cantidad de proteínas, lo que ayuda en la construcción muscular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRicotta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRicotta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRicotta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRicotta"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Queso Ricotta</h2>
            <p>El queso ricotta es ideal para lasañas, rellenos de pastas, pancakes y postres como cannoli o cheesecake.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El queso ricotta se originó en Italia y su nombre proviene de la palabra italiana "recotta", que significa "recocido", ya que se hace a partir del suero de leche de otros quesos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar queso ricotta, busca opciones frescas y verifica la fecha de caducidad. Opta por variedades que no contengan aditivos innecesarios.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El queso ricotta combina bien con frutas frescas, miel, nueces, y es perfecto para acompañar tostadas integrales o galletas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al queso ricotta incluyen el queso cottage o el queso crema, que pueden ser utilizados en recetas similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El consumo de quesos producidos de manera sostenible puede ayudar a minimizar el impacto ambiental asociado con la producción láctea.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Ricotta = document.getElementById('macronutrientChartRicotta').getContext('2d');
        const macronutrientChartRicotta = new Chart(ctx1Ricotta, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [4, 11, 13],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Ricotta = document.getElementById('micronutrientChartRicotta').getContext('2d');
        const micronutrientChartRicotta = new Chart(ctx2Ricotta, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [11, 207, 0.4],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Ricotta = document.getElementById('caloriesChartRicotta').getContext('2d');
        const caloriesChartRicotta = new Chart(ctx3Ricotta, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [174, 172, 175, 174, 173],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Ricotta = document.getElementById('comparisonChartRicotta').getContext('2d');
        const comparisonChartRicotta = new Chart(ctx4Ricotta, {
            type: 'bar',
            data: {
                labels: ['Queso Ricotta', 'Queso Feta', 'Queso de Cabra'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [174, 264, 364],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
