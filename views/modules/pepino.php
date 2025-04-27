<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Pepino</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/b9/6a/1b/b96a1b250b71abfb29feb538b3988a31.jpg" alt="Imagen de Pepino">
            <p class="category">Categoría: Verdura</p>
            <p class="description">El pepino es una hortaliza refrescante, rica en agua y con bajo contenido calórico, ideal para ensaladas y aperitivos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El pepino se consume fresco, en ensaladas, como ingrediente en salsas, o incluso como jugo. Su alto contenido de agua lo hace un alimento ideal para la hidratación.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>16 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.1g</td>
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
                <p><strong>Digestión:</strong> Algunas personas pueden experimentar molestias digestivas al consumir pepinos en grandes cantidades debido a su contenido de fibra.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones:</strong> El pepino puede interactuar con ciertos medicamentos, por lo que es recomendable consultar a un médico si se toman medicamentos anticoagulantes.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Bajo en Calorías:</strong> El pepino es ideal para quienes buscan controlar su peso.</p>
            </div>
            <div class="description">
                <p><strong>Hidratación:</strong> Su alto contenido de agua ayuda a mantener la hidratación del cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el estrés oxidativo en el organismo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartPepino"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartPepino"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartPepino"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartPepino"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Pepino</h2>
            <p>El pepino es perfecto para ensaladas, gazpachos o como un aperitivo refrescante, incluso con un poco de limón y sal.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El pepino es una fruta, aunque comúnmente se le considera una hortaliza, y se cultiva desde hace más de 3000 años en diferentes partes del mundo.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar pepinos, elige aquellos que sean firmes, de color verde brillante y sin manchas. Evita los que tengan arrugas o estén blandos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los pepinos combinan bien con yogur, tomates, y se pueden usar en sandwiches o wraps para un toque fresco.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir pepinos, considera usar apio o calabacín como alternativas crujientes y frescas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de pepinos puede ser sostenible si se utilizan prácticas agrícolas responsables, contribuyendo a la salud del ecosistema.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Pepino = document.getElementById('macronutrientChartPepino').getContext('2d');
        const macronutrientChartPepino = new Chart(ctx1Pepino, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.7, 3.6, 0.1],
                    backgroundColor: ['#99ffcc', '#ffcc99', '#ffeb99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Pepino = document.getElementById('micronutrientChartPepino').getContext('2d');
        const micronutrientChartPepino = new Chart(ctx2Pepino, {
            type: 'radar',
            data: {
                labels: ['Vitamina K', 'Vitamina C', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [16.4, 24, 262],
                    backgroundColor: 'rgba(153, 255, 204, 0.2)',
                    borderColor: 'rgba(153, 255, 204, 1)',
                    pointBackgroundColor: 'rgba(153, 255, 204, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Pepino = document.getElementById('caloriesChartPepino').getContext('2d');
        const caloriesChartPepino = new Chart(ctx3Pepino, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [16, 17, 15, 16, 16],
                    backgroundColor: 'rgba(153, 255, 204, 0.2)',
                    borderColor: 'rgba(153, 255, 204, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Pepino = document.getElementById('comparisonChartPepino').getContext('2d');
        const comparisonChartPepino = new Chart(ctx4Pepino, {
            type: 'bar',
            data: {
                labels: ['Pepino', 'Zanahoria', 'Apio'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [16, 41, 16],
                    backgroundColor: ['#99ffcc', '#ffcc99', '#ffeb99'],
                }]
            },
        });
    </script>
</body>
</html>
