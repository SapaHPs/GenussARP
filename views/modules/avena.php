<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Avena</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/ea/c8/72/eac872009666f888524946d00670ae8a.jpg" alt="Imagen de Avena">
            <p class="category">Categoría: Grano</p>
            <p class="description">La avena es un grano integral muy nutritivo, conocido por sus beneficios para la salud, especialmente para el corazón y el sistema digestivo.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La avena es un alimento rico en nutrientes, versátil y fácil de preparar. Se utiliza comúnmente en el desayuno, en forma de gachas, batidos o como ingrediente en diversas recetas de repostería. Su alto contenido de fibra soluble la convierte en una opción ideal para mantener la saciedad y regular el colesterol.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>389 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>16.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>66.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>6.9g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>10.6g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Magnesio, Fósforo, Zinc, Hierro</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a la avena, especialmente aquellas con enfermedad celíaca, si no es de origen sin gluten.</p>
            </div>
            <div class="description">
                <p><strong>Contenido calórico:</strong> Aunque es nutritiva, el consumo excesivo puede contribuir a un aumento de peso.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Salud del corazón:</strong> La avena puede ayudar a reducir el colesterol LDL, lo que beneficia la salud cardiovascular.</p>
            </div>
            <div class="description">
                <p><strong>Control del azúcar en sangre:</strong> Su alto contenido de fibra ayuda a regular los niveles de azúcar en sangre, lo que es beneficioso para personas con diabetes.</p>
            </div>
            <div class="description">
                <p><strong>Mejora digestiva:</strong> La avena promueve la salud intestinal gracias a su contenido de fibra soluble.</p>
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
            <h2>Recetas con Avena</h2>
            <p>La avena se puede utilizar en gachas, batidos, galletas, muffins y como ingrediente en muchas recetas saludables. Puedes agregar frutas, frutos secos o miel para mejorar su sabor.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La avena es el único grano que se considera un superalimento, debido a su riqueza en antioxidantes y su capacidad para reducir el riesgo de enfermedades.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar avena, busca opciones de avena orgánica y sin gluten si es necesario. Existen diferentes tipos de avena: avena instantánea, cortada y enrollada, cada una con sus características.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La avena combina bien con frutas frescas, yogur, nueces y miel, creando desayunos y snacks deliciosos y nutritivos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir avena, puedes optar por quinoa, arroz integral o cebada, que también son ricos en nutrientes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de avena tiene un menor impacto ambiental en comparación con otros granos, pero es importante elegir avena de fuentes sostenibles y orgánicas para ayudar a minimizar el impacto.</p>
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
                    data: [16.9, 66.3, 6.9],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Magnesio', 'Fósforo', 'Zinc', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [177, 410, 3.6, 4.7],
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
                    data: [389, 400, 395, 398, 390],
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
                labels: ['Avena', 'Arroz Integral', 'Quinoa'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [389, 111, 120],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
