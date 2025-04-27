<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Durazno</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/bf/30/86/bf30868341648447e7cd796231fb5f75.jpg" alt="Imagen de Durazno">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El durazno es una fruta dulce y jugosa, conocida por su sabor refrescante y sus múltiples beneficios para la salud. Es ideal para consumir fresco o en preparaciones diversas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El durazno, originario de China, es una fruta de piel aterciopelada y pulpa dulce. Es una excelente fuente de vitaminas, antioxidantes y fibra, lo que lo convierte en una opción nutritiva y deliciosa.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>39 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>9.5g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al durazno, especialmente aquellas que tienen alergia al polen o frutas de hueso.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en Antioxidantes:</strong> El durazno contiene antioxidantes, como la vitamina C, que ayudan a proteger el cuerpo contra el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Rico en Fibra:</strong> La fibra del durazno favorece la salud digestiva y puede ayudar a reducir los niveles de colesterol.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPeach"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPeach"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPeach"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPeach"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Durazno</h2>
            <p>El durazno es excelente para usar en postres como tartas, mermeladas y ensaladas de frutas. También se puede disfrutar en smoothies y jugos frescos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los duraznos no solo se consumen frescos, también se secan o enlatan, siendo una fruta versátil en la cocina.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al seleccionar duraznos, busca aquellos con piel suave y sin magulladuras. Un durazno maduro tendrá una fragancia dulce y se sentirá ligeramente blando al tacto.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El durazno combina bien con yogur, miel y frutos secos, creando un refrigerio saludable y nutritivo.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las nectarinas son una excelente alternativa al durazno, ya que comparten un perfil nutricional y sabor muy similar.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Al igual que otras frutas, los duraznos tienen un bajo impacto ambiental. Es recomendable comprar duraznos locales y de temporada para reducir la huella de carbono asociada a su transporte.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Peach = document.getElementById('macronutrientChartPeach').getContext('2d');
        const macronutrientChartPeach = new Chart(ctx1Peach, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.3, 9.5, 0.9],
                    backgroundColor: ['#f39c12', '#27ae60', '#2980b9'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Peach = document.getElementById('micronutrientChartPeach').getContext('2d');
        const micronutrientChartPeach = new Chart(ctx2Peach, {
            type: 'radar',
            data: {
                labels: ['Fibra', 'Vitamina C', 'Vitamina A'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.5, 6.6, 16.0],
                    backgroundColor: 'rgba(243, 156, 18, 0.2)', // Color de fondo
                    borderColor: 'rgba(243, 156, 18, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(243, 156, 18, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Peach = document.getElementById('caloriesChartPeach').getContext('2d');
        const caloriesChartPeach = new Chart(ctx3Peach, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [39, 38, 37, 40, 39],
                    backgroundColor: 'rgba(243, 156, 18, 0.2)', // Color de fondo
                    borderColor: 'rgba(243, 156, 18, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Peach = document.getElementById('comparisonChartPeach').getContext('2d');
        const comparisonChartPeach = new Chart(ctx4Peach, {
            type: 'bar',
            data: {
                labels: ['Durazno', 'Manzana', 'Pera'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [39, 52, 57],
                    backgroundColor: ['#f39c12', '#27ae60', '#e74c3c'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
