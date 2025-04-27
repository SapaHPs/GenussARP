<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Ajo</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://i.pinimg.com/564x/4d/80/e5/4d80e535b34b17a3a5cc2f65ce02ac7f.jpg" alt="Imagen de Ajo">
            <p class="category">Categoría: Condimento</p>
            <p class="description">El ajo es un condimento utilizado en muchas cocinas del mundo, conocido por su sabor característico y sus numerosos beneficios para la salud.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>El ajo es un bulbo que pertenece a la familia de las liliáceas, utilizado tanto en la cocina como en la medicina natural. Es conocido por su fuerte sabor y aroma, así como por sus propiedades antioxidantes y antiinflamatorias. El ajo puede consumirse crudo, cocido o en forma de suplementos.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>149 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>6.4g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>33.1g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.5g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.1g</td>
                </tr>
                <tr>
                    <td>Vitaminas y Minerales</td>
                    <td>Vitamina C, Vitamina B6, Manganeso</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Mal aliento:</strong> El consumo de ajo puede causar un aliento fuerte, lo que puede ser incómodo en ciertas situaciones sociales.</p>
            </div>
            <div class="description">
                <p><strong>Reacciones alérgicas:</strong> Algunas personas pueden experimentar reacciones alérgicas al ajo, lo que puede causar irritación o malestar digestivo.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Propiedades antibacterianas:</strong> El ajo tiene compuestos que ayudan a combatir bacterias y virus, mejorando el sistema inmunológico.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la salud cardiovascular:</strong> El ajo puede ayudar a reducir la presión arterial y los niveles de colesterol, protegiendo el corazón.</p>
            </div>
            <div class="description">
                <p><strong>Antioxidante potente:</strong> Sus antioxidantes ayudan a combatir el daño celular y pueden disminuir el riesgo de enfermedades crónicas.</p>
            </div>
            <div class="description">
                <p><strong>Control de peso:</strong> Puede ayudar a regular el metabolismo y la pérdida de peso gracias a sus efectos sobre la digestión.</p>
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
            <h2>Recetas con Ajo</h2>
            <p>El ajo se utiliza en una amplia variedad de platos, desde salsas hasta adobos, y es un ingrediente clave en el famoso pesto. También es delicioso asado o salteado para realzar el sabor de las verduras.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>El ajo ha sido utilizado por miles de años tanto como alimento como medicina. En la antigua Egipto, se utilizaba para aumentar la resistencia de los trabajadores que construían las pirámides.</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Elige dientes de ajo firmes y sin manchas. Los ajos frescos deben estar secos y con las envolturas intactas. Evita los ajos que tengan brotes verdes, ya que pueden ser amargos.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Combina ajo con verduras salteadas, carnes o mariscos para dar un sabor intenso y saludable a tus comidas. También es excelente en aderezos para ensaladas.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Si no tienes ajo fresco, puedes usar ajo en polvo o en pasta como alternativa, aunque el sabor puede ser menos intenso.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de ajo puede ser intensivo en recursos, por lo que es importante optar por ajo orgánico y cultivado de manera sostenible para minimizar el impacto ambiental.</p>
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
                    data: [6.4, 33.1, 0.5],
                    backgroundColor: ['#36a2eb', '#ffcd56', '#ff6384'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2 = document.getElementById('micronutrientChart').getContext('2d');
        const micronutrientChart = new Chart(ctx2, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Vitamina B6', 'Manganeso'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [31, 1.2, 1.2],
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
                    data: [145, 149, 147, 150, 149],
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
                labels: ['Ajo', 'Cebolla', 'Chalota'],
                datasets: [{
                    label: 'Calorías por 100g',
                    data: [149, 40, 72],
                    backgroundColor: ['#ffeb3b', '#ff5722', '#4caf50'],
                }]
            },
        });
    </script>
</body>
</html>
