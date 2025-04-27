<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Champiñones</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/d0/bd/51/d0bd51532ee696668b7ae3ea1ccbe9df.jpg" alt="Imagen de Champiñones">
            <p class="category">Categoría: Verduras</p>
            <p class="description">Los champiñones son hongos comestibles, conocidos por su textura suave y su sabor umami, que los convierte en un ingrediente popular en muchas recetas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>Los champiñones son un alimento versátil que se puede utilizar en una variedad de platos, desde guisos hasta ensaladas. Son bajos en calorías y ricos en nutrientes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>22 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>3.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>3.3g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.3g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Problemas digestivos:</strong> Algunas personas pueden experimentar malestar digestivo después de consumir champiñones, especialmente en grandes cantidades.</p>
            </div>
            <div class="description">
                <p><strong>Alérgias:</strong> Algunas personas pueden ser alérgicas a los champiñones y experimentar reacciones adversas.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Bajos en calorías:</strong> Los champiñones son una excelente opción para aquellos que buscan perder peso, ya que son muy bajos en calorías.</p>
            </div>
            <div class="description">
                <p><strong>Ricos en antioxidantes:</strong> Contienen antioxidantes que ayudan a combatir el daño celular y el envejecimiento.</p>
            </div>
            <div class="description">
                <p><strong>Fuente de vitaminas y minerales:</strong> Proporcionan vitaminas del grupo B, selenio y potasio, que son esenciales para el funcionamiento del cuerpo.</p>
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
            <h2>Recetas con Champiñones</h2>
            <p>Los champiñones son ideales para salteados, guisos, pizzas y rellenos. También se pueden asar o utilizar en sopas para agregar un sabor profundo y umami.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>Los champiñones son considerados un superalimento por sus propiedades nutricionales y su capacidad para mejorar el sabor de muchos platos sin añadir muchas calorías.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar champiñones, busca aquellos que sean firmes, sin manchas o arrugas. Deben tener un aroma fresco y terroso.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Los champiñones combinan bien con espinacas, ajo, cebolla y hierbas frescas. Son excelentes en ensaladas, pastas y platos de carne.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes champiñones, puedes usar setas shiitake o portobello como alternativas en tus recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de champiñones tiene un bajo impacto ambiental y puede ser realizado de manera sostenible, utilizando residuos orgánicos y requerimientos de agua mínimos.</p>
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
                    data: [3.1, 3.3, 0.3],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina B2', 'Selenio', 'Potasio'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [0.16, 9.3, 318],
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
                    data: [22, 24, 20, 23, 21],
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
                labels: ['Champiñones', 'Cebolla', 'Pimientos'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [22, 40, 20],
                    backgroundColor: ['#ffcd56', '#36a2eb', '#ff6384'],
                }]
            },
        });
    </script>
</body>
</html>
