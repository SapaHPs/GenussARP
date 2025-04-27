<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Sardinas</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/sardinas-latas_144627-12557.jpg" alt="Imagen de Sardinas">
            <p class="category">Categoría: Pescados</p>
            <p class="description">Las sardinas son un pescado pequeño, rico en ácidos grasos omega-3 y nutrientes esenciales.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las sardinas son una excelente fuente de proteínas, ácidos grasos omega-3 y vitaminas, lo que las convierte en un alimento muy nutritivo.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>208 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>25.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>11.0g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>2.9mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas al pescado.</p>
                <p><strong>Mercurio:</strong> Las sardinas suelen tener menos mercurio, pero es importante no abusar de su consumo en grandes cantidades.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Omega-3:</strong> Las sardinas son una excelente fuente de ácidos grasos omega-3, beneficiosos para la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de Vitamina D:</strong> Son ricas en vitamina D, que es esencial para la salud ósea.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSardines"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSardines"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSardines"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSardines"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Sardinas</h2>
            <p>Las sardinas se pueden utilizar en una variedad de recetas, como ensaladas, pastas y tostadas, aportando un sabor delicioso y nutritivo.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las sardinas han sido un alimento básico en muchas culturas, especialmente en la mediterránea, durante siglos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca sardinas frescas o enlatadas de buena calidad, asegurándote de que tengan un aspecto brillante y un olor fresco.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las sardinas combinan bien con ensaladas, pan integral, y vegetales al vapor.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes optar por salmón o atún, que también son ricos en nutrientes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Opta por sardinas de fuentes sostenibles que respeten las prácticas de pesca responsable y el bienestar de los ecosistemas marinos.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Sardines = document.getElementById('macronutrientChartSardines').getContext('2d');
        const macronutrientChartSardines = new Chart(ctx1Sardines, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [11.0, 0, 25.0],
                    backgroundColor: ['#2ecc71', '#f39c12', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Sardines = document.getElementById('micronutrientChartSardines').getContext('2d');
        const micronutrientChartSardines = new Chart(ctx2Sardines, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Tiamina', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [2.9, 0.2, 8.9],
                    backgroundColor: 'rgba(155, 89, 182, 0.2)', // Color de fondo
                    borderColor: 'rgba(155, 89, 182, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(155, 89, 182, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Sardines = document.getElementById('caloriesChartSardines').getContext('2d');
        const caloriesChartSardines = new Chart(ctx3Sardines, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [208, 210, 205, 215, 202],
                    backgroundColor: 'rgba(241, 196, 15, 0.2)', // Color de fondo
                    borderColor: 'rgba(241, 196, 15, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Sardines = document.getElementById('comparisonChartSardines').getContext('2d');
        const comparisonChartSardines = new Chart(ctx4Sardines, {
            type: 'bar',
            data: {
                labels: ['Sardinas', 'Salmón', 'Atún'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [208, 206, 132],
                    backgroundColor: ['#e74c3c', '#3498db', '#9b59b6'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
