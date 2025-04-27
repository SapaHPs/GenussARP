<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Café</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/8e/e1/6c/8ee16c9b93ab3559112f5f6fa46de464.jpg" alt="Imagen de Café en Grano">
            <p class="category">Categoría: Bebida</p>
            <p class="description">El café es una bebida popular hecha a partir de granos tostados de café, conocida por su sabor y efectos estimulantes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El café se elabora a partir de los granos de la planta de café, que son extraídos, procesados y tostados para desarrollar su sabor característico. Es una de las bebidas más consumidas en el mundo.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>2 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Cafeína</td>
                    <td>80-100mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Insomnio:</strong> El consumo excesivo de café puede causar problemas de sueño, especialmente si se consume por la tarde o noche.</p>
            </div>
            <div class="description">
                <p><strong>Ansiedad:</strong> La cafeína puede aumentar la ansiedad en algunas personas, así que es importante moderar su consumo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Mejora el rendimiento cognitivo:</strong> La cafeína puede aumentar la concentración y el estado de alerta.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> El café es rico en antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Puede reducir el riesgo de enfermedades:</strong> Algunos estudios sugieren que el consumo regular de café está asociado con un menor riesgo de enfermedades como Parkinson y diabetes tipo 2.</p>
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
            <h2>Recetas con Café</h2>
            <p>El café se puede disfrutar solo o como base para diversas bebidas como café con leche, capuchino o incluso en postres como tiramisú.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Se dice que el café fue descubierto por un pastor etíope llamado Kaldi, quien notó que sus cabras se volvían muy enérgicas después de comer los granos de café.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar café, busca granos frescos y de buena calidad. Elige granos enteros siempre que sea posible para garantizar frescura y sabor.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El café combina bien con leche, canela, chocolate, y puede ser acompañado con frutas y nueces como snack saludable.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si prefieres evitar la cafeína, considera opciones como el té de hierbas, café descafeinado o bebidas a base de cebada.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de café puede tener un impacto ambiental significativo. Optar por café de comercio justo y orgánico ayuda a apoyar prácticas agrícolas sostenibles.</p>
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
                labels: ['Proteínas', 'Carbohidratos', 'Grasas', 'Cafeína'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.3, 0, 0, 80],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384', '#ff9f40'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Cafeína', 'Antioxidantes', 'Ácidos Clorogénicos'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [100, 200, 100],
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
                    data: [2, 3, 2, 3, 1],
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
                labels: ['Café', 'Té', 'Cacao'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [2, 1, 5],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
