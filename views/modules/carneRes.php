<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Carne de Res</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/a3/ff/a3/a3ffa36cf4c7f1ef181382e507f2aa21.jpg" alt="Imagen de Carne de Res">
            <p class="category">Categoría: Carnes</p>
            <p class="description">La carne de res es la carne proveniente de ganado bovino, conocida por su sabor y versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La carne de res es un alimento rico en nutrientes, utilizada en una amplia variedad de platos en todo el mundo. Su sabor robusto y su textura la convierten en un ingrediente fundamental en muchas culturas culinarias.</p><br><br>
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
                    <td>26.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>17.1g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>2.6mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Grasas Saturadas:</strong> La carne de res puede ser alta en grasas saturadas, lo que puede afectar la salud cardiovascular si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a la carne de res.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> La carne de res es una excelente fuente de proteínas, hierro y zinc, importantes para el crecimiento y desarrollo.</p>
            </div>
            <div class="description">
                <p><strong>Salud Muscular:</strong> Su alto contenido de proteínas ayuda a mantener y desarrollar la masa muscular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRes"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRes"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Carne de Res</h2>
            <p>La carne de res es perfecta para asados, guisos y hamburguesas, ofreciendo una gran versatilidad en la cocina.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La carne de res se consume en diversas formas en todo el mundo, desde bistecs hasta carne molida y estofados.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca carne de res fresca, con un color rojo brillante y grasa blanca. Evita la carne que tenga un olor fuerte.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La carne de res combina bien con verduras asadas, ensaladas frescas y granos enteros como el arroz integral.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes optar por carnes magras como el pollo o el pavo.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Opta por carne de res de fuentes sostenibles que respeten el bienestar animal y las prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Res = document.getElementById('macronutrientChartRes').getContext('2d');
        const macronutrientChartRes = new Chart(ctx1Res, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [17.1, 0, 26.1],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Res = document.getElementById('micronutrientChartRes').getContext('2d');
        const micronutrientChartRes = new Chart(ctx2Res, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Zinc', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.6, 4.5, 2.0],
                    backgroundColor: 'rgba(241, 196, 15, 0.2)', // Color de fondo
                    borderColor: 'rgba(241, 196, 15, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(241, 196, 15, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Res = document.getElementById('caloriesChartRes').getContext('2d');
        const caloriesChartRes = new Chart(ctx3Res, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [250, 252, 248, 245, 260],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Res = document.getElementById('comparisonChartRes').getContext('2d');
        const comparisonChartRes = new Chart(ctx4Res, {
            type: 'bar',
            data: {
                labels: ['Carne de Res', 'Cerdo', 'Cordero'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [250, 242, 294],
                    backgroundColor: ['#2ecc71', '#e67e22', '#e74c3c'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
