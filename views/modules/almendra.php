<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Almendras</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/c2/7e/56/c27e560cfa9df66ed07e8821251ddcdd.jpg" alt="Imagen de Almendras">
            <p class="category">Categoría: Fruto seco</p>
            <p class="description">Las almendras son frutos secos que se destacan por su delicioso sabor y sus numerosos beneficios para la salud.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las almendras son las semillas comestibles del almendro (Prunus dulcis). Son conocidas por su sabor suave y su textura crujiente. Se pueden consumir crudas, tostadas o como parte de diversos platos. Además, son una excelente fuente de nutrientes, incluyendo grasas saludables, proteínas, fibra y antioxidantes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>576 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>21.2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>21.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>49.9g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>12.5g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina E, Magnesio, Calcio, Hierro</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a las almendras, lo que puede causar reacciones adversas.</p>
            </div>
            <div class="description">
                <p><strong>Calorías:</strong> Aunque son saludables, las almendras son calóricas, por lo que deben consumirse con moderación.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Corazón saludable:</strong> Las almendras son ricas en grasas monoinsaturadas que ayudan a reducir el riesgo de enfermedades cardíacas.</p>
            </div>
            <div class="description">
                <p><strong>Control del peso:</strong> La fibra y las proteínas en las almendras ayudan a sentirse lleno, lo que puede ayudar a controlar el peso.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Son una fuente rica de antioxidantes, que ayudan a combatir el daño oxidativo en el cuerpo.</p>
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
            <h2>Recetas con Almendras</h2>
            <p>Las almendras se pueden utilizar en una variedad de recetas, desde ensaladas hasta batidos y postres. También son deliciosas como snack solas o tostadas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las almendras no son nueces, sino semillas de la fruta del almendro. También se cree que el consumo de almendras puede mejorar la salud de la piel y el cabello.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar almendras, busca las que sean frescas y crujientes, sin manchas ni olores rancios. Las almendras pueden encontrarse en varias formas, como enteras, en rodajas o molidas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las almendras combinan bien con yogur, frutas, granola y chocolates oscuros. También se pueden usar en recetas de repostería y como topping en ensaladas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes almendras, puedes usar nueces, anacardos o avellanas como alternativas en recetas y snacks.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de almendras requiere una cantidad significativa de agua, lo que ha llevado a preocupaciones sobre la sostenibilidad en algunas regiones. Se recomienda elegir almendras de fuentes sostenibles.</p>
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
                    data: [21.2, 21.6, 49.9],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina E', 'Magnesio', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [25.6, 268, 264, 3.7],
                    backgroundColor: 'rgba(100, 200, 100, 0.2)',
                    borderColor: 'rgba(100, 200, 100, 1)',
                    pointBackgroundColor: 'rgba(100, 200, 100, 1)',
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
                    data: [576, 580, 575, 578, 576],
                    borderColor: '#ff6384',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                }]
            },
        });

        // Gráfico de comparación de calorías
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Almendras', 'Nueces', 'Anacardos'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [576, 654, 553],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
