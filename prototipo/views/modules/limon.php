<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Limón</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/limo_13339-3238.jpg" alt="Imagen de Limón">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El limón es una fruta cítrica rica en vitamina C, ideal para refrescar y dar sabor a tus platillos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El limón es conocido por su sabor ácido y su uso en bebidas y comidas. Es una excelente fuente de antioxidantes y vitamina C.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>29 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>9.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Acidez:</strong> El alto contenido de ácido cítrico puede causar irritación en algunas personas.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Puede interferir con la absorción de algunos medicamentos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fortalece el Sistema Inmunológico:</strong> Su alto contenido de vitamina C ayuda a fortalecer el sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades Antioxidantes:</strong> Los antioxidantes en el limón ayudan a combatir los radicales libres.</p>
            </div>
            <div class="description">
                <p><strong>Ayuda en la Digestión:</strong> El limón puede ayudar a mejorar la digestión y aliviar problemas estomacales.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartLemon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartLemon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartLemon"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartLemon"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Limón</h2>
            <p>El limón se utiliza en aderezos, bebidas, y postres. Prueba hacer una limonada o un aliño para ensaladas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El limón es un símbolo de frescura y limpieza, y se ha utilizado desde la antigüedad para preservar alimentos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca limones firmes y sin manchas. Los limones amarillos son más jugosos que los de color verde.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina limón con miel y agua caliente para una bebida reconfortante y saludable.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes limón, puedes usar lima o vinagre de manzana para obtener un sabor ácido.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Los limones son relativamente fáciles de cultivar y tienen un impacto ambiental bajo en comparación con otras frutas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Lemon = document.getElementById('macronutrientChartLemon').getContext('2d');
        const macronutrientChartLemon = new Chart(ctx1Lemon, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.1, 9.3, 0.3],
                    backgroundColor: ['#ffeb3b', '#f44336', '#4caf50'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Lemon = document.getElementById('micronutrientChartLemon').getContext('2d');
        const micronutrientChartLemon = new Chart(ctx2Lemon, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Potasio', 'Magnesio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [53, 138, 11],
                    backgroundColor: 'rgba(255, 235, 59, 0.2)',
                    borderColor: 'rgba(255, 235, 59, 1)',
                    pointBackgroundColor: 'rgba(255, 235, 59, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Lemon = document.getElementById('caloriesChartLemon').getContext('2d');
        const caloriesChartLemon = new Chart(ctx3Lemon, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [29, 30, 28, 31, 33],
                    backgroundColor: 'rgba(255, 235, 59, 0.2)',
                    borderColor: 'rgba(255, 235, 59, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4Lemon = document.getElementById('comparisonChartLemon').getContext('2d');
        const comparisonChartLemon = new Chart(ctx4Lemon, {
            type: 'bar',
            data: {
                labels: ['Limón', 'Naranja', 'Pomelo'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [29, 47, 42],
                    backgroundColor: ['#ffeb3b', '#ff9800', '#ff5722'],
                    borderColor: ['#ffeb3b', '#ff9800', '#ff5722'],
                    borderWidth: 1,
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
