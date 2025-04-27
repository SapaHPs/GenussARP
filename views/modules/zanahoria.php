<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Zanahoria</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/87/c2/12/87c21222875469046d481534e8a92f3f.jpg" alt="Imagen de Zanahoria">
            <p class="category">Categoría: Verduras</p>
            <p class="description">La zanahoria es una raíz comestible rica en nutrientes, especialmente en betacaroteno, que se convierte en vitamina A en el cuerpo. Se consume cruda o cocida en una variedad de platillos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La zanahoria es un vegetal de raíz que pertenece a la familia de las apiáceas. Su color característico es el naranja, aunque también existen variedades moradas, amarillas y blancas. Es muy apreciada por su sabor dulce y su alto contenido de nutrientes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>41 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.9g</td>
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
                <p><strong>Contenido de Azúcares Naturales:</strong> Aunque es saludable, las zanahorias contienen azúcares naturales, lo que podría ser una preocupación para personas con diabetes si se consumen en grandes cantidades.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Mejora la Visión:</strong> La zanahoria es famosa por su contenido de betacaroteno, que es esencial para la salud ocular.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir los radicales libres en el cuerpo, reduciendo el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Beneficios Digestivos:</strong> Su contenido de fibra ayuda a mejorar la digestión y prevenir el estreñimiento.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartZanahoria"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartZanahoria"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartZanahoria"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartZanahoria"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Zanahoria</h2>
            <p>La zanahoria se puede disfrutar en ensaladas, guisos, sopas y como snack saludable. También se utiliza en jugos y batidos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>¿Sabías que las zanahorias originalmente eran moradas y fueron domesticadas en Asia Central hace miles de años?</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir zanahorias, busca las que sean firmes y crujientes, evitando aquellas que se vean arrugadas o blandas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La zanahoria combina bien con hummus, guacamole, ensaladas y salsas a base de yogur.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las calabazas, los nabos y las remolachas son alternativas a la zanahoria en diversas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de zanahorias puede ser sostenible, pero su impacto depende de las prácticas agrícolas. Se recomienda el cultivo orgánico para minimizar el uso de pesticidas.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Zanahoria = document.getElementById('macronutrientChartZanahoria').getContext('2d');
        const macronutrientChartZanahoria = new Chart(ctx1Zanahoria, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [9.6, 0.9, 0.2],
                    backgroundColor: ['#f6c5a8', '#d2a3b2', '#9e91c7'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Zanahoria = document.getElementById('micronutrientChartZanahoria').getContext('2d');
        const micronutrientChartZanahoria = new Chart(ctx2Zanahoria, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina K', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [835, 13.2, 320],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Zanahoria = document.getElementById('caloriesChartZanahoria').getContext('2d');
        const caloriesChartZanahoria = new Chart(ctx3Zanahoria, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
                datasets: [{
                    label: 'Calorías consumidas en Zanahoria',
                    data: [200, 220, 250, 230],
                    backgroundColor: '#f8c471',
                }]
            },
        });

        // Gráfico comparativo horizontal (de 'horizontalBar' a 'bar' con configuración horizontal)
        const ctx4Zanahoria = document.getElementById('comparisonChartZanahoria').getContext('2d');
        const comparisonChartZanahoria = new Chart(ctx4Zanahoria, {
            type: 'bar',
            data: {
                labels: ['Zanahoria', 'Apio', 'Brócoli'],
                datasets: [{
                    label: 'Comparativa de Carbohidratos (g)',
                    data: [9.6, 3.0, 6.6],
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
