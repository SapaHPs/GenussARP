<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Quinoa</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/quinoa-cocida-bowl-wood_23-2148950147.jpg" alt="Imagen de Quinoa">
            <p class="category">Categoría: Grano</p>
            <p class="description">La quinoa es un grano antiguo conocido por su perfil nutricional completo y versatilidad en la cocina. Es rica en proteínas y libre de gluten.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La quinoa se cultiva en la región andina y es valorada como un superalimento. A menudo se utiliza como sustituto del arroz o otros granos, y se puede preparar de diversas maneras.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>120 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>4.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>21.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1.9g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.7g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Contiene Saponinas:</strong> La quinoa contiene saponinas que pueden tener un sabor amargo y afectar la digestión si no se enjuaga adecuadamente.</p>
            </div>
            <div class="description">
                <p><strong>Puede ser Alta en Calorías:</strong> Si bien es nutritiva, el exceso de consumo de quinoa puede llevar a un aumento en la ingesta calórica.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Proteínas:</strong> La quinoa es una de las pocas fuentes vegetales que proporciona todos los aminoácidos esenciales.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de Antioxidantes:</strong> Contiene varios compuestos antioxidantes que pueden ayudar a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Buena para el Corazón:</strong> Gracias a su contenido de fibra, puede ayudar a reducir el colesterol y mejorar la salud cardiovascular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartQuinoa"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartQuinoa"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartQuinoa"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartQuinoa"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Quinoa</h2>
            <p>La quinoa se puede utilizar en ensaladas, guisos, como acompañamiento o incluso en desayunos, como quinoa con frutas y yogur.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La quinoa no es un verdadero grano, sino una semilla. Ha sido cultivada durante miles de años por las civilizaciones andinas y es considerada un alimento sagrado por los Incas.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar quinoa, busca variedades orgánicas y asegúrate de que no contenga saponinas. Elige granos de color claro y bien separados.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La quinoa combina bien con verduras asadas, legumbres y hierbas frescas. También es deliciosa con aderezos ligeros y salsas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las alternativas a la quinoa incluyen otros granos como el mijo, el amaranto y el arroz integral, que ofrecen perfiles nutricionales similares.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La quinoa es una opción sostenible en comparación con otros cultivos, ya que puede crecer en condiciones difíciles y requiere menos agua.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Quinoa = document.getElementById('macronutrientChartQuinoa').getContext('2d');
        const macronutrientChartQuinoa = new Chart(ctx1Quinoa, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [4.1, 21.3, 1.9],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Quinoa = document.getElementById('micronutrientChartQuinoa').getContext('2d');
        const micronutrientChartQuinoa = new Chart(ctx2Quinoa, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [4.1, 47, 1.5],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Quinoa = document.getElementById('caloriesChartQuinoa').getContext('2d');
        const caloriesChartQuinoa = new Chart(ctx3Quinoa, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [120, 125, 118, 122, 121],
                    backgroundColor: 'rgba(153, 204, 255, 0.2)',
                    borderColor: 'rgba(153, 204, 255, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Quinoa = document.getElementById('comparisonChartQuinoa').getContext('2d');
        const comparisonChartQuinoa = new Chart(ctx4Quinoa, {
            type: 'bar',
            data: {
                labels: ['Quinoa', 'Arroz', 'Cebada'],
                datasets: [{
                    label: 'Comparativa de Nutrientes (por 100g)',
                    data: [120, 130, 105],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });
    </script>
</body>
</html>
