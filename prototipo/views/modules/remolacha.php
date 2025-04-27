<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Remolacha</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/remolacha-roja-fresca-sobre-fondo-blanco_23-2148983348.jpg" alt="Imagen de Remolacha">
            <p class="category">Categoría: Verdura</p>
            <p class="description">La remolacha es una raíz comestible de color rojo intenso, rica en nutrientes y antioxidantes. Es popular en ensaladas, jugos y platos calientes.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La remolacha es conocida por su vibrante color y su sabor dulce-terroso. Se consume cruda, cocida o en jugos, y es un alimento versátil que se puede agregar a diversos platos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>43 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>9.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
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
                <p><strong>Posibles Problemas Digestivos:</strong> La remolacha puede causar molestias gastrointestinales en algunas personas debido a su contenido de fibra.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con Medicamentos:</strong> Las personas que toman medicamentos para la presión arterial deben consultar a un médico, ya que la remolacha puede afectar los niveles de presión arterial.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Antioxidantes:</strong> La remolacha es rica en antioxidantes que ayudan a combatir el daño celular.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Circulación:</strong> Contiene nitratos que pueden mejorar la circulación y reducir la presión arterial.</p>
            </div>
            <div class="description">
                <p><strong>Apoyo en la Salud del Hígado:</strong> Ayuda en la desintoxicación del hígado gracias a sus propiedades antiinflamatorias.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartRemolacha"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartRemolacha"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartRemolacha"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartRemolacha"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Remolacha</h2>
            <p>La remolacha se puede utilizar en ensaladas, jugos, sopas y como guarnición. Es deliciosa cuando se asan o se cuecen al vapor.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La remolacha es conocida como "betabel" en algunos países y tiene una larga historia de cultivo que se remonta a la antigüedad. Además, su jugo se ha utilizado como tinte natural.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar remolacha, busca raíces firmes, redondas y de color intenso. Evita las que estén blandas o con manchas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La remolacha combina bien con otros vegetales como la zanahoria y la espinaca, y se puede mezclar en batidos o ensaladas para añadir color y nutrientes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Alternativas a la remolacha incluyen zanahorias, batatas o col rizada, que ofrecen diferentes nutrientes y sabores.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La remolacha es un cultivo de bajo impacto ambiental y se puede cultivar de forma sostenible, contribuyendo a la biodiversidad agrícola.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Remolacha = document.getElementById('macronutrientChartRemolacha').getContext('2d');
        const macronutrientChartRemolacha = new Chart(ctx1Remolacha, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [1.6, 9.6, 0.2],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Remolacha = document.getElementById('micronutrientChartRemolacha').getContext('2d');
        const micronutrientChartRemolacha = new Chart(ctx2Remolacha, {
            type: 'radar',
            data: {
                labels: ['Proteínas', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.6, 22, 0.35],
                    backgroundColor: 'rgba(255, 153, 204, 0.2)',
                    borderColor: 'rgba(255, 153, 204, 1)',
                    pointBackgroundColor: 'rgba(255, 153, 204, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Remolacha = document.getElementById('caloriesChartRemolacha').getContext('2d');
        const caloriesChartRemolacha = new Chart(ctx3Remolacha, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [43, 45, 42, 44, 43],
                    backgroundColor: 'rgba(255, 153, 204, 0.2)',
                    borderColor: 'rgba(255, 153, 204, 1)',
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Remolacha = document.getElementById('comparisonChartRemolacha').getContext('2d');
        const comparisonChartRemolacha = new Chart(ctx4Remolacha, {
            type: 'bar',
            data: {
                labels: ['Remolacha', 'Zanahoria', 'Brócoli'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [43, 41, 34],
                    backgroundColor: ['#ffcc99', '#ff9999', '#99cc99'],
                }]
            },
        });
    </script>
</body>
</html>
