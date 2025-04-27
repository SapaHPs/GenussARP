<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Manzana</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/48/43/11/4843110c0a87f69186b7ad89e64100ee.jpg" alt="Imagen de Manzana">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La manzana es una fruta jugosa y crujiente, conocida por su sabor dulce y su alto contenido en fibra y antioxidantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las manzanas son una de las frutas más populares del mundo. Se pueden consumir frescas, en ensaladas, en pasteles o en compotas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>52 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.26g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>14g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.17g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Azúcares Naturales:</strong> Aunque son saludables, el consumo excesivo de azúcares puede no ser adecuado para algunas personas.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones Medicamentosas:</strong> Las manzanas pueden interactuar con ciertos medicamentos, especialmente los que afectan el metabolismo del azúcar.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Antioxidantes:</strong> Las manzanas contienen antioxidantes que ayudan a proteger el cuerpo del daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Salud Digestiva:</strong> Su contenido de fibra promueve una buena digestión y salud intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Control del Peso:</strong> Son bajas en calorías y pueden ayudar en el control del peso al proporcionar saciedad.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartManzana"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartManzana"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartManzana"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartManzana"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Manzana</h2>
            <p>La manzana se puede usar en ensaladas, tartas, o simplemente comerla cruda. También es deliciosa en batidos o como salsa.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las manzanas son nativas de Asia Central y hay más de 7,500 variedades diferentes en todo el mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige manzanas firmes, sin manchas ni magulladuras. Las variedades de manzana son diversas, así que elige según tu preferencia de sabor.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina manzanas con canela para un snack delicioso, o agrégalas a ensaladas con nueces y queso.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes manzanas, puedes usar peras o duraznos como alternativas en recetas y ensaladas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de manzanas puede ser sostenible, especialmente cuando se utilizan prácticas agrícolas ecológicas que protegen el medio ambiente.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Manzana = document.getElementById('macronutrientChartManzana').getContext('2d');
        const macronutrientChartManzana = new Chart(ctx1Manzana, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.26, 14, 0.17],
                    backgroundColor: ['#ff9999', '#66b3ff', '#99ff99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Manzana = document.getElementById('micronutrientChartManzana').getContext('2d');
        const micronutrientChartManzana = new Chart(ctx2Manzana, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Potasio', 'Fibra'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [4.6, 107, 2.4],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Manzana = document.getElementById('caloriesChartManzana').getContext('2d');
        const caloriesChartManzana = new Chart(ctx3Manzana, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [52, 54, 53, 55, 52],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Manzana = document.getElementById('comparisonChartManzana').getContext('2d');
        const comparisonChartManzana = new Chart(ctx4Manzana, {
            type: 'bar',
            data: {
                labels: ['Manzana', 'Pera', 'Durazno'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [52, 57, 39],
                    backgroundColor: ['#ff9999', '#66b3ff', '#99ff99'],
                }]
            },
        });
    </script>
</body>
</html>
