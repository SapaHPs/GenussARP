<?php
require_once 'models/reviewModel.php'; // Asegúrate de que el archivo tenga el nombre correcto
require_once 'views/modules/calificacion.php'; // Asegúrate de que el archivo tenga el nombre correcto

class RatingController {
    private $model;
    private $view;

    public function __construct() {
        $this->model = new RatingModel();
        $this->view = new RatingView();
    }

    public function handleRequest() {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                if (isset($_POST["action"])) {
                    switch ($_POST["action"]) {
                        case "submit_rating":
                            $this->submitRating();
                            break;
                        case "load_data":
                            $this->loadRatingData();
                            break;
                        default:
                            throw new Exception("Acción no válida");
                    }
                } else {
                    throw new Exception("Acción no especificada");
                }
            } else {
                $this->showRatingPage();
            }
        } catch (Exception $e) {
            $this->view->showMessage("Error: " . $e->getMessage());
        }
    }

    private function submitRating() {
        if (!isset($_POST['user_name']) || !isset($_POST['user_review']) || !isset($_POST['user_rating'])) {
            $this->view->showMessage("Datos incompletos");
            return;
        }

        $userData = [
            ':user_name' => $_POST["user_name"],
            ':user_rating' => $_POST["user_rating"],
            ':user_review' => $_POST["user_review"],
            ':datetime' => time()
        ];

        try {
            if ($this->model->submitRating($userData)) {
                $this->view->showMessage("Tu reseña ha sido registrada correctamente, muchas gracias!!");
            } else {
                $this->view->showMessage("Error al registrar la reseña en la base de datos.");
            }
        } catch (Exception $e) {
            $this->view->showMessage("Error al registrar la reseña: " . $e->getMessage());
        }
    }

    private function loadRatingData() {
        try {
            $ratingData = $this->model->getRatingData();
            $this->view->displayRatings($ratingData);
        } catch (Exception $e) {
            $this->view->showMessage("Error al cargar los datos: " . $e->getMessage());
        }
    }

    private function showRatingPage() {
        try {
            $data = $this->model->getRatingData();
            $this->view->render($data);
        } catch (Exception $e) {
            $this->view->showMessage("Error al mostrar la página: " . $e->getMessage());
        }
    }
}

// Uso del controlador
$controller = new RatingController();
$controller->handleRequest();
?>
