<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pavo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/88/43/c5/8843c506d6461e405633a192ae6b3b1e.jpg" alt="Imagen de Pavo">
            <p class="category">Categoría: Carnes</p>
            <p class="description">El pavo es una carne magra y sabrosa, ideal para una alimentación saludable.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El pavo es una excelente fuente de proteínas y es bajo en grasas, lo que lo convierte en una opción popular en dietas saludables.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>135 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>30.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1.0g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>1.0mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al pavo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Proteínas:</strong> El pavo es una excelente fuente de proteínas, esencial para la construcción muscular.</p>
            </div>
            <div class="description">
                <p><strong>Menos Grasas:</strong> Su bajo contenido de grasa lo convierte en una opción más saludable en comparación con otras carnes.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartTurkey"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartTurkey"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartTurkey"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartTurkey"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pavo</h2>
            <p>El pavo se puede utilizar en una variedad de recetas, desde asados hasta guisos y hamburguesas, ofreciendo un sabor delicioso y nutritivo.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El pavo es un símbolo tradicional de la cena de Acción de Gracias en Estados Unidos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca pavo fresco y de buena calidad, asegurándote de que no tenga un olor fuerte ni coloración extraña.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El pavo combina bien con vegetales al vapor, ensaladas y granos integrales.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes optar por pollo o pescado, que también son fuentes magras de proteínas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Opta por pavo de fuentes sostenibles que respeten el bienestar animal y prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Turkey = document.getElementById('macronutrientChartTurkey').getContext('2d');
        const macronutrientChartTurkey = new Chart(ctx1Turkey, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.0, 0, 30.0],
                    backgroundColor: ['#2ecc71', '#f39c12', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Turkey = document.getElementById('micronutrientChartTurkey').getContext('2d');
        const micronutrientChartTurkey = new Chart(ctx2Turkey, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Tiamina', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.0, 0.9, 1.0],
                    backgroundColor: 'rgba(155, 89, 182, 0.2)', // Color de fondo
                    borderColor: 'rgba(155, 89, 182, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(155, 89, 182, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Turkey = document.getElementById('caloriesChartTurkey').getContext('2d');
        const caloriesChartTurkey = new Chart(ctx3Turkey, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [135, 140, 130, 142, 136],
                    backgroundColor: 'rgba(241, 196, 15, 0.2)', // Color de fondo
                    borderColor: 'rgba(241, 196, 15, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Turkey = document.getElementById('comparisonChartTurkey').getContext('2d');
        const comparisonChartTurkey = new Chart(ctx4Turkey, {
            type: 'bar',
            data: {
                labels: ['Pavo', 'Carne de Res', 'Cordero'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [135, 250, 294],
                    backgroundColor: ['#e74c3c', '#3498db', '#9b59b6'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
