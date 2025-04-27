<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Cebolla Puerro</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/ec/bd/50/ecbd505a8deecfd0a419e3425b6e1fa0.jpg" alt="Imagen de Cebolla Puerro">
            <p class="category">Categoría: Verduras</p>
            <p class="description">La cebolla puerro es una verdura rica en sabor, ideal para dar un toque especial a diversos platillos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El puerro es una planta de la familia de las liliáceas, pariente cercano de la cebolla y el ajo. Se utiliza en la cocina para realzar el sabor de sopas, guisos y ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>61 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>14.2g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas Digestivos:</strong> El consumo excesivo de puerro puede causar gases o malestar estomacal en algunas personas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Antioxidantes:</strong> El puerro contiene antioxidantes que ayudan a combatir el estrés oxidativo.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> Su contenido en fibra favorece la salud digestiva y ayuda a mantener un sistema digestivo sano.</p>
            </div>
            <div class="description">
                <p><strong>Corazón Saludable:</strong> Ayuda a mantener niveles saludables de colesterol y presión arterial.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPuerro"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPuerro"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPuerro"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPuerro"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Cebolla Puerro</h2>
            <p>El puerro es ideal para hacer sopas, quiches, y como base para guisos. También se puede usar en ensaladas para añadir un sabor único.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El puerro es un ingrediente esencial en la cocina francesa y se utiliza en platos clásicos como la vichyssoise.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar puerro, busca aquellos que sean firmes y tengan un color verde brillante, evitando los que estén amarillentos o marchitos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El puerro combina bien con patatas, zanahorias, y otros vegetales, creando platos nutritivos y sabrosos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas al puerro incluyen cebolla, cebolla verde, y chalotes, que también ofrecen sabores deliciosos y beneficios nutricionales.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El puerro se cultiva en condiciones sostenibles y su bajo impacto ambiental lo convierte en una buena opción para una dieta saludable.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Puerro = document.getElementById('macronutrientChartPuerro').getContext('2d');
        const macronutrientChartPuerro = new Chart(ctx1Puerro, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [14.2, 1.5, 0.3],
                    backgroundColor: ['#ffcc99', '#99cc99', '#ff9999'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Puerro = document.getElementById('micronutrientChartPuerro').getContext('2d');
        const micronutrientChartPuerro = new Chart(ctx2Puerro, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.5, 83, 1.2],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Puerro = document.getElementById('caloriesChartPuerro').getContext('2d');
        const caloriesChartPuerro = new Chart(ctx3Puerro, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [61, 62, 63, 60, 61],
                    backgroundColor: 'rgba(255, 153, 153, 0.2)',
                    borderColor: 'rgba(255, 153, 153, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Puerro = document.getElementById('comparisonChartPuerro').getContext('2d');
        const comparisonChartPuerro = new Chart(ctx4Puerro, {
            type: 'bar',
            data: {
                labels: ['Cebolla Puerro', 'Cebolla', 'Cebolla Verde'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [61, 40, 32],
                    backgroundColor: ['#ffcc99', '#99ccff', '#ff9999'],
                }]
            },
        });
    </script>
</body>
</html>
