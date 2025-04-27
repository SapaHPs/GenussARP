<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Berenjena</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/39/70/b2/3970b2ae2048dc1d557897bef33ff6e7.jpg" alt="Imagen de Berenjena">
            <p class="category">Categoría: Hortaliza</p>
            <p class="description">La berenjena es una hortaliza versátil, rica en antioxidantes y con un sabor característico, perfecta para diversas preparaciones culinarias.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La berenjena se utiliza en una variedad de platos, desde guisos hasta asados, y su textura absorbe bien los sabores de otros ingredientes. Es una fuente de fibra y aporta beneficios nutricionales significativos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>25 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>5.9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina K, Vitamina B6, Potasio, Manganeso</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Interacción con medicamentos:</strong> La berenjena contiene solanina, que puede causar reacciones adversas en algunas personas, especialmente si se consume en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Problemas digestivos:</strong> En algunas personas, la berenjena puede causar malestar estomacal si se consume cruda o en exceso.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en antioxidantes:</strong> La berenjena es una excelente fuente de antioxidantes, que ayudan a combatir el daño celular y pueden reducir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Salud del corazón:</strong> El consumo de berenjena se asocia con una mejor salud cardiovascular, debido a su contenido de fibra y antioxidantes.</p>
            </div>
            <div class="description">
                <p><strong>Control del peso:</strong> Baja en calorías y alta en fibra, la berenjena es un excelente alimento para quienes buscan controlar su peso.</p>
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
            <h2>Recetas con Berenjena</h2>
            <p>La berenjena se puede preparar de muchas formas, como en moussaka, ratatouille, o asada con aceite de oliva y especias.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La berenjena, aunque a menudo se considera una hortaliza, en realidad es una fruta, perteneciente a la misma familia que los tomates y los pimientos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir berenjenas, busca las que tengan una piel brillante, sin manchas y que sean firmes al tacto. Evita las que tengan arrugas o manchas blandas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La berenjena combina bien con tomates, queso, hierbas frescas como albahaca, y otros vegetales como pimientos y calabacines.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir berenjena, puedes optar por calabacín, champiñones o pimientos como alternativas en las recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La berenjena es generalmente un cultivo sostenible, pero se recomienda elegir opciones orgánicas para reducir el uso de pesticidas y promover prácticas agrícolas responsables.</p>
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
                    data: [1, 5.9, 0.2],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina K', 'Vitamina B6', 'Potasio', 'Manganeso'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [3.5, 0.08, 234, 0.08],
                    backgroundColor: 'rgba(100, 100, 250, 0.2)',
                    borderColor: 'rgba(100, 100, 250, 1)',
                    pointBackgroundColor: 'rgba(100, 100, 250, 1)',
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
                    data: [25, 30, 28, 27, 26],
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
                labels: ['Berenjena', 'Calabacín', 'Pimiento'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [25, 17, 31],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
