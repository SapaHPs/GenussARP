<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Información de Alimentos - Cereza</title>
    <link rel="stylesheet" href="css/tabla.css">
    <link rel="stylesheet" href="css/food.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.0.1/chart.min.css">
</head>
<body>
    <div class="container">
        <!-- Encabezado del Alimento -->
        <section class="header">
            <img src="https://images.unsplash.com/photo-1582487837715-bd7b29d47bf7" alt="Imagen de Cereza">
            <p class="category">Categoría: Frutas</p>
            <p class="description">La cereza es una pequeña fruta roja, dulce y jugosa, rica en antioxidantes y vitaminas, que se consume fresca o como parte de recetas dulces y saladas.</p>
        </section>

        <!-- Descripción General -->
        <section class="section description">
            <h2>Descripción General</h2>
            <p>La cereza es una fruta que pertenece a la familia de las rosáceas. Es conocida por su sabor dulce y ligeramente ácido. Se puede consumir fresca, en postres, mermeladas, y en una variedad de preparaciones culinarias. Además, se destaca por sus propiedades antioxidantes.</p><br><br>
            <h3>Perfil Nutricional</h3><br>
            <table>
                <tr>
                    <th>Macronutriente</th>
                    <th>Cantidad por 100g</th>
                </tr>
                <tr>
                    <td>Calorías</td>
                    <td>63 kcal</td>
                </tr>
                <tr>
                    <td>Proteínas</td>
                    <td>1.1g</td>
                </tr>
                <tr>
                    <td>Carbohidratos</td>
                    <td>16g</td>
                </tr>
                <tr>
                    <td>Grasas</td>
                    <td>0.2g</td>
                </tr>
                <tr>
                    <td>Fibra</td>
                    <td>2.1g</td>
                </tr>
            </table>
        </section><br><br>

        <!-- Desventajas y Contraindicaciones -->
        <section class="section description">
            <h2>Desventajas y Contraindicaciones</h2>
            <div class="description">
                <p><strong>Contenido de Azúcares Naturales:</strong> La cereza, al igual que otras frutas, tiene un alto contenido de azúcares naturales. Su consumo excesivo puede no ser adecuado para personas con diabetes o con restricciones en la ingesta de carbohidratos.</p>
            </div>
        </section>

        <!-- Beneficios para la Salud -->
        <section class="section description">
            <h2>Beneficios para la Salud</h2>
            <div class="description">
                <p><strong>Propiedades Antioxidantes:</strong> La cereza es rica en antioxidantes como la vitamina C y antocianinas, que ayudan a combatir el daño oxidativo en el cuerpo.</p>
            </div>
            <div class="description">
                <p><strong>Mejora la Calidad del Sueño:</strong> Contiene melatonina, una hormona que regula el ciclo del sueño, y puede ayudar a mejorar la calidad del sueño.</p>
            </div>
            <div class="description">
                <p><strong>Anti-inflamatorio Natural:</strong> Sus compuestos naturales tienen propiedades antiinflamatorias que pueden ayudar a reducir el dolor muscular y la inflamación.</p>
            </div>
        </section><br><br>

        <!-- Gráficos Nutricionales -->
        <section class="section charts">
            <div class="chart-container">
                <canvas id="macronutrientChartCereza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="micronutrientChartCereza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="caloriesChartCereza"></canvas>
            </div>
            <div class="chart-container">
                <canvas id="comparisonChartCereza"></canvas>
            </div>
        </section>

        <!-- Recetas con el Alimento -->
        <section class="section recipes">
            <h2>Recetas con Cereza</h2>
            <p>La cereza es un excelente ingrediente para preparar tartas, ensaladas de frutas, batidos y se puede usar como adorno en diversos platillos.</p>
        </section>

        <!-- Datos Curiosos -->
        <section class="section curiosities">
            <h2>Datos Curiosos</h2>
            <p>¿Sabías que existen más de 1,000 variedades de cerezas en todo el mundo, pero solo una pequeña fracción se cultiva para consumo comercial?</p>
        </section>

        <!-- Guía de Compra -->
        <section class="section buying-guide">
            <h2>Guía de Compra</h2>
            <p>Al comprar cerezas, elige aquellas que sean firmes, con un color rojo oscuro y tallos verdes. Evita las cerezas arrugadas o blandas.</p>
        </section>

        <!-- Combinaciones Saludables -->
        <section class="section healthy-combinations">
            <h2>Combinaciones Saludables</h2>
            <p>Las cerezas combinan bien con yogurt, avena, nueces y otras frutas como fresas y arándanos.</p>
        </section>

        <!-- Alternativas del Alimento -->
        <section class="section alternatives">
            <h2>Alternativas del Alimento</h2>
            <p>Las fresas, las frambuesas y los arándanos son excelentes alternativas a las cerezas en muchas recetas.</p>
        </section>

        <!-- Impacto Ambiental y Sostenibilidad -->
        <section class="section sustainability">
            <h2>Impacto Ambiental y Sostenibilidad</h2>
            <p>El cultivo de cerezas puede ser intensivo en agua y energía. Optar por cerezas cultivadas de manera sostenible y localmente puede reducir el impacto ambiental.</p>
        </section>
    </div>

    <!-- Librerías de gráficos -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Gráfico de distribución de macronutrientes
        const ctx1Cereza = document.getElementById('macronutrientChartCereza').getContext('2d');
        const macronutrientChartCereza = new Chart(ctx1Cereza, {
            type: 'pie',
            data: {
                labels: ['Carbohidratos', 'Proteínas', 'Grasas'],
                datasets: [{
                    label: 'Distribución de Macronutrientes',
                    data: [16, 1.1, 0.2],
                    backgroundColor: ['#f08080', '#90ee90', '#ffb6c1'],
                }]
            },
        });

        // Gráfico comparativo de micronutrientes
        const ctx2Cereza = document.getElementById('micronutrientChartCereza').getContext('2d');
        const micronutrientChartCereza = new Chart(ctx2Cereza, {
            type: 'radar',
            data: {
                labels: ['Vitamina C', 'Potasio', 'Fibra'],
                datasets: [{
                    label: 'Nutrientes',
                    data: [12, 222, 2.1],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)',
                }]
            },
        });

        // Gráfico de calorías a lo largo del tiempo
        const ctx3Cereza = document.getElementById('caloriesChartCereza').getContext('2d');
        const caloriesChartCereza = new Chart(ctx3Cereza, {
            type: 'bar',
            data: {
                labels: ['Enero', 'Febrero', 'Marzo', 'Abril'],
                datasets: [{
                    label: 'Calorías consumidas en Cereza',
                    data: [120, 150, 180, 160],
                    backgroundColor: '#ff6384',
                }]
            },
        });

        // Gráfico comparativo horizontal (de 'horizontalBar' a 'bar' con configuración horizontal)
        const ctx4Cereza = document.getElementById('comparisonChartCereza').getContext('2d');
        const comparisonChartCereza = new Chart(ctx4Cereza, {
            type: 'bar',
            data: {
                labels: ['Cereza', 'Fresa', 'Arándano'],
                datasets: [{
                    label: 'Comparativa de Azúcares (g)',
                    data: [12, 4.9, 10],
                    backgroundColor: ['#f08080', '#87cefa', '#9370db'],
                }]
            },
            options: {
                indexAxis: 'y' // Configura la dirección del gráfico a horizontal
            }
        });
    </script>
</body>
</html>
