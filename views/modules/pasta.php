<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pasta</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/enabled/564x/b2/22/e5/b222e55a32c0e801694b10b5696eecb4.jpg" alt="Imagen de Pasta">
            <p class="category">Categoría: Cereales y Derivados</p>
            <p class="description">La pasta es un alimento versátil y delicioso, base de muchas preparaciones culinarias, especialmente en la cocina italiana. Se presenta en varias formas y tamaños, y puede acompañarse de salsas, verduras o proteínas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La pasta es un alimento básico hecho de trigo o harina de sémola, agua y, en algunos casos, huevo. Es rica en carbohidratos, lo que la convierte en una fuente importante de energía. Es un alimento común en muchas culturas, pero se asocia principalmente con la gastronomía italiana.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>131 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>25g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.2g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Altamente Calórica:</strong> La pasta puede ser alta en calorías, por lo que es importante controlar las porciones para evitar un consumo excesivo.</p>
            </div>
            <div class="description">
                <p><strong>Gluten:</strong> Para personas con enfermedad celíaca o intolerancia al gluten, es necesario consumir pasta sin gluten.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> Gracias a su alto contenido en carbohidratos, la pasta proporciona energía a largo plazo, siendo ideal para quienes realizan actividad física.</p>
            </div>
            <div class="description">
                <p><strong>Bajo en Grasas:</strong> La pasta tiene un contenido graso muy bajo, lo que la hace adecuada para una dieta equilibrada cuando se combina con ingredientes saludables.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPasta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPasta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPasta"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPasta"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pasta</h2>
            <p>La pasta es el ingrediente principal de recetas como espaguetis a la boloñesa, lasaña, macarrones con queso y muchas más. Puede prepararse de diversas formas, con salsas, verduras, proteínas o incluso en ensaladas frías.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Existen más de 600 tipos diferentes de pasta en el mundo, cada uno con un nombre y forma específica, lo que hace que su versatilidad en la cocina sea prácticamente infinita.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pasta, asegúrate de verificar la etiqueta para conocer su contenido de ingredientes. Para opciones más saludables, elige pasta integral o variedades sin gluten si es necesario.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La pasta puede combinarse con proteínas magras, como pechuga de pollo o pescado, así como con una variedad de verduras frescas o al vapor, para una comida equilibrada y nutritiva.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>La quinoa y la pasta de legumbres, como la pasta de garbanzos o lentejas, son excelentes alternativas para quienes buscan opciones sin gluten o ricas en proteínas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El impacto ambiental de la pasta depende en gran medida de la producción del trigo. Optar por pastas producidas de manera sostenible y de comercio justo puede ayudar a reducir su huella de carbono.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pasta = document.getElementById('macronutrientChartPasta').getContext('2d');
        const macronutrientChartPasta = new Chart(ctx1Pasta, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.1, 25, 5],
                    backgroundColor: ['#f39c12', '#27ae60', '#2980b9'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pasta = document.getElementById('micronutrientChartPasta').getContext('2d');
        const micronutrientChartPasta = new Chart(ctx2Pasta, {
            type: 'radar',
            data: {
                labels: ['Fibra', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.2, 7, 1.5],
                    backgroundColor: 'rgba(243, 156, 18, 0.2)', // Color de fondo
                    borderColor: 'rgba(243, 156, 18, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(243, 156, 18, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pasta = document.getElementById('caloriesChartPasta').getContext('2d');
        const caloriesChartPasta = new Chart(ctx3Pasta, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [131, 130, 132, 129, 131],
                    backgroundColor: 'rgba(243, 156, 18, 0.2)', // Color de fondo
                    borderColor: 'rgba(243, 156, 18, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Pasta = document.getElementById('comparisonChartPasta').getContext('2d');
        const comparisonChartPasta = new Chart(ctx4Pasta, {
            type: 'bar',
            data: {
                labels: ['Pasta', 'Arroz', 'Quinoa', 'Papas'],
                datasets: [{
                    label: 'Comparación de Macronutrientes',
                    data: [131, 130, 120, 85],
                    backgroundColor: ['#f39c12', '#e74c3c', '#27ae60', '#8e44ad'],
                }]
            },
        });
    </script>
</body>
</html>
