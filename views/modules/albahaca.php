<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Albahaca</title>
    <link rel="stylesheet" href="css/ARP.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
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
<br><br><br>
    <div class="content-wrapper">
        <section class="content-block">
            <div class="text">
                <h2>Albahaca</h2>
                <p>La albahaca es una hierba aromática que no solo añade sabor y frescura a una gran variedad de platos, sino que también posee propiedades medicinales notables. Es rica en antioxidantes como los flavonoides y contiene vitamina K, que es esencial para la coagulación sanguínea y la salud ósea. Además, la albahaca tiene compuestos volátiles, como el eugenol, que han demostrado tener efectos antiinflamatorios y antibacterianos. En la medicina tradicional, la albahaca se ha utilizado para aliviar problemas digestivos y reducir el estrés. Añadirla a las comidas no solo mejora el sabor, sino que también proporciona nutrientes que ayudan a mejorar la salud general del cuerpo.</p>
            </div>
            <div class="image">
                <img src="https://thumbs.dreamstime.com/b/albahaca-fresca-aislada-sobre-fondo-blanco-trazado-de-recorte-214990003.jpg" alt="Albahaca">
            </div>
        </section>

        <section class="content-block">
            <h3>Beneficios</h3>
            <ul>
                <li>Rica en antioxidantes que protegen las células.</li>
                <li>Propiedades antiinflamatorias y antibacterianas.</li>
                <li>Ayuda en la digestión y reducción del estrés.</li>
                <li>Buena fuente de vitamina K para la salud ósea.</li>
                <li>Contribuye a la salud cardiovascular.</li>
            </ul>
        </section>

        <section class="content-block">
            <h3>Gráficos Nutricionales</h3>
            <div class="charts-wrapper">
                <div class="chart-container">
                    <canvas id="nutritionalChart"></canvas>
                </div>
                <div class="chart-container">
                    <canvas id="caloriesChart"></canvas>
                </div>
            </div>
        </section>

        <section class="content-block">
            <h3>Recetas con Albahaca</h3>
            <ul>
                <li>Ensalada Caprese: Tomate, mozzarella y albahaca fresca.</li>
                <li>Pesto: Salsa de albahaca, piñones y aceite de oliva.</li>
                <li>Pasta al pesto: Pasta mezclada con salsa de pesto.</li>
                <li>Sopa de tomate: Sopa de tomate con albahaca fresca.</li>
                <li>Pizza Margherita: Pizza con salsa de tomate y albahaca.</li>
            </ul>
        </section>

        <section class="content-block">
            <h3>Datos Curiosos</h3>
            <p>La albahaca es considerada sagrada en algunas culturas y se utiliza en rituales religiosos.</p>
        </section>

        <section class="content-block">
            <h3>Guía de Compra</h3>
            <p>Busca hojas frescas, brillantes y de color verde intenso. Evita las hojas marchitas o amarillentas.</p>
        </section>

        <section class="content-block">
            <h3>Combinaciones</h3>
            <p>La albahaca se combina bien con:</p>
            <ul>
                <li>Tomates: En ensaladas y salsas.</li>
                <li>Quesos: Como mozzarella y parmesano.</li>
                <li>Frutos secos: Piñones en el pesto.</li>
                <li>Otros hierbas: Orégano, perejil y romero.</li>
            </ul>
        </section>
    </div>
    <br><br><br>
    <script>
        const ctxNutritional = document.getElementById('nutritionalChart').getContext('2d');
        const nutritionalChart = new Chart(ctxNutritional, {
            type: 'bar',
            data: {
                labels: ['Grasas', 'Proteínas', 'Carbohidratos', 'Fibra', 'Vitamina K'],
                datasets: [{
                    label: 'Nutrientes por 100g de Albahaca',
                    data: [0.6, 3.2, 2.7, 1.6, 414.8], // Ejemplo de valores
                    backgroundColor: [
                        'rgba(155, 89, 182, 0.6)',
                        'rgba(46, 204, 113, 0.6)',
                        'rgba(52, 152, 219, 0.6)',
                        'rgba(241, 196, 15, 0.6)',
                        'rgba(231, 76, 60, 0.6)'
                    ],
                    borderColor: [
                        'rgba(155, 89, 182, 1)',
                        'rgba(46, 204, 113, 1)',
                        'rgba(52, 152, 219, 1)',
                        'rgba(241, 196, 15, 1)',
                        'rgba(231, 76, 60, 1)'
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
