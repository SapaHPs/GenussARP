<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Arroz Integral</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/arroz-integral-encima-madera_1203-10171.jpg" alt="Imagen de Arroz Integral">
            <p class="category">Categoría: Grano</p>
            <p class="description">El arroz integral es un tipo de arroz que contiene el salvado y el germen, lo que lo hace más nutritivo y con un mayor contenido de fibra en comparación con el arroz blanco.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El arroz integral se considera un grano entero y es una excelente fuente de carbohidratos complejos. Se puede utilizar en una variedad de platos, como ensaladas, guisos y como acompañamiento. Su textura y sabor son más robustos en comparación con el arroz blanco, lo que lo convierte en una opción popular para quienes buscan alternativas más saludables.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>111 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>23g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.9g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.8g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Magnesio, Zinc, Hierro</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Tiempo de cocción:</strong> El arroz integral requiere más tiempo de cocción que el arroz blanco, lo que puede ser un inconveniente para algunas personas.</p>
            </div>
            <div class="description">
                <p><strong>Fitoquímicos:</strong> Algunas personas pueden ser sensibles a los fitoquímicos presentes en el salvado del arroz integral.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en fibra:</strong> El arroz integral es rico en fibra, lo que ayuda a mejorar la digestión y mantener la salud intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Control de peso:</strong> Su alto contenido de fibra también puede ayudar a sentirte satisfecho por más tiempo, lo que puede ayudar a controlar el peso.</p>
            </div>
            <div class="description">
                <p><strong>Nutrición superior:</strong> Contiene más vitaminas y minerales que el arroz blanco, lo que lo convierte en una opción más nutritiva.</p>
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
            <h2>Recetas con Arroz Integral</h2>
            <p>El arroz integral se puede utilizar en una variedad de platos, desde ensaladas hasta guisos y como acompañamiento. Puedes mezclarlo con verduras asadas o utilizarlo como base para un bowl saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El arroz integral tiene un sabor más a nuez en comparación con el arroz blanco, y es conocido por su textura más firme.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar arroz integral, busca variedades que estén etiquetadas como "integrales" y preferiblemente de cultivo orgánico. El arroz integral de calidad tendrá un aroma fresco y un color marrón claro.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El arroz integral combina bien con frijoles, verduras asadas, pollo, pescado y aderezos a base de aceite de oliva, lo que crea platos equilibrados y nutritivos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir arroz integral, puedes optar por quinoa, cebada o arroz basmati, que ofrecen perfiles nutricionales diferentes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de arroz puede tener un impacto ambiental significativo, incluyendo el uso de agua. Optar por arroz de fuentes sostenibles puede ayudar a mitigar estos efectos.</p>
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
                    data: [2.6, 23, 0.9],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Magnesio', 'Zinc', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [43, 0.5, 0.4],
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
                    data: [111, 120, 115, 118, 110],
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
                labels: ['Arroz Integral', 'Arroz Blanco', 'Quinoa'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [111, 130, 120],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
