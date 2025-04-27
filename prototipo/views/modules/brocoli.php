<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Brócoli</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/brocoli-sobre-fondo-blanco_23-2148372050.jpg" alt="Imagen de Brócoli">
            <p class="category">Categoría: Hortaliza</p>
            <p class="description">El brócoli es una hortaliza crucífera rica en nutrientes y antioxidantes, conocida por sus múltiples beneficios para la salud.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El brócoli es un vegetal versátil que se puede consumir crudo o cocido. Es rico en vitaminas, minerales y fibra, lo que lo convierte en un excelente aliado para una alimentación saludable.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>34 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>2.8g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>6.6g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.6g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina C, Vitamina K, Folato, Potasio</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas digestivos:</strong> En algunas personas, el brócoli puede causar gases o hinchazón si se consume en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Interacción con medicamentos:</strong> Contiene vitamina K, que puede interferir con ciertos anticoagulantes; es importante consultar con un médico si se está bajo tratamiento.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Alto en antioxidantes:</strong> El brócoli es rico en antioxidantes que ayudan a combatir el daño celular y reducen el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la salud digestiva:</strong> Su alto contenido de fibra favorece una buena digestión y previene problemas gastrointestinales.</p>
            </div>
            <div class="description">
                <p><strong>Salud ósea:</strong> El brócoli es una buena fuente de vitamina K, que es esencial para la salud ósea.</p>
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
            <h2>Recetas con Brócoli</h2>
            <p>El brócoli es ideal en ensaladas, al vapor, salteado, o como ingrediente en sopas y guisos. Prueba el brócoli al vapor con limón y ajo para una deliciosa guarnición.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El brócoli pertenece a la misma familia que la col rizada, el repollo y las coles de Bruselas, y se cultivó por primera vez en Italia en la época del Imperio Romano.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al elegir brócoli, busca cabezas firmes y verdes, evitando las que tengan manchas amarillas o floretes marchitos. El brócoli fresco tiene un aroma fresco y herbáceo.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El brócoli combina bien con ajo, aceite de oliva, queso parmesano, y otras verduras como zanahorias y coliflor.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no puedes consumir brócoli, considera usar col rizada, coliflor o espinacas como alternativas en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El brócoli se cultiva de manera sostenible en muchas regiones, pero se recomienda elegir opciones orgánicas para minimizar el uso de pesticidas y apoyar la agricultura responsable.</p>
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
                    data: [2.8, 6.6, 0.4],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina K', 'Folato', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [89.2, 101.6, 63, 316],
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
                    data: [34, 30, 32, 28, 36],
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
                labels: ['Brócoli', 'Coliflor', 'Espinaca'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [34, 25, 23],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
