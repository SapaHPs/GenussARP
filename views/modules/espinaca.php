<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Espinaca</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/4d/05/2d/4d052d47bb6a7f4437f44aa983c738cb.jpg" alt="Imagen de Espinaca">
            <p class="category">Categoría: Vegetales</p>
            <p class="description">La espinaca es un vegetal de hojas verdes que se destaca por su alto contenido nutricional y su versatilidad en la cocina, siendo ideal para ensaladas, guisos y batidos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La espinaca es rica en vitaminas, minerales y antioxidantes, lo que la convierte en un superalimento. Se puede consumir cruda o cocida y se utiliza en una variedad de platos, desde ensaladas hasta sopas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>23 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.2g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas Digestivos:</strong> Algunas personas pueden experimentar malestar estomacal o gases debido al alto contenido de oxalatos en las espinacas.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Las espinacas pueden interferir con medicamentos anticoagulantes debido a su contenido de vitamina K.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en Nutrientes:</strong> La espinaca es una excelente fuente de vitaminas A, C, K y ácido fólico, además de ser baja en calorías.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el daño celular y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Salud Ocular:</strong> La espinaca es rica en luteína y zeaxantina, que son beneficiosas para la salud ocular y pueden ayudar a prevenir la degeneración macular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartSpinach"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartSpinach"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartSpinach"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartSpinach"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Espinaca</h2>
            <p>La espinaca es perfecta para ensaladas, como ingrediente en tortillas, o mezclada en batidos. Prueba un salteado de espinacas con ajo y limón para un acompañamiento delicioso.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La espinaca es originaria de Persia y se introdujo en Europa en el siglo XI. Es famosa por ser el alimento favorito de Popeye, el marinero.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar espinacas, elige hojas de color verde intenso y frescas. Evita aquellas que estén marchitas o amarillentas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La espinaca combina bien con ajo, limón, nueces y quesos como el feta, creando platos equilibrados y sabrosos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes espinacas, puedes sustituirlas por acelgas o col rizada en las recetas que requieren hojas verdes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La espinaca se puede cultivar de manera sostenible utilizando métodos de agricultura orgánica y respetando la biodiversidad del suelo.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Spinach = document.getElementById('macronutrientChartSpinach').getContext('2d');
        const macronutrientChartSpinach = new Chart(ctx1Spinach, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [2.9, 3.6, 0.4],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Spinach = document.getElementById('micronutrientChartSpinach').getContext('2d');
        const micronutrientChartSpinach = new Chart(ctx2Spinach, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Vitamina K', 'Ácido Fólico'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [469, 28, 483, 194],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 102, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Spinach = document.getElementById('caloriesChartSpinach').getContext('2d');
        const caloriesChartSpinach = new Chart(ctx3Spinach, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [23, 24, 22, 23, 25],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Spinach = document.getElementById('comparisonChartSpinach').getContext('2d');
        const comparisonChartSpinach = new Chart(ctx4Spinach, {
            type: 'bar',
            data: {
                labels: ['Espinaca', 'Kale', 'Acelga'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [23, 35, 19],
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                }]
            },
        });
    </script>
</body>
</html>
