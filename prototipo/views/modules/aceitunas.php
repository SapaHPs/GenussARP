<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Banano</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/fotos-premium/banano-fresco-sobre-fondo-blanco_509919-200.jpg" alt="Imagen de Banano">
            <p class="category">Categoría: Fruta</p>
            <p class="description">El banano es una fruta dulce y nutritiva, rica en potasio y fibra, ideal para un snack saludable o como parte de un desayuno equilibrado.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El banano es una de las frutas más consumidas en el mundo, conocido por su sabor dulce y su versatilidad. Es una excelente fuente de potasio, lo que ayuda a regular la presión arterial y a mantener la salud cardiovascular. También contiene vitamina C, vitamina B6 y fibra, lo que contribuye a una dieta equilibrada.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>89 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>23g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.6g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina C, Vitamina B6, Potasio</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Azúcares naturales:</strong> Aunque el banano es una opción saludable, su contenido de azúcares puede ser elevado, lo que podría ser un problema para personas con diabetes si se consume en exceso.</p>
            </div>
            <div class="description">
                <p><strong>Interacciones con medicamentos:</strong> El potasio en el banano puede interferir con ciertos medicamentos, especialmente aquellos que afectan los niveles de potasio en el cuerpo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en potasio:</strong> Ayuda a regular la presión arterial y reduce el riesgo de enfermedades cardiovasculares.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la digestión:</strong> La fibra en el banano ayuda a mantener un sistema digestivo saludable y previene el estreñimiento.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de energía rápida:</strong> El banano proporciona una rápida fuente de energía debido a su contenido de carbohidratos, lo que lo convierte en una excelente opción para deportistas.</p>
            </div>
            <div class="description">
                <p><strong>Mejora el estado de ánimo:</strong> Contiene triptófano, un aminoácido que ayuda a la producción de serotonina, lo que puede mejorar el estado de ánimo.</p>
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
            <h2>Recetas con Banano</h2>
            <p>Los bananos son ideales para hacer batidos, agregar a los cereales, o disfrutar en rodajas sobre tostadas con mantequilla de maní. También se pueden usar en postres como panes o muffins.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los bananos son una de las frutas más populares del mundo y son, en realidad, bayas. Además, los bananos son ligeramente radiactivos debido a su contenido de potasio-40, un isótopo natural.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige bananos que estén firmes y libres de manchas oscuras. Un banano que tiene un tono amarillo uniforme está en su punto óptimo de madurez.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina banano con yogur griego para un desayuno nutritivo, o agrégalo a tus ensaladas de frutas para un toque dulce y saludable.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas una alternativa al banano, puedes probar con puré de manzana o duraznos para obtener una textura y sabor similares en recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de bananos puede causar deforestación y la pérdida de biodiversidad. Es importante optar por bananos que provengan de fuentes sostenibles y prácticas agrícolas responsables.</p>
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
                    data: [1.1, 23, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina B6', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [10, 0.4, 358],
                    backgroundColor: 'rgba(100, 200, 100, 0.2)',
                    borderColor: 'rgba(100, 200, 100, 1)',
                    pointBackgroundColor: 'rgba(100, 200, 100, 1)',
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
                    data: [85, 89, 88, 90, 89],
                    borderColor: '#42a5f5',
                    fill: false,
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Banano', 'Manzana', 'Pera'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [89, 52, 57],
                    backgroundColor: ['#ffeb3b', '#ff5722', '#4caf50'],
                }]
            },
        });
    </script>
</body>
</html>
