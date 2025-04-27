<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Camarón</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/camarones-frescos-sobre-mesa_144627-19283.jpg" alt="Imagen de Camarón">
            <p class="category">Categoría: Marisco</p>
            <p class="description">El camarón es un marisco popular, conocido por su sabor delicado y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los camarones son crustáceos de agua salada o dulce, que se consumen en todo el mundo. Son una fuente rica de proteínas y nutrientes esenciales, y se pueden preparar de diversas maneras, como a la parrilla, al vapor o en sopas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>99 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>24g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a los mariscos, lo que puede provocar reacciones graves.</p>
            </div>
            <div class="description">
                <p><strong>Contaminación:</strong> Los camarones de aguas contaminadas pueden contener toxinas y metales pesados.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en proteínas:</strong> Los camarones son una excelente fuente de proteínas magras, ideales para dietas saludables.</p>
            </div>
            <div class="description">
                <p><strong>Rico en omega-3:</strong> Contienen ácidos grasos omega-3, que son beneficiosos para la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Vitaminas y minerales:</strong> Son una buena fuente de vitaminas B, selenio y yodo, esenciales para el funcionamiento del organismo.</p>
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
            <h2>Recetas con Camarón</h2>
            <p>Los camarones se pueden utilizar en diversas recetas, como paella, tacos, sopas, o simplemente a la parrilla con ajo y limón.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los camarones son uno de los mariscos más consumidos en el mundo. Existen más de 300 especies de camarones, algunas de las cuales son cultivadas en granjas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar camarones, busca aquellos que estén frescos, con un olor suave y una carne firme. Prefiere los que están en hielo y evita los que tienen manchas o un olor fuerte.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los camarones combinan bien con verduras frescas, como espinacas, pimientos y brócoli. También se pueden servir con arroz integral o quinoa.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir camarones, puedes optar por pollo, pescado o tofu como fuentes de proteínas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La acuicultura de camarones puede tener un impacto ambiental negativo si no se maneja de manera sostenible. Optar por camarones de fuentes responsables ayuda a proteger los ecosistemas marinos.</p>
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
                    data: [24, 0.2, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina B12', 'Selenio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.6, 40, 200],
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
                    data: [99, 95, 100, 98, 97],
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
                labels: ['Camarón', 'Pescado', 'Pollo'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [99, 120, 165],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
