<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Queso Feta</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/a8/aa/2e/a8aa2ea6faae59ec21fa06c1b0926c10.jpg" alt="Imagen de Queso Feta">
            <p class="category">Categoría: Lácteo</p>
            <p class="description">El queso feta es un queso blanco griego, elaborado tradicionalmente a partir de leche de oveja o de una mezcla de leche de oveja y cabra.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El queso feta es conocido por su textura desmenuzable y su sabor salado. Se utiliza comúnmente en ensaladas, platos mediterráneos y como acompañante de diversas recetas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>264 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>14g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>21g</td>
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
                <p><strong>Alergias:</strong> Las personas alérgicas a la leche deben evitar el queso feta, ya que contiene lácteos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Calcio:</strong> Es una excelente fuente de calcio, esencial para la salud ósea.</p>
            </div>
            <div class="description">
                <p><strong>Probióticos:</strong> Contiene cultivos vivos que pueden beneficiar la salud digestiva.</p>
            </div>
            <div class="description">
                <p><strong>Proteínas:</strong> Es rico en proteínas, lo que puede ayudar en la construcción y reparación muscular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartFeta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartFeta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartFeta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartFeta"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Queso Feta</h2>
            <p>El queso feta es ideal para ensaladas griegas, pastas al horno y pizzas, además de ser un excelente acompañante para frutas como la sandía.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El queso feta es uno de los quesos más antiguos del mundo, con una historia que se remonta a más de 6,000 años.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar queso feta, busca opciones que sean auténticas y verifique la etiqueta para asegurarte de que no contengan aditivos innecesarios.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El queso feta combina bien con aceitunas, tomate, pepino, y hierbas frescas como el orégano y el albahaca.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al queso feta incluyen el queso ricotta o el queso de cabra, que tienen sabores y texturas similares.</p>
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
        const ctx1Feta = document.getElementById('macronutrientChartFeta').getContext('2d');
        const macronutrientChartFeta = new Chart(ctx1Feta, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [4, 14, 21],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Feta = document.getElementById('micronutrientChartFeta').getContext('2d');
        const micronutrientChartFeta = new Chart(ctx2Feta, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [14, 493, 0.7],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Feta = document.getElementById('caloriesChartFeta').getContext('2d');
        const caloriesChartFeta = new Chart(ctx3Feta, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [264, 262, 265, 264, 263],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Feta = document.getElementById('comparisonChartFeta').getContext('2d');
        const comparisonChartFeta = new Chart(ctx4Feta, {
            type: 'bar',
            data: {
                labels: ['Queso Feta', 'Queso Ricotta', 'Queso de Cabra'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [264, 174, 364],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
