<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Semillas de Chía</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/semillas-chia-cuchara-platillo-saludable_23-2148436235.jpg" alt="Imagen de Semillas de Chía">
            <p class="category">Categoría: Semillas</p>
            <p class="description">Las semillas de chía son pequeñas semillas negras que provienen de la planta Salvia hispanica. Son conocidas por sus múltiples beneficios para la salud.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Las semillas de chía son ricas en fibra, proteínas y ácidos grasos omega-3. Pueden ser utilizadas en batidos, yogures y como ingrediente en productos horneados.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>486 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>16.5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>42.1g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>30.7g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>34.4g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas digestivos:</strong> El consumo excesivo de semillas de chía puede causar molestias gastrointestinales, especialmente si no se hidratan adecuadamente antes de consumirlas.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones medicamentosas:</strong> Pueden afectar la absorción de ciertos medicamentos debido a su alto contenido de fibra.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Ricas en omega-3:</strong> Las semillas de chía son una excelente fuente de ácidos grasos omega-3, que son esenciales para la salud del corazón.</p>
            </div>
            <div class="description">
                <p><strong>Promueven la saciedad:</strong> Su alto contenido en fibra y capacidad de absorber agua ayudan a aumentar la sensación de saciedad.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios digestivos:</strong> Ayudan a regular el tránsito intestinal y pueden mejorar la salud digestiva.</p>
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
            <h2>Recetas con Semillas de Chía</h2>
            <p>Las semillas de chía son perfectas para preparar pudines, agregar a batidos o utilizar en ensaladas. También son excelentes en productos horneados como panes y muffins.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Las semillas de chía fueron un alimento básico para las antiguas civilizaciones mesoamericanas y eran utilizadas como fuente de energía por los guerreros aztecas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar semillas de chía, busca aquellas que sean de origen orgánico y que estén bien selladas. Deben tener un color negro o marrón oscuro y estar libres de impurezas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las semillas de chía combinan bien con yogur, avena, frutas y batidos. Se pueden usar como un aditivo nutritivo en una variedad de platos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes semillas de chía, puedes sustituirlas por semillas de linaza o sésamo, aunque la textura y el perfil nutricional pueden variar.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de semillas de chía es considerado sostenible, ya que requiere poca agua y puede crecer en diversos tipos de suelo.</p>
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
                    data: [16.5, 42.1, 30.7],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Calcio', 'Fósforo', 'Magnesio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [631, 268, 335],
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
                    data: [486, 490, 480, 485, 487],
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
                labels: ['Semillas de Chía', 'Semillas de Linaza', 'Semillas de Sésamo'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [486, 534, 573],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
