<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Rábano</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/rábano-frescos-madera_23-2148983228.jpg" alt="Imagen de Rábano">
            <p class="category">Categoría: Verdura</p>
            <p class="description">El rábano es un vegetal de raíz picante y crujiente, conocido por su alto contenido de agua y su bajo valor calórico. Se utiliza en ensaladas y como acompañante.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los rábanos son un alimento crujiente y refrescante que se cultiva en muchas partes del mundo. Su sabor puede variar desde dulce hasta muy picante, dependiendo de la variedad y el tiempo de cosecha.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>16 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
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
                <p><strong>Puede Causar Gases:</strong> Los rábanos pueden provocar gases en algunas personas debido a su contenido de fibra y compuestos de azufre.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Algunas variedades pueden interactuar con ciertos medicamentos, especialmente aquellos que afectan la tiroides.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Bajo en Calorías:</strong> Perfecto para dietas de control de peso.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Vitamina C:</strong> Ayuda a fortalecer el sistema inmunológico y combate los radicales libres.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Digestión:</strong> Su contenido de fibra promueve una buena digestión y salud intestinal.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRábano"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRábano"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRábano"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRábano"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Rábano</h2>
            <p>Los rábanos se pueden usar en ensaladas, tacos, o incluso encurtidos. También son un excelente acompañante en sándwiches y hamburguesas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los rábanos pueden venir en una variedad de colores, incluyendo rojo, blanco, y negro, cada uno con un sabor y textura diferentes. Su cultivo se remonta a más de 2,000 años en Asia.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir rábanos, busca raíces firmes y frescas, sin manchas ni arrugas. Los rábanos más pequeños suelen ser más tiernos y sabrosos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los rábanos combinan bien con otros vegetales crujientes, como zanahorias y pepinos. También son excelentes en dips como hummus o guacamole.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al rábano incluyen otras verduras crujientes como el apio y la zanahoria, que ofrecen texturas y sabores similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El rábano es un cultivo de rápido crecimiento y se puede cultivar en una variedad de condiciones, lo que lo convierte en una opción sostenible en la agricultura.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Rábano = document.getElementById('macronutrientChartRábano').getContext('2d');
        const macronutrientChartRábano = new Chart(ctx1Rábano, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.7, 3.4, 0.1],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Rábano = document.getElementById('micronutrientChartRábano').getContext('2d');
        const micronutrientChartRábano = new Chart(ctx2Rábano, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.7, 25, 0.34],
                    backgroundColor: 'rgba(255, 153, 204, 0.2)',
                    borderColor: 'rgba(255, 153, 204, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 204, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Rábano = document.getElementById('caloriesChartRábano').getContext('2d');
        const caloriesChartRábano = new Chart(ctx3Rábano, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [16, 18, 15, 17, 16],
                    backgroundColor: 'rgba(255, 153, 204, 0.2)',
                    borderColor: 'rgba(255, 153, 204, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Rábano = document.getElementById('comparisonChartRábano').getContext('2d');
        const comparisonChartRábano = new Chart(ctx4Rábano, {
            type: 'bar',
            data: {
                labels: ['Rábano', 'Pepino', 'Zanahoria'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [16, 16, 41],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });
    </script>
</body>
</html>
