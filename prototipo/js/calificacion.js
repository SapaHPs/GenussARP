$(document).ready(function() {
    var rating_data = 0;

    $('#add_review').click(function() {
        $('#review_modal').css('display', 'block');
    });

    $('.close').click(function() {
        $('#review_modal').css('display', 'none');
    });

    $('#submit_stars .fa-star').on('click', function() {
        rating_data = $(this).data('rating');
        resetStars();
        for (var count = 1; count <= rating_data; count++) {
            $('#submit_stars .fa-star:nth-child(' + count + ')').addClass('active');
        }
    });

    function resetStars() {
        $('#submit_stars .fa-star').removeClass('active');
    }

    $('#review_form').on('submit', function(event) {
        event.preventDefault();
        if ($('#user_name').val() == '' || $('#user_review').val() == '') {
            alert("Por favor, rellene todos los campos");
            return false;
        } else if (rating_data == 0) {
            alert("Por favor, seleccione una calificación");
            return false;
        } else {
            $.ajax({
                url: "reviewController.php", // Asegúrate de que la URL sea correcta
                method: "POST",
                data: {
                    action: 'submit_rating',
                    user_name: $('#user_name').val(),
                    user_review: $('#user_review').val(),
                    user_rating: rating_data
                },
                success: function(response) {
                    var data = JSON.parse(response);
                    $('#review_modal').css('display', 'none');
                    alert(data.message);
                    resetForm();
                    loadRatingData();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown);
                    alert("Error al enviar la reseña. Por favor, inténtelo de nuevo.");
                }
            });
        }
    });

    function resetForm() {
        $('#user_name').val('');
        $('#user_review').val('');
        rating_data = 0;
        resetStars();
    }

    function loadRatingData() {
        $.ajax({
            url: "reviewController.php", // Asegúrate de que la URL sea correcta
            method: "POST",
            data: { action: 'load_data' },
            dataType: "json",
            success: function(data) {
                updateRatingDisplay(data);
            },
            error: function(jqXHR, textStatus, errorThrown) {
                console.log(textStatus, errorThrown);
                alert("Error al cargar los datos. Por favor, recargue la página.");
            }
        });
    }

    function updateRatingDisplay(data) {
        $('#average_rating').text(data.stats.average_rating);
        $('#total_review').text(data.stats.total_review);

        var starsHtml = '';
        for (var i = 1; i <= 5; i++) {
            var starClass = i <= Math.round(data.stats.average_rating) ? 'fas fa-star' : 'far fa-star';
            starsHtml += '<i class="' + starClass + '"></i>';
        }
        $('#average_stars').html(starsHtml);

        for (var i = 1; i <= 5; i++) {
            var progressPercentage = data.stats.total_review > 0 ? (data.stats[i + '_star_review'] / data.stats.total_review) * 100 : 0;
            $('#' + i + '_star_progress').css('width', progressPercentage + '%');
            $('#total_' + i + '_star_review').text(data.stats[i + '_star_review']);
        }

        var reviewHtml = '';
        if (data.reviews.length > 0) {
            for (var i = 0; i < data.reviews.length; i++) {
                reviewHtml += '<div class="review-item">';
                reviewHtml += '<div class="review-header">';
                reviewHtml += '<strong>' + data.reviews[i].user_name + '</strong>';
                reviewHtml += '<span class="review-date">' + data.reviews[i].datetime + '</span>';
                reviewHtml += '</div>';
                reviewHtml += '<div class="review-rating">';
                for (var j = 1; j <= 5; j++) {
                    var starClass = j <= data.reviews[i].rating ? 'fas fa-star' : 'far fa-star';
                    reviewHtml += '<i class="' + starClass + '"></i>';
                }
                reviewHtml += '</div>';
                reviewHtml += '<p class="review-text">' + data.reviews[i].user_review + '</p>';
                reviewHtml += '</div>';
            }
        } else {
            reviewHtml = '<p>No hay reseñas aún.</p>';
        }
        $('#review_content').html(reviewHtml);
    }

    loadRatingData(); // Cargar los datos cuando se inicia el script
});
