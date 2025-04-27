<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Carne de Cerdo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/98/59/b9/9859b98c7588e051f6906e54523c7fe2.jpg" alt="Imagen de Carne de Cerdo">
            <p class="category">Categoría: Carnes</p>
            <p class="description">La carne de cerdo es la carne obtenida de los cerdos, conocida por su sabor y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La carne de cerdo es uno de los tipos de carne más consumidos en todo el mundo. Se utiliza en una amplia variedad de platos y tiene un sabor distintivo y suculento.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>263 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>25.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>19.1g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>0.8mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Grasas Saturadas:</strong> La carne de cerdo puede ser alta en grasas saturadas, lo que puede aumentar el riesgo de enfermedades cardiovasculares si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a la carne de cerdo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> La carne de cerdo es una buena fuente de proteínas, tiamina, y vitaminas B, esenciales para el metabolismo energético.</p>
            </div>
            <div class="description">
                <p><strong>Salud Muscular:</strong> Su alto contenido de proteínas ayuda a mantener y desarrollar la masa muscular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPork"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPork"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPork"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPork"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Carne de Cerdo</h2>
            <p>La carne de cerdo es ideal para hacer asados, chuletas, y platos como el lechón, ofreciendo un gran sabor en diversas preparaciones.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La carne de cerdo se utiliza en muchos platos típicos alrededor del mundo, desde el famoso cerdo a la barbacoa hasta el jamón curado.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca carne de cerdo fresca, de color rosa claro a rojo pálido. Evita la carne que tenga un olor fuerte o que se vea seca.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La carne de cerdo combina bien con vegetales asados, puré de papas y granos enteros como el arroz integral.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes optar por carnes magras como el pollo o el pavo.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Opta por carne de cerdo de fuentes sostenibles que respeten el bienestar animal y las prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pork = document.getElementById('macronutrientChartPork').getContext('2d');
        const macronutrientChartPork = new Chart(ctx1Pork, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [19.1, 0, 25.7],
                    backgroundColor: ['#8e44ad', '#e67e22', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pork = document.getElementById('micronutrientChartPork').getContext('2d');
        const micronutrientChartPork = new Chart(ctx2Pork, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Tiamina', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.8, 0.9, 1.0],
                    backgroundColor: 'rgba(46, 204, 113, 0.2)', // Color de fondo
                    borderColor: 'rgba(46, 204, 113, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(46, 204, 113, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pork = document.getElementById('caloriesChartPork').getContext('2d');
        const caloriesChartPork = new Chart(ctx3Pork, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [263, 265, 260, 270, 255],
                    backgroundColor: 'rgba(52, 152, 219, 0.2)', // Color de fondo
                    borderColor: 'rgba(52, 152, 219, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Pork = document.getElementById('comparisonChartPork').getContext('2d');
        const comparisonChartPork = new Chart(ctx4Pork, {
            type: 'bar',
            data: {
                labels: ['Carne de Cerdo', 'Carne de Res', 'Cordero'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [263, 250, 294],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
