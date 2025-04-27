<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Alga Nori</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/fotos-premium/alga-nori_234452-2750.jpg" alt="Imagen de Alga Nori">
            <p class="category">Categoría: Alga Comestible</p>
            <p class="description">El alga nori es un alga comestible de origen japonés que se utiliza principalmente para envolver sushi y otros platos.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El alga nori es una variedad de alga roja que se seca y se prensa en hojas delgadas. Es un ingrediente clave en la cocina japonesa y se utiliza comúnmente en la preparación de sushi. Además de su uso culinario, el nori es conocido por sus beneficios nutricionales, ya que es rico en vitaminas y minerales.</p><br><br>
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
                    <td>5.7g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina B12, Yodo, Hierro, Calcio</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Exceso de yodo:</strong> El consumo excesivo de alga nori puede llevar a una ingesta alta de yodo, lo que podría afectar la función tiroidea.</p>
            </div>
            <div class="description">
                <p><strong>Contaminación:</strong> Algunas algas pueden contener contaminantes ambientales, por lo que es importante adquirir productos de fuentes confiables.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en nutrientes:</strong> El alga nori es una excelente fuente de vitaminas y minerales esenciales, que contribuyen a una dieta equilibrada.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidantes:</strong> Contiene antioxidantes que ayudan a combatir el daño celular y promueven la salud general.</p>
            </div>
            <div class="description">
                <p><strong>Apoyo digestivo:</strong> La fibra presente en el nori puede ayudar a mejorar la salud digestiva y regular el tránsito intestinal.</p>
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
            <h2>Recetas con Alga Nori</h2>
            <p>El alga nori se utiliza comúnmente para hacer sushi, onigiri y también puede ser un acompañamiento en ensaladas o sopas. Se puede utilizar como base para snacks saludables.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>En Japón, el alga nori se considera un alimento tradicional y se utiliza en festividades y celebraciones. Además, se cree que ayuda a mejorar la salud de la piel y el cabello.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar alga nori, busca hojas de color verde oscuro a negro, sin rasguños ni daños visibles. Es mejor elegir nori tostado para un sabor más intenso.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El alga nori combina bien con arroz, pescado, aguacate y vegetales frescos. También se puede utilizar en batidos o sopas para añadir nutrientes.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes alga nori, puedes usar otras algas como wakame o dulse, aunque el sabor será diferente.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de algas, como el nori, puede ser una práctica sostenible, ya que no requiere tierra arable y puede ayudar a la limpieza de los océanos al absorber dióxido de carbono y proporcionar hábitat a la vida marina.</p>
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
                    data: [5.7, 0.4, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina B12', 'Yodo', 'Hierro', 'Calcio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.3, 298, 0.4, 15],
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
                    data: [35, 35, 36, 34, 35],
                    borderColor: '#ff6384',
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                }]
            },
        });

        // Gráfico de comparación de calorías
        const ctx4 = document.getElementById('comparisonChart').getContext('2d');
        const comparisonChart = new Chart(ctx4, {
            type: 'bar',
            data: {
                labels: ['Alga Nori', 'Lechuga', 'Espinaca'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [35, 15, 23],
                    backgroundColor: ['#ffeb3b', '#4caf50', '#2196f3'],
                }]
            },
        });
    </script>
</body>
</html>
