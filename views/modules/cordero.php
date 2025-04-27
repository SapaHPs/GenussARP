<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Cordero</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/91/58/3d/91583db9c0e215e6b97d3c02ebd63f81.jpg" alt="Imagen de Cordero">
            <p class="category">Categoría: Carnes</p>
            <p class="description">El cordero es la carne de un cordero joven, valorada por su sabor tierno y su versatilidad en la cocina.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La carne de cordero es rica en proteínas y nutrientes, frecuentemente utilizada en diversas recetas en todo el mundo. Su sabor distintivo y su textura suave lo hacen un favorito en celebraciones y comidas familiares.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>294 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>25.6g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>21.5g</td>
                </tr>
                <tr>
                    <td>Hierro</td>
                    <td>1.6mg</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Grasas Saturadas:</strong> El cordero puede ser alto en grasas saturadas, por lo que debe ser consumido con moderación.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden ser alérgicas a la carne de cordero.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> El cordero es una buena fuente de proteínas, hierro y zinc, esenciales para el cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Salud Muscular:</strong> Su alto contenido de proteínas ayuda a mantener y desarrollar la masa muscular.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCordero"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCordero"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCordero"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCordero"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Cordero</h2>
            <p>El cordero se puede preparar asado, en guisos o como kebabs, ofreciendo una gran versatilidad en la cocina.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>La carne de cordero es muy popular en muchas culturas y se utiliza en platos tradicionales como el cordero al horno y el cordero a la parrilla.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Busca carne de cordero fresca, con un color rojo brillante y grasa blanca. Evita la carne que tenga un olor fuerte.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El cordero combina bien con verduras asadas, ensaladas frescas y granos enteros como el arroz integral.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si buscas alternativas, puedes optar por carnes magras como el pollo o el pavo.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>Opta por cordero de fuentes sostenibles que respeten el bienestar animal y las prácticas agrícolas responsables.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Cordero = document.getElementById('macronutrientChartCordero').getContext('2d');
        const macronutrientChartCordero = new Chart(ctx1Cordero, {
            type: 'pie',
            data: {
                labels: ['Grasas', 'Carbohidratos', 'Proteínas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [21.5, 0, 25.6],
                    backgroundColor: ['#e67e22', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Cordero = document.getElementById('micronutrientChartCordero').getContext('2d');
        const micronutrientChartCordero = new Chart(ctx2Cordero, {
            type: 'radar',
            data: {
                labels: ['Hierro', 'Zinc', 'Vitamina B12'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [1.6, 4.0, 2.0],
                    backgroundColor: 'rgba(155, 89, 182, 0.2)', // Color de fondo
                    borderColor: 'rgba(155, 89, 182, 1)', // Color de borde
                    pointBackgroundColor: 'rgba(155, 89, 182, 1)', // Color de puntos
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Cordero = document.getElementById('caloriesChartCordero').getContext('2d');
        const caloriesChartCordero = new Chart(ctx3Cordero, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [294, 295, 290, 292, 298],
                    backgroundColor: 'rgba(41, 128, 185, 0.2)', // Color de fondo
                    borderColor: 'rgba(41, 128, 185, 1)', // Color de línea
                }]
            },
        });

        // Gráfico de comparación de nutrientes
        const ctx4Cordero = document.getElementById('comparisonChartCordero').getContext('2d');
        const comparisonChartCordero = new Chart(ctx4Cordero, {
            type: 'bar',
            data: {
                labels: ['Cordero', 'Cerdo', 'Res'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [294, 242, 250],
                    backgroundColor: ['#e74c3c', '#3498db', '#2ecc71'], // Colores para las gráficas
                }]
            },
        });
    </script>
</body>
</html>
