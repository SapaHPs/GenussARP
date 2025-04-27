<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Col Rizada</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/vista-superior-hojas-frescas-col-rizada_23-2148878660.jpg" alt="Imagen de Col Rizada">
            <p class="category">Categoría: Verduras y Hortalizas</p>
            <p class="description">La col rizada, también conocida como kale, es una hortaliza rica en vitaminas, minerales y antioxidantes, ideal para incluir en dietas saludables y equilibradas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La col rizada es una variedad de col de hojas verdes que destaca por su densidad nutricional y su versatilidad en la cocina. Es una excelente fuente de vitaminas A, C y K, y contiene minerales como el calcio y el hierro. La col rizada se consume en ensaladas, batidos verdes y como acompañamiento en una variedad de platos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>35 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.9g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>4.4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>1.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>4.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Interacción con Tiroides:</strong> La col rizada contiene compuestos bociógenos que, en exceso, pueden interferir con el funcionamiento de la tiroides en personas con predisposición a problemas tiroideos.</p>
            </div>
            <div class="description">
                <p><strong>Exceso de Vitamina K:</strong> Debido a su alto contenido de vitamina K, puede interferir con medicamentos anticoagulantes. Es recomendable moderar su consumo en estas situaciones.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Fortalecimiento Óseo:</strong> La col rizada es rica en calcio, lo que ayuda a mantener huesos y dientes fuertes, y previene enfermedades como la osteoporosis.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades Antiinflamatorias:</strong> Sus antioxidantes naturales, como los flavonoides y la vitamina C, combaten la inflamación y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Promueve la Salud Digestiva:</strong> La fibra dietética que contiene mejora la digestión y favorece la salud intestinal.</p>
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
            <h2>Recetas con Col Rizada</h2>
            <p>La col rizada se puede utilizar en recetas como ensaladas, batidos verdes, sopas y guisos. También se pueden hacer chips de col rizada como alternativa saludable a los snacks.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La col rizada se ha vuelto muy popular en la dieta saludable moderna, siendo considerada un "superalimento" por su gran aporte de nutrientes y sus propiedades antioxidantes.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir col rizada, busca hojas de color verde brillante o moradas (dependiendo de la variedad) y que estén firmes y sin signos de marchitamiento.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La col rizada se combina bien con frutas como manzanas y naranjas, así como con nueces y semillas. También se puede saltear con ajo y aceite de oliva para resaltar su sabor.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>El brócoli y las espinacas son buenas alternativas a la col rizada en recetas que requieren un aporte similar de nutrientes.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La col rizada tiene un bajo impacto ambiental comparado con otros cultivos, especialmente si se produce localmente y se evita el uso excesivo de fertilizantes y pesticidas.</p>
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
                    data: [2.9, 4.4, 1.5],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina A', 'Vitamina C', 'Calcio', 'Hierro'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [481, 93, 150, 1.5],
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    pointBackgroundColor: 'rgba(153, 102, 255, 1)',
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
                    data: [35, 34, 33, 36, 37],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const
