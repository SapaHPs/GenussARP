<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script defer src="https://app.embed.im/show.js"></script>
    <title>Inicio - Alimentos Saludables</title>
</head>
<body>
    <main>
        <section class="scroll">
            <div>
                <h1>
                    <span>Bienvenidos</span>
                    <span>Explora todo lo que tenemos para ofrecer</span>
                </h1>
            </div>
        </section>
        <br><br><br><br><br><br>
        <section class="main-content">
    <section class="filters">
        <input type="text" id="busqueda" placeholder="Buscar por nombre...">
        <div class="filter-section">
                    <p class="filter-title">Categoría</p>
                    <div id="categorias" class="categorias">
                        <span class="categoria">Carnes</span>
                        <span class="categoria">Lacteos</span>
                        <span class="categoria">Frutas</span>
                        <span class="categoria">Vegetales</span>
                        <span class="categoria">Cereales</span>
                        <span class="categoria">Legumbres</span>
                        <span class="categoria">Grasas</span>
                        <span class="categoria">Semillas</span>
                        <span class="categoria">Tuberculos</span>
                    </div>
                </div>
                <br>
                <!-- Propiedades Nutricionales -->
                <div class="filter-section">
                    <p class="filter-title">Propiedades Nutricionales</p>
                    <div id="propiedades" class="propiedades">
                        <span class="propiedad">Potasio</span>
                        <span class="propiedad">Proteinas</span>
                        <span class="propiedad">Calcio</span>
                        <span class="propiedad">Fibra</span>
                        <span class="propiedad">Vitaminas</span>
                        <span class="propiedad">Grasas</span>
                        <span class="propiedad">Antioxidantes</span> 
                        <span class="propiedad">Carbohidratos</span>   
                    </div>
                </div>
    </section>
    
    <section class="content">
        <div class="app-grid">
        <a href="index.php?action=Banano" class="app-link">
        <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/banano.png" alt="Banano" class="app-icon" style="background-color: #ffe066;">
        <div class="app-text">
            <div class="app-name">Banano</div>
            <div class="app-visits">Rico en Potasio</div>
        </div>
    </div>
</a>
<a href="index.php?action=Aguacate" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Grasas">
        <img src="img/aguacate.png" alt="Aguacate" class="app-icon" style="background-color: #98ddca;">
        <div class="app-text">
            <div class="app-name">Aguacate</div>
            <div class="app-visits">Rico en Grasas Saludables</div>
        </div>
    </div> 
</a> 

<a href="index.php?action=Quinoa" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Proteinas">
        <img src="img/quinoa.png" alt="Quinoa" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Quinoa</div>
            <div class="app-visits">Alta en Proteína</div>
        </div>
    </div>
</a>

<a href="index.php?action=papaya" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/papaya.png" alt="Papaya" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Papaya</div>
            <div class="app-visits">Rica en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=arrozIntegral" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Fibra">
        <img src="img/arrozintegral.png" alt="Arroz Integral" class="app-icon" style="background-color: #d4a5a5;">
        <div class="app-text">
            <div class="app-name">Arroz Integral</div>
            <div class="app-visits">Rico en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=huevo" class="app-link">
    <div class="app-card" data-categoria="carnes" data-propiedad="Proteinas">
        <img src="img/huevos.png" alt="Huevos" class="app-icon" style="background-color: #ffb7b2;">
        <div class="app-text">
            <div class="app-name">Huevos</div>
            <div class="app-visits">Alto en Proteína</div>
        </div>
    </div>
</a>

<a href="index.php?action=Manzana" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Fibra">
        <img src="img/manzana.png" alt="Manzana" class="app-icon" style="background-color: #ff6b6b;">
        <div class="app-text">
            <div class="app-name">manzana</div>
            <div class="app-visits">Rica en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=zanahoria" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Fibra">
        <img src="img/zanahoria.png" alt="Zanahoria" class="app-icon" style="background-color: #ffa45b;">
        <div class="app-text">
            <div class="app-name">Zanahoria</div>
            <div class="app-visits">Rica en Betacaroteno</div>
        </div>
    </div>
</a>

<a href="index.php?action=brocoli" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Antioxidantes">
        <img src="img/brocoli.png" alt="Brócoli" class="app-icon" style="background-color: #6a0572;">
        <div class="app-text">
            <div class="app-name">Brócoli</div>
            <div class="app-visits">Alto en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=Yogurt" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Calcio">
        <img src="img/yogurt.png" alt="Yogurt" class="app-icon" style="background-color: #6b4226;">
        <div class="app-text">
            <div class="app-name">Yogurt</div>
            <div class="app-visits">Rico en Probióticos</div>
        </div>
    </div>
</a>

<a href="index.php?action=Almendra" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Vitaminas">
        <img src="img/almendras.png" alt="Almendra" class="app-icon" style="background-color: #d8b4a0;">
        <div class="app-text">
            <div class="app-name">Almendra</div>
            <div class="app-visits">Rica en Vitamina E</div>
        </div>
    </div>
</a>
<a href="index.php?action=FrijolRojo" class="app-link">
    <div class="app-card" data-categoria="Legumbres" data-propiedad="Fibra">
        <img src="img/frijol.png" alt="Frijol Rojo" class="app-icon" style="background-color: #a55c1b;">
        <div class="app-text">
            <div class="app-name">Frijol Rojo</div>
            <div class="app-visits">Rico en Hierro</div>
        </div>
    </div>
</a>

<a href="index.php?action=Mango" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/mango.png" alt="Mango" class="app-icon" style="background-color: #ffcc00;">
        <div class="app-text">
            <div class="app-name">Mango</div>
            <div class="app-visits">Rico en Vitamina A</div>
        </div>
    </div>
</a>

<a href="index.php?action=Salmon" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="img/salmon.png" alt="Salmón" class="app-icon" style="background-color: #ff8b94;">
        <div class="app-text">
            <div class="app-name">Salmón</div>
            <div class="app-visits">Rico en Omega 3</div>
        </div>
    </div>
</a>

<a href="index.php?action=Chia" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Fibra">
        <img src="img/Chia.png" alt="Semillas de Chía" class="app-icon" style="background-color: #bbded6;">
        <div class="app-text">
            <div class="app-name">Semillas de Chía</div>
            <div class="app-visits">Alto en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=Batata" class="app-link">
    <div class="app-card" data-categoria="Tuberculos" data-propiedad="Vitaminas">
        <img src="img/batata.png" alt="Batata" class="app-icon" style="background-color: #ff7e67;">
        <div class="app-text">
            <div class="app-name">Batata</div>
            <div class="app-visits">Rica en Betacaroteno</div>
        </div>
    </div>
</a>

<a href="index.php?action=Naranja" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/naranja.png" alt="Naranja" class="app-icon" style="background-color: #ffc107;">
        <div class="app-text">
            <div class="app-name">Naranja</div>
            <div class="app-visits">Rica en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Espinaca" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="img/espinaca.png" alt="Espinaca" class="app-icon" style="background-color: #6c757d;">
        <div class="app-text">
            <div class="app-name">Espinaca</div>
            <div class="app-visits">Rica en Hierro</div>
        </div>
    </div>
</a>

<a href="index.php?action=Lentejas" class="app-link">
    <div class="app-card" data-categoria="Legumbres" data-propiedad="Proteinas">
        <img src="img/lentejas.png" alt="Lentejas" class="app-icon" style="background-color: #9c6644;">
        <div class="app-text">
            <div class="app-name">Lentejas</div>
            <div class="app-visits">Alto en Proteína</div>
        </div>
    </div>
</a>

<a href="index.php?action=Yuca" class="app-link">
    <div class="app-card" data-categoria="Tuberculos" data-propiedad="Carbohidratos">
        <img src="img/yuca,png.jpg" alt="Yuca" class="app-icon" style="background-color: #d7d7d7;">
        <div class="app-text">
            <div class="app-name">Yuca</div>
            <div class="app-visits">Rica en Carbohidratos Complejos</div>
        </div>
    </div>
</a>

<a href="index.php?action=Lechuga" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Fibra">
        <img src="img/lechuga.png" alt="Lechuga" class="app-icon" style="background-color: #8bc34a;">
        <div class="app-text">
            <div class="app-name">Lechuga</div>
            <div class="app-visits">Baja en Calorías</div>
        </div>
    </div>
</a>
<a href="index.php?action=PapaCriolla" class="app-link">
    <div class="app-card" data-categoria="Tuberculos" data-propiedad="Carbohidratos">
        <img src="img/papacriolla.png" alt="Papa Criolla" class="app-icon" style="background-color: #ffde59;">
        <div class="app-text">
            <div class="app-name">Papa Criolla</div>
            <div class="app-visits">Rica en Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=Cafe" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Antioxidantes">
        <img src="img/cafe.png" alt="Café" class="app-icon" style="background-color: #6d4c41;">
        <div class="app-text">
            <div class="app-name">Café</div>
            <div class="app-visits">Alto en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=Arandanos" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/arandanos.png" alt="Arándanos" class="app-icon" style="background-color: #bb86fc;">
        <div class="app-text">
            <div class="app-name">Arándanos</div>
            <div class="app-visits">Ricos en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=Piña" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/piña.png" alt="Piña" class="app-icon" style="background-color: #ffcc29;">
        <div class="app-text">
            <div class="app-name">Piña</div>
            <div class="app-visits">Rica en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Queso" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Calcio">
        <img src="img/queso.png" alt="Queso" class="app-icon" style="background-color: #ffe4b5;">
        <div class="app-text">
            <div class="app-name">Queso</div>
            <div class="app-visits">Rico en Calcio</div>
        </div>
    </div>
</a>

<a href="index.php?action=carneRes" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="img/carneres.png" alt="Carne de Res" class="app-icon" style="background-color: #d2691e;">
        <div class="app-text">
            <div class="app-name">Carne de Res</div>
            <div class="app-visits">Alto en Proteína</div>
        </div>
    </div>
</a>

<a href="index.php?action=Pollo" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="img/pollo.png" alt="Pollo" class="app-icon" style="background-color: #f8c291;">
        <div class="app-text">
            <div class="app-name">Pollo</div>
            <div class="app-visits">Rico en Proteínas Magras</div>
        </div>
    </div>
</a>

<a href="index.php?action=Camaron" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="img/camaron.png" alt="Camarón" class="app-icon" style="background-color: #ff5722;">
        <div class="app-text">
            <div class="app-name">Camarón</div>
            <div class="app-visits">Rico en Yodo</div>
        </div>
    </div>
</a>


<a href="index.php?action=Uvas" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/uvas.png" alt="Uvas" class="app-icon" style="background-color: #b39ddb;">
        <div class="app-text">
            <div class="app-name">Uvas</div>
            <div class="app-visits">Ricas en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=Mandarina" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/mandarina.png" alt="Mandarina" class="app-icon" style="background-color: #ffa726;">
        <div class="app-text">
            <div class="app-name">Mandarina</div>
            <div class="app-visits">Rica en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Sandia" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/sandia.png" alt="Sandía" class="app-icon" style="background-color: #e57373;">
        <div class="app-text">
            <div class="app-name">Sandía</div>
            <div class="app-visits">Rica en Licopeno</div>
        </div>
    </div>
</a>

<a href="index.php?action=Pera" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Fibra">
        <img src="img/pera.png" alt="Pera" class="app-icon" style="background-color: #c8e6c9;">
        <div class="app-text">
            <div class="app-name">Pera</div>
            <div class="app-visits">Rica en Fibra</div>
        </div>
    </div>
</a>



<a href="index.php?action=Remolacha" class="app-link">
    <div class="app-card" data-categoria="Tuberculos" data-propiedad="Antioxidantes">
        <img src="img/remolacha.png" alt="Remolacha" class="app-icon" style="background-color: #f06292;">
        <div class="app-text">
            <div class="app-name">Remolacha</div>
            <div class="app-visits">Rica en Folato</div>
        </div>
    </div>
</a>

<a href="index.php?action=Durazno" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/durazno.png" alt="Durazno" class="app-icon" style="background-color: #ff7043;">
        <div class="app-text">
            <div class="app-name">Durazno</div>
            <div class="app-visits">Rico en Vitamina A</div>
        </div>
    </div>
</a>

<a href="index.php?action=Berenjena" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/berenjena.png" alt="Berenjena" class="app-icon" style="background-color: #673ab7;">
        <div class="app-text">
            <div class="app-name">Berenjena</div>
            <div class="app-visits">Baja en Calorías</div>
        </div>
    </div>
</a>

<a href="index.php?action=Mora" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/mora.png" alt="Mora" class="app-icon" style="background-color: #8e24aa;">
        <div class="app-text">
            <div class="app-name">Mora</div>
            <div class="app-visits">Rica en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=Tomate" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="img/tomate.png" alt="Tomate" class="app-icon" style="background-color: #ff6f61;">
        <div class="app-text">
            <div class="app-name">Tomate</div>
            <div class="app-visits">Rico en Licopeno</div>
        </div>
    </div>
</a>

<a href="index.php?action=Fresas" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/fresas.png" alt="Fresas" class="app-icon" style="background-color: #e91e63;">
        <div class="app-text">
            <div class="app-name">Fresas</div>
            <div class="app-visits">Ricas en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Limon" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/limon.png" alt="Limón" class="app-icon" style="background-color: #ffeb3b;">
        <div class="app-text">
            <div class="app-name">Limón</div>
            <div class="app-visits">Rico en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Coco" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Fibra">
        <img src="img/coco.png" alt="Coco" class="app-icon" style="background-color: #ffca28;">
        <div class="app-text">
            <div class="app-name">Coco</div>
            <div class="app-visits">Alto en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=Apio" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Fibra">
        <img src="img/apio.png" alt="Apio" class="app-icon" style="background-color: #aed581;">
        <div class="app-text">
            <div class="app-name">Apio</div>
            <div class="app-visits">Bajo en Calorías</div>
        </div>
    </div>
</a>


<a href="index.php?action=CebollaRoja" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Antioxidantes">
        <img src="img/cebollaroja.png" alt="Cebolla Roja" class="app-icon" style="background-color: #ab47bc;">
        <div class="app-text">
            <div class="app-name">Cebolla Roja</div>
            <div class="app-visits">Rica en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=Champiñones" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="img/champiñones.png" alt="Champiñones" class="app-icon" style="background-color: #8d6e63;">
        <div class="app-text">
            <div class="app-name">Champiñones</div>
            <div class="app-visits">Ricos en Selenio</div>
        </div>
    </div>
</a>

<a href="index.php?action=Coliflor" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="img/coliflor.png" alt="Coliflor" class="app-icon" style="background-color: #d3d3d3;">
        <div class="app-text">
            <div class="app-name">Coliflor</div>
            <div class="app-visits">Rica en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Esparragos" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Fibra">
        <img src="img/esparragos.png" alt="Espárragos" class="app-icon" style="background-color: #81c784;">
        <div class="app-text">
            <div class="app-name">Espárragos</div>
            <div class="app-visits">Ricos en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=Pepinillo" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Fibra">
        <img src="img/pepinillo.png" alt="Pepinillo" class="app-icon" style="background-color: #c8e6c9;">
        <div class="app-text">
            <div class="app-name">Pepinillo</div>
            <div class="app-visits">Bajo en Calorías</div>
        </div>
    </div>
</a>

<a href="index.php?action=Calabacin" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Fibra">
        <img src="img/calabacin.png" alt="Calabacín" class="app-icon" style="background-color: #aed581;">
        <div class="app-text">
            <div class="app-name">Calabacín</div>
            <div class="app-visits">Rico en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=Aceitunas" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Grasas">
        <img src="img/aceitunas.png" alt="Aceitunas" class="app-icon" style="background-color: #c5e1a5;">
        <div class="app-text">
            <div class="app-name">Aceitunas</div>
            <div class="app-visits">Ricas en Grasas Saludables</div>
        </div>
    </div>
</a>

<a href="index.php?action=PimientoRojo" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="img/pimiento,png.jpg" alt="Pimiento Rojo" class="app-icon" style="background-color: #e57373;">
        <div class="app-text">
            <div class="app-name">Pimiento</div>
            <div class="app-visits">Rico en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=Maiz" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Carbohidratos">
        <img src="img/maiz.png" alt="Maíz" class="app-icon" style="background-color: #ffeb3b;">
        <div class="app-text">
            <div class="app-name">Maíz</div>
            <div class="app-visits">Rico en Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=Ciruela" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Fibra">
        <img src="img/ciruela.png" alt="Ciruela" class="app-icon" style="background-color: #ba68c8;">
        <div class="app-text">
            <div class="app-name">Ciruela</div>
            <div class="app-visits">Rica en Fibra</div>
        </div>
    </div>
</a>



<a href="index.php?action=frambuesa" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/frambuesa.png" alt="Frambuesa" class="app-icon" style="background-color: #f48fb1;">
        <div class="app-text">
            <div class="app-name">Frambuesa</div>
            <div class="app-visits">Rica en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=platano" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Potasio">
        <img src="img/platano.png" alt="Plátano" class="app-icon" style="background-color: #ffeb3b;">
        <div class="app-text">
            <div class="app-name">Plátano</div>
            <div class="app-visits">Rico en Potasio</div>
        </div>
    </div>
</a>

<a href="index.php?action=ajo" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Antioxidantes">
        <img src="img/ajo.png" alt="Ajo" class="app-icon" style="background-color: #c8e6c9;">
        <div class="app-text">
            <div class="app-name">Ajo</div>
            <div class="app-visits">Propiedades Antibacterianas</div>
        </div>
    </div>
</a>

<a href="index.php?action=pepino" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Potasio">
        <img src="img/pepino.png" alt="Pepino" class="app-icon" style="background-color: #aed581;">
        <div class="app-text">
            <div class="app-name">Pepino</div>
            <div class="app-visits">Bajo en Calorías</div>
        </div>
    </div>
</a>

<a href="index.php?action=cebollaBlanca" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Antioxidantes">
        <img src="img/cebollablanca.png" alt="Cebolla Blanca" class="app-icon" style="background-color: #d3d3d3;">
        <div class="app-text">
            <div class="app-name">Cebolla Blanca</div>
            <div class="app-visits">Propiedades Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=uvasVerdes" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/uvasverdes.png" alt="Uvas Verdes" class="app-icon" style="background-color: #c5e1a5;">
        <div class="app-text">
            <div class="app-name">Uvas Verdes</div>
            <div class="app-visits">Ricas en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=melon" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/melon.png" alt="Melón" class="app-icon" style="background-color: #ffcc80;">
        <div class="app-text">
            <div class="app-name">Melón</div>
            <div class="app-visits">Rico en Vitamina A</div>
        </div>
    </div>
</a>

<a href="index.php?action=kiwi" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/kiwi.png" alt="Kiwi" class="app-icon" style="background-color: #8bc34a;">
        <div class="app-text">
            <div class="app-name">Kiwi</div>
            <div class="app-visits">Rico en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=pomelo" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/pomelo.png" alt="Pomelo" class="app-icon" style="background-color: #ff7043;">
        <div class="app-text">
            <div class="app-name">Pomelo</div>
            <div class="app-visits">Rico en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=granada" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Antioxidantes">
        <img src="img/granada.png" alt="Granada" class="app-icon" style="background-color: #d32f2f;">
        <div class="app-text">
            <div class="app-name">Granada</div>
            <div class="app-visits">Rica en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=mangoVerde" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="img/mangoverde.png" alt="Mango Verde" class="app-icon" style="background-color: #81c784;">
        <div class="app-text">
            <div class="app-name">Mango Verde</div>
            <div class="app-visits">Rico en Vitamina C</div>
        </div>
    </div>
</a>

<a href="index.php?action=chirimoya" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Fibra">
        <img src="img/chirimoya.png" alt="Chirimoya" class="app-icon" style="background-color: #8bc34a;">
        <div class="app-text">
            <div class="app-name">Chirimoya</div>
            <div class="app-visits">Rica en Fibra</div>
        </div>
    </div>
</a>

<a href="index.php?action=frijolNegro" class="app-link">
    <div class="app-card" data-categoria="Legumbres" data-propiedad="Proteinas">
        <img src="img/frijolnegro.png" alt="Frijol Negro" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Frijol Negro</div>
            <div class="app-visits">Rico en Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=garbanzo" class="app-link">
    <div class="app-card" data-categoria="Legumbres" data-propiedad="Proteinas">
        <img src="img/garbanzo.png" alt="Garbanzo" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Garbanzo</div>
            <div class="app-visits">Alto en Proteína</div>
        </div>
    </div>
</a>


<a href="index.php?action=tofu" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Proteinas">
        <img src="img/tofu.png" alt="Tofu" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Tofu</div>
            <div class="app-visits">Alto en Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=algaNori" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Calcio">
        <img src="img/alganori.png" alt="Alga Nori" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Alga Nori</div>
            <div class="app-visits">Rica en Yodo</div>
        </div>
    </div>
</a>

<a href="index.php?action=pistachos" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Vitaminas">
        <img src="img/pistachos.png" alt="Pistachos" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Pistachos</div>
            <div class="app-visits">Ricos en Vitamina B6</div>
        </div>
    </div>
</a>

<a href="index.php?action=nuezDeBrasil" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Grasas">
        <img src="img/nuezdebrasil.png" alt="Nuez de Brasil" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Nuez de Brasil</div>
            <div class="app-visits">Rica en Selenio</div>
        </div>
    </div>
</a>

<a href="index.php?action=ManMani" class="app-link">
    <div class="app-card" data-categoria="Grasas" data-propiedad="Grasas">
        <img src="img/mantequillademani.png" alt="Mantequilla de Maní" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Mantequilla de Maní</div>
            <div class="app-visits">Rica en Proteínas</div>
        </div>
    </div>
</a>




<a href="index.php?action=lAlmendras" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Vitaminas">
        <img src="img/lechedealmendras.png" alt="Leche de Almendra" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Leche de Almendra</div>
            <div class="app-visits">Rica en Vitamina E</div>
        </div>
    </div>
</a>

<a href="index.php?action=slino" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="fibra">
        <img src="img/lino.png" alt="Semillas de Lino" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Semillas de Lino</div>
            <div class="app-visits">Ricas en Omega-3</div>
        </div>
    </div>
</a>

<a href="index.php?action=rabano" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Antioxidantes">
        <img src="img/rabano.png" alt="Rábano" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Rábano</div>
            <div class="app-visits">Rico en Antioxidantes</div>
        </div>
    </div>
</a>

<a href="index.php?action=colrizada" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="img/colr.png" alt="Col Rizada" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Col Rizada</div>
            <div class="app-visits">Rica en Vitamina K</div>
        </div>
    </div>
</a>

<a href="index.php?action=avena" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Fibra">
        <img src="img/avena.png" alt="Avena" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Avena</div>
            <div class="app-visits">Rica en Fibra y Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=arepa" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Carbohidratos">
        <img src="img/arepa.png" alt="Arepa" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Arepa</div>
            <div class="app-visits">Fuente de Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=atun" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/89/f5/41/89f541add55b2a0dd0ad8d68b4bd4c6e.jpg" alt="Atún" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Atún</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=trucha" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/736x/bd/61/8a/bd618ad9a65679115d644519f07c4c6e.jpg" alt="Trucha" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Trucha</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=sardinas" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/5e/2f/38/5e2f38af420f2db86965bcec23711c12.jpg" alt="Sardinas" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Sardinas</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=pavo" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/6d/cc/45/6dcc45123465991ba0e2048eb84c9e93.jpg" alt="Pavo" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Pavo</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=cerdo" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/bf/e3/2c/bfe32cc8d1c853974c3531b4818c6a0d.jpg" alt="Carne de Cerdo" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Carne de Cerdo</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=cordero" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/86/f6/98/86f698cff874fb3091c896f41082fca7.jpg" alt="Cordero" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Cordero</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=nueces" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/3f/a9/9e/3fa99e1bcbbe78260d7873d0383cb2fb.jpg" alt="Nueces" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Nueces</div>
            <div class="app-visits">Fuente de Grasas Saludables</div>
        </div>
    </div>
</a>

<a href="index.php?action=avellanas" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/ec/d7/ec/ecd7eca662b2cb23fda55b850df4ce84.jpg" alt="Avellanas" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Avellanas</div>
            <div class="app-visits">Fuente de Grasas Saludables</div>
        </div>
    </div>
</a>

<a href="index.php?action=leche" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Calcio">
        <img src="https://th.bing.com/th/id/OIP.QOoRYEBbeM_bI6BmLyCLVwHaIP?rs=1&pid=ImgDetMain" alt="Leche" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Leche</div>
            <div class="app-visits">Fuente de Calcio</div>
        </div>
    </div>
</a>

<a href="index.php?action=Cleche" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/79/27/cf/7927cf3338567101cd8a8c5c825e687e.jpg" alt="Crema de Leche" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Crema de Leche</div>
            <div class="app-visits">Fuente de Grasas</div>
        </div>
    </div>
</a>

<a href="index.php?action=helado" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Calcio">
        <img src="https://i.pinimg.com/564x/0c/e2/bb/0ce2bb0ea273e29236d731a2cbd28b6b.jpg" alt="Helado" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Helado</div>
            <div class="app-visits">Fuente de Azúcares</div>
        </div>
    </div>
</a>

<a href="index.php?action=costeno" class="app-link">
    <div class="app-card" data-categoria="Lcteos" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/5d/9a/34/5d9a34b10d069e15278aa12349053336.jpg" alt="Suero Costeño" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Suero Costeño</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=scalabaza" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/be/ea/17/beea17e81e0b10a707a7167436d76d8f.jpg" alt="Semillas de Calabaza" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Semillas de Calabaza</div>
            <div class="app-visits">Fuente de Grasas Saludables</div>
        </div>
    </div>
</a>

<a href="index.php?action=sgirasol" class="app-link">
    <div class="app-card" data-categoria="Semillas" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/736x/64/cb/20/64cb20da26fa2df122b31175dd29a272.jpg" alt="Semillas de Girasol" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Semillas de Girasol</div>
            <div class="app-visits">Fuente de Grasas Saludables</div>
        </div>
    </div>
</a>

<a href="index.php?action=habas" class="app-link">
    <div class="app-card" data-categoria="Legumbres" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/23/67/7a/23677a7942e31d3620cba3c74dc01241.jpg" alt="Habas" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Habas</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=repollo" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/736x/f4/15/30/f415309ef7cc5427f59791cee0934a7c.jpg" alt="Repollo" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Repollo</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=oliva" class="app-link">
    <div class="app-card" data-categoria="Grasas" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/1b/81/c3/1b81c379d0c6bfbfdf6d1b0b95b0fcf5.jpg" alt="Aceite de Oliva" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Aceite de Oliva</div>
            <div class="app-visits">Fuente de Grasas Saludables</div>
        </div>
    </div>
</a>




<a href="index.php?action=salchichas" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/fd/71/1f/fd711f4bae2108cd197e493504fe3b01.jpg" alt="Salchichas" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Salchichas</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=chorizo" class="app-link">
    <div class="app-card" data-categoria="Carnes" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/e6/2f/c9/e62fc91c00e7cc079fa2336a50e02cb7.jpg" alt="Chorizo" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Chorizo</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=yogurGriego" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/24/49/4a/24494a3ce6c4d00747e69e7f10e7eb10.jpg" alt="Yogur Griego" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Yogur Griego</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=lecheCoco" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/03/1c/56/031c56596f9477e7460f15bf2ac1d72f.jpg" alt="Leche de Coco" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Leche de Coco</div>
            <div class="app-visits">Fuente de Grasas</div>
        </div>
    </div>
</a>

<a href="index.php?action=cremaagria" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Grasas">
        <img src="https://i.pinimg.com/564x/62/7d/43/627d43171ffb1a6fed57f0d806e9d2e5.jpg" alt="Crema Agria" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Crema Agria</div>
            <div class="app-visits">Fuente de Grasas</div>
        </div>
    </div>
</a>

<a href="index.php?action=ricotta" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/5f/48/4a/5f484a2aab9619cd138f626dfd049c3b.jpg" alt="Queso Ricotta" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Queso Ricotta</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=feta" class="app-link">
    <div class="app-card" data-categoria="Lacteos" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/7b/1c/37/7b1c37a1e67e6ad7e0cddab594ad499c.jpg" alt="Queso Feta" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Queso Feta</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=rambutan" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/88/ac/b6/88acb6b099f338380cd809cb6d9581c2.jpg" alt="Rambután" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Rambután</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=peragua" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/75/97/e0/7597e0e9ee29fa646ca9b2b0e3e2506e.jpg" alt="Pera de Agua" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Pera de Agua</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>



<a href="index.php?action=perejil" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/78/0f/20/780f2051c66cec86639ea3d4dfb2f606.jpg" alt="Perejil" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Perejil</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=cilantro" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/6a/93/15/6a9315e63ccd5466063839b5c47a7b49.jpg" alt="Cilantro" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Cilantro</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=puerro" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/b2/b5/f4/b2b5f44e2487b7c0cf57977d44dc33a9.jpg" alt="Cebolla Puerro" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Cebolla Puerro</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=soja" class="app-link">
    <div class="app-card" data-categoria="Legumbres" data-propiedad="Proteinas">
        <img src="https://i.pinimg.com/564x/00/1c/06/001c06055830a77b20649e7c807ddb10.jpg" alt="Soya" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Soya</div>
            <div class="app-visits">Fuente de Proteínas</div>
        </div>
    </div>
</a>

<a href="index.php?action=arroz" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Carbohidratos">
        <img src="https://i.pinimg.com/564x/2b/a2/89/2ba289f58c8846173372b4785b309ecc.jpg" alt="Arroz" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Arroz</div>
            <div class="app-visits">Fuente de Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=granola" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Carbohidratos">
        <img src="https://i.pinimg.com/564x/f0/35/3a/f0353a386857a4da6219ddb7f9d39f2a.jpg" alt="Granola" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Granola</div>
            <div class="app-visits">Fuente de Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=pasta" class="app-link">
    <div class="app-card" data-categoria="Cereales" data-propiedad="Carbohidratos">
        <img src="https://i.pinimg.com/enabled/564x/4e/36/bd/4e36bd6ad9ef45c8f87044b6dd585f8b.jpg" alt="Pasta" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Pasta</div>
            <div class="app-visits">Fuente de Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=papa" class="app-link">
    <div class="app-card" data-categoria="Tuberculos" data-propiedad="Carbohidratos">
        <img src="https://i.pinimg.com/enabled/564x/47/20/dd/4720ddc8b21b7c05f92fe8f80566ed08.jpg" alt="Papa" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Papa</div>
            <div class="app-visits">Fuente de Carbohidratos</div>
        </div>
    </div>
</a>

<a href="index.php?action=calabaza" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/736x/b2/6f/fe/b26ffe92e5318c02c2d423e6356a701e.jpg" alt="Calabaza" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Calabaza</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=Ahuyama" class="app-link">
    <div class="app-card" data-categoria="Vegetales" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/37/28/c3/3728c393b99965787b013fc4400b222b.jpg" alt="Ahuyama" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Ahuyama</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=granadilla" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/564x/14/7c/47/147c47b73629a91490922155adf3975c.jpg" alt="Granadilla" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Granadilla</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

<a href="index.php?action=cereza" class="app-link">
    <div class="app-card" data-categoria="Frutas" data-propiedad="Vitaminas">
        <img src="https://i.pinimg.com/736x/5f/bc/d2/5fbcd2676355a0e9a8dd51898c23c45f.jpg" alt="Cereza" class="app-icon" style="background-color: #ffab73;">
        <div class="app-text">
            <div class="app-name">Cereza</div>
            <div class="app-visits">Fuente de Vitaminas</div>
        </div>
    </div>
</a>

            <!-- Más tarjetas aquí -->
        </div>
    </section>
</section>
                
    </main>
    
    <script>

document.addEventListener('DOMContentLoaded', function() {
    const appGrid = document.querySelector('.app-grid');
    const busquedaInput = document.getElementById('busqueda');
    const categoriasContainer = document.getElementById('categorias');
    const propiedadesContainer = document.getElementById('propiedades');
    const alimentos = Array.from(appGrid.querySelectorAll('.app-card'));

    // Añadir evento a cada categoría para filtrar
    const categoriasBtns = categoriasContainer.querySelectorAll('.categoria');
    categoriasBtns.forEach(categoriaBtn => {
        categoriaBtn.addEventListener('click', () => {
            categoriaBtn.classList.toggle('active');
            filtrarAlimentos();
        });
    });

    // Añadir evento a cada propiedad para filtrar
    const propiedadesBtns = propiedadesContainer.querySelectorAll('.propiedad');
    propiedadesBtns.forEach(propiedadBtn => {
        propiedadBtn.addEventListener('click', () => {
            propiedadBtn.classList.toggle('active');
            filtrarAlimentos();
        });
    });

    // Filtrar al escribir en el campo de búsqueda
    busquedaInput.addEventListener('input', debounce(filtrarAlimentos, 300));

    function filtrarAlimentos() {
        const busqueda = busquedaInput.value.toLowerCase();
        const categoriasFiltradas = Array.from(categoriasContainer.querySelectorAll('.categoria.active'))
            .map(cat => cat.textContent.toLowerCase());
        const propiedadesFiltradas = Array.from(propiedadesContainer.querySelectorAll('.propiedad.active'))
            .map(prop => prop.textContent.toLowerCase());

        const visibles = [];

        alimentos.forEach(alimento => {
            const nombre = alimento.querySelector('.app-name').textContent.toLowerCase();
            const categoria = alimento.dataset.categoria.toLowerCase();
            const propiedad = alimento.dataset.propiedad.toLowerCase();
            const coincideBusqueda = nombre.includes(busqueda);
            const coincideCategoria = categoriasFiltradas.length === 0 || categoriasFiltradas.includes(categoria);
            const coincidePropiedad = propiedadesFiltradas.length === 0 || propiedadesFiltradas.includes(propiedad);

            if (coincideBusqueda && coincideCategoria && coincidePropiedad) {
                visibles.push(alimento.parentNode);
            }
        });

        // Limpiar el contenedor original
        appGrid.innerHTML = '';

        // Mostrar elementos visibles o un mensaje si no hay resultados
        if (visibles.length > 0) {
            visibles.forEach(alimento => appGrid.appendChild(alimento));
        } else {
            const mensaje = document.createElement('div');
            mensaje.textContent = 'No hay alimentos que coincidan con la búsqueda.';
            appGrid.appendChild(mensaje);
        }
    }

    // Función debounce para limitar la frecuencia de ejecución
    function debounce(func, delay) {
        let timeout;
        return function(...args) {
            clearTimeout(timeout);
            timeout = setTimeout(() => func.apply(this, args), delay);
        };
    }
});
</script>

</body>
</html>
