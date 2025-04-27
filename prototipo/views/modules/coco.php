<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Coco</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/coco_23-2148419635.jpg" alt="Imagen de Coco">
            <p class="category">Categoría: Frutas Tropicales</p>
            <p class="description">El coco es una fruta tropical conocida por su pulpa blanca, agua refrescante y alto contenido de grasas saludables, ampliamente utilizado en la cocina y la cosmética.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El coco es un alimento versátil que se puede consumir fresco, seco o en forma de aceite. Es rico en nutrientes y se ha asociado a diversos beneficios para la salud.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>354 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>3.3g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>15.2g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>33.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>9g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alto en Calorías:</strong> Debido a su alto contenido graso, el coco es calórico, lo que puede ser problemático en una dieta baja en calorías.</p>
            </div>
            <div class="description">
                <p><strong>Alérgenos:</strong> Algunas personas pueden ser alérgicas al coco y deben evitar su consumo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Grasas Saludables:</strong> El coco contiene ácidos grasos de cadena media, que pueden proporcionar energía rápida y beneficios para la salud del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Hidratación:</strong> El agua de coco es una excelente bebida hidratante, rica en electrolitos.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> El coco es rico en antioxidantes que ayudan a combatir el estrés oxidativo y la inflamación en el cuerpo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChart"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChart"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Coco</h2>
            <p>El coco se puede utilizar en batidos, curries, postres, y como ingrediente en ensaladas y salsas, aportando un sabor exótico.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El coco se considera una fruta, una nuez y una semilla, lo que lo convierte en un alimento único en su clasificación.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir un coco, busca aquellos que suenen huecos al golpearlos y tengan una cáscara intacta, lo que indica frescura.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El coco combina bien con frutas tropicales, yogur, y se puede usar en batidos y ensaladas para un toque refrescante.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes coco, puedes usar leche de almendras o yogur de soja como alternativas en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de coco puede ser sostenible si se gestiona adecuadamente, pero la deforestación y la producción irresponsable son preocupaciones.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1 = document.getElementById('macronutrientChart').getContext('2d');
        const macronutrientChart = new Chart(ctx1, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [3.3, 15.2, 33.5],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Calcio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [3.3, 17, 30],
                    backgroundColor: 'rgba(100, 250, 100, 0.2)',
                    borderColor: 'rgba(100, 250, 100, 1)',
                    pointBackgroundColor: 'rgba(100, 250, 100, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3 = document.getElementById('caloriesChart').getContext('2d');
        const caloriesChart = new Chart(ctx3, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [354, 355, 353, 354, 356],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Coco', 'Almendra', 'Avellana'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [354, 576, 628],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
