<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pera</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/4d/53/08/4d5308c399330b860911eb3094a30ce8.jpg" alt="Imagen de Pera">
            <p class="category">Categoría: Fruta</p>
            <p class="description">La pera es una fruta dulce y jugosa, ideal para consumir fresca o en postres, rica en fibra y antioxidantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las peras son una excelente fuente de fibra y vitamina C, lo que las convierte en una opción saludable para picar. Se pueden disfrutar frescas, en ensaladas, o como parte de recetas de repostería.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>57 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>15.2g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Digestión:</strong> Algunas personas pueden experimentar malestar digestivo si consumen peras en exceso, debido a su contenido de fructosa.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones:</strong> Las peras pueden interferir con ciertos medicamentos, así que es recomendable consultar con un médico si se está bajo tratamiento.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en Fibra:</strong> Contribuye a la salud digestiva y ayuda a mantener la sensación de saciedad.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Salud Cardiovascular:</strong> El consumo regular de peras puede mejorar la salud del corazón gracias a su contenido de fibra y antioxidantes.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPera"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPera"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPera"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPera"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pera</h2>
            <p>Las peras son deliciosas en ensaladas, postres como tartas o simplemente solas como un snack saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las peras son originarias de Europa y Asia y se cultivan desde hace más de 3000 años. Existen más de 3000 variedades de peras en todo el mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar peras, busca aquellas que sean firmes pero que cedan ligeramente a la presión. Un color uniforme indica frescura.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las peras combinan bien con queso, nueces y ensaladas, así como en batidos con otros frutos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir peras, considera usar manzanas o duraznos como alternativas dulces y jugosas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de peras puede ser sostenible si se utilizan métodos de cultivo respetuosos con el medio ambiente y prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pera = document.getElementById('macronutrientChartPera').getContext('2d');
        const macronutrientChartPera = new Chart(ctx1Pera, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.4, 15.2, 0.1],
                    backgroundColor: ['#99ffcc', '#ffcc99', '#ffeb99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pera = document.getElementById('micronutrientChartPera').getContext('2d');
        const micronutrientChartPera = new Chart(ctx2Pera, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [4.3, 3.1, 116],
                    backgroundColor: 'rgba(153, 255, 204, 0.2)',
                    borderColor: 'rgba(153, 255, 204, 1)',
                    pointBackgroundColor: 'rgba(153, 255, 204, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pera = document.getElementById('caloriesChartPera').getContext('2d');
        const caloriesChartPera = new Chart(ctx3Pera, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [57, 58, 56, 57, 57],
                    backgroundColor: 'rgba(153, 255, 204, 0.2)',
                    borderColor: 'rgba(153, 255, 204, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Pera = document.getElementById('comparisonChartPera').getContext('2d');
        const comparisonChartPera = new Chart(ctx4Pera, {
            type: 'bar',
            data: {
                labels: ['Pera', 'Manzana', 'Naranja'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [57, 52, 47],
                    backgroundColor: ['#99ffcc', '#ffcc99', '#ffeb99'],
                }]
            },
        });
    </script>
</body>
</html>
