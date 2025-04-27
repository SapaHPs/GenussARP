<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Apio</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/46/f0/0d/46f00d53bb358909f3bf7b3496288368.jpg" alt="Imagen de Apio">
            <p class="category">Categoría: Vegetal</p>
            <p class="description">El apio es un vegetal bajo en calorías que se destaca por su alto contenido de agua y su crujiente textura. Es ampliamente utilizado en ensaladas, sopas y como snack saludable.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El apio es una planta de la familia Apiaceae, conocida por sus tallos fibrosos y hojas verdes. Se cultiva principalmente por sus tallos comestibles, que tienen un sabor ligeramente amargo y una textura crujiente. Debido a su bajo contenido calórico y sus propiedades diuréticas, el apio es un ingrediente popular en dietas y planes de desintoxicación.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>16 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>0.8g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.0g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1.6g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina K, Vitamina C, Potasio, Folato</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Alergias:</strong> Algunas personas pueden experimentar reacciones alérgicas al consumir apio, especialmente si tienen sensibilidad a ciertos compuestos vegetales.</p>
            </div>
            <div class="description">
                <p><strong>Efecto diurético:</strong> Consumir grandes cantidades de apio puede causar un efecto diurético, lo cual es algo a tener en cuenta en personas con condiciones renales.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Bajo en calorías:</strong> Con solo 16 calorías por 100 gramos, el apio es ideal para quienes buscan mantener o reducir su peso.</p>
            </div>
            <div class="description">
                <p><strong>Propiedades antiinflamatorias:</strong> Contiene antioxidantes que ayudan a reducir la inflamación y protegen las células del daño oxidativo.</p>
            </div>
            <div class="description">
                <p><strong>Promueve la digestión:</strong> La fibra en el apio mejora el tránsito intestinal y promueve una digestión saludable.</p>
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
            <h2>Recetas con Apio</h2>
            <p>El apio es un ingrediente versátil que se puede utilizar en jugos detox, ensaladas, sopas, y como acompañante en dips y salsas.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El apio ha sido utilizado en la medicina tradicional durante siglos, especialmente para tratar problemas de presión arterial y para mejorar la digestión.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar apio, busca tallos firmes y crujientes con un color verde brillante. Evita los tallos que estén marchitos o blandos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>El apio combina bien con mantequilla de maní, hummus, queso crema y jugo de limón. También se puede mezclar con otras verduras en ensaladas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes apio, puedes usar pepino, lechuga o espinaca como alternativas en tus ensaladas y platos.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El apio es relativamente sostenible, pero su cultivo requiere una cantidad considerable de agua. Se recomienda adquirirlo de productores locales para reducir el impacto ambiental asociado con su transporte.</p>
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
                    data: [0.8, 3.0, 0.2],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina K', 'Vitamina C', 'Potasio', 'Folato'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [29.3, 3.1, 260, 36],
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
                    data: [16, 16, 15, 16, 16],
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
                labels: ['Apio', 'Lechuga', 'Pepino'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [16, 15, 12],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
