<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Mango Verde</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://img.freepik.com/foto-gratis/mango-verde-sobre-fondo-blanco_144627-305.jpg" alt="Imagen de Mango Verde">
            <p class="category">Categoría: Frutas</p>
            <p class="description">El mango verde es una variedad de mango que se caracteriza por su color verde y su sabor ácido, ideal para ensaladas y salsas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El mango verde es un fruto que se cosecha antes de madurar. Su sabor es más ácido y su textura es más firme que el mango maduro. Es popular en diversas cocinas por su versatilidad en platos frescos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>60 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.54g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>15.2g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.4g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.5g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Acidez:</strong> Su alto contenido de ácido puede causar malestar en personas con sensibilidad estomacal.</p>
            </div>
            <div class="description">
                <p><strong>Alergias:</strong> Al igual que el mango maduro, algunas personas pueden experimentar reacciones alérgicas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Rico en Nutrientes:</strong> Contiene vitaminas y minerales esenciales como la vitamina C y el potasio.</p>
            </div>
            <div class="description">
                <p><strong>Ayuda a la Digestión:</strong> La fibra presente en el mango verde favorece la salud digestiva.</p>
            </div>
            <div class="description">
                <p><strong>Bajo en Calorías:</strong> Ideal para incluir en dietas de control de peso.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartMangoVerde"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartMangoVerde"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartMangoVerde"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartMangoVerde"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Mango Verde</h2>
            <p>El mango verde es perfecto para ensaladas frescas, salsas picantes o como ingrediente en ceviches. Combina muy bien con aguacate y cilantro.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>En algunas culturas, el mango verde se utiliza para preparar chutneys y acompañamientos, resaltando su acidez y frescura.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige mangos verdes que sean firmes al tacto y de un color verde uniforme. Evita aquellos con manchas o partes blandas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Prueba el mango verde con chile en polvo, limón y sal como un snack refrescante o añádelo a tus batidos para un toque ácido.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no encuentras mango verde, puedes usar otras frutas ácidas como la papaya verde o la piña.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo del mango verde puede tener un impacto moderado en el medio ambiente, pero las prácticas sostenibles ayudan a mitigar este efecto.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1MangoVerde = document.getElementById('macronutrientChartMangoVerde').getContext('2d');
        const macronutrientChartMangoVerde = new Chart(ctx1MangoVerde, {
            type: 'pie',
            data: {
                labels: ['Proteínas', 'Carbohidratos', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [0.54, 15.2, 0.4],
                    backgroundColor: ['#66bb6a', '#ffeb3b', '#8d6e63'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2MangoVerde = document.getElementById('micronutrientChartMangoVerde').getContext('2d');
        const micronutrientChartMangoVerde = new Chart(ctx2MangoVerde, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina A', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [36, 54, 168],
                    backgroundColor: 'rgba(102, 187, 106, 0.2)',
                    borderColor: 'rgba(102, 187, 106, 1)',
                    pointBackgroundColor: 'rgba(102, 187, 106, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3MangoVerde = document.getElementById('caloriesChartMangoVerde').getContext('2d');
        const caloriesChartMangoVerde = new Chart(ctx3MangoVerde, {
            type: 'line',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo'],
                datasets: [{
                    label: 'Calorías Consumidas',
                    data: [60, 61, 59, 62, 60],
                    backgroundColor: 'rgba(102, 187, 106, 0.2)',
                    borderColor: 'rgba(102, 187, 106, 1)',
                }]
            },
        });

        // Gráfico de comparación con otros alimentos
        const ctx4MangoVerde = document.getElementById('comparisonChartMangoVerde').getContext('2d');
        const comparisonChartMangoVerde = new Chart(ctx4MangoVerde, {
            type: 'bar',
            data: {
                labels: ['Mango Verde', 'Mango', 'Papaya'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [60, 60, 43],
                    backgroundColor: ['#66bb6a', '#ff5722', '#ffcc80'],
                    borderColor: '#ffffff',
                    borderWidth: 1
                }]
            },
        });
    </script>
</body>
</html>
