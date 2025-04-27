<?php
class RatingModel {
    private $db;

    public function __construct() {
        try {
            $this->db = new PDO("mysql:host=localhost;dbname=reseñas", "root", "");
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            throw new Exception("Error de conexión a la base de datos: " . $e->getMessage());
        }
    }

    public function submitRating($userData) {
        try {
            $query = "INSERT INTO review_table (user_name, user_rating, user_review, datetime) 
                      VALUES (:user_name, :user_rating, :user_review, :datetime)";
            $statement = $this->db->prepare($query);
            $result = $statement->execute($userData);
            if (!$result) {
                throw new Exception("Error al insertar la reseña en la base de datos.");
            }
            return true;
        } catch(PDOException $e) {
            throw new Exception("Error al insertar reseña: " . $e->getMessage());
        }
    }

    public function getRatingData() {
        try {
            $query = "SELECT * FROM review_table ORDER BY review_id DESC";
            $result = $this->db->query($query, PDO::FETCH_ASSOC);

            $ratingData = [
                'stats' => [
                    'average_rating' => 0,
                    'total_review' => 0,
                    'five_star_review' => 0,
                    'four_star_review' => 0,
                    'three_star_review' => 0,
                    'two_star_review' => 0,
                    'one_star_review' => 0,
                ],
                'reviews' => []
            ];

            $totalRating = 0;

            foreach ($result as $row) {
                $ratingData['reviews'][] = [
                    'user_name' => $row["user_name"],
                    'user_review' => $row["user_review"],
                    'rating' => $row["user_rating"],
                    'datetime' => date('l jS, F Y h:i:s A', $row["datetime"])
                ];

                $ratingData['stats']["{$row['user_rating']}_star_review"]++;
                $ratingData['stats']['total_review']++;
                $totalRating += $row["user_rating"];
            }

            if ($ratingData['stats']['total_review'] > 0) {
                $ratingData['stats']['average_rating'] = number_format($totalRating / $ratingData['stats']['total_review'], 1);
            }

            return $ratingData;
        } catch(PDOException $e) {
            error_log("Error al obtener datos de reseñas: " . $e->getMessage());
            return [
                'stats' => [
                    'average_rating' => 0,
                    'total_review' => 0,
                    'five_star_review' => 0,
                    'four_star_review' => 0,
                    'three_star_review' => 0,
                    'two_star_review' => 0,
                    'one_star_review' => 0,
                ],
                'reviews' => []
            ];
        }
    }
}
?>
