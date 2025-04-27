<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Yuca</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://images.unsplash.com/photo-1560190734-4b14d7b2d284" alt="Imagen de Yuca">
            <p class="category">Categoría: Tubérculos</p>
            <p class="description">La yuca es un tubérculo tropical popular en muchas culturas. Es rica en carbohidratos, proporcionando una fuente importante de energía, y se utiliza en una amplia variedad de platillos, como sopas, guisos y frituras.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La yuca, también conocida como mandioca o casava, es un tubérculo originario de América del Sur. Se cultiva en regiones tropicales de todo el mundo y es un alimento básico en muchas dietas. La yuca es una fuente importante de carbohidratos y se consume hervida, frita o como harina en la preparación de panes y otros productos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>160 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>38g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.8g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Contenido de Cianuro:</strong> La yuca cruda contiene compuestos que pueden convertirse en cianuro si no se procesa adecuadamente, por lo que debe cocinarse antes de consumirla.</p>
            </div>
            <div class="description">
                <p><strong>Alta en Carbohidratos:</strong> La yuca tiene un alto contenido de carbohidratos, lo que puede no ser ideal para quienes buscan controlar su ingesta de carbohidratos o padecen diabetes.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fuente de Energía:</strong> La yuca es una excelente fuente de energía debido a su alto contenido de carbohidratos complejos.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Digestión:</strong> La fibra dietética de la yuca puede ayudar a mejorar la digestión y prevenir el estreñimiento.</p>
            </div>
            <div class="description">
                <p><strong>Rica en Nutrientes Esenciales:</strong> Contiene vitaminas y minerales como vitamina C y manganeso, que apoyan la salud del sistema inmunológico y óseo.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartYuca"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartYuca"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartYuca"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartYuca"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Yuca</h2>
            <p>La yuca se puede utilizar en numerosas recetas, como yuca frita, pastel de yuca, yuca al mojo y muchos otros platillos tradicionales de América Latina y África.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>¿Sabías que la yuca es uno de los principales alimentos básicos en África y se utiliza para hacer garri, una comida popular en Nigeria?</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar yuca, busca tubérculos que sean firmes y sin grietas. Evita los que tengan manchas negras, ya que esto puede ser un signo de deterioro.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La yuca se combina bien con carnes asadas, salsas de ajo y hierbas frescas. También es deliciosa en ensaladas con otros tubérculos como batata y papa.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>La batata y el ñame son alternativas a la yuca, ya que comparten una textura similar y se pueden utilizar de manera intercambiable en muchas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La yuca es un cultivo resistente a la sequía, lo que la convierte en una opción viable en regiones donde el agua es escasa. Además, su cultivo ayuda a prevenir la erosión del suelo en áreas tropicales.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Yuca = document.getElementById('macronutrientChartYuca').getContext('2d');
        const macronutrientChartYuca = new Chart(ctx1Yuca, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [38, 1.4, 0.3],
                    backgroundColor: ['#f6c5a8', '#d2a3b2', '#9e91c7'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Yuca = document.getElementById('micronutrientChartYuca').getContext('2d');
        const micronutrientChartYuca = new Chart(ctx2Yuca, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Manganeso', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [20.6, 0.3, 271],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Yuca = document.getElementById('caloriesChartYuca').getContext('2d');
        const caloriesChartYuca = new Chart(ctx3Yuca, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
                datasets: [{
                    label: 'Calorías consumidas en Yuca',
                    data: [500, 540, 600, 620],
                    backgroundColor: '#f8c471',
                }]
            },
        });

        // Gráfico comparativo horizontal actualizado (de 'horizontalBar' a 'bar' con configuración horizontal)
        const ctx4Yuca = document.getElementById('comparisonChartYuca').getContext('2d');
        const comparisonChartYuca = new Chart(ctx4Yuca, {
            type: 'bar',
            data: {
                labels: ['Yuca', 'Batata', 'Papa'],
                datasets: [{
                    label: 'Comparativa de Carbohidratos (g)',
                    data: [38, 20, 17],
                    backgroundColor: ['#c2c2a3', '#ff9999', '#99ccff'],
                }]
            },
            options: {
                indexAxis: 'y' // Configura la dirección del gráfico a horizontal
            }
        });
    </script>
</body>
</html>
