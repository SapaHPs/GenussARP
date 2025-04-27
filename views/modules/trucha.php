<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Trucha</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/bd/61/8a/bd618ad9a65679115d644519f07c4c6e.jpg" alt="Imagen de Trucha">
            <p class="category">Categoría: Pescados</p>
            <p class="description">La trucha es un pescado de agua dulce conocido por su delicioso sabor y alto contenido en nutrientes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La trucha es un pescado rico en proteínas, ácidos grasos omega-3, y diversas vitaminas y minerales, lo que la convierte en una opción saludable.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>148 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>20.0g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>7.0g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>0.4mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los pescados.</p>
                <p><strong>Contaminantes:</strong> La trucha puede contener contaminantes dependiendo de su fuente, por lo que es importante elegir truchas de criaderos sostenibles.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Omega-3:</strong> La trucha es una excelente fuente de ácidos grasos omega-3, que son beneficiosos para el corazón y el cerebro.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de Vitamina B:</strong> Es rica en varias vitaminas del grupo B, que son importantes para la energía y el metabolismo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartTrout"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartTrout"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartTrout"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartTrout"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Trucha</h2>
            <p>La trucha se puede preparar de diversas formas, incluyendo al horno, a la parrilla o en ceviche, para disfrutar de su delicioso sabor.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La trucha es muy popular en la pesca recreativa y se cría en acuicultura en muchas partes del mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca trucha fresca con ojos claros y piel brillante, o elige trucha congelada de alta calidad.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La trucha combina bien con vegetales al vapor, arroz integral y hierbas frescas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, el salmón o el bacalao son opciones ricas en nutrientes y con un sabor delicioso.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Elige trucha de fuentes sostenibles y criaderos responsables para ayudar a proteger el medio ambiente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Trout = document.getElementById('macronutrientChartTrout').getContext('2d');
        const macronutrientChartTrout = new Chart(ctx1Trout, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [7.0, 0, 20.0],
                    backgroundColor: ['#2ecc71', '#f39c12', '#3498db'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Trout = document.getElementById('micronutrientChartTrout').getContext('2d');
        const micronutrientChartTrout = new Chart(ctx2Trout, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Tiamina', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.4, 0.1, 4.5],
                    backgroundColor: 'rgba(155, 89, 182, 0.2)', // Color de fondo
                    borderColor: 'rgba(155, 89, 182, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(155, 89, 182, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Trout = document.getElementById('caloriesChartTrout').getContext('2d');
        const caloriesChartTrout = new Chart(ctx3Trout, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [148, 150, 145, 155, 152],
                    backgroundColor: 'rgba(241, 196, 15, 0.2)', // Color de fondo
                    borderColor: 'rgba(241, 196, 15, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Trout = document.getElementById('comparisonChartTrout').getContext('2d');
        const comparisonChartTrout = new Chart(ctx4Trout, {
            type: 'bar',
            data: {
                labels: ['Trucha', 'Salmón', 'Atún'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [148, 206, 132],
                    backgroundColor: ['#e74c3c', '#3498db', '#9b59b6'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
