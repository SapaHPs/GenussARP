<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Batata</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/enabled/564x/67/ba/31/67ba31ee2cfedd281f278f69f400a9de.jpg" alt="Imagen de Batata">
            <p class="category">Categoría: Tubérculo</p>
            <p class="description">La batata, también conocida como boniato, es un tubérculo dulce, nutritivo y versátil en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La batata es rica en nutrientes y antioxidantes, y se puede preparar de diversas maneras, como al horno, puré, frita o en guisos. Su sabor dulce y textura cremosa la convierten en un ingrediente popular en muchas recetas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>86 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>20.1g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina A, Vitamina C, Potasio, Manganeso</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Contenido de azúcar:</strong> Aunque es natural, su alto contenido de azúcar puede ser problemático para personas con diabetes si se consume en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Calorías:</strong> A pesar de ser nutritiva, el exceso de batata puede contribuir al aumento de peso.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en antioxidantes:</strong> La batata contiene antioxidantes que ayudan a combatir el daño celular y pueden reducir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Salud ocular:</strong> Su alto contenido de vitamina A promueve la salud ocular y puede prevenir problemas de visión.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios digestivos:</strong> La fibra presente en la batata favorece una digestión saludable y ayuda a mantener la saciedad.</p>
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
            <h2>Recetas con Batata</h2>
            <p>La batata se puede utilizar en purés, sopas, guisos, ensaladas, frituras, y incluso en postres. Es una opción versátil que añade dulzura y nutrición a cualquier plato.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La batata es originaria de América Central y del Sur, y se cultiva en todo el mundo, siendo una fuente importante de alimento en muchos países.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar batatas, busca aquellas que sean firmes, sin manchas ni áreas blandas. Pueden ser de diferentes colores, incluyendo naranja, amarillo y púrpura, cada una con su propio perfil nutricional.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La batata combina bien con especias como canela y comino, así como con ingredientes como quinoa, frijoles y verduras asadas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir batata, puedes optar por papa, calabaza o zanahorias, que también son nutritivas y versátiles.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La batata tiene un bajo impacto ambiental en su cultivo, pero es importante elegir batatas orgánicas cuando sea posible para apoyar prácticas agrícolas sostenibles.</p>
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
                    data: [1.6, 20.1, 0.1],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Potasio', 'Manganeso'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [14187, 2.4, 337, 0.16],
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
                    data: [86, 90, 85, 88, 87],
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
                labels: ['Batata', 'Papa', 'Zanahoria'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [86, 77, 41],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
