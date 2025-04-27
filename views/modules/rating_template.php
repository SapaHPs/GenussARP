<!DOCTYPE HTML>
<html lang="es">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Calificaciones y Reseñas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/calificacion.css">
</head>
<body>
    <div class="container">
        <div class="product-card">
            <img src="img/cristofer.jpg" alt="Producto" class="product-image">
            <div class="product-info">
                <div class="rating-summary">
                    <div class="average-rating">
                        <span id="average_rating">
                            <?php echo isset($data['stats']['average_rating']) ? number_format($data['stats']['average_rating'], 1) : '0'; ?>
                        </span>
                    </div>
                    <div class="star-rating" id="average_stars">
                        <?php
                        $averageRating = isset($data['stats']['average_rating']) ? $data['stats']['average_rating'] : 0;
                        for ($i = 1; $i <= 5; $i++) {
                            echo $i <= $averageRating ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>';
                        }
                        ?>
                    </div>
                    <div class="total-reviews">
                        <span id="total_review">
                            <?php echo isset($data['stats']['total_review']) ? $data['stats']['total_review'] : '0'; ?>
                        </span> Reseña(s)
                    </div>
                </div>
                <button id="add_review" class="btn-primary">Califica este Producto</button>
            </div>
        </div>

        <div class="rating-breakdown">
            <?php for ($i = 5; $i >= 1; $i--): ?>
                <div class="rating-bar">
                    <div class="star-count"><?php echo $i; ?> <i class="fas fa-star"></i></div>
                    <div class="progress-bar">
                        <div class="progress" id="<?php echo $i; ?>_star_progress" style="width: <?php echo isset($data['stats']['star_progress'][$i]) ? $data['stats']['star_progress'][$i] : '0'; ?>%;"></div>
                    </div>
                    <div class="rating-count">(<span id="total_<?php echo $i; ?>_star_review"><?php echo isset($data['stats']['star_counts'][$i]) ? $data['stats']['star_counts'][$i] : '0'; ?></span>)</div>
                </div>
            <?php endfor; ?>
        </div>

        <h3>Reseñas del Producto:</h3>
        <div id="review_content">
            <?php if (isset($data['reviews']) && is_array($data['reviews'])): ?>
                <?php foreach ($data['reviews'] as $review): ?>
                    <div class="review">
                        <div class="review-header">
                            <strong><?php echo htmlspecialchars($review['user_name']); ?></strong> 
                            <span class="review-rating">
                                <?php for ($i = 1; $i <= 5; $i++): ?>
                                    <?php echo $i <= $review['user_rating'] ? '<i class="fas fa-star"></i>' : '<i class="far fa-star"></i>'; ?>
                                <?php endfor; ?>
                            </span>
                        </div>
                        <div class="review-body">
                            <p><?php echo htmlspecialchars($review['user_review']); ?></p>
                        </div>
                        <div class="review-date">
                            <?php echo date('d/m/Y H:i', $review['datetime']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No hay reseñas aún.</p>
            <?php endif; ?>
        </div>
    </div>

    <div id="review_modal" class="modal">
        <div class="modal-content">
            <span class="close">&times;</span>
            <h2>Enviar Reseña</h2>
            <div class="star-rating" id="submit_stars">
                <?php for ($i = 1; $i <= 5; $i++): ?>
                    <i class="fas fa-star" data-rating="<?php echo $i; ?>"></i>
                <?php endfor; ?>
            </div>
            <form id="review_form">
                <div class="form-group">
                    <label for="user_name">Tu Nombre:</label>
                    <input type="text" id="user_name" name="user_name" required>
                </div>
                <div class="form-group">
                    <label for="user_review">Comentario:</label>
                    <textarea id="user_review" name="user_review" required></textarea>
                </div>
                <input type="hidden" id="user_rating" name="user_rating" value="0">
                <button type="submit" class="btn-primary">Enviar</button>
            </form>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="js/calificacion.js"></script>
</body>
</html>
