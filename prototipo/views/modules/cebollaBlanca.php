<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Cebolla Blanca</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/cebolla-blanca-isolada-blanco_1203-16534.jpg" alt="Imagen de Cebolla Blanca">
            <p class="category">Categoría: Verduras</p>
            <p class="description">La cebolla blanca es una hortaliza de sabor fuerte y picante, ampliamente utilizada en la cocina para realzar el sabor de diversos platillos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La cebolla blanca es un bulbo que se caracteriza por su sabor más suave en comparación con otras variedades. Se utiliza tanto cruda como cocida en una variedad de recetas, incluyendo ensaladas, guisos y salsas.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>40 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>9g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.7g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas digestivos:</strong> Algunas personas pueden experimentar malestar estomacal o gases al consumir cebolla, especialmente en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones:</strong> Puede interferir con ciertos medicamentos, como anticoagulantes, por lo que se recomienda moderar su consumo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en antioxidantes:</strong> Contiene compuestos que ayudan a combatir el daño celular y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades antiinflamatorias:</strong> La cebolla blanca puede ayudar a reducir la inflamación en el cuerpo, contribuyendo a una mejor salud general.</p>
            </div>
            <div class="description">
                <p><strong>Buena fuente de vitamina C:</strong> Ayuda en la salud del sistema inmunológico y promueve la producción de colágeno.</p>
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
            <h2>Recetas con Cebolla Blanca</h2>
            <p>La cebolla blanca es ideal para ensaladas, salsas y guisos. También se puede caramelizar para añadir un sabor dulce a los platillos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La cebolla ha sido cultivada durante miles de años y es una de las verduras más antiguas del mundo. Su uso se remonta a las antiguas civilizaciones egipcias.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al seleccionar cebollas blancas, busca aquellas que sean firmes, con piel brillante y sin manchas. Evita las cebollas blandas o con moho.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La cebolla blanca combina bien con verduras asadas, carnes a la parrilla y en guisos. También es un excelente complemento en salsas y aderezos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes cebolla blanca, puedes utilizar cebolla roja o cebolla amarilla como alternativas en las recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La producción de cebolla puede ser sostenible si se cultiva utilizando prácticas agrícolas responsables y sin pesticidas químicos, lo que protege tanto el medio ambiente como la salud del consumidor.</p>
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
                    data: [1, 9, 0],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Fibra', 'Antioxidantes'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [7, 1.7, 10],
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
                    data: [40, 42, 39, 41, 43],
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
                labels: ['Cebolla Blanca', 'Cebolla Roja', 'Ajo'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [40, 37, 149],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
