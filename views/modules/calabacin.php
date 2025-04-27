<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Calabacín</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/fa/23/f1/fa23f1eedb671b74eac78a52b2636a26.jpg" alt="Imagen de Calabacín">
            <p class="category">Categoría: Verdura</p>
            <p class="description">El calabacín es una verdura de verano que se caracteriza por su sabor suave y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El calabacín, también conocido como zucchini, es una hortaliza que pertenece a la familia de las cucurbitáceas. Se consume comúnmente en diversas preparaciones culinarias, ya sea asado, al vapor o crudo en ensaladas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>17 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.2g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.1g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Digestión:</strong> Algunas personas pueden experimentar malestar estomacal si consumen calabacín en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones:</strong> El calabacín puede interactuar con ciertos medicamentos debido a su contenido de vitamina K.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Hidratación:</strong> El calabacín tiene un alto contenido de agua, lo que ayuda a mantener la hidratación.</p>
            </div>
            <div class="description">
                <p><strong>Bajo en calorías:</strong> Es una opción excelente para quienes buscan perder peso o mantener una dieta saludable.</p>
            </div>
            <div class="description">
                <p><strong>Rico en antioxidantes:</strong> Contiene antioxidantes como la vitamina C y el beta-caroteno, que ayudan a combatir el daño celular.</p>
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
            <h2>Recetas con Calabacín</h2>
            <p>El calabacín se puede utilizar en una variedad de platos, como sopas, guisos, salteados o incluso como base para espaguetis de calabacín.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El calabacín se originó en América y fue cultivado por primera vez en el siglo XVIII. Su nombre proviene del término italiano "zucchini".</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar calabacín, elige ejemplares firmes y de piel brillante, evitando aquellos que estén arrugados o con manchas. Se pueden almacenar en el refrigerador.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El calabacín combina bien con tomates, ajo, hierbas frescas, y se puede servir con proteínas como pollo o pescado.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes calabacín, puedes sustituirlo por berenjenas o pepinos en algunas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de calabacín tiene un impacto ambiental relativamente bajo. Optar por calabacín de producción local y orgánica puede contribuir a prácticas más sostenibles.</p>
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
                    data: [1.2, 3.1, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Potassium'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [30, 10, 260],
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
                    data: [17, 15, 18, 19, 16],
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
                labels: ['Calabacín', 'Pepino', 'Berenjena'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [17, 16, 25],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
