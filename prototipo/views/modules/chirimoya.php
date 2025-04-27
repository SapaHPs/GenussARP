<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Chirimoya</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/chirimoya-fruta-saludable-cerca_23-2148436236.jpg" alt="Imagen de Chirimoya">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La chirimoya es una fruta tropical conocida por su dulce sabor y textura cremosa, originaria de América del Sur.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La chirimoya es rica en vitaminas C y B6, así como en antioxidantes. Se puede comer fresca, en batidos, o utilizar en postres.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>75 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>17.7g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.6g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>3g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alérgicos:</strong> Algunas personas pueden ser alérgicas a la chirimoya y experimentar reacciones adversas.</p>
            </div>
            <div class="description">
                <p><strong>Consumo excesivo:</strong> Comer en exceso puede causar molestias estomacales debido a su alto contenido de azúcares.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rica en antioxidantes:</strong> Ayuda a combatir el daño celular y a reducir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Buena para la digestión:</strong> Su contenido en fibra puede ayudar a mantener un sistema digestivo saludable.</p>
            </div>
            <div class="description">
                <p><strong>Fortalece el sistema inmunológico:</strong> La vitamina C contribuye a mejorar la respuesta inmunitaria del organismo.</p>
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
            <h2>Recetas con Chirimoya</h2>
            <p>La chirimoya se puede usar en batidos, ensaladas de frutas, o como ingrediente en helados y postres. Su sabor dulce es perfecto para complementar otros ingredientes.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La chirimoya es también conocida como "fruta de la eterna juventud" debido a sus propiedades beneficiosas para la piel y la salud general.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir chirimoyas, busca aquellas que estén firmes pero ligeramente cederán a la presión. Deben tener un color verde claro a amarillo y sin manchas oscuras.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>La chirimoya combina bien con yogur, granola, y otros frutos tropicales, lo que la convierte en una opción excelente para ensaladas y smoothies.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes chirimoya, puedes usar otras frutas tropicales como la papaya o la guanábana, aunque el sabor y la textura variarán.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>La chirimoya se cultiva principalmente en climas tropicales, y su producción puede ser sostenible si se maneja adecuadamente, contribuyendo a la biodiversidad agrícola.</p>
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
                    data: [1.6, 17.7, 0.6],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Calcio', 'Fósforo'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [18, 18, 34],
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
                    data: [75, 76, 74, 75, 77],
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
                labels: ['Chirimoya', 'Mango', 'Pera'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [75, 60, 57],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
