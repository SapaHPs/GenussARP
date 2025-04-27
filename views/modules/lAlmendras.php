<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Leche de Almendras</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/c8/64/90/c8649040d7ac7655ab735265561018a8.jpg" alt="Imagen de Leche de Almendras">
            <p class="category">Categoría: Bebida Vegetal</p>
            <p class="description">La leche de almendras es una alternativa láctea popular, rica en nutrientes y baja en calorías.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La leche de almendras se elabora a partir de almendras molidas y agua. Es baja en calorías y contiene grasas saludables, así como una buena dosis de vitamina E.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>30 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>2.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Las personas alérgicas a las nueces deben evitar la leche de almendras.</p>
            </div>
            <div class="description">
                <p><strong>Enriquecimiento:</strong> Algunas marcas pueden no estar enriquecidas con calcio y vitamina D.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Nutrición:</strong> Rico en vitamina E, que es un antioxidante.</p>
            </div>
            <div class="description">
                <p><strong>Control de Peso:</strong> Baja en calorías, ideal para quienes buscan perder peso.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> Contiene grasas saludables que benefician al corazón.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartAlmondMilk"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartAlmondMilk"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartAlmondMilk"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartAlmondMilk"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Leche de Almendras</h2>
            <p>La leche de almendras es excelente para batidos, avena y como base para postres.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La leche de almendras se consume desde la Edad Media, cuando era una alternativa a la leche de vaca.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca leche de almendras sin azúcares añadidos y preferiblemente enriquecida con calcio.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La leche de almendras combina bien con café, batidos de frutas y cereales integrales.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir leche de almendras, prueba con leche de avena o leche de coco.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Elegir leche de almendras de productores sostenibles ayuda a reducir la huella ecológica.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1AlmondMilk = document.getElementById('macronutrientChartAlmondMilk').getContext('2d');
        const macronutrientChartAlmondMilk = new Chart(ctx1AlmondMilk, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1, 0.5, 2.5],
                    backgroundColor: ['#ffb74d', '#81c784', '#64b5f6'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2AlmondMilk = document.getElementById('micronutrientChartAlmondMilk').getContext('2d');
        const micronutrientChartAlmondMilk = new Chart(ctx2AlmondMilk, {
            type: 'radar',
            data: {
                labels: ['Vitamina E', 'Calcio', 'Vitamina D'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [15, 120, 2.5],
                    backgroundColor: 'rgba(255, 183, 77, 0.2)',
                    borderColor: 'rgba(255, 183, 77, 1)',
                    pointBackgroundColor: 'rgba(255, 183, 77, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3AlmondMilk = document.getElementById('caloriesChartAlmondMilk').getContext('2d');
        const caloriesChartAlmondMilk = new Chart(ctx3AlmondMilk, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [30, 32, 28, 29, 31],
                    backgroundColor: 'rgba(255, 183, 77, 0.2)',
                    borderColor: 'rgba(255, 183, 77, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4AlmondMilk = document.getElementById('comparisonChartAlmondMilk').getContext('2d');
        const comparisonChartAlmondMilk = new Chart(ctx4AlmondMilk, {
            type: 'bar',
            data: {
                labels: ['Leche de Almendras', 'Leche de Vaca', 'Leche de Soja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [30, 42, 33],
                    backgroundColor: ['#ffb74d', '#81c784', '#64b5f6'],
                    borderColor: ['#ffb74d', '#81c784', '#64b5f6'],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
