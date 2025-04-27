<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Granadilla</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://images.unsplash.com/photo-1580428446331-d44f4058bba5" alt="Imagen de Granadilla">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La granadilla es una fruta tropical de cáscara amarilla y pulpa dulce y jugosa, rica en vitaminas y antioxidantes, que se consume fresca o en jugos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La granadilla es una fruta exótica que pertenece a la familia de las pasifloras. Es conocida por su sabor dulce y su textura gelatinosa. Además, se puede consumir fresca, en batidos o como parte de ensaladas de frutas. Es rica en nutrientes y tiene propiedades beneficiosas para la salud.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>68 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.5g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>16g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.4g</td>
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
                <p><strong>Alto Contenido de Azúcares:</strong> A pesar de ser una fruta saludable, la granadilla tiene un contenido relativamente alto de azúcares naturales, lo que puede no ser adecuado para personas con diabetes o problemas de control de azúcar en la sangre.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en Antioxidantes:</strong> La granadilla es rica en antioxidantes, que ayudan a combatir el daño celular y reducir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Buena para la Digestión:</strong> Gracias a su contenido de fibra, puede ayudar a mejorar la digestión y regular el tránsito intestinal.</p>
            </div>
            <div class="description">
                <p><strong>Fortalece el Sistema Inmunológico:</strong> Contiene vitamina C, que es esencial para un sistema inmunológico fuerte y saludable.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartGranadilla"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartGranadilla"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartGranadilla"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartGranadilla"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Granadilla</h2>
            <p>La granadilla es perfecta para hacer batidos, postres, salsas para ensaladas o simplemente se puede comer sola como un snack saludable.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La granadilla se utiliza en la medicina tradicional en algunas culturas para tratar problemas respiratorios y digestivos.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar granadillas, elige aquellas que estén firmes y con una cáscara brillante. Evita las que tengan manchas o estén arrugadas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La granadilla combina bien con yogur, helados, frutas tropicales y granola.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las frutas como la maracuyá, el mango y la papaya son buenas alternativas a la granadilla en diversas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de granadillas puede tener un impacto ambiental, especialmente si se realizan prácticas de agricultura intensiva. Optar por granadillas de producción sostenible ayuda a minimizar este impacto.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Granadilla = document.getElementById('macronutrientChartGranadilla').getContext('2d');
        const macronutrientChartGranadilla = new Chart(ctx1Granadilla, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [16, 1.5, 0.4],
                    backgroundColor: ['#f7c6c7', '#b8e6d8', '#ffecb3'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Granadilla = document.getElementById('micronutrientChartGranadilla').getContext('2d');
        const micronutrientChartGranadilla = new Chart(ctx2Granadilla, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Fósforo', 'Fibra'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [18, 28, 2.8],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Granadilla = document.getElementById('caloriesChartGranadilla').getContext('2d');
        const caloriesChartGranadilla = new Chart(ctx3Granadilla, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
                datasets: [{
                    label: 'Calorías consumidas en Granadilla',
                    data: [150, 180, 210, 190],
                    backgroundColor: '#ff7f50',
                }]
            },
        });

        // Gráfico comparativo horizontal (de 'horizontalBar' a 'bar' con configuración horizontal)
        const ctx4Granadilla = document.getElementById('comparisonChartGranadilla').getContext('2d');
        const comparisonChartGranadilla = new Chart(ctx4Granadilla, {
            type: 'bar',
            data: {
                labels: ['Granadilla', 'Maracuyá', 'Mango'],
                datasets: [{
                    label: 'Comparativa de Azúcares (g)',
                    data: [13, 11, 14],
                    backgroundColor: ['#f7c6c7', '#ffa07a', '#add8e6'],
                }]
            },
            options: {
                indexAxis: 'y' // Configura la dirección del gráfico a horizontal
            }
        });
    </script>
</body>
</html>
