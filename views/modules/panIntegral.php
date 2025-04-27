<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pan Integral</title>
    <link rel="stylesheet" href="css/ARP.css">
    <style>
       * {
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f9f9f9;
}

.content-wrapper {
    padding: 20px;
    max-width: 1200px;
    margin: auto;
}

.content-block {
    margin-bottom: 40px;
    display: flex;
    flex-direction: column;
    align-items: flex-start;
}

.text {
    flex: 1;
    padding: 10px;
}

.image {
    flex: 1;
    text-align: center;
    padding: 10px;
}

.image img {
    max-width: 100%;
    height: auto;
}

h2, h3 {
    margin: 10px 0;
}

ul {
    padding-left: 20px;
}

.charts-wrapper {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    margin: 20px 0;
}

.chart-container {
    width: 100%;
    max-width: 350px;
    height: 250px;
    margin: 10px;
}

@media (min-width: 768px) {
    .content-block {
        flex-direction: row;
    }

    .text, .image {
        flex: 1;
        padding: 10px;
    }

    .charts-wrapper {
        flex-direction: row;
    }

    .chart-container {
        width: calc(50% - 20px);
    }
}

@media (min-width: 1200px) {
    .chart-container {
        width: 400px;
        height: 300px;
    }
}

    </style>
</head>
<body>
    <div class="content-wrapper">
        <!-- Sección de descripción del Pan Integral -->
        <section class="content-block">
            <div class="text">
                <h2>Pan Integral</h2>
                <p>El pan integral es un alimento básico en muchas dietas alrededor del mundo, apreciado por su aporte en fibra dietética, que es clave para la salud digestiva. A diferencia del pan blanco, que está hecho de harina refinada, el pan integral contiene el grano entero, lo que conserva una mayor cantidad de nutrientes como vitaminas del complejo B, vitamina E, hierro y magnesio.</p>
                <p>La fibra del pan integral ayuda a controlar los niveles de azúcar en la sangre, promueve una buena digestión y puede contribuir a la pérdida de peso al generar una sensación de saciedad más prolongada. Además, los carbohidratos complejos que contiene proporcionan energía de manera gradual, evitando picos de glucosa en el organismo. Incorporar pan integral en la dieta es una manera efectiva de obtener energía duradera y mejorar la salud digestiva.</p>
            </div>
            <div class="image">
                <img src="https://thumbs.dreamstime.com/b/pan-integral-en-el-fondo-blanco-48771540.jpg" alt="Foto de Pan Integral">
            </div>
        </section>

        <!-- Sección de beneficios -->
        <section class="content-block">
            <h3>Beneficios</h3>
            <ul>
                <li>Alto contenido en fibra que mejora la digestión y promueve la saciedad.</li>
                <li>Contribuye a la regulación del azúcar en la sangre.</li>
                <li>Proporciona carbohidratos complejos que ofrecen energía sostenida.</li>
                <li>Contiene nutrientes esenciales como vitaminas B y E, hierro y magnesio.</li>
                <li>Mejora la salud cardiovascular y ayuda en el control del peso.</li>
            </ul>
        </section>

        <!-- Sección de Gráfica Nutricional -->
        <section class="content-block">
            <h3>Gráfica Nutricional</h3>
            <div class="charts-wrapper">
                <div class="chart-container">
                    <canvas id="nutritionalChartPanIntegral"></canvas>
                </div>
            </div>
        </section>

        <!-- Sección de recetas con Pan Integral -->
        <section class="content-block">
            <h3>Recetas con Pan Integral</h3>
            <ul>
                <li>Sándwich integral de pollo con aguacate y espinacas.</li>
                <li>Tostadas de pan integral con hummus y verduras.</li>
                <li>Pan integral tostado con mantequilla de maní y rodajas de plátano.</li>
            </ul>
        </section>

        <!-- Sección de datos curiosos -->
        <section class="content-block">
            <h3>Datos Curiosos</h3>
            <p>El pan integral es más nutritivo que el pan blanco debido a que retiene el salvado y el germen del grano, que son ricos en fibra y otros nutrientes. Además, el pan integral se ha asociado con una menor incidencia de enfermedades crónicas y se considera una mejor opción para quienes buscan mejorar su salud general.</p>
        </section>

        <!-- Sección de guía de compra -->
        <section class="content-block">
            <h3>Guía de Compra</h3>
            <p>Al elegir pan integral, busca etiquetas que indiquen "100% integral" o "harina integral" en los ingredientes. Evita los panes que tienen un alto contenido de azúcares añadidos o conservantes. La textura debe ser densa y el color más oscuro en comparación con el pan blanco.</p>
        </section>

        <!-- Sección de combinaciones -->
        <section class="content-block">
            <h3>Combinaciones</h3>
            <p>El pan integral combina bien con:</p>
            <ul>
                <li>Proteínas como pollo, pavo, atún o garbanzos.</li>
                <li>Vegetales frescos como lechuga, tomate, pepino y pimientos.</li>
                <li>Frutas como aguacate, plátano o manzana para un toque dulce.</li>
            </ul>
        </section>
    </div>

    <!-- Incluyendo Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctxNutritionalPanIntegral = document.getElementById('nutritionalChartPanIntegral').getContext('2d');
        const nutritionalChartPanIntegral = new Chart(ctxNutritionalPanIntegral, {
            type: 'bar',
            data: {
                labels: ['Fibra', 'Carbohidratos', 'Proteínas', 'Vitaminas B'],
                datasets: [{
                    label: 'Nutrientes por 100g de Pan Integral',
                    data: [6, 49, 9, 0.5], // Valores aproximados
                    backgroundColor: [
                        'rgba(75, 192, 192, 0.6)',
                        'rgba(255, 206, 86, 0.6)',
                        'rgba(255, 99, 132, 0.6)',
                        'rgba(153, 102, 255, 0.6)'
                    ],
                    borderColor: [
                        'rgba(75, 192, 192, 1)',
                        'rgba(255, 206, 86, 1)',
                        'rgba(255, 99, 132, 1)',
                        'rgba(153, 102, 255, 1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
</body>
</html>
